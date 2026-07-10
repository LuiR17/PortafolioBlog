<!DOCTYPE html>

<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lista de Proyectos - Portafolio de Desarrollador</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&amp;family=Noto+Sans:wght@300..700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Theme Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1313ec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101022",
                        "primary": "#1313ec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#111118",
                        "card-dark": "#1c1c27",
                        "text-secondary": "#9d9db9"
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

<body
    class="bg-background-light dark:bg-background-dark font-display text-white antialiased overflow-x-hidden overflow-y-scroll">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root">
        <!-- Top Navigation -->
        <x-header />

        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <!-- Page Heading -->
                    <div class="flex flex-wrap justify-between gap-3 p-4 mb-2">
                        <div class="flex min-w-72 flex-col gap-3">
                            <h1 class="text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                                Proyectos Personales y Trabajos</h1>
                            <p class="text-[#9d9db9] text-base md:text-lg font-normal leading-normal max-w-2xl">
                                Proyectos que he realizado de manera personal y trabajos Freelance.</p>
                        </div>
                    </div>

                    <!-- Projects Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
                        @forelse($projects as $project)
                            <div
                                class="group flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-[#1c1c27] transition-all hover:-translate-y-1 hover:border-[#3b3b54] hover:shadow-xl hover:shadow-black/20">
                                <div class="relative h-48 w-full overflow-hidden bg-[#282839]">
                                    @if($project->preview_image)
                                        <div class="absolute inset-0 bg-cover bg-center"
                                            style="background-image: url('{{ Storage::url($project->preview_image) }}')"></div>
                                    @else
                                        <div
                                            class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-600 opacity-80">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop')] bg-cover bg-center mix-blend-overlay">
                                        </div>
                                    @endif
                                    <div class="absolute top-3 right-3 flex gap-2">
                                        @if($project->demo_url)
                                            <a href="{{ $project->demo_url }}" target="_blank"
                                                class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                                <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                                            </a>
                                        @endif
                                        @if($project->repository_url)
                                            <a href="{{ $project->repository_url }}" target="_blank"
                                                class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                                <span class="material-symbols-outlined text-[18px]">code</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex flex-1 flex-col p-5">
                                    <div class="mb-3">
                                        <h3 class="text-lg font-bold text-white group-hover:text-primary transition-colors">
                                            {{ $project->name }}
                                        </h3>
                                        <p class="text-xs font-mono text-[#6c6c89] mt-1">
                                            {{ $project->updated_at->format('M Y') }}</p>
                                    </div>
                                    <p class="text-sm text-[#9d9db9] leading-relaxed mb-5 line-clamp-3">
                                        {{ $project->short_description }}
                                    </p>
                                    <div class="mt-auto flex flex-wrap gap-2">
                                        @if($project->tags)
                                            @foreach($project->tags->take(3) as $tag)
                                                <span
                                                    class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">{{ $tag->name }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="mt-auto pt-4 flex items-center text-primary font-bold text-sm">
                                        <a href="{{ route('public.projects.show', $project->slug) }}"
                                            class="flex items-center gap-2">
                                            <span>Leer Proyecto</span>
                                            <span
                                                class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover:translate-x-1">arrow_forward</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full text-center py-12">
                                <p class="text-[#9d9db9]">¡No hay proyectos disponibles aún! Vuelve pronto.</p>
                            </div>
                        @endforelse
                    </div>
                    <!-- Pagination / Load More -->
                    <div class="flex justify-center py-8">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <x-footer />
    </div>
</body>

</html>