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
                            <span>View Live Demo</span>
                        </a>
                        @endif
                        @if($project->repository_url)
                        <a href="{{ $project->repository_url }}" target="_blank"
                           class="flex items-center justify-center gap-2 rounded-lg h-12 px-6 bg-transparent border border-border-dark hover:border-white/40 text-slate-900 dark:text-white text-base font-bold transition-all hover:bg-surface-dark">
                            <span class="material-symbols-outlined">code</span>
                            <span>Source Code</span>
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
                            <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-4 font-display">Project
                                Overview</h2>
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
                                <h3 class="text-lg font-bold text-white mb-2 font-display">Problem Solved</h3>
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
                                <h3 class="text-lg font-bold text-white mb-2 font-display">Role & Platform</h3>
                                <p class="text-sm text-text-secondary leading-normal font-body">
                                    <strong>Role:</strong> {{ $project->role ?? 'Developer' }}<br>
                                    <strong>Platform:</strong> {{ $project->platform ?? 'Web Application' }}
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
                <!-- Gallery Section -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 font-display">Project Gallery
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div
                            class="group relative aspect-[4/3] rounded-xl overflow-hidden bg-surface-dark border border-border-dark">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Data visualization charts showing sales growth"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD11_F5ViPJ2SzTCi1hMPUG8bEH1kLpeg1cxPWhXQuYT71mlg010kVwvO4pRIq2Ph_7997dI48ZXJKzVDxLOsyYpViJRCT1oLWo289Cfl0F-cEvWVeQaDp0j60aa3DuDjfBv3nwKpW5SMNYcvdE54YwU308P2Y55ZAHdYktWV1Ln2WpWep47cZn68cviXrIQbtBnJV0RcvG9NOEPu75gvVaqf-r4LjBQxYp2Ltl1Z2jvyEjcQFjb58t-6_HHy2EtTlwq27fCwwG-n6y');">
                            </div>
                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span
                                    class="text-white font-medium px-4 py-2 border border-white/30 rounded-lg backdrop-blur-sm">Sales
                                    Analytics View</span>
                            </div>
                        </div>
                        <div
                            class="group relative aspect-[4/3] rounded-xl overflow-hidden bg-surface-dark border border-border-dark">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Inventory management interface with stock levels"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBQFEmTixrYkYk5luzv2XiNc1l00yXxQLNhT-CMUjPKin1WNpu82QR0wJNDICuuCv9XTdqk-GFVF6_ns2wvrY7NHfneHY4qWiwrd9iOYh55EkgQsFt_iRsHtJm3ZgvfgXQ56Y7oZR5Hteyc5n6bcCJXAOmWuxbCMWPMJDsOSxfE_ZzGALRkBRc4h6f0IBIFh_NtAVdCnmjMisqi-LJBYJePrkUS2oJnXRBnfI2ZCaecFJXDJ86xBgg_GVQVbEwqXnwdutAfV_hKSgIi');">
                            </div>
                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span
                                    class="text-white font-medium px-4 py-2 border border-white/30 rounded-lg backdrop-blur-sm">Inventory
                                    Manager</span>
                            </div>
                        </div>
                        <div
                            class="group relative aspect-[16/9] md:col-span-2 rounded-xl overflow-hidden bg-surface-dark border border-border-dark">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Code editor showing React component structure"
                                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuACRg2-j3vN189MIU8DNS8wiuZuNLfhYwflF6M8asjpCo4EXfuAgmIz9kAny0I3D4_o1u7kaYOdS6p3SQ1XOO4hN4oRMUDmZVWmWDma43cd6TNZ4QpbTUP-DEPSCosVX37QNPIccjOmMMrbp1sX_VT7Oh7YLHi9Xv91l96yFhjmg320hp8FkzMBpUPStNQ0DhIdxSfcWlpKBPvsxllmlZe5alG4OIFvmMa_88fFc1EMKNtf2_LNPMkyAANUdSYxR2Eq7qNx4pDdaBjz');">
                            </div>
                            <div
                                class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span
                                    class="text-white font-medium px-4 py-2 border border-white/30 rounded-lg backdrop-blur-sm">Clean
                                    Code Architecture</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Navigation to other projects -->
                <section class="border-t border-border-dark pt-10 mt-4">
                    <div class="flex justify-between items-center">
                        <a class="group flex flex-col items-start gap-1" href="#">
                            <span class="text-xs font-bold text-text-secondary uppercase tracking-wider">Previous
                                Project</span>
                            <div
                                class="flex items-center gap-2 text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-lg">arrow_back</span>
                                <span class="font-bold text-lg">Finance App UI</span>
                            </div>
                        </a>
                        <a class="group flex flex-col items-end gap-1" href="#">
                            <span class="text-xs font-bold text-text-secondary uppercase tracking-wider">Next
                                Project</span>
                            <div
                                class="flex items-center gap-2 text-slate-900 dark:text-white group-hover:text-primary transition-colors">
                                <span class="font-bold text-lg">Health Tracker API</span>
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </div>
                        </a>
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
                            <h3 class="text-sm font-bold text-text-secondary uppercase tracking-wider mb-3">Project
                                Details</h3>
                            <div class="flex flex-col gap-4">
                                <div
                                    class="flex justify-between items-center border-b border-white/5 pb-3 last:border-0 last:pb-0">
                                    <span class="text-slate-300 font-medium">Client</span>
                                    <span class="text-text-secondary text-sm">{{ $project->client_name ?? 'Personal Project' }}</span>
                                </div>
                                <div
                                    class="flex justify-between items-center border-b border-white/5 pb-3 last:border-0 last:pb-0">
                                    <span class="text-slate-300 font-medium">Timeline</span>
                                    <span class="text-text-secondary text-sm">{{ $project->development_time ?? 'Ongoing' }}</span>
                                </div>
                                <div
                                    class="flex justify-between items-center border-b border-white/5 pb-3 last:border-0 last:pb-0">
                                    <span class="text-slate-300 font-medium">Role</span>
                                    <span class="text-text-secondary text-sm">{{ $project->role ?? 'Full Stack Developer' }}</span>
                                </div>
                                <div
                                    class="flex justify-between items-center border-b border-white/5 pb-3 last:border-0 last:pb-0">
                                    <span class="text-slate-300 font-medium">Platform</span>
                                    <span class="text-text-secondary text-sm">{{ $project->platform ?? 'Web Application' }}</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-text-secondary uppercase tracking-wider mb-3">
                                Technologies</h3>
                            <div class="flex flex-wrap gap-2">
                                @if($project->tags)
                                    @foreach($project->tags as $tag)
                                    <span class="text-xs font-medium text-slate-300 bg-white/5 px-2 py-1 rounded">{{ $tag->name }}</span>
                                    @endforeach
                                @else
                                    <span class="text-xs font-medium text-slate-300 bg-white/5 px-2 py-1 rounded">Web Development</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Call to Action Card -->
                    <div
                        class="bg-gradient-to-br from-primary to-blue-900 rounded-xl p-6 text-white text-center shadow-lg">
                        <h3 class="text-lg font-bold mb-2 font-display">Need a similar solution?</h3>
                        <p class="text-blue-100 text-sm mb-4 font-body">I'm currently available for new projects. Let's
                            build something great together.</p>
                        <button
                            class="w-full bg-white text-primary font-bold py-2.5 px-4 rounded-lg hover:bg-blue-50 transition-colors text-sm">
                            Contact Me
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="border-t border-border-dark bg-[#111118] mt-16">
        <div class="max-w-7xl mx-auto px-6 py-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-3 text-white">
                    <div class="size-5 text-primary">
                        <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd"
                                d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="text-lg font-bold font-display">DevPortfolio</span>
                </div>
                <p class="text-text-secondary text-sm max-w-xs">Building digital experiences with clean code and modern
                    design.</p>
            </div>
            <div class="flex gap-6">
                <a class="text-text-secondary hover:text-white transition-colors text-sm" href="#">Twitter</a>
                <a class="text-text-secondary hover:text-white transition-colors text-sm" href="#">GitHub</a>
                <a class="text-text-secondary hover:text-white transition-colors text-sm" href="#">LinkedIn</a>
                <a class="text-text-secondary hover:text-white transition-colors text-sm" href="#">Dribbble</a>
            </div>
        </div>
        <div class="border-t border-white/5 py-6 text-center">
            <p class="text-xs text-text-secondary">© 2023 DevPortfolio. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
