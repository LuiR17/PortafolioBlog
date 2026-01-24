@extends('layouts.dashboard')

@section('content')
<main class="flex-1 flex flex-col h-full overflow-hidden relative">
<!-- Mobile Header (Hidden on Desktop) -->
<div class="lg:hidden flex items-center justify-between p-4 border-b border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark">
<span class="font-bold text-lg">Dev Admin</span>
<span class="material-symbols-outlined">menu</span>
</div>
<!-- Scrollable Content Area -->
<div class="flex-1 overflow-y-auto p-6 md:p-12 lg:px-24">
<div class="max-w-4xl mx-auto flex flex-col gap-8">
<!-- Page Heading -->
<div class="flex flex-col gap-2">
<div class="flex justify-between items-start">
<div class="flex flex-col gap-2">
<h1 class="text-3xl md:text-4xl font-black leading-tight tracking-tight text-slate-900 dark:text-white">
                                    Manage Curriculum Vitae
                                </h1>
<p class="text-slate-500 dark:text-[#9ea7b7] text-base font-normal max-w-2xl">
                                    Upload, update, or remove your public-facing resume. Changes will be reflected immediately on your portfolio.
                                </p>
</div>
<!-- View Live Link -->
<a class="hidden md:flex items-center gap-2 text-primary hover:text-blue-400 transition-colors text-sm font-bold" href="#">
<span>View Live Page</span>
<span class="material-symbols-outlined text-lg">open_in_new</span>
</a>
</div>
</div>
<!-- Main Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Left Column: Current File & Upload (Span 2) -->
<div class="lg:col-span-2 flex flex-col gap-6">
<!-- Current File Card -->
<div class="rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-surface-dark shadow-sm overflow-hidden">
<div class="px-6 py-4 border-b border-slate-100 dark:border-slate-700 flex justify-between items-center bg-slate-50/50 dark:bg-surface-dark-highlight/30">
<h3 class="font-bold text-sm uppercase tracking-wider text-slate-500 dark:text-slate-400">Current Active File</h3>
@if($curriculum->file_path)
<span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-xs font-medium text-emerald-500">
<span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        Public
                                    </span>
@else
<span class="inline-flex items-center gap-1.5 rounded-full bg-slate-500/10 px-2.5 py-0.5 text-xs font-medium text-slate-500">
<span class="h-1.5 w-1.5 rounded-full bg-slate-500"></span>
                                        No File
                                    </span>
@endif
</div>
<div class="p-6">
@if($curriculum->file_path)
<div class="flex flex-col sm:flex-row gap-6">
<!-- Preview Thumbnail -->
<div class="w-full sm:w-32 aspect-[3/4] rounded-lg shadow-md bg-slate-100 dark:bg-[#292e38] flex items-center justify-center relative overflow-hidden group">
<!-- Abstract PDF Preview -->
<div class="absolute inset-0 bg-gradient-to-br from-slate-200 to-slate-300 dark:from-slate-700 dark:to-slate-800" data-alt="Abstract gradient representing a document preview"></div>
<span class="material-symbols-outlined text-4xl text-slate-400 dark:text-slate-500 relative z-10">picture_as_pdf</span>
</div>
<!-- Details -->
<div class="flex flex-col flex-1 justify-between gap-4">
<div>
<h4 class="text-lg font-bold text-slate-900 dark:text-white mb-1">{{ $curriculum->file_name }}</h4>
<div class="flex flex-wrap gap-y-1 gap-x-4 text-sm text-slate-500 dark:text-[#9ea7b7]">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-base">calendar_today</span> {{ $curriculum->updated_at->format('M d, Y') }}</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-base">hard_drive</span> {{ number_format($curriculum->file_size / 1024 / 1024, 1) }} MB</span>
</div>
</div>
<div class="flex flex-wrap gap-3">
<a href="{{ Storage::url($curriculum->file_path) }}" target="_blank" class="flex-1 sm:flex-none cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-slate-100 dark:bg-surface-dark-highlight text-slate-900 dark:text-white hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors text-sm font-bold gap-2 flex">
<span class="material-symbols-outlined text-lg">visibility</span>
<span>Preview</span>
</a>
<form action="{{ route('admin.curriculum.download') }}" method="GET" class="flex-1 sm:flex-none">
<button type="submit" class="w-full cursor-pointer items-center justify-center rounded-lg h-9 px-4 border border-slate-200 dark:border-slate-600 text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary hover:border-primary dark:hover:border-primary transition-colors text-sm font-medium gap-2 flex">
<span class="material-symbols-outlined text-lg">download</span>
<span>Download</span>
</button>
</form>
</div>
</div>
</div>
@else
<div class="text-center py-8">
<div class="w-16 h-16 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-2xl text-slate-400 dark:text-slate-600">upload_file</span>
</div>
<h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">No Curriculum Uploaded</h3>
<p class="text-slate-500 dark:text-slate-400 text-sm">Upload your first curriculum to make it available on your portfolio.</p>
</div>
@endif
</div>
</div>
<!-- Upload Area -->
<form action="{{ route('admin.curriculum.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PATCH')
    
    <!-- Upload Area -->
    <div class="rounded-xl border-2 border-dashed border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-surface-dark/50 hover:border-primary/50 hover:bg-primary/5 dark:hover:bg-primary/5 transition-all cursor-pointer group relative overflow-hidden">
    <input name="file_path" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" type="file" accept=".pdf" onchange="previewFile(this)"/>
    <div class="flex flex-col items-center justify-center py-12 px-6 text-center">
    <div class="mb-4 rounded-full bg-slate-200 dark:bg-surface-dark-highlight p-4 group-hover:scale-110 transition-transform duration-300">
    <span class="material-symbols-outlined text-3xl text-slate-500 dark:text-slate-400 group-hover:text-primary">cloud_upload</span>
    </div>
    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Upload New Version</h3>
    <p class="text-slate-500 dark:text-[#9ea7b7] text-sm max-w-sm mb-6">
                                        Drag and drop your PDF here, or click to browse. Max size: 5MB.
                                    </p>
    <button type="button" class="pointer-events-none rounded-lg bg-primary text-white px-5 py-2.5 text-sm font-bold shadow-lg shadow-primary/20 group-hover:shadow-primary/40 transition-all">
                                        Browse Files
                                    </button>
    </div>
    </div>
    
    <!-- File Preview -->
    <div id="filePreview" class="hidden rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-surface-dark p-6">
    <div class="flex items-center justify-between mb-4">
    <h4 class="font-semibold text-slate-900 dark:text-white">New File Preview</h4>
    <button type="button" onclick="clearFile()" class="text-slate-400 hover:text-red-400">
    <span class="material-symbols-outlined">close</span>
    </button>
    </div>
    <div class="flex items-center gap-4">
    <div class="w-12 h-12 rounded bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
    <span class="material-symbols-outlined text-slate-500">picture_as_pdf</span>
    </div>
    <div class="flex-1">
    <p id="fileName" class="font-medium text-slate-900 dark:text-white"></p>
    <p id="fileSize" class="text-sm text-slate-500"></p>
    </div>
    </div>
    </div>
    
    <!-- Language Selection -->
    <div class="rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-surface-dark p-6">
    <label class="block text-sm font-medium text-slate-900 dark:text-white mb-3">Curriculum Language</label>
    <div class="grid grid-cols-2 gap-4">
    <label class="relative flex items-center p-4 border-2 rounded-lg cursor-pointer transition-colors {{ $curriculum->language === 'en' ? 'border-primary bg-primary/5' : 'border-slate-200 dark:border-slate-700 hover:border-slate-300' }}">
    <input type="radio" name="language" value="en" {{ $curriculum->language === 'en' ? 'checked' : '' }} class="sr-only" onchange="updateLanguageSelection(this)">
    <div class="flex items-center gap-3">
    <span class="text-2xl">🇬🇧</span>
    <div>
    <p class="font-medium text-slate-900 dark:text-white">English</p>
    <p class="text-sm text-slate-500">English version</p>
    </div>
    </div>
    </label>
    <label class="relative flex items-center p-4 border-2 rounded-lg cursor-pointer transition-colors {{ $curriculum->language === 'es' ? 'border-primary bg-primary/5' : 'border-slate-200 dark:border-slate-700 hover:border-slate-300' }}">
    <input type="radio" name="language" value="es" {{ $curriculum->language === 'es' ? 'checked' : '' }} class="sr-only" onchange="updateLanguageSelection(this)">
    <div class="flex items-center gap-3">
    <span class="text-2xl">🇪🇸</span>
    <div>
    <p class="font-medium text-slate-900 dark:text-white">Spanish</p>
    <p class="text-sm text-slate-500">Versión en español</p>
    </div>
    </div>
    </label>
    </div>
    </div>
    
    @error('file_path')
        <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4">
            <div class="text-red-800 dark:text-red-200 font-medium">{{ $message }}</div>
        </div>
    @enderror
    
    @error('language')
        <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4">
            <div class="text-red-800 dark:text-red-200 font-medium">{{ $message }}</div>
        </div>
    @enderror
    
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
    
    <button type="submit" class="rounded-lg bg-primary hover:bg-blue-600 text-white px-6 py-2.5 text-sm font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center gap-2">
    <span class="material-symbols-outlined text-lg">save</span>
                                    Save Changes
                                </button>
</form>
</div>
<!-- Right Column: Status & Danger Zone (Span 1) -->
<div class="flex flex-col gap-6">
<!-- Stats / Info -->
<div class="rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-surface-dark p-6 flex flex-col gap-4">
<h3 class="font-bold text-slate-900 dark:text-white">File Status</h3>
<div class="flex flex-col gap-4">
<div class="flex justify-between items-center py-2 border-b border-slate-100 dark:border-slate-700">
<span class="text-sm text-slate-500 dark:text-slate-400">Total Downloads</span>
<span class="text-sm font-bold text-slate-900 dark:text-white">1,245</span>
</div>
<div class="flex justify-between items-center py-2 border-b border-slate-100 dark:border-slate-700">
<span class="text-sm text-slate-500 dark:text-slate-400">Last Update</span>
<span class="text-sm font-bold text-slate-900 dark:text-white">2 days ago</span>
</div>
<div class="flex justify-between items-center py-2">
<span class="text-sm text-slate-500 dark:text-slate-400">Format</span>
<span class="text-sm font-bold text-slate-900 dark:text-white">PDF (v1.7)</span>
</div>
</div>
</div>
<!-- Danger Zone -->
<div class="rounded-xl border border-red-200 dark:border-red-900/30 bg-red-50 dark:bg-red-900/10 p-6 flex flex-col gap-4">
<div class="flex items-center gap-2 text-red-600 dark:text-red-400">
<span class="material-symbols-outlined">warning</span>
<h3 class="font-bold">Danger Zone</h3>
</div>
<p class="text-sm text-slate-600 dark:text-red-200/70">
                                    Removing your CV will make it inaccessible on your public portfolio immediately.
                                </p>
@if($curriculum->file_path)
<form action="{{ route('admin.curriculum.destroy') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete the current curriculum? This action cannot be undone.')">
    @csrf
    @method('DELETE')
    <button type="submit" class="w-full mt-2 cursor-pointer items-center justify-center rounded-lg h-10 px-4 border border-red-200 dark:border-red-800 hover:bg-red-100 dark:hover:bg-red-900/40 text-red-600 dark:text-red-400 transition-colors text-sm font-bold">
                                        Delete Current CV
                                    </button>
</form>
@else
<button disabled class="w-full mt-2 cursor-not-allowed items-center justify-center rounded-lg h-10 px-4 border border-slate-200 dark:border-slate-700 text-slate-400 dark:text-slate-600 text-sm font-bold">
                                        No CV to Delete
                                    </button>
@endif
</div>
</div>
</div>
<!-- Bottom Action Bar (Sticky on Mobile, Static on Desktop) -->
<div class="sticky bottom-6 z-20 mt-4">
<div class="rounded-xl bg-[#111317] dark:bg-black/40 backdrop-blur-md border border-slate-800 p-4 flex justify-between items-center shadow-2xl">
<div class="flex flex-col px-2">
<span class="text-sm text-white font-medium">Curriculum Management</span>
<span class="text-xs text-slate-400">@if($curriculum->file_path) File uploaded @else Ready to upload @endif</span>
</div>
<div class="flex gap-3">
<a href="{{ route('admin.dashboard') }}" class="px-5 py-2.5 text-sm font-bold text-slate-300 hover:text-white transition-colors">Back to Dashboard</a>
</div>
</div>
</div>
</div>
</div>
</div>
</main>

<script>
function previewFile(input) {
    const file = input.files[0];
    if (file) {
        // Validate file type
        if (file.type !== 'application/pdf') {
            alert('Please select a PDF file.');
            input.value = '';
            return;
        }
        
        // Validate file size (5MB)
        if (file.size > 5 * 1024 * 1024) {
            alert('File size must be less than 5MB.');
            input.value = '';
            return;
        }
        
        // Show file preview
        document.getElementById('fileName').textContent = file.name;
        document.getElementById('fileSize').textContent = formatFileSize(file.size);
        document.getElementById('filePreview').classList.remove('hidden');
    }
}

function clearFile() {
    document.querySelector('input[name="file_path"]').value = '';
    document.getElementById('fileName').textContent = '';
    document.getElementById('fileSize').textContent = '';
    document.getElementById('filePreview').classList.add('hidden');
}

function formatFileSize(bytes) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
}

function updateLanguageSelection(radio) {
    // Remove active state from all labels
    document.querySelectorAll('input[name="language"]').forEach(input => {
        const label = input.closest('label');
        label.classList.remove('border-primary', 'bg-primary/5');
        label.classList.add('border-slate-200', 'dark:border-slate-700');
    });
    
    // Add active state to selected label
    const selectedLabel = radio.closest('label');
    selectedLabel.classList.remove('border-slate-200', 'dark:border-slate-700');
    selectedLabel.classList.add('border-primary', 'bg-primary/5');
}

// Drag and drop functionality
document.addEventListener('DOMContentLoaded', function() {
    const dropzone = document.querySelector('.border-dashed');
    
    if (dropzone) {
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, preventDefaults, false);
        });
        
        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }
        
        ['dragenter', 'dragover'].forEach(eventName => {
            dropzone.addEventListener(eventName, highlight, false);
        });
        
        ['dragleave', 'drop'].forEach(eventName => {
            dropzone.addEventListener(eventName, unhighlight, false);
        });
        
        function highlight(e) {
            dropzone.classList.add('border-primary', 'bg-primary/5');
        }
        
        function unhighlight(e) {
            dropzone.classList.remove('border-primary', 'bg-primary/5');
        }
        
        dropzone.addEventListener('drop', handleDrop, false);
        
        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            
            if (files.length > 0) {
                const fileInput = document.querySelector('input[name="file_path"]');
                fileInput.files = files;
                previewFile(fileInput);
            }
        }
    }
});
</script>
@endsection