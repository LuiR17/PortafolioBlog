@extends('layouts.dashboard')


@section('content')
    <main class="flex-1 flex flex-col h-screen overflow-y-auto relative">
        <div class="w-full max-w-[1200px] mx-auto px-6 py-8 md:px-12 md:py-10 flex flex-col gap-8">
            <!-- Breadcrumbs -->
            <div class="flex flex-wrap gap-2 items-center text-sm">
                <a class="text-slate-500 dark:text-[#9eb1b7] hover:text-primary transition-colors font-medium"
                    href="#">Dashboard</a>
                <span class="text-slate-400 dark:text-[#9eb1b7] font-medium">/</span>
                <a class="text-slate-500 dark:text-[#9eb1b7] hover:text-primary transition-colors font-medium"
                    href="#">Skills &amp; Tools</a>
                <span class="text-slate-400 dark:text-[#9eb1b7] font-medium">/</span>
                <span class="text-slate-900 dark:text-white font-medium">Edit Skill</span>
            </div>
            <!-- Page Header -->
            <div
                class="flex flex-wrap justify-between items-end gap-4 border-b border-slate-200 dark:border-slate-800 pb-6">
                <div class="flex flex-col gap-2">
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900 dark:text-white">Manage Tech
                        Stack</h2>
                    <p class="text-slate-500 dark:text-[#9eb1b7] text-base font-normal max-w-2xl">Edit the language,
                        framework, or tool in your portfolio to update your expertise.</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('admin.skills.index') }}"
                        class="px-4 py-2 rounded-lg border border-slate-300 dark:border-slate-600 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors font-medium">
                        Cancel
                    </a>
                </div>
            </div>
            <!-- Form Content -->
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Main Form -->
                <div
                    class="flex-1 flex flex-col gap-6 bg-white dark:bg-surface-dark p-6 md:p-8 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm">
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

                    <form action="{{ route('admin.skills.update', $skill) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6">
                        @csrf
                        @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Name Input -->
                        <div class="flex flex-col gap-2">
                            <label for="name" class="text-slate-900 dark:text-white text-base font-medium">Name <span class="text-red-500">*</span></label>
                            <input
                                id="name"
                                name="name"
                                class="w-full rounded-lg border border-slate-300 dark:border-[#3d4d52] bg-slate-50 dark:bg-[#111d21] px-4 py-3 text-base text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#9eb1b7] focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all @error('name') border-red-500 @enderror"
                                placeholder="e.g., TypeScript" type="text" value="{{ old('name', $skill->name) }}" />
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Category Select -->
                        <div class="flex flex-col gap-2">
                            <label for="category" class="text-slate-900 dark:text-white text-base font-medium">Category <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <select
                                    id="category"
                                    name="category"
                                    class="w-full appearance-none rounded-lg border border-slate-300 dark:border-[#3d4d52] bg-slate-50 dark:bg-[#111d21] px-4 py-3 text-base text-slate-900 dark:text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all pr-10 @error('category') border-red-500 @enderror">
                                    <option value="" {{ old('category', $skill->category) == '' ? 'selected' : '' }}>Select category</option>
                                    <option value="language" {{ old('category', $skill->category) == 'language' ? 'selected' : '' }}>Language</option>
                                    <option value="framework" {{ old('category', $skill->category) == 'framework' ? 'selected' : '' }}>Framework</option>
                                    <option value="tool" {{ old('category', $skill->category) == 'tool' ? 'selected' : '' }}>Tool (Software, Platform)</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-500 dark:text-[#9eb1b7]">
                                    <span class="material-symbols-outlined">expand_more</span>
                                </div>
                            </div>
                            @error('category')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- Order Input -->
                    <div class="flex flex-col gap-2">
                        <label for="order" class="text-slate-900 dark:text-white text-base font-medium">Order <span
                                class="text-slate-400 font-normal text-sm ml-1">(Optional)</span></label>
                        <input
                            id="order"
                            name="order"
                            class="w-full rounded-lg border border-slate-300 dark:border-[#3d4d52] bg-slate-50 dark:bg-[#111d21] px-4 py-3 text-base text-slate-900 dark:text-white placeholder:text-slate-400 dark:placeholder:text-[#9eb1b7] focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all"
                            placeholder="e.g., 1" type="number" min="0" value="{{ old('order', $skill->order) }}" />
                        @error('order')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="h-px bg-slate-200 dark:bg-slate-700 my-2"></div>
                    <!-- Submit Actions -->
                    <div class="flex justify-end gap-4">
                        <a href="{{ route('admin.skills.index') }}"
                            class="px-6 py-3 rounded-lg text-slate-600 dark:text-slate-300 font-medium hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-6 py-3 rounded-lg bg-primary text-white font-bold hover:bg-opacity-90 transition-all shadow-lg shadow-primary/20 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">check</span>
                            Update Skill
                        </button>
                    </div>
                    </form>
                </div>
                <!-- Sidebar / Upload & Preview -->
                <div class="w-full lg:w-96 flex flex-col gap-6">
                    <!-- Upload Card -->
                    <div
                        class="bg-white dark:bg-surface-dark p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-4">
                        <div class="flex justify-between items-center">
                            <h3 class="text-slate-900 dark:text-white font-bold text-lg">Logo Upload</h3>
                            <span
                                class="text-xs bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 px-2 py-1 rounded">SVG,
                                PNG</span>
                        </div>
                        <!-- Dropzone -->
                        <div
                            class="border-2 border-dashed border-slate-300 dark:border-slate-600 rounded-lg p-8 flex flex-col items-center justify-center gap-3 text-center cursor-pointer hover:border-primary/50 hover:bg-slate-50 dark:hover:bg-[#152024] transition-all group">
                            <input type="file" id="icon" name="icon" accept="image/*" class="hidden" onchange="previewImage(event)">
                            <div
                                class="w-12 h-12 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center group-hover:bg-primary/10 transition-colors">
                                <span
                                    class="material-symbols-outlined text-slate-400 dark:text-slate-500 group-hover:text-primary transition-colors">cloud_upload</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-200">Click to upload or drag
                                    and drop</p>
                                <p class="text-xs text-slate-400 dark:text-slate-500">Max file size: 50KB</p>
                            </div>
                        </div>
                        <!-- Current File Preview -->
                        <div id="imagePreview" class="@if($skill->icon) flex @else hidden @endif items-center gap-3 p-3 bg-slate-50 dark:bg-[#111d21] rounded-lg border border-slate-200 dark:border-slate-700">
                            <div class="w-10 h-10 rounded bg-white dark:bg-black/20 flex items-center justify-center p-2">
                                @if($skill->icon)
                                    <img src="{{ Storage::url($skill->icon) }}" alt="Current icon" class="w-full h-full object-contain">
                                @else
                                    <img id="previewImg" src="" alt="Preview" class="w-full h-full object-contain">
                                @endif
                            </div>
                            <div class="flex-1 min-w-0">
                                @if($skill->icon)
                                    <p class="text-sm font-medium text-slate-900 dark:text-white truncate">Current icon</p>
                                    <p class="text-xs text-slate-500">Uploaded file</p>
                                @else
                                    <p id="fileName" class="text-sm font-medium text-slate-900 dark:text-white truncate"></p>
                                    <p id="fileSize" class="text-xs text-slate-500"></p>
                                @endif
                            </div>
                            <button type="button" onclick="clearImage()" class="text-slate-400 hover:text-red-400">
                                <span class="material-symbols-outlined text-[20px]">close</span>
                            </button>
                        </div>
                        @error('icon')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Live Preview Card -->
                    <div
                        class="bg-white dark:bg-surface-dark p-6 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm flex flex-col gap-4">
                        <div class="flex flex-col gap-1">
                            <h3 class="text-slate-900 dark:text-white font-bold text-lg">Preview</h3>
                            <p class="text-xs text-slate-500 dark:text-[#9eb1b7]">How it will appear on your site</p>
                        </div>
                        <div class="bg-slate-100 dark:bg-[#111d21] p-6 rounded-lg flex justify-center items-center">
                            <!-- Preview Item Representation -->
                            <div
                                class="flex flex-col items-center gap-3 p-4 bg-white dark:bg-[#1a262a] rounded-xl border border-slate-200 dark:border-[#2d3a3e] w-32 shadow-sm">
                                <div
                                    class="w-12 h-12 rounded-lg bg-slate-50 dark:bg-[#111d21] flex items-center justify-center p-2">
                                    <!-- Placeholder for preview icon -->
                                    <span
                                        class="material-symbols-outlined text-slate-300 dark:text-slate-600 text-3xl">image</span>
                                </div>
                                <div class="w-full h-2 bg-slate-200 dark:bg-slate-700 rounded mb-1"></div>
                                <div class="w-2/3 h-1.5 bg-slate-100 dark:bg-slate-800 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>

<script>
function previewImage(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
            document.getElementById('fileName').textContent = file.name;
            document.getElementById('fileSize').textContent = formatFileSize(file.size);
            document.getElementById('imagePreview').classList.remove('hidden');
        };
        reader.readAsDataURL(file);
    }
}

function clearImage() {
    document.getElementById('icon').value = '';
    document.getElementById('imagePreview').classList.add('hidden');
    document.getElementById('previewImg').src = '';
}

function formatFileSize(bytes) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
}

// Make dropzone clickable
document.addEventListener('DOMContentLoaded', function() {
    const dropzone = document.querySelector('.border-dashed');
    const fileInput = document.getElementById('icon');
    
    dropzone.addEventListener('click', function() {
        fileInput.click();
    });
    
    // Handle drag and drop
    dropzone.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.classList.add('border-primary', 'bg-slate-50', 'dark:bg-[#152024]');
    });
    
    dropzone.addEventListener('dragleave', function(e) {
        e.preventDefault();
        this.classList.remove('border-primary', 'bg-slate-50', 'dark:bg-[#152024]');
    });
    
    dropzone.addEventListener('drop', function(e) {
        e.preventDefault();
        this.classList.remove('border-primary', 'bg-slate-50', 'dark:bg-[#152024]');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            previewImage({ target: { files: files } });
        }
    });
});
</script>
@endsection
