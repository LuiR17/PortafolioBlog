<!DOCTYPE html>

<html class="dark" lang="es">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Portafolio de Desarrollador</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1313ec",
                        "background-light": "#f6f6f8",
                        "background-dark": "#111118",
                        "card-dark": "#1c1c27",
                        "text-secondary": "#9d9db9"
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"]
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
    class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white min-h-screen flex flex-col overflow-x-hidden">
    <!-- Navbar -->
    <x-header />
    
    <main class="flex-1 flex flex-col items-center w-full">
        <!-- Hero Section -->
        <section class="w-full px-4 sm:px-10 py-12 md:py-20 max-w-[1080px]">
            <div class="@container">
                <div class="flex flex-col-reverse gap-8 md:gap-12 md:flex-row items-center">
                    <div class="flex flex-col gap-6 md:w-1/2 justify-center text-left">
                        <div class="flex flex-col gap-4">
                            <span
                                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold w-fit border border-primary/20">
                                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                Disponible para contratación
                            </span>
                            <h1
                                class="text-white text-4xl font-black leading-tight tracking-[-0.033em] sm:text-5xl md:text-6xl">
                                Desarrollador Full Stack
                            </h1>
                            <h2 class="text-text-secondary text-base font-normal leading-relaxed max-w-lg">
                                Construyo aplicaciones web escalables y experiencias de usuario intuitivas. Apasionado por el código limpio, la arquitectura moderna y la resolución de problemas complejos con soluciones simples.
                            </h2>
                        </div>
                        <div class="flex gap-4 mt-2">
                            @if($curriculum && $curriculum->file_path)
                            <a href="{{ route('curriculum.download') }}" 
                               class="flex cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary hover:bg-blue-700 transition-all text-white text-base font-bold leading-normal tracking-[0.015em]">
                                <span class="material-symbols-outlined mr-2 text-[20px]">download</span>
                                <span>Descargar CV</span>
                            </a>
                            @else
                            <button disabled class="flex cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-gray-600 text-white text-base font-bold leading-normal tracking-[0.015em] opacity-50">
                                <span class="material-symbols-outlined mr-2 text-[20px]">download</span>
                                <span>CV Próximamente</span>
                            </button>
                            @endif
                            <a href="{{ route('public.projects.index') }}" 
                               class="flex cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-[#282839] hover:bg-[#32324a] transition-all text-white text-base font-medium leading-normal tracking-[0.015em]">
                                Ver Proyectos
                            </a>
                        </div>
                        <div class="flex gap-4 mt-4">
                            <a class="text-text-secondary hover:text-white transition-colors" href="#">
                                <span class="material-symbols-outlined">code</span> <!-- Placeholder for GitHub -->
                            </a>
                            <a class="text-text-secondary hover:text-white transition-colors" href="#">
                                <span class="material-symbols-outlined">work</span> <!-- Placeholder for LinkedIn -->
                            </a>
                            <a class="text-text-secondary hover:text-white transition-colors" href="#">
                                <span class="material-symbols-outlined">alternate_email</span>
                                <!-- Placeholder for Twitter/X -->
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                        <div
                            class="relative w-full max-w-[400px] aspect-square rounded-2xl overflow-hidden border border-[#282839] bg-card-dark shadow-2xl shadow-primary/10">
                            <div class="w-full h-full bg-center bg-cover"
                                data-alt="Portrait of a developer coding in a dark modern office environment"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAPfYczeECUTWWEBnl0_N7-tc6PqVQ_bVSM8k82qRuwUB-qYERAdZ4FnaYA5igF_RjTaHPg2Kh5S_nejAQHQOZSEEVBKaY-XBKm5crXGW-q2cg_6ezft7slmUwSpTo0TLdwsHh8-ioxdW2AafwepP4WyPzBbWl5wr1muZJYDeudOfCNsLBcDhU-1UtA_6RJ5vmh7KdBxqfHHzCjjJ4YVL7Ud57xZsskLCBO3a_O87PH3EFoBCLko3q33pZIPQxk4v37XQx_npiH9uj5");'>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-background-dark/80 to-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tech Stack Section -->
        <section class="w-full px-4 sm:px-10 py-10 max-w-[1080px]">
            <div class="flex flex-col gap-8">
                <div class="flex flex-col gap-2">
                    <h2 class="text-white text-3xl font-bold leading-tight tracking-[-0.015em]">Arsenal Técnico</h2>
                    <p class="text-text-secondary">Las herramientas y tecnologías que uso para dar vida a las ideas.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Languages -->
                    <div
                        class="flex flex-col gap-4 p-6 rounded-xl border border-[#282839] bg-card-dark hover:border-primary/50 transition-colors group">
                        <div
                            class="p-3 bg-background-dark rounded-lg w-fit text-primary group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[28px]">code</span>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h3 class="text-white text-xl font-bold">Lenguajes</h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">JavaScript</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">TypeScript</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">Python</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">HTML/CSS</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">SQL</span>
                            </div>
                        </div>
                    </div>
                    <!-- Frameworks -->
                    <div
                        class="flex flex-col gap-4 p-6 rounded-xl border border-[#282839] bg-card-dark hover:border-primary/50 transition-colors group">
                        <div
                            class="p-3 bg-background-dark rounded-lg w-fit text-primary group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[28px]">layers</span>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h3 class="text-white text-xl font-bold">Frameworks</h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">React</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">Next.js</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">Node.js</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">Tailwind
                                    CSS</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">Express</span>
                            </div>
                        </div>
                    </div>
                    <!-- Tools -->
                    <div
                        class="flex flex-col gap-4 p-6 rounded-xl border border-[#282839] bg-card-dark hover:border-primary/50 transition-colors group">
                        <div
                            class="p-3 bg-background-dark rounded-lg w-fit text-primary group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[28px]">build</span>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h3 class="text-white text-xl font-bold">Herramientas</h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">Git
                                    &amp; GitHub</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">Docker</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">AWS</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">Figma</span>
                                <span
                                    class="px-3 py-1 rounded-md bg-[#282839] text-xs text-text-secondary font-medium">VS
                                    Code</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Preview Section -->
        <section class="w-full px-4 sm:px-10 py-10 max-w-[1080px]">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-white text-3xl font-bold leading-tight tracking-[-0.015em]">Proyectos Destacados</h2>
                        <a class="hidden sm:flex items-center gap-1 text-primary text-sm font-bold hover:gap-2 transition-all"
                           href="{{ route('public.projects.index') }}">
                            Ver todos los proyectos <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @forelse($featuredProjects as $project)
                        <div class="group relative flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-card-dark hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
                            <div class="w-full aspect-video bg-cover bg-center overflow-hidden"
                                 @if($project->preview_image)
                                 style="background-image: url('{{ Storage::url($project->preview_image) }}')">
                                 @else
                                 style="background-image: url('https://via.placeholder.com/400x225/1c1c27/ffffff?text={{ urlencode($project->name) }}')">
                                 @endif
                                <div class="w-full h-full bg-black/40 group-hover:bg-black/20 transition-all"></div>
                            </div>
                            <div class="flex flex-col p-6 gap-4">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-white text-xl font-bold mb-1">{{ $project->name }}</h3>
                                        <p class="text-text-secondary text-sm">{{ Str::limit($project->short_description, 100) }}</p>
                                    </div>
                                </div>
                                <div class="flex gap-2 mt-auto">
                                            @if($project->tags)
                                                @foreach($project->tags->take(3) as $tag)
                                                <span class="px-2 py-1 bg-[#282839] text-[10px] text-text-secondary uppercase tracking-wider font-bold rounded">{{ $tag->name }}</span>
                                                @endforeach
                                            @endif
                                        </div>
                                <div class="flex gap-3 pt-2">
                                            @if($project->demo_url)
                                            <a href="{{ $project->demo_url }}" target="_blank" class="flex-1 flex items-center justify-center gap-2 h-9 rounded bg-[#282839] hover:bg-white hover:text-black transition-colors text-white text-sm font-medium">
                                                <span class="material-symbols-outlined text-[18px]">visibility</span> Demo
                                            </a>
                                            @endif
                                            @if($project->repository_url)
                                            <a href="{{ $project->repository_url }}" target="_blank" class="flex-1 flex items-center justify-center gap-2 h-9 rounded border border-[#282839] hover:border-white transition-colors text-white text-sm font-medium">
                                                <span class="material-symbols-outlined text-[18px]">code</span> Code
                                            </a>
                                            @endif
                                        </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-span-full text-center py-12">
                            <p class="text-text-secondary">¡No hay proyectos disponibles aún! Vuelve pronto.</p>
                        </div>
                        @endforelse
                    </div>
            <div class="sm:hidden mt-6 flex justify-center">
                <a class="flex items-center gap-1 text-primary text-sm font-bold hover:gap-2 transition-all"
                    href="#">
                    Ver todos los proyectos <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>
        </section>
        <!-- Education & Certification Section -->
        <section class="w-full px-4 sm:px-10 py-10 max-w-[1080px] mb-10">
            <h2 class="text-white text-3xl font-bold leading-tight tracking-[-0.015em] mb-8">Educación</h2>
            <div class="relative pl-8 border-l border-[#282839] space-y-10">
                @forelse($education as $edu)
                <div class="relative">
                    <div class="absolute -left-[39px] p-1 bg-background-dark rounded-full border border-[#282839]">
                        <div class="w-4 h-4 rounded-full bg-primary"></div>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                        <div>
                            <h3 class="text-white text-lg font-bold">{{ $edu->degree_title }}</h3>
                            <p class="text-text-secondary">{{ $edu->institution_name }}</p>
                            @if($edu->career)
                            <p class="text-text-secondary text-sm mt-1">{{ $edu->career }}</p>
                            @endif
                        </div>
                        <span class="text-sm font-mono text-text-secondary px-3 py-1 bg-[#282839] rounded w-fit">
                            {{ $edu->start_year }}{{ $edu->end_year ? ' - ' . $edu->end_year : ' - Presente' }}
                        </span>
                    </div>
                    @if($edu->description)
                    <p class="mt-2 text-text-secondary text-sm max-w-2xl">{{ $edu->description }}</p>
                    @endif
                </div>
                @empty
                <div class="text-center py-8">
                    <p class="text-text-secondary">¡Información educativa próximamente!</p>
                </div>
                @endforelse
            </div>
        </section>
        <!-- CTA / Footer Area -->
        <x-footer />
    </main>
</body>

</html>
