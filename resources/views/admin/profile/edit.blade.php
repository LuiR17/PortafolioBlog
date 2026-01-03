@extends('layouts.dashboard')

@section('content')
    <main class="flex-1 h-full overflow-y-auto bg-background-light dark:bg-background-dark relative scroll-smooth">
        <div class="max-w-5xl mx-auto px-6 py-8 flex flex-col gap-6">
            <!-- Breadcrumbs -->
            <nav class="flex flex-wrap gap-2 text-sm">
                <a class="text-slate-500 dark:text-[#9e9eb7] hover:text-primary transition-colors" href="#">Home</a>
                <span class="text-slate-400 dark:text-[#58586a]">/</span>
                <a class="text-slate-500 dark:text-[#9e9eb7] hover:text-primary transition-colors" href="#">Admin</a>
                <span class="text-slate-400 dark:text-[#58586a]">/</span>
                <span class="text-slate-900 dark:text-white font-medium">About Me</span>
            </nav>
            <!-- Page Header -->
            <div
                class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-4 border-b border-slate-200 dark:border-[#292938]">
                <div class="flex flex-col gap-2">
                    <h2 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white">Edit Profile &amp; Bio
                    </h2>
                    <p class="text-slate-500 dark:text-[#9e9eb7]">Update your personal details, biography, and social links.
                    </p>
                </div>
                <button
                    class="flex items-center justify-center gap-2 h-10 px-4 bg-white dark:bg-[#292938] border border-slate-200 dark:border-[#3d3d52] hover:bg-slate-50 dark:hover:bg-[#323242] text-slate-700 dark:text-white rounded-lg text-sm font-bold transition-all shadow-sm">
                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                    <span>Preview Changes</span>
                </button>
            </div>
            <!-- Form Card -->
            <div
                class="bg-white dark:bg-surface-dark rounded-xl shadow-sm border border-slate-200 dark:border-[#292938] overflow-hidden">
                <!-- Section 1: Profile Image -->
                <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    
                    <div
                        class="p-6 md:p-8 flex flex-col md:flex-row gap-8 items-start border-b border-slate-200 dark:border-[#292938]">
                        <div class="relative group">
                            <div class="w-32 h-32 rounded-full overflow-hidden ring-4 ring-slate-100 dark:ring-[#292938] shadow-md bg-slate-200 dark:bg-[#111117]">
                                 <img src="{{ Storage::url(auth()->user()->profile_photo) }}" alt="foto de perfil" class="background-size: cover; background-position: center">
                            </div>
                            <button
                                class="absolute bottom-1 right-1 p-2 bg-primary text-white rounded-full shadow-lg hover:bg-blue-700 transition-colors"
                                title="Upload new photo">
                                <span class="material-symbols-outlined text-[20px] block">photo_camera</span>
                            </button>
                        </div>
                        <div class="flex flex-col gap-3 flex-1">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Profile Picture</h3>
                            <p class="text-slate-500 dark:text-[#9e9eb7] text-sm max-w-md">Upload a new avatar. Recommended
                                size
                                is 400x400px. Allowed formats: JPG, PNG, GIF.</p>
                            <div class="flex gap-3 mt-2">
                                <input type="file" name="profile_photo" accept="image/*">
                                <button
                                    class="px-4 py-2 bg-slate-100 dark:bg-[#292938] text-slate-700 dark:text-white text-sm font-medium rounded-lg hover:bg-slate-200 dark:hover:bg-[#323242] transition-colors">Upload
                                    New</button>
                                <button
                                    class="px-4 py-2 text-red-600 dark:text-red-400 text-sm font-medium hover:underline">Remove
                                    Photo</button>
                            </div>
                        </div>
                    </div>
                    <!-- Section 2: Basic Info -->
                    <div class="p-6 md:p-8 border-b border-slate-200 dark:border-[#292938]">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">Información Básica</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-[#9e9eb7]">Nombre Completo</span>
                                <input
                                    class="h-12 w-full rounded-lg bg-slate-50 dark:bg-input-dark border border-slate-200 dark:border-[#3d3d52] px-4 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    type="text" value="{{ old('name', auth()->user()->name) }}" name="name" />
                            </label>
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-[#9e9eb7]">Título académico</span>
                                <input
                                    class="h-12 w-full rounded-lg bg-slate-50 dark:bg-input-dark border border-slate-200 dark:border-[#3d3d52] px-4 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    type="text" value="{{ old('job title', auth()->user()->title) }}" name="title" />
                            </label>
                            <label class="flex flex-col gap-2 md:col-span-2">
                                <span class="text-sm font-medium text-slate-700 dark:text-[#9e9eb7]">Ubicación</span>
                                <input
                                    class="h-12 w-full rounded-lg bg-slate-50 dark:bg-input-dark border border-slate-200 dark:border-[#3d3d52] px-4 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    type="text" value="{{ old('location', auth()->user()->location) }}"
                                    name="location" />
                            </label>
                        </div>
                    </div>
                    <!-- Section 3: Biography Editor -->
                    <div class="p-6 md:p-8 border-b border-slate-200 dark:border-[#292938]">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white">Biography</h3>
                            <span
                                class="text-xs font-medium px-2 py-1 rounded bg-blue-100 dark:bg-primary/20 text-primary dark:text-blue-300">Markdown
                                Enabled</span>
                        </div>
                        <!-- Editor Component -->
                        <div
                            class="flex flex-col rounded-lg border border-slate-200 dark:border-[#3d3d52] overflow-hidden focus-within:ring-2 focus-within:ring-primary/50 focus-within:border-primary transition-all">
                            <!-- Toolbar -->
                            <div
                                class="flex items-center gap-1 p-2 bg-slate-50 dark:bg-[#292938] border-b border-slate-200 dark:border-[#3d3d52]">
                                <button
                                    class="p-2 rounded hover:bg-slate-200 dark:hover:bg-white/10 text-slate-600 dark:text-[#9e9eb7]"
                                    title="Bold">
                                    <span class="material-symbols-outlined text-[20px]">format_bold</span>
                                </button>
                                <button
                                    class="p-2 rounded hover:bg-slate-200 dark:hover:bg-white/10 text-slate-600 dark:text-[#9e9eb7]"
                                    title="Italic">
                                    <span class="material-symbols-outlined text-[20px]">format_italic</span>
                                </button>
                                <div class="w-px h-5 bg-slate-300 dark:bg-[#3d3d52] mx-1"></div>
                                <button
                                    class="p-2 rounded hover:bg-slate-200 dark:hover:bg-white/10 text-slate-600 dark:text-[#9e9eb7]"
                                    title="Bullet List">
                                    <span class="material-symbols-outlined text-[20px]">format_list_bulleted</span>
                                </button>
                                <button
                                    class="p-2 rounded hover:bg-slate-200 dark:hover:bg-white/10 text-slate-600 dark:text-[#9e9eb7]"
                                    title="Numbered List">
                                    <span class="material-symbols-outlined text-[20px]">format_list_numbered</span>
                                </button>
                                <div class="w-px h-5 bg-slate-300 dark:bg-[#3d3d52] mx-1"></div>
                                <button
                                    class="p-2 rounded hover:bg-slate-200 dark:hover:bg-white/10 text-slate-600 dark:text-[#9e9eb7]"
                                    title="Insert Link">
                                    <span class="material-symbols-outlined text-[20px]">link</span>
                                </button>
                                <button
                                    class="p-2 rounded hover:bg-slate-200 dark:hover:bg-white/10 text-slate-600 dark:text-[#9e9eb7]"
                                    title="Code Block">
                                    <span class="material-symbols-outlined text-[20px]">code</span>
                                </button>
                            </div>
                            <!-- Text Area -->
                            <textarea name="profile_description"
                                class="w-full min-h-[300px] p-4 bg-white dark:bg-input-dark text-slate-900 dark:text-slate-200 resize-y focus:outline-none border-none leading-relaxed"
                                placeholder="Write something about yourself...">{{ old('profile_description', auth()->user()->profile_description) }}</textarea>

                        </div>
                    </div>


                    <!-- Section 4: Social Presence -->
                    <div class="p-6 md:p-8">
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">Social Presence</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="flex flex-col gap-2">
                                <span
                                    class="text-sm font-medium text-slate-700 dark:text-[#9e9eb7] flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]">terminal</span> GitHub URL
                                </span>
                                <div class="relative">
                                    <input
                                        class="h-12 w-full rounded-lg bg-slate-50 dark:bg-input-dark border border-slate-200 dark:border-[#3d3d52] pl-4 pr-10 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                        type="text" value="https://github.com/alexmorgan" />
                                    <div class="absolute right-3 top-3 text-green-500">
                                        <span class="material-symbols-outlined text-[20px]">check_circle</span>
                                    </div>
                                </div>
                            </label>
                            <label class="flex flex-col gap-2">
                                <span
                                    class="text-sm font-medium text-slate-700 dark:text-[#9e9eb7] flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]">business_center</span> LinkedIn URL
                                </span>
                                <input
                                    class="h-12 w-full rounded-lg bg-slate-50 dark:bg-input-dark border border-slate-200 dark:border-[#3d3d52] px-4 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    placeholder="https://linkedin.com/in/..." type="text" />
                            </label>
                            <label class="flex flex-col gap-2">
                                <span
                                    class="text-sm font-medium text-slate-700 dark:text-[#9e9eb7] flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]">public</span> Personal Website
                                </span>
                                <input
                                    class="h-12 w-full rounded-lg bg-slate-50 dark:bg-input-dark border border-slate-200 dark:border-[#3d3d52] px-4 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    placeholder="https://..." type="text" />
                            </label>
                            <label class="flex flex-col gap-2">
                                <span
                                    class="text-sm font-medium text-slate-700 dark:text-[#9e9eb7] flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]">description</span> Resume / CV Link
                                </span>
                                <input
                                    class="h-12 w-full rounded-lg bg-slate-50 dark:bg-input-dark border border-slate-200 dark:border-[#3d3d52] px-4 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all"
                                    placeholder="https://..." type="text" />
                            </label>
                        </div>
                    </div>
                    <!-- Footer Actions -->
                    <div
                        class="p-6 bg-slate-50 dark:bg-[#111117] border-t border-slate-200 dark:border-[#292938] flex flex-col sm:flex-row justify-between items-center gap-4">
                        <div class="text-sm text-slate-500 dark:text-[#9e9eb7] hidden sm:block">
                            Last saved: Today at 10:42 AM
                        </div>
                        <div class="flex gap-3 w-full sm:w-auto">
                            <button
                                class="flex-1 sm:flex-none justify-center px-6 py-2.5 rounded-lg border border-slate-300 dark:border-[#3d3d52] text-slate-700 dark:text-white font-medium text-sm hover:bg-slate-100 dark:hover:bg-[#292938] transition-colors">
                                Descartar
                            </button>
                            <button type="submit"
                                class="flex-1 sm:flex-none justify-center px-6 py-2.5 rounded-lg bg-primary text-white font-medium text-sm hover:bg-blue-800 transition-colors shadow-lg shadow-primary/30 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[18px]">save</span>
                                Guardar Cambios
                            </button>
                        </div>
                    </div>
            </div>
            </form>
            <!-- Bottom spacing -->
            <div class="h-12"></div>
        </div>
    </main>
@endsection
