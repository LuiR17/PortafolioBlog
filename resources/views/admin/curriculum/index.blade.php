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
<span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-xs font-medium text-emerald-500">
<span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        Public
                                    </span>
</div>
<div class="p-6">
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
<h4 class="text-lg font-bold text-slate-900 dark:text-white mb-1">alex_dev_resume_v4.pdf</h4>
<div class="flex flex-wrap gap-y-1 gap-x-4 text-sm text-slate-500 dark:text-[#9ea7b7]">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-base">calendar_today</span> Oct 24, 2023</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-base">hard_drive</span> 2.4 MB</span>
</div>
</div>
<div class="flex flex-wrap gap-3">
<button class="flex-1 sm:flex-none cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-slate-100 dark:bg-surface-dark-highlight text-slate-900 dark:text-white hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors text-sm font-bold gap-2 flex">
<span class="material-symbols-outlined text-lg">visibility</span>
<span>Preview</span>
</button>
<button class="flex-1 sm:flex-none cursor-pointer items-center justify-center rounded-lg h-9 px-4 border border-slate-200 dark:border-slate-600 text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary hover:border-primary dark:hover:border-primary transition-colors text-sm font-medium gap-2 flex">
<span class="material-symbols-outlined text-lg">download</span>
<span>Download</span>
</button>
</div>
</div>
</div>
</div>
</div>
<!-- Upload Area -->
<div class="rounded-xl border-2 border-dashed border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-surface-dark/50 hover:border-primary/50 hover:bg-primary/5 dark:hover:bg-primary/5 transition-all cursor-pointer group relative overflow-hidden">
<input class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" type="file"/>
<div class="flex flex-col items-center justify-center py-12 px-6 text-center">
<div class="mb-4 rounded-full bg-slate-200 dark:bg-surface-dark-highlight p-4 group-hover:scale-110 transition-transform duration-300">
<span class="material-symbols-outlined text-3xl text-slate-500 dark:text-slate-400 group-hover:text-primary">cloud_upload</span>
</div>
<h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Upload New Version</h3>
<p class="text-slate-500 dark:text-[#9ea7b7] text-sm max-w-sm mb-6">
                                        Drag and drop your PDF here, or click to browse. Max size: 5MB.
                                    </p>
<button class="pointer-events-none rounded-lg bg-primary text-white px-5 py-2.5 text-sm font-bold shadow-lg shadow-primary/20 group-hover:shadow-primary/40 transition-all">
                                        Browse Files
                                    </button>
</div>
</div>
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
<button class="w-full mt-2 cursor-pointer items-center justify-center rounded-lg h-10 px-4 border border-red-200 dark:border-red-800 hover:bg-red-100 dark:hover:bg-red-900/40 text-red-600 dark:text-red-400 transition-colors text-sm font-bold">
                                    Delete Current CV
                                </button>
</div>
</div>
</div>
<!-- Bottom Action Bar (Sticky on Mobile, Static on Desktop) -->
<div class="sticky bottom-6 z-20 mt-4">
<div class="rounded-xl bg-[#111317] dark:bg-black/40 backdrop-blur-md border border-slate-800 p-4 flex justify-between items-center shadow-2xl">
<div class="flex flex-col px-2">
<span class="text-sm text-white font-medium">Unsaved changes</span>
<span class="text-xs text-slate-400">Last saved: Just now</span>
</div>
<div class="flex gap-3">
<button class="px-5 py-2.5 text-sm font-bold text-slate-300 hover:text-white transition-colors">Cancel</button>
<button class="rounded-lg bg-primary hover:bg-blue-600 text-white px-6 py-2.5 text-sm font-bold shadow-lg shadow-blue-900/20 transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-lg">save</span>
                                    Save Changes
                                </button>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection