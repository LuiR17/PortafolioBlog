@extends('layouts.dashboard')

@section('content')
    <main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark h-full">
        <div class="flex justify-center w-full min-h-full py-8 px-4 sm:px-6 md:px-12 lg:px-24">
            <div class="flex flex-col w-full max-w-[960px] gap-8">
                <!-- Page Heading -->
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div class="flex flex-col gap-1">
                        <h2
                            class="text-3xl md:text-4xl font-black leading-tight tracking-tight text-gray-900 dark:text-white">
                            Edit Education</h2>
                        <p class="text-gray-500 dark:text-text-secondary text-base">Update details about your degree,
                            certificate, or bootcamp.</p>
                    </div>
                    <a href="{{ route('admin.education.index') }}"
                        class="group flex items-center justify-center gap-2 rounded-lg bg-white dark:bg-surface-dark border border-gray-200 dark:border-border-dark px-4 py-2.5 transition-all hover:bg-gray-50 dark:hover:bg-[#252a33]">
                        <span
                            class="material-symbols-outlined text-[20px] text-gray-600 dark:text-white group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        <span class="text-sm font-bold text-gray-800 dark:text-white">Back to List</span>
                    </a>
                </div>
                <!-- Main Form Card -->
                <div
                    class="bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark shadow-sm overflow-hidden">
                    <!-- Form Content -->
                    <div class="p-6 md:p-8 flex flex-col gap-8">
                        @if ($errors->any())
                            <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4">
                                <div class="text-red-800 dark:text-red-200 font-medium mb-2">Please fix the following errors:</div>
                                <ul class="list-disc list-inside text-red-700 dark:text-red-300 text-sm space-y-1">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4">
                                <div class="text-red-800 dark:text-red-200 font-medium">{{ session('error') }}</div>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4">
                                <div class="text-green-800 dark:text-green-200 font-medium">{{ session('success') }}</div>
                            </div>
                        @endif

                    <form action="{{ route('admin.education.update', $education) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-8">
                        @csrf
                        @method('PUT')
                        <!-- Section: Basic Info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Institution / University <span class="text-red-500">*</span></span>
                                <input
                                    name="institution_name"
                                    required
                                    class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow @error('institution_name') border-red-500 @enderror"
                                    placeholder="e.g. Stanford University" type="text" value="{{ old('institution_name', $education->institution_name) }}" />
                                @error('institution_name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Degree / Certificate Title <span class="text-red-500">*</span></span>
                                <input
                                    name="degree_title"
                                    required
                                    class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow @error('degree_title') border-red-500 @enderror"
                                    placeholder="e.g. Master of Computer Science" type="text" value="{{ old('degree_title', $education->degree_title) }}" />
                                @error('degree_title')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Career <span class="text-text-secondary font-normal">(Optional)</span></span>
                                <input
                                    name="career"
                                    class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow @error('career') border-red-500 @enderror"
                                    placeholder="e.g. Software Engineering" type="text" value="{{ old('career', $education->career) }}" />
                                @error('career')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                        </div>
                        <hr class="border-gray-200 dark:border-border-dark" />
                        <!-- Section: Dates -->
                        <div class="flex flex-col gap-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                                <label class="flex flex-col gap-2">
                                    <span class="text-sm font-medium text-gray-700 dark:text-white">Start Year <span class="text-red-500">*</span></span>
                                    <input
                                        name="start_year"
                                        required
                                        class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow @error('start_year') border-red-500 @enderror"
                                        type="number" min="1950" max="2050" placeholder="e.g. 2023" value="{{ old('start_year', $education->start_year) }}" />
                                    @error('start_year')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="flex flex-col gap-2">
                                    <label class="flex flex-col gap-2 opacity-100 transition-opacity" id="end-date-label">
                                        <span class="text-sm font-medium text-gray-700 dark:text-white">End Year</span>
                                        <input
                                            name="end_year"
                                            class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow @error('end_year') border-red-500 @enderror"
                                            type="number" min="1950" max="2050" placeholder="e.g. 2024" value="{{ old('end_year', $education->end_year) }}" />
                                        @error('end_year')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="border-gray-200 dark:border-border-dark" />
                        <!-- Section: Details -->
                        <div class="flex flex-col gap-6">
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Description <span class="text-text-secondary font-normal">(Optional)</span></span>
                                <textarea
                                    name="description"
                                    class="form-textarea w-full resize-y rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow @error('description') border-red-500 @enderror"
                                    placeholder="Describe your education, achievements, or relevant coursework..." rows="6">{{ old('description', $education->description) }}</textarea>
                                @error('description')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </label>
                            <!-- File Upload -->
                            <div class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Institution Logo <span
                                        class="text-text-secondary font-normal">(Optional)</span></span>
                                <div
                                    class="flex w-full items-center justify-center rounded-xl border-2 border-dashed border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] p-8 transition-colors hover:border-primary hover:bg-primary/5 cursor-pointer group">
                                    <input type="file" id="institution_logo" name="institution_logo" accept="image/*" class="hidden" onchange="previewImage(event)">
                                    <div class="flex flex-col items-center gap-3 text-center">
                                        <div
                                            class="rounded-full bg-gray-200 dark:bg-surface-dark p-3 text-gray-500 dark:text-text-secondary group-hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[32px]">cloud_upload</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">
                                                <span class="text-primary font-bold">Click to upload</span> or drag and drop
                                            </p>
                                            <p class="text-xs text-text-secondary">SVG, PNG, JPG or GIF (max. 2MB)</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="imagePreview" class="@if($education->institution_logo) flex @else hidden @endif items-center gap-3 p-3 bg-gray-50 dark:bg-[#111621] rounded-lg border border-gray-200 dark:border-border-dark">
                                    <div class="w-10 h-10 rounded bg-white dark:bg-black/20 flex items-center justify-center p-2">
                                        @if($education->institution_logo)
                                            <img src="{{ Storage::url($education->institution_logo) }}" alt="Current logo" class="w-full h-full object-contain">
                                        @else
                                            <img id="previewImg" src="" alt="Preview" class="w-full h-full object-contain">
                                        @endif
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        @if($education->institution_logo)
                                            <p class="text-sm font-medium text-gray-900 dark:text-white truncate">Current logo</p>
                                            <p class="text-xs text-gray-500">Uploaded file</p>
                                        @else
                                            <p id="fileName" class="text-sm font-medium text-gray-900 dark:text-white truncate"></p>
                                            <p id="fileSize" class="text-xs text-gray-500"></p>
                                        @endif
                                    </div>
                                    <button type="button" onclick="clearImage()" class="text-gray-400 hover:text-red-400">
                                        <span class="material-symbols-outlined text-[20px]">close</span>
                                    </button>
                                </div>
                                @error('institution_logo')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- Actions Footer -->
                    <div
                        class="flex items-center justify-end gap-3 border-t border-gray-200 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-6 py-4 md:px-8">
                        <a href="{{ route('admin.education.index') }}"
                            class="h-10 rounded-lg px-6 text-sm font-bold text-gray-600 dark:text-text-secondary hover:bg-gray-200 dark:hover:bg-surface-dark transition-colors">
                            Cancel
                        </a>
                        <button type="submit"
                            class="h-10 rounded-lg bg-primary px-6 text-sm font-bold text-white shadow-lg shadow-primary/30 hover:bg-primary/90 hover:shadow-primary/50 transition-all">
                            Update Education
                        </button>
                    </div>
                    </form>
                </div>
                <div class="h-10"></div> <!-- Spacer -->
            </div>
        </div>
    </main>

<script>
// Debug: Verificar que el formulario se está enviando
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form[action*="education.update"]');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            console.log('Formulario de edición siendo enviado');
            console.log('Datos del formulario:', new FormData(this));
            
            // Verificar campos requeridos
            const institutionName = this.querySelector('input[name="institution_name"]');
            const degreeTitle = this.querySelector('input[name="degree_title"]');
            const startYear = this.querySelector('input[name="start_year"]');
            
            if (!institutionName.value.trim()) {
                console.error('El campo institution_name está vacío');
                e.preventDefault();
                alert('Please fill in the Institution Name field');
                return;
            }
            
            if (!degreeTitle.value.trim()) {
                console.error('El campo degree_title está vacío');
                e.preventDefault();
                alert('Please fill in the Degree Title field');
                return;
            }
            
            if (!startYear.value) {
                console.error('El campo start_year está vacío');
                e.preventDefault();
                alert('Please fill in the Start Year field');
                return;
            }
            
            console.log('Validación pasada, enviando formulario...');
        });
    }
});

function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
            document.getElementById('fileName').textContent = file.name;
            document.getElementById('fileSize').textContent = formatFileSize(file.size);
            document.getElementById('imagePreview').classList.remove('hidden');
            document.getElementById('imagePreview').classList.add('flex');
        };
        reader.readAsDataURL(file);
    }
}

function clearImage() {
    document.getElementById('institution_logo').value = '';
    document.getElementById('previewImg').src = '';
    document.getElementById('fileName').textContent = '';
    document.getElementById('fileSize').textContent = '';
    document.getElementById('imagePreview').classList.add('hidden');
    document.getElementById('imagePreview').classList.remove('flex');
}

function formatFileSize(bytes) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
}

// Drag and drop functionality
document.addEventListener('DOMContentLoaded', function() {
    const dropzone = document.querySelector('.border-dashed');
    
    if (dropzone) {
        dropzone.addEventListener('click', function() {
            document.getElementById('institution_logo').click();
        });
        
        dropzone.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('border-primary', 'bg-primary/5');
        });
        
        dropzone.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.classList.remove('border-primary', 'bg-primary/5');
        });
        
        dropzone.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('border-primary', 'bg-primary/5');
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                document.getElementById('institution_logo').files = files;
                previewImage({ target: { files: [files[0]] } });
            }
        });
    }
});
</script>
@endsection
