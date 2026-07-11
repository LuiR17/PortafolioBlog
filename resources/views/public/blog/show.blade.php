<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Blog Post Detail - DevPortfolio</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind Configuration -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1313ec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101022",
                        "surface-dark": "#181826", // Slightly lighter than background-dark for cards/sections
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "mono": ["ui-monospace", "SFMono-Regular", "Menlo", "Monaco", "Consolas", "Liberation Mono",
                            "Courier New", "monospace"
                        ]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for code blocks */
        .custom-scrollbar::-webkit-scrollbar {
            height: 8px;
            width: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #1e1e2e;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #3d3d5c;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #505075;
        }

        /* Typography resets for rich text */
        .prose p {
            margin-bottom: 1.5rem;
            line-height: 1.75;
            color: #d1d1e0;
        }

        .prose h2 {
            font-size: 1.875rem;
            font-weight: 700;
            color: white;
            margin-top: 3rem;
            margin-bottom: 1.5rem;
            letter-spacing: -0.025em;
        }

        .prose h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
            color: #d1d1e0;
        }

        .prose li {
            margin-bottom: 0.5rem;
        }

        .prose strong {
            color: white;
            font-weight: 600;
        }

        .syntax-keyword {
            color: #c678dd;
        }

        /* Purple */
        .syntax-func {
            color: #61afef;
        }

        /* Blue */
        .syntax-string {
            color: #98c379;
        }

        /* Green */
        .syntax-comment {
            color: #5c6370;
            font-style: italic;
        }

        /* Grey */
        .syntax-tag {
            color: #e06c75;
        }

        /* Red */
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-gray-900 dark:text-gray-100 font-display antialiased min-h-screen flex flex-col overflow-x-hidden selection:bg-primary/30 selection:text-white">
    <!-- Navigation -->
    <x-header />

    <div class="flex-1 w-full max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 py-8 lg:py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Main Content Column -->
            <main class="flex-1 min-w-0 max-w-[800px] mx-auto">
                <!-- Breadcrumbs -->
                <nav class="flex flex-wrap items-center gap-2 text-sm text-gray-500 mb-8">
                    <a class="hover:text-primary transition-colors" href="{{ route('public.home') }}">Home</a>
                    <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    <a class="hover:text-primary transition-colors" href="{{ route('public.blog.index') }}">Blog</a>
                    <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    <span class="text-white truncate max-w-[200px] sm:max-w-none">{{ $post->title }}</span>
                </nav>
                <!-- Hero Section -->
                <header class="mb-10">
                    <div class="flex gap-2 mb-6 flex-wrap">
                        @if($post->tags)
                            @foreach($post->tags as $tag)
                                <span
                                    class="inline-flex items-center rounded-full bg-primary/10 border border-primary/20 px-3 py-1 text-xs font-medium text-primary ring-1 ring-inset ring-primary/20">
                                    {{ $tag->name }}
                                </span>
                            @endforeach
                        @endif
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight text-white leading-[1.1] mb-6">
                        {{ $post->title }}
                    </h1>
                    <div class="flex flex-wrap items-center justify-between gap-6 border-b border-[#282839] pb-8">
                        <div class="flex items-center gap-4">
                            <div class="relative h-12 w-12 rounded-full overflow-hidden ring-2 ring-[#282839]">
                                <img alt="Foto de perfil" class="h-full w-full object-cover"
                                    src="{{ Storage::url(auth()->user()->profile_photo) }}" />
                            </div>
                            <div>
                                <p class="text-sm font-bold text-white">{{ $user ? $user->name : 'Alex Dev' }}</p>
                                <p class="text-xs text-gray-500">
                                    {{ $user ? $user->title : 'Desarrollador de Software' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                <span>{{ \Carbon\Carbon::parse($post->published_at ?? $post->updated_at)->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Featured Image -->
                @if($post->preview_image)
                    <div
                        class="relative mb-10 overflow-hidden rounded-2xl bg-[#1e1e2e] aspect-video border border-[#282839]">
                        <img alt="{{ $post->title }}" class="w-full h-full object-cover opacity-90"
                            src="{{ Storage::url($post->preview_image) }}" />
                        <div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
                    </div>
                @endif
                <!-- Article Body -->
                <article class="prose prose-invert prose-lg max-w-none">
                    @if($post->excerpt)
                        <p class="lead text-xl text-gray-300">
                            {{ $post->excerpt }}
                        </p>
                    @endif
                    {!! $post->content !!}
                </article>
                <hr class="border-[#282839] my-12" />
                <!-- Author Bio Card -->
                <div
                    class="bg-surface-dark border border-[#282839] rounded-2xl p-6 md:p-8 flex flex-col md:flex-row items-center md:items-start gap-6">
                    <div class="relative w-20 h-20 shrink-0">
                        <img alt="Foto de perfil"
                            class="w-full h-full rounded-full object-cover ring-2 ring-primary"
                            data-alt="Foto de perfil"
                            src="{{ Storage::url(auth()->user()->profile_photo) }}" />
                        <div
                            class="absolute bottom-0 right-0 h-5 w-5 bg-green-500 border-2 border-surface-dark rounded-full">
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-bold text-white mb-2">{{ $user ? $user->name : 'Alex Dev' }}</h3>
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                            {{ $user ? $user->profile_description : 'Full-stack developer passionate about React, Node.js, and clean UI design. Currently building tools to help developers ship faster.' }}
                        </p>
                    </div>
                </div>
            </main>
        </div>
        <!-- Related Posts Grid -->
        <section class="mt-20 pt-10 border-t border-[#282839]">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-white">Mas Publicaciones</h2>
                <a class="text-sm font-bold text-primary hover:text-white transition-colors"
                    href="{{ route('public.blog.index') }}">Ver todas las publicaciones</a>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($relatedPosts as $relatedPost)
                    <article
                        class="group flex flex-col h-full bg-surface-dark border border-[#282839] rounded-2xl overflow-hidden hover:shadow-xl hover:shadow-primary/5 transition-all hover:-translate-y-1">
                        <div class="h-48 overflow-hidden">
                            @if($relatedPost->preview_image)
                                <img alt="{{ $relatedPost->title }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    src="{{ Storage::url($relatedPost->preview_image) }}" />
                            @else
                                <div
                                    class="w-full h-full bg-gradient-to-br from-primary/20 to-transparent flex items-center justify-center">
                                    <span class="text-gray-500">No image</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex-1 p-6 flex flex-col">
                            @if($relatedPost->tags && $relatedPost->tags->first())
                                <div class="flex gap-2 mb-3">
                                    <span
                                        class="text-xs font-medium text-primary bg-primary/10 px-2 py-0.5 rounded">{{ $relatedPost->tags->first()->name }}</span>
                                </div>
                            @endif
                            <h3 class="text-xl font-bold text-white mb-2 leading-tight">{{ $relatedPost->title }}</h3>
                            <p class="text-gray-400 text-sm mb-4 line-clamp-2">{{ $relatedPost->excerpt }}</p>
                            <div
                                class="mt-auto flex items-center justify-between text-xs text-gray-500 pt-4 border-t border-[#282839]">
                                <span>{{ \Carbon\Carbon::parse($relatedPost->published_at ?? $relatedPost->updated_at)->format('M d, Y') }}</span>
                                <span>{{ Str::wordCount(strip_tags($relatedPost->content)) }} min read</span>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500">No related posts available.</p>
                    </div>
                @endforelse
            </div>
        </section>
    </div>
    <!-- Footer -->
    <x-footer />
</body>

</html>