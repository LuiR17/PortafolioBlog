# Implementación de Descarga de CV para Producción (R2/Laravel Cloud)

## Contexto
- Archivos subidos con `UploadedFile->store('curriculum')`
- Storage por defecto configurado para R2 (Cloudflare/Laravel Cloud)
- Base de datos guarda ruta relativa: `curriculum/cv-luis.pdf`

## Service - Guardar CV

```php
// app/Services/CurriculumService.php

public function update(Curriculum $curriculum, array $data): Curriculum
{
    try {
        // Handle file upload if provided
        if (isset($data['file_path']) && $data['file_path'] instanceof UploadedFile) {
            // Delete old file if exists
            if ($curriculum->file_path) {
                Storage::delete($curriculum->file_path);
            }

            // Upload new file to R2
            $file = $data['file_path'];
            $fileName = $file->getClientOriginalName();
            $filePath = $file->store('curriculum'); // Usa el disk por defecto (R2)

            $data['file_name'] = $fileName;
            $data['file_size'] = $file->getSize();
            $data['mime_type'] = $file->getMimeType();
            $data['file_path'] = $filePath;
        }

        // Update or create curriculum
        if ($curriculum->exists) {
            $curriculum->update($data);
        } else {
            $data['is_active'] = $data['is_active'] ?? true;
            $curriculum = Curriculum::create($data);
        }

        return $curriculum;
    } catch (Exception $e) {
        \Log::error('Error updating curriculum: ' . $e->getMessage());
        throw new Exception('Failed to update curriculum. Please try again.');
    }
}

public function delete(Curriculum $curriculum): void
{
    try {
        // Delete file from R2
        if ($curriculum->file_path) {
            Storage::delete($curriculum->file_path);
        }

        // Delete curriculum record
        $curriculum->delete();
    } catch (Exception $e) {
        \Log::error('Error deleting curriculum: ' . $e->getMessage());
        throw new Exception('Failed to delete curriculum. Please try again.');
    }
}
```

## Controller - Descarga CV

```php
// app/Http/Controllers/Admin/CurriculumController.php

use Illuminate\Support\Facades\Storage;

public function download()
{
    try {
        $curriculum = $this->curriculumService->getActive();
        
        if (!$curriculum || !$curriculum->file_path) {
            return redirect()->back()
                ->with('error', 'No curriculum file available for download.');
        }
        
        // Check if file exists in R2 storage
        if (!Storage::exists($curriculum->file_path)) {
            return redirect()->back()
                ->with('error', 'Curriculum file not found.');
        }
        
        // Get file from R2 and return as download
        $file = Storage::get($curriculum->file_path);
        $mimeType = Storage::mimeType($curriculum->file_path);
        
        return response($file)
            ->header('Content-Type', $mimeType)
            ->header('Content-Disposition', 'attachment; filename="' . $curriculum->file_name . '"');
        
    } catch (\Exception $e) {
        Log::error('Error downloading curriculum: ' . $e->getMessage());
        return redirect()->back()
            ->with('error', 'Failed to download curriculum. Please try again.');
    }
}
```

## Blade - Botones de Descarga

```php
{{-- resources/views/admin/curriculum/edit.blade.php --}}

@if($curriculum->file_path)
<div class="flex flex-wrap gap-3">
    {{-- Preview: abre en nueva pestaña --}}
    <a href="{{ Storage::url($curriculum->file_path) }}" 
       target="_blank" 
       class="flex-1 sm:flex-none cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-slate-100 dark:bg-surface-dark-highlight text-slate-900 dark:text-white hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors text-sm font-bold gap-2 flex">
        <span class="material-symbols-outlined text-lg">visibility</span>
        <span>Preview</span>
    </a>
    
    {{-- Download: fuerza descarga --}}
    <form action="{{ route('admin.curriculum.download') }}" method="GET" class="flex-1 sm:flex-none">
        <button type="submit" class="w-full cursor-pointer items-center justify-center rounded-lg h-9 px-4 border border-slate-200 dark:border-slate-600 text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary hover:border-primary dark:hover:border-primary transition-colors text-sm font-medium gap-2 flex">
            <span class="material-symbols-outlined text-lg">download</span>
            <span>Download</span>
        </button>
    </form>
</div>
@endif
```

## Alternativa Simple (sin controller)

Si prefieres una descarga directa sin controller:

```php
{{-- Download directo usando atributo download --}}
<a href="{{ Storage::url($curriculum->file_path) }}" 
   download="{{ $curriculum->file_name }}"
   class="cursor-pointer items-center justify-center rounded-lg h-9 px-4 border border-slate-200 dark:border-slate-600 text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary hover:border-primary dark:hover:border-primary transition-colors text-sm font-medium gap-2 flex">
    <span class="material-symbols-outlined text-lg">download</span>
    <span>Download</span>
</a>
```

## ¿Por qué esta solución funciona en producción?

1. **Storage Facade**: Abstrae el sistema de archivos, funciona con local, R2, S3, etc.
2. **Sin rutas físicas**: No usa `storage_path()` ni `public_path()`, solo Storage API
3. **URLs públicas**: `Storage::url()` genera URLs correctas para R2/Laravel Cloud
4. **Descarga forzada**: `Content-Disposition: attachment` asegura descarga vs preview
5. **MIME dinámico**: Obtiene el MIME type real del archivo en storage

## Configuración necesaria

Asegúrate que en `config/filesystems.php` tengas:

```php
'default' => env('FILESYSTEM_DISK', 'r2'), // o 's3', 'local', etc.

'disks' => [
    'r2' => [
        'driver' => 's3',
        // ... configuración de R2
        'url' => env('R2_URL'),
        'endpoint' => env('R2_ENDPOINT'),
        // ...
    ],
],
```

## Ventajas

- ✅ Funciona en local y producción
- ✅ Compatible con R2/Laravel Cloud
- ✅ Sin dependencias de rutas físicas
- ✅ Descarga forzada con nombre original
- ✅ Manejo de errores robusto
- ✅ Preview opcional en nueva pestaña
