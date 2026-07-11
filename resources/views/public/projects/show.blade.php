<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Project Detail - DevPortfolio</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <!-- Material Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS with Config -->
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
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: "Space Grotesk", sans-serif;
        }

        /* Custom scrollbar for dark theme */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #111118;
        }

        ::-webkit-scrollbar-thumb {
            background: #282839;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #3b3b54;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white antialiased min-h-screen flex flex-col overflow-x-hidden selection:bg-primary/30 selection:text-white">
    <!-- Header / Navbar -->
    <x-header />
    
    <main class="flex-1 w-full max-w-7xl mx-auto px-4 md:px-8 py-8 flex flex-col">
        <!-- Breadcrumbs -->
        <div class="flex flex-wrap gap-2 py-4 items-center">
            <a class="text-text-secondary hover:text-primary text-sm font-medium leading-normal transition-colors"
               href="{{ route('public.home') }}">Home</a>
            <span class="text-text-secondary text-sm font-medium leading-normal">/</span>
            <a class="text-text-secondary hover:text-primary text-sm font-medium leading-normal transition-colors"
               href="{{ route('public.projects.index') }}">Portfolio</a>
            <span class="text-text-secondary text-sm font-medium leading-normal">/</span>
            <span class="text-slate-900 dark:text-white text-sm font-medium leading-normal">{{ $project->name }}</span>
        </div>
        <!-- Hero Section -->
        <div class="mt-4 mb-12 @container">
            <div class="flex flex-col-reverse lg:flex-row gap-8 lg:gap-12 items-start">
                <!-- Hero Content -->
                <div class="flex flex-col gap-6 flex-1 min-w-0">
                    <div class="flex flex-col gap-3">
                        <h1
                            class="text-slate-900 dark:text-white text-4xl md:text-5xl lg:text-6xl font-bold leading-tight tracking-[-0.02em] font-display">
                            {{ $project->name }}
                        </h1>
                        <p
                            class="text-text-secondary text-lg md:text-xl font-normal leading-relaxed max-w-2xl font-body">
                            {{ $project->short_description }}
                        </p>
                    </div>
                    <!-- Tech Stack Chips -->
                    <div class="flex flex-wrap gap-2">
                        @if($project->tags)
                            @foreach($project->tags as $tag)
                            <div class="flex items-center gap-1.5 rounded-full border border-border-dark bg-surface-dark/50 px-3 py-1">
                                <span class="material-symbols-outlined text-primary text-[18px]">label</span>
                                <span class="text-xs font-medium text-white font-display">{{ $tag->name }}</span>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="flex flex-wrap gap-4 mt-2">
                        @if($project->demo_url)
                        <a href="{{ $project->demo_url }}" target="_blank"
                           class="flex items-center justify-center gap-2 rounded-lg h-12 px-6 bg-primary hover:bg-blue-700 text-white text-base font-bold transition-all shadow-lg shadow-primary/20 hover:shadow-primary/40">
                            <span class="material-symbols-outlined">rocket_launch</span>
                            <span>Demo</span>
                        </a>
                        @endif
                        @if($project->repository_url)
                        <a href="{{ $project->repository_url }}" target="_blank"
                           class="flex items-center justify-center gap-2 rounded-lg h-12 px-6 bg-transparent border border-border-dark hover:border-white/40 text-slate-900 dark:text-white text-base font-bold transition-all hover:bg-surface-dark">
                            <span class="material-symbols-outlined">code</span>
                            <span>Repositorio</span>
                        </a>
                        @endif
                    </div>
                </div>
                <!-- Hero Image -->
                <div class="w-full lg:w-[55%] xl:w-[60%] shrink-0">
                    <div
                        class="relative w-full aspect-[16/10] rounded-xl overflow-hidden border border-border-dark shadow-2xl bg-surface-dark group">
                        <!-- Background glow effect -->
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-primary to-purple-600 opacity-20 blur-xl group-hover:opacity-30 transition duration-1000">
                        </div>
                        <div class="relative w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                             @if($project->preview_image)
                             style="background-image: url('{{ Storage::url($project->preview_image) }}')">
                             @else
                             style="background-image: url('https://via.placeholder.com/800x500/1c1c27/ffffff?text={{ urlencode($project->name) }}')">
                             @endif>
                            <!-- Overlay for better contrast if image fails or is light -->
                            <div class="absolute inset-0 bg-black/10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">
            <!-- Left Column: Detailed Content -->
            <div class="lg:col-span-8 flex flex-col gap-16">
                <!-- Project Overview / Features -->
                <section>
                    <div class="flex flex-col gap-8">
                        <div>
                            <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 font-display">Descripción del proyecto</h2>
                            <p class="text-text-secondary leading-relaxed font-body">
                                {!! $project->full_description ?? $project->short_description !!}
                            </p>
                        </div>
                        <!-- 3 Column Cards for Problem/Approach/Features -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Card 1 -->
                            <div
                                class="p-5 rounded-xl border border-border-dark bg-surface-dark hover:border-primary/50 transition-colors group">
                                <div
                                    class="mb-4 size-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">warning</span>
                                </div>
                                <h3 class="text-lg font-bold text-white mb-2 font-display">Problema Resuelto</h3>
                                <p class="text-sm text-text-secondary leading-normal font-body">
                                    {{ $project->problem_solved ?? 'No problem description available.' }}
                                </p>
                            </div>
                            <!-- Card 2 -->
                            <div
                                class="p-5 rounded-xl border border-border-dark bg-surface-dark hover:border-primary/50 transition-colors group">
                                <div
                                    class="mb-4 size-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                    <span class="material-symbols-outlined">architecture</span>
                                </div>
                                <h3 class="text-lg font-bold text-white mb-2 font-display">Rol y Plataforma</h3>
                                <p class="text-sm text-text-secondary leading-normal font-body">
                                    <strong>Rol:</strong> {{ $project->role ?? 'Developer' }}<br>
                                    <strong>Plataforma:</strong> {{ $project->platform ?? 'Web Application' }}
                                </p>
                            </div>
                            <!-- Card 3 (Spans full on mobile, normal on md) -->
                            <div class="p-5 rounded-xl border border-border-dark bg-surface-dark hover:border-primary/50 transition-colors group md:col-span-2">
                                <div class="text-sm text-text-secondary leading-normal font-body">
                                    {!! $project->content ?? '<p>No additional features description available.</p>' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
            </div>
            <!-- Right Column: Sidebar Meta Info -->
            <div class="lg:col-span-4 relative">
                <div class="sticky top-24 flex flex-col gap-6">
                    <!-- Project Info Card -->
                    <div
                        class="bg-surface-dark border border-border-dark rounded-xl p-6 flex flex-col gap-6 shadow-xl">
                        <div>
                            <h3 class="text-sm font-bold text-text-secondary uppercase tracking-wider mb-3">Detalles del proyecto</h3>
                            <div class="flex flex-col gap-4">
                                <div
                                    class="flex justify-between items-center border-b border-white/5 pb-3 last:border-0 last:pb-0">
                                    <span class="text-slate-300 font-medium">Cliente</span>
                                    <span class="text-text-secondary text-sm">{{ $project->client_name ?? 'Proyecto Personal' }}</span>
                                </div>
                                <div
                                    class="flex justify-between items-center border-b border-white/5 pb-3 last:border-0 last:pb-0">
                                    <span class="text-slate-300 font-medium">Tiempo de desarrollo</span>
                                    <span class="text-text-secondary text-sm">{{ $project->development_time ?? 'Ongoing' }}</span>
                                </div>
                                <div
                                    class="flex justify-between items-center border-b border-white/5 pb-3 last:border-0 last:pb-0">
                                    <span class="text-slate-300 font-medium">Rol</span>
                                    <span class="text-text-secondary text-sm">{{ $project->role ?? 'Full Stack Developer' }}</span>
                                </div>
                                <div
                                    class="flex justify-between items-center border-b border-white/5 pb-3 last:border-0 last:pb-0">
                                    <span class="text-slate-300 font-medium">Plataforma</span>
                                    <span class="text-text-secondary text-sm">{{ $project->platform ?? 'Aplicación Web' }}</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Call to Action Card -->
                    <div
                        class="bg-gradient-to-br from-primary to-blue-900 rounded-xl p-6 text-white text-center shadow-lg">
                        <h3 class="text-lg font-bold mb-2 font-display">¿Necesitas una solución similar?</h3>
                        <p class="text-blue-100 text-sm mb-4 font-body">Estoy actualmente disponible para nuevos proyectos.</p>
                        <button
                            class="w-full bg-white text-primary font-bold py-2.5 px-4 rounded-lg hover:bg-blue-50 transition-colors text-sm">
                            Contactame
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <x-footer />
</body>

</html>
