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
            <!-- Left Interaction Sidebar (Desktop) -->
            <aside class="hidden xl:flex flex-col gap-6 sticky top-32 h-fit items-center w-16">
                <button
                    class="group flex flex-col items-center gap-2 text-gray-500 hover:text-primary transition-colors">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-surface-dark border border-[#282839] group-hover:border-primary/50 group-hover:bg-primary/10 transition-all">
                        <span
                            class="material-symbols-outlined group-hover:scale-110 transition-transform">favorite</span>
                    </div>
                    <span class="text-xs font-medium">124</span>
                </button>
                <button
                    class="group flex flex-col items-center gap-2 text-gray-500 hover:text-primary transition-colors">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-surface-dark border border-[#282839] group-hover:border-primary/50 group-hover:bg-primary/10 transition-all">
                        <span
                            class="material-symbols-outlined group-hover:scale-110 transition-transform">chat_bubble</span>
                    </div>
                    <span class="text-xs font-medium">18</span>
                </button>
                <button
                    class="group flex flex-col items-center gap-2 text-gray-500 hover:text-primary transition-colors">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-full bg-surface-dark border border-[#282839] group-hover:border-primary/50 group-hover:bg-primary/10 transition-all">
                        <span
                            class="material-symbols-outlined group-hover:scale-110 transition-transform">bookmark</span>
                    </div>
                </button>
                <div class="h-px w-8 bg-[#282839] my-2"></div>
                <button class="text-gray-500 hover:text-white transition-colors">
                    <span class="material-symbols-outlined">share</span>
                </button>
            </aside>
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
                            <span class="inline-flex items-center rounded-full bg-primary/10 border border-primary/20 px-3 py-1 text-xs font-medium text-primary ring-1 ring-inset ring-primary/20">
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
                                <img alt="Portrait of Alex Dev, the author" class="h-full w-full object-cover"
                                     src="https://via.placeholder.com/48x48/1c1c27/ffffff?text=AD" />
                            </div>
                            <div>
                                <p class="text-sm font-bold text-white">Alex Dev</p>
                                <p class="text-xs text-gray-500">Senior Frontend Engineer</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                <span>{{ \Carbon\Carbon::parse($post->published_at ?? $post->updated_at)->format('M d, Y') }}</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px]">schedule</span>
                                <span>{{ Str::wordCount(strip_tags($post->content)) }} min read</span>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Featured Image -->
                @if($post->preview_image)
                <div class="relative mb-10 overflow-hidden rounded-2xl bg-[#1e1e2e] aspect-video border border-[#282839]">
                    <img alt="{{ $post->title }}"
                         class="w-full h-full object-cover opacity-90"
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
                        <img alt="Portrait of Alex Dev"
                            class="w-full h-full rounded-full object-cover ring-2 ring-primary"
                            data-alt="Portrait of Alex Dev"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBomTRaH3FQnitC-CiQwr3x6CAmTbWbOoNUF1nYfcHnZxjTQjv-eWgqBMLZOeyfVUhddsVg4ydRSuUBMmKAEpJoUl4qLyWWmKnxPX_0hHR9wnIanx9YzAXaFet30bYE-Rsq5yJIqN9pimoXfjiW0prWEjyaoMgKd0j73-6D8z-mvufF0l_plXZcU0vA62plUETU8cpo0yaw-U1QGgHGF8nuA9l1bKoOMMS6yyt80op7FG7br9Daqts1Sh_gOYlb31wGeqKzlY676GL7" />
                        <div
                            class="absolute bottom-0 right-0 h-5 w-5 bg-green-500 border-2 border-surface-dark rounded-full">
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-bold text-white mb-2">Alex Dev</h3>
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                            Full-stack developer passionate about React, Node.js, and clean UI design. Currently
                            building tools to help developers ship faster.
                        </p>
                        <div class="flex items-center justify-center md:justify-start gap-3">
                            <a class="p-2 rounded-lg bg-[#282839] hover:bg-primary hover:text-white text-gray-400 transition-colors"
                                href="#">
                                <span class="text-xs font-bold">TWITTER</span>
                            </a>
                            <a class="p-2 rounded-lg bg-[#282839] hover:bg-primary hover:text-white text-gray-400 transition-colors"
                                href="#">
                                <span class="text-xs font-bold">GITHUB</span>
                            </a>
                            <button class="ml-2 text-primary hover:text-white text-sm font-bold">View Profile</button>
                        </div>
                    </div>
                </div>
                <!-- Newsletter -->
                <div
                    class="mt-12 bg-gradient-to-r from-primary/20 to-transparent border border-primary/20 rounded-2xl p-8 text-center">
                    <h3 class="text-2xl font-bold text-white mb-2">Join the Newsletter</h3>
                    <p class="text-gray-400 mb-6 max-w-md mx-auto">Get the latest articles, tutorials, and development
                        tips delivered straight to your inbox.</p>
                    <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                        <input
                            class="flex-1 rounded-lg bg-[#111118] border border-[#333] px-4 py-2.5 text-white placeholder-gray-500 focus:border-primary focus:ring-1 focus:ring-primary outline-none"
                            placeholder="Enter your email" type="email" />
                        <button
                            class="bg-primary hover:bg-blue-700 text-white font-bold py-2.5 px-6 rounded-lg transition-colors">
                            Subscribe
                        </button>
                    </div>
                </div>
            </main>
            <!-- Right Sidebar (TOC) -->
            <aside class="hidden lg:block w-72 shrink-0">
                <div class="sticky top-32 space-y-8">
                    <div class="bg-surface-dark border border-[#282839] rounded-xl p-6">
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4">Table of Contents
                        </h4>
                        <ul class="space-y-3">
                            <li>
                                <a class="block text-sm text-white border-l-2 border-primary pl-3 py-0.5"
                                    href="#what-are-server-components">What are Server Components?</a>
                            </li>
                            <li>
                                <a class="block text-sm text-gray-500 hover:text-white border-l-2 border-transparent hover:border-gray-600 pl-3 py-0.5 transition-colors"
                                    href="#benefits">Key Benefits</a>
                            </li>
                            <li>
                                <a class="block text-sm text-gray-500 hover:text-white border-l-2 border-transparent hover:border-gray-600 pl-3 py-0.5 transition-colors"
                                    href="#conclusion">Conclusion</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Recommended read mini-card -->
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4">Read Next</h4>
                        <a class="group block bg-surface-dark border border-[#282839] hover:border-primary/50 rounded-xl p-4 transition-all"
                            href="#">
                            <div class="flex gap-3 mb-2 text-xs text-gray-500">
                                <span class="text-primary font-medium">React</span>
                                <span>•</span>
                                <span>5 min read</span>
                            </div>
                            <h5 class="text-white font-bold leading-snug group-hover:text-primary transition-colors">
                                Mastering useEffect in React 18</h5>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
        <!-- Related Posts Grid -->
        <section class="mt-20 pt-10 border-t border-[#282839]">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-white">More from the Blog</h2>
                <a class="text-sm font-bold text-primary hover:text-white transition-colors" href="{{ route('public.blog.index') }}">View all
                    posts</a>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($relatedPosts as $relatedPost)
                <article class="group flex flex-col h-full bg-surface-dark border border-[#282839] rounded-2xl overflow-hidden hover:shadow-xl hover:shadow-primary/5 transition-all hover:-translate-y-1">
                    <div class="h-48 overflow-hidden">
                        @if($relatedPost->preview_image)
                        <img alt="{{ $relatedPost->title }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                             src="{{ Storage::url($relatedPost->preview_image) }}" />
                        @else
                        <div class="w-full h-full bg-gradient-to-br from-primary/20 to-transparent flex items-center justify-center">
                            <span class="text-gray-500">No image</span>
                        </div>
                        @endif
                    </div>
                    <div class="flex-1 p-6 flex flex-col">
                        @if($relatedPost->tags && $relatedPost->tags->first())
                        <div class="flex gap-2 mb-3">
                            <span class="text-xs font-medium text-primary bg-primary/10 px-2 py-0.5 rounded">{{ $relatedPost->tags->first()->name }}</span>
                        </div>
                        @endif
                        <h3 class="text-xl font-bold text-white mb-2 leading-tight">{{ $relatedPost->title }}</h3>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-2">{{ $relatedPost->excerpt }}</p>
                        <div class="mt-auto flex items-center justify-between text-xs text-gray-500 pt-4 border-t border-[#282839]">
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
    <footer class="bg-background-dark border-t border-[#282839] mt-auto">
        <div class="max-w-[1400px] mx-auto px-4 lg:px-8 py-10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-3 text-white">
                    <div class="size-6">
                        <svg class="w-full h-full" fill="none" viewbox="0 0 48 48"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="font-bold">DevPortfolio</span>
                </div>
                <p class="text-gray-500 text-sm">© 2023 DevPortfolio. All rights reserved.</p>
                <div class="flex gap-6">
                    <a class="text-gray-500 hover:text-white transition-colors" href="#"><i
                            class="fa-brands fa-twitter"></i> Twitter</a>
                    <a class="text-gray-500 hover:text-white transition-colors" href="#">LinkedIn</a>
                    <a class="text-gray-500 hover:text-white transition-colors" href="#">GitHub</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
