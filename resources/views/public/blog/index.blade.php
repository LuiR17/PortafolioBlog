<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Blog List - Developer Portfolio</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Noto+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1313ec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#111118",
                        "surface-dark": "#1c1c27",
                        "border-dark": "#282839",
                        "text-secondary": "#9d9db9",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: "Space Grotesk", "Noto Sans", sans-serif;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col overflow-x-hidden">
    <!-- Top Navigation Bar -->
    <x-header />

    <main class="flex-1 w-full max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8 py-8 flex flex-col gap-10">
        <!-- Hero Section -->
        <section class="relative rounded-2xl overflow-hidden min-h-[400px] flex flex-col justify-end p-8 md:p-12">
            <!-- Background Image with Gradient Overlay -->
            <div class="absolute inset-0 z-0 bg-cover bg-center"
                data-alt="Abstract dark blue and purple digital waves representing technology and data flow"
                style='background-image: linear-gradient(180deg, rgba(17, 17, 24, 0.4) 0%, rgba(17, 17, 24, 0.9) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCYERvtqkIG4-37hsCTL3u06ESjdPm5cNSTWvPr5aB5G1KliMHQHdEspCe1h_g3hA6nDb_GcDwTia0RdXA5Z7HYm5QSIJNGz9FpCjg2TeaJNYqz8kbrV23MN9XdEyfhflYXOOe6GunrIX6rgE9LYskMMMd0zu9erx1d6R4txQ3rUyZ0BeAf9PYT_e1ELSPIJbgKeMuUiZY26gY5WbjPY-p9LYUXhzqn1smORJ2kRjHBMJyLWm4sCPWHFHNMa1Q6DHI6ZwXLzLU_Z86X");'>
            </div>
            <div class="relative z-10 w-full max-w-3xl">
                <div class="flex flex-col gap-4 text-left mb-8">
                    <h1
                        class="text-white text-4xl md:text-5xl lg:text-6xl font-black leading-tight tracking-[-0.033em]">
                        Thoughts &amp; Tutorials
                    </h1>
                    <h2 class="text-gray-200 text-lg md:text-xl font-normal leading-relaxed max-w-2xl">
                        A collection of thoughts on software architecture, frontend development, and the tools I use to
                        build scalable products.
                    </h2>
                </div>
                <!-- Search Bar -->
                <div class="w-full max-w-[560px]">
                    <div class="flex w-full items-stretch rounded-lg h-12 md:h-14 shadow-xl shadow-black/20">
                        <div
                            class="flex items-center justify-center pl-4 bg-surface-dark rounded-l-lg border border-r-0 border-border-dark">
                            <span class="material-symbols-outlined text-gray-400">search</span>
                        </div>
                        <input
                            class="flex w-full min-w-0 flex-1 bg-surface-dark text-white placeholder:text-gray-500 border-y border-border-dark focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary px-3 text-base"
                            placeholder="Search articles, topics, or keywords..." />
                        <div
                            class="flex items-center justify-center rounded-r-lg border border-l-0 border-border-dark bg-surface-dark pr-2 pl-1">
                            <button
                                class="h-9 md:h-10 px-5 rounded-md bg-primary hover:bg-primary/90 text-white text-sm font-bold transition-colors">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Filters Section -->
        <section class="flex flex-col gap-4">
            <div class="flex items-center justify-between">
                <h3 class="text-gray-900 dark:text-white text-xl font-bold">Latest Posts</h3>
                <div class="hidden sm:flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                    <span>Sort by:</span>
                    <select
                        class="bg-transparent border-none text-gray-900 dark:text-white font-medium focus:ring-0 cursor-pointer p-0 pr-6">
                        <option>Newest First</option>
                        <option>Oldest First</option>
                        <option>Most Popular</option>
                    </select>
                </div>
            </div>
            <div class="flex gap-3 flex-wrap">
                <button
                    class="flex h-9 items-center justify-center px-4 rounded-full bg-primary text-white text-sm font-medium transition-transform hover:scale-105">
                    All
                </button>
                <button
                    class="flex h-9 items-center justify-center px-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-border-dark text-gray-700 dark:text-gray-300 hover:border-primary/50 hover:text-primary dark:hover:text-primary text-sm font-medium transition-all hover:scale-105">
                    React
                </button>
                <button
                    class="flex h-9 items-center justify-center px-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-border-dark text-gray-700 dark:text-gray-300 hover:border-primary/50 hover:text-primary dark:hover:text-primary text-sm font-medium transition-all hover:scale-105">
                    Backend
                </button>
                <button
                    class="flex h-9 items-center justify-center px-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-border-dark text-gray-700 dark:text-gray-300 hover:border-primary/50 hover:text-primary dark:hover:text-primary text-sm font-medium transition-all hover:scale-105">
                    UI/UX
                </button>
                <button
                    class="flex h-9 items-center justify-center px-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-border-dark text-gray-700 dark:text-gray-300 hover:border-primary/50 hover:text-primary dark:hover:text-primary text-sm font-medium transition-all hover:scale-105">
                    DevOps
                </button>
                <button
                    class="flex h-9 items-center justify-center px-4 rounded-full bg-white dark:bg-surface-dark border border-gray-200 dark:border-border-dark text-gray-700 dark:text-gray-300 hover:border-primary/50 hover:text-primary dark:hover:text-primary text-sm font-medium transition-all hover:scale-105">
                    Career
                </button>
            </div>
        </section>
        <!-- Blog Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 pb-12">
            @forelse($posts as $post)
            <article class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark overflow-hidden hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300 hover:shadow-xl dark:hover:shadow-primary/5 hover:-translate-y-1">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                         @if($post->preview_image)
                         style="background-image: url('{{ Storage::url($post->preview_image) }}')">
                         @else
                         style="background-image: url('https://via.placeholder.com/400x225/1c1c27/ffffff?text={{ urlencode($post->title) }}')">
                         @endif>
                    </div>
                    <div class="absolute top-4 left-4">
                        @if($post->tags && $post->tags->first())
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/90 text-white backdrop-blur-sm">
                            {{ $post->tags->first()->name }}
                        </span>
                        @endif
                    </div>
                </div>
                <div class="flex flex-col flex-1 p-5 gap-3">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-mono gap-2">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        <span>{{ \Carbon\Carbon::parse($post->published_at ?? $post->updated_at)->format('M d, Y') }}</span>
                        <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                        <span>{{ Str::wordCount(strip_tags($post->content)) }} min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                        {{ $post->title }}
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-3">
                        {{ $post->excerpt }}
                    </p>
                    <div class="mt-auto pt-4 flex items-center text-primary font-bold text-sm">
                        <a href="{{ route('public.blog.show', $post->slug) }}" class="flex items-center gap-2">
                            <span>Read Article</span>
                            <span class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </article>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 dark:text-gray-400">No blog posts available yet. Check back soon!</p>
            </div>
            @endforelse
        </section>
        <!-- Pagination -->
        <div class="flex justify-center pb-12">
            {{ $posts->links() }}
        </div>
    </main>
    <!-- Footer -->
    <x-footer />
</body>

</html>
