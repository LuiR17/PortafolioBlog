<!DOCTYPE html>

<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lista de Blog - Portafolio de Desarrollador</title>
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
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-white antialiased overflow-x-hidden overflow-y-scroll">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root">
        <!-- Top Navigation Bar -->
        <x-header />

        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4 mb-2">
                        <div class="flex min-w-72 flex-col gap-3">
                            <h1 class="text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                                Consejos Sobre Desarrollo y más...</h1>
                            <p class="text-[#9d9db9] text-base md:text-lg font-normal leading-normal max-w-2xl">
                                Aquí publico consejos para desarrollo y mi día a día resolviendo bugs .</p>
                        </div>
                    </div>
                    <!-- Blog Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">

                        @forelse($posts as $post)
                            <article
                                class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark overflow-hidden hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300 hover:shadow-xl dark:hover:shadow-primary/5 hover:-translate-y-1">
                                <div class="h-48 overflow-hidden relative">
                                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                        @if ($post->preview_image)
                                            style="background-image: url('{{ Storage::url($post->preview_image) }}')">
                                        @else
                                            style="background-image:
                                            url('https://via.placeholder.com/400x225/1c1c27/ffffff?text={{ urlencode($post->title) }}')">
                                        @endif>
                                    </div>
                                    <div class="absolute top-4 left-4">
                                        @if ($post->tags && $post->tags->first())
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/90 text-white backdrop-blur-sm">
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
                                        <span>{{ Str::wordCount(strip_tags($post->content)) }} min lectura</span>
                                    </div>
                                    <h3
                                        class="text-xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                                        {{ $post->title }}
                                    </h3>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-3">
                                        {{ $post->excerpt }}
                                    </p>
                                    <div class="mt-auto pt-4 flex items-center text-primary font-bold text-sm">
                                        <a href="{{ route('public.blog.show', $post->slug) }}"
                                            class="flex items-center gap-2">
                                            <span>Leer Artículo</span>
                                            <span
                                                class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover:translate-x-1">arrow_forward</span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <div class="col-span-full text-center py-12">
                                <p class="text-gray-500 dark:text-gray-400">¡No hay publicaciones de blog disponibles aún!
                                    Vuelve
                                    pronto.</p>
                            </div>
                        @endforelse
                    </div>
                    <!-- Pagination -->
                    <div class="flex justify-center py-8">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <x-footer />
    </div>
</body>

</html>