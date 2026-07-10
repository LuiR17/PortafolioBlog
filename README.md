# Portafolio Blog

Un portafolio personal desarrollado con Laravel que showcase de proyectos, habilidades y experiencia profesional.

## Características Destacables

### 🎨 Interfaz Moderna y Responsive
- Diseño adaptativo para todos los dispositivos
- Interfaz de administración intuitiva con TailwindCSS
- Componentes interactivos con JavaScript vanilla

### 📋 Sistema de Gestión de Skills
- CRUD completo para gestión de habilidades técnicas
- Validación de datos con FormRequest
- Manejo de imágenes con drag & drop
- Ordenamiento automático por campo `order`

### 🗂️ Almacenamiento de Archivos

#### Estructura de Directorios
```
storage/
├── app/
│   └── public/
│       └── skills/          # Imágenes de habilidades
└── framework/
    ├── cache/              # Caché de la aplicación
    ├── sessions/           # Datos de sesión
    └── views/              # Vistas compiladas
```

#### Configuración de Archivos Públicos
Los archivos públicos se sirven a través de:
- **Storage Link**: `public/storage` → `storage/app/public`
- **URL Base**: `/storage/skills/` para imágenes de habilidades

#### Proceso de Subida de Archivos
1. **Validación**: Se verifica el tipo y tamaño del archivo
2. **Almacenamiento**: Se guarda en `storage/app/public/skills/`
3. **Generación de Nombre**: Se usa un nombre único con timestamp
4. **Base de Datos**: Se registra la ruta relativa en el modelo
5. **Limpieza**: Se eliminan archivos anteriores al actualizar

#### Ejemplo de Manejo de Imágenes
```php
// Almacenamiento seguro
$path = $request->file('icon')->store('skills', 'public');

// Eliminación de archivo anterior
if ($skill->icon && Storage::disk('public')->exists($skill->icon)) {
    Storage::disk('public')->delete($skill->icon);
}
```

### 🏗️ Arquitectura del Proyecto

#### Estructura de Controladores
- **Admin Controllers**: Gestión de contenido administrativo
- **API Controllers**: Endpoints para consumo de APIs
- **Web Controllers**: Lógica de vistas públicas

#### Services Layer
- Separación de lógica de negocio
- `SkillService`: Manejo de operaciones CRUD complejas
- Manejo centralizado de errores y logging

#### Validaciones
- FormRequest para validación robusta
- `StoreSkillRequest` y `UpdateSkillRequest`
- Mensajes de error personalizados

### 🔧 Configuración del Entorno

#### Variables de Entorno Clave
```env
APP_NAME="Portafolio Blog"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portafolio
DB_USERNAME=root
DB_PASSWORD=

FILESYSTEM_DISK=public
```

#### Configuración de Base de Datos
- MySQL como motor principal
- Migraciones versionadas
- Seeders para datos iniciales

### 🚀 Tecnologías Utilizadas

- **Backend**: Laravel 10.x
- **Frontend**: Blade Templates, TailwindCSS
- **JavaScript**: Vanilla JS con funcionalidades modernas
- **Base de Datos**: MySQL
- **Almacenamiento**: Laravel Filesystem

### 📦 Instalación

1. Clonar el repositorio
2. Instalar dependencias: `composer install`
3. Configurar variables de entorno: `cp .env.example .env`
4. Generar clave de aplicación: `php artisan key:generate`
5. Crear enlace simbólico: `php artisan storage:link`
6. Ejecutar migraciones: `php artisan migrate`
7. Iniciar servidor: `php artisan serve`

### 🔐 Seguridad

- Validación de entrada de datos
- Protección CSRF
- Sanitización de archivos subidos
- Control de acceso basado en roles

## Contributing

Thank you for considering contributing to this project! Please read the contribution guide before submitting pull requests.

## License

This project is open-sourced software licensed under the MIT license.
