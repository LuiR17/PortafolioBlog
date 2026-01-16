@extends('layouts.dashboard')

@section('content')
@if ($errors->any())
    <div class="bg-red-500/10 border border-red-500/20 rounded-lg p-4 mb-6">
        <h3 class="text-red-400 font-semibold mb-2">Errores de validación:</h3>
        <ul class="text-red-300 text-sm">
            @foreach ($errors->all() as $error)
                <li>• {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <main class="flex-1 flex flex-col h-full relative overflow-y-auto bg-background-light dark:bg-[#0c0c16]">
        <!-- Sticky TopNavBar -->
        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <header
                class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#282839] bg-background-dark/95 backdrop-blur-sm px-6 py-4 z-20 shrink-0">
                <div class="flex items-center gap-4 text-white">
                    <button
                        class="size-8 flex items-center justify-center rounded-full hover:bg-[#282839] transition-colors lg:hidden text-white">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <a class="flex items-center gap-2 text-[#9d9db9] hover:text-white transition-colors text-sm font-medium"
                        href="#">
                        <span class="material-symbols-outlined text-lg">arrow_back</span>
                        <span>Back to Posts</span>
                    </a>
                </div>
                <div class="flex gap-3">
                    <button type="submit" name="status" value="draft"
                        class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-[#282839] hover:bg-[#323246] text-white text-sm font-bold tracking-[0.015em] transition-all border border-transparent hover:border-[#3b3b54]">
                        <span>Save Draft</span>
                    </button>
                    <button type="submit" name="status" value="published"
                        class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-primary hover:bg-blue-600 text-white text-sm font-bold tracking-[0.015em] transition-all shadow-lg shadow-primary/20">
                        <span class="mr-2 material-symbols-outlined text-[18px]">rocket_launch</span>
                        <span>Publish</span>
                    </button>
                </div>
            </header>
            <!-- Scrollable Content -->
            <div class="flex-1 overflow-y-auto p-4 md:p-6 lg:p-8">
                <div class="mx-auto max-w-[1200px] flex flex-col gap-6">
                    <!-- Breadcrumbs -->
                    <div class="flex items-center flex-wrap gap-2 text-sm">
                        <a class="text-[#9d9db9] hover:text-white transition-colors" href="#">Admin</a>
                        <span class="text-[#56566c]">/</span>
                        <a class="text-[#9d9db9] hover:text-white transition-colors" href="#">Posts</a>
                        <span class="text-[#56566c]">/</span>
                        <span class="text-white font-medium">New Blog Post</span>
                    </div>
                    <!-- Main Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 h-full">
                        <!-- Left Column: Editor (8 cols) -->
                        <div class="lg:col-span-8 flex flex-col gap-4">
                            <!-- Title Input -->
                                                        <label for="title" class="text-[#9d9db9] text-sm mb-1">Título</label>
                            <input type="text" name="title" id="title"
                                class="w-full bg-[#151520] border {{ $errors->has('title') ? 'border-red-500' : 'border-[#3b3b54]' }} rounded-lg text-white text-sm px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none placeholder:text-[#56566c]"
                                placeholder="Escribe el título de tu publicación" value="{{ old('title') }}" required>
                            @error('title')
                                <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                            @enderror
                            <label for="excerpt" class="text-[#9d9db9] text-sm mb-1 mt-4">Extracto</label>
                            <textarea name="excerpt" id="excerpt" rows="3"
                                class="w-full bg-[#151520] border {{ $errors->has('excerpt') ? 'border-red-500' : 'border-[#3b3b54]' }} rounded-lg text-white text-sm px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none placeholder:text-[#56566c]"
                                placeholder="Un breve resumen de tu publicación">{{ old('excerpt') }}</textarea>
                            @error('excerpt')
                                <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                            @enderror

                            <label for="preview_image" class="text-[#9d9db9] text-sm mb-1 mt-4">Imagen de Previsualización</label>
                            <input type="file" name="preview_image" id="preview_image" accept="image/*"
                                class="w-full bg-[#151520] border {{ $errors->has('preview_image') ? 'border-red-500' : 'border-[#3b3b54]' }} rounded-lg text-white text-sm px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none file:bg-[#282839] file:border-0 file:rounded file:px-3 file:py-1 file:text-white file:mr-2">
                            @error('preview_image')
                                <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                            @enderror

                            <!-- Editor Container -->
                            <div class="flex flex-col flex-1 min-h-[500px] overflow-hidden shadow-sm">
                                <!-- tinyMCE -->
                                <textarea name="content" id="editor-container">{{ old('content') }}</textarea>
                                @error('content')
                                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <!-- Right Column: Sidebar (4 cols) -->
                        <div class="lg:col-span-4 flex flex-col gap-6">
                            <!-- Publishing Card -->
                            <div class="bg-surface-dark rounded-xl border border-[#282839] p-5 shadow-sm">
                                <h3 class="text-white text-lg font-bold mb-4 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-xl">public</span>
                                    Publishing
                                </h3>
                                <div class="flex flex-col gap-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[#9d9db9] text-sm">Status</span>
                                        <div
                                            class="flex items-center gap-2 bg-[#282839] rounded-full px-3 py-1 border border-[#3b3b54]">
                                            <div class="size-2 rounded-full bg-emerald-500"></div>
                                            <span class="text-xs font-bold text-white uppercase tracking-wider">Draft</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[#9d9db9] text-sm">Visibility</label>
                                        <select name="visibility"
                                            class="w-full bg-[#151520] border {{ $errors->has('visibility') ? 'border-red-500' : 'border-[#3b3b54]' }} rounded-lg text-white text-sm px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none">
                                            <option value="public" {{ old('visibility') == 'public' ? 'selected' : '' }}>Public</option>
                                            <option value="private" {{ old('visibility') == 'private' ? 'selected' : '' }}>Private</option>
                                        </select>
                                        @error('visibility')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[#9d9db9] text-sm">Publish Date</label>
                                        <input name="published_at"
                                            class="w-full bg-[#151520] border {{ $errors->has('published_at') ? 'border-red-500' : 'border-[#3b3b54]' }} rounded-lg text-white text-sm px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none [color-scheme:dark]"
                                            type="datetime-local" value="{{ old('published_at') }}" />
                                        @error('published_at')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- URL Slug -->
                            <div class="bg-surface-dark rounded-xl border border-[#282839] p-5 shadow-sm">
                                <h3 class="text-white text-lg font-bold mb-4 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-xl">link</span>
                                    URL Slug
                                </h3>
                                <div class="flex flex-col gap-2">
                                    <p class="text-xs text-[#9d9db9]">The URL-friendly version of the name.</p>
                                    <div
                                        class="flex items-center bg-[#151520] border {{ $errors->has('slug') ? 'border-red-500' : 'border-[#3b3b54]' }} rounded-lg overflow-hidden focus-within:border-primary focus-within:ring-1 focus-within:ring-primary">
                                        <span class="pl-3 pr-1 text-[#56566c] text-sm font-mono">/blog/</span>
                                        <input name="slug"
                                            class="flex-1 bg-transparent border-none text-white text-sm py-2.5 focus:ring-0 font-mono pl-0"
                                            type="text" value="{{ old('slug') }}" />
                                    </div>
                                    @error('slug')
                                        <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-20"></div> <!-- Spacer for bottom scrolling -->
                </div>
            </div>
        </form>
    </main>
@endsection

@push('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#editor-container',
        height: 500,
        menubar: false,
        plugins: 'lists link image code',
        toolbar: 'bold italic underline | bullist numlist | link image | code',
        skin: 'oxide-dark',
        content_css: 'dark',
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });

    // Sincronizar contenido de TinyMCE antes de enviar el formulario
    document.querySelector('form').addEventListener('submit', function() {
        if (tinymce.activeEditor) {
            tinymce.activeEditor.save();
        }
    });
</script>
@endpush

