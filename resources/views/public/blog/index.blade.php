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
            <!-- Card 1 -->
            <article
                class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark overflow-hidden hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300 hover:shadow-xl dark:hover:shadow-primary/5 hover:-translate-y-1">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Code syntax on a dark screen with glowing blue accents"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAJpIrXwIt_5TwGOEg0xnY7s5OACxHuwIVn0QLp48cLA5ERj_0XuaJLdx2wNBEK7gGjHI3UticPpwCh2l12BUvlyEeo21xQbtdrX5H2ttKFlSfeoyXMZTXJQZJ88kb7Dkbl3pHmLokotgmZ8NeaxeSXySheUeYpZNjgConkw1QruUc31wQdFezomfBcfjoicJF1uL8A0BTCPnk5XWq21va4bLvwuS-mkluhq0oh9PTcW6ckczng8QMeZ6f9MQBNptgakilolsXFSG6n");'>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/90 text-white backdrop-blur-sm">
                            React
                        </span>
                    </div>
                </div>
                <div class="flex flex-col flex-1 p-5 gap-3">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-mono gap-2">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        <span>Oct 24, 2023</span>
                        <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                        <span>5 min read</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                        State Management in 2024
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-3">
                        Exploring the differences between Redux Toolkit, Zustand, and Jotai in large-scale applications.
                        Is simplicity always the answer?
                    </p>
                    <div class="mt-auto pt-4 flex items-center text-primary font-bold text-sm">
                        <span>Read Article</span>
                        <span
                            class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </div>
            </article>
            <!-- Card 2 -->
            <article
                class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark overflow-hidden hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300 hover:shadow-xl dark:hover:shadow-primary/5 hover:-translate-y-1">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Server rack with green indicator lights in a dark room"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBbZ3loPpoSH9BXcKjdW2-akGyzNNtLAHAtyDiJReIVSRjuaMM1lW9FrA5PcjT_4eTKNNZKyAtALLzArArzrlsJD6tW9wYg11T1UI1OFe3cp6a911qKR2Z8ioj1uVGwOAfbaWsRn_-9qptKhZQttu_C5dUDc8O1_fdiocI8prvIWQnUkc-Azkk9SgtFXJb97DwEeV6h2hx60xu0DTo9oNWR9imE9PEqxEpwG4ZZVBcXC71CP_iAhaonHJFz__3bHN69THTMsfFKuSRd");'>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-600/90 text-white backdrop-blur-sm">
                            Backend
                        </span>
                    </div>
                </div>
                <div class="flex flex-col flex-1 p-5 gap-3">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-mono gap-2">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        <span>Sep 15, 2023</span>
                        <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                        <span>8 min read</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                        Building Scalable APIs with Node.js
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-3">
                        Best practices for structuring your Express applications and handling database connections
                        efficiently under high load.
                    </p>
                    <div class="mt-auto pt-4 flex items-center text-primary font-bold text-sm">
                        <span>Read Article</span>
                        <span
                            class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </div>
            </article>
            <!-- Card 3 -->
            <article
                class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark overflow-hidden hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300 hover:shadow-xl dark:hover:shadow-primary/5 hover:-translate-y-1">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Abstract gradient mesh with purple and pink hues"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuARMQ3fv-QxM53FO6bxBava9_gEhUVBw9WwEDkwsBkNITF03UxsZIJyDNdTpU74hegxJeKoGjL8-2bMB2CjkxnbEMVjgMmG5xoovYCMyUsMnuLmeRk7zA_tXw31svre0Oizdz65nwMgMnUl-P7J_OjTOn4_TMfuLTROeDCFxKLCr5u1zIN3rfP2Qkj0l9Vhx3WwdwIibkNjRY3evyT8n2HjeCEPZPsyLqbFO2xOnEOVdLYNbbizAvzJooTF-6BLSkpwO8m5sPYs8dEZ");'>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-pink-600/90 text-white backdrop-blur-sm">
                            UI/UX
                        </span>
                    </div>
                </div>
                <div class="flex flex-col flex-1 p-5 gap-3">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-mono gap-2">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        <span>Aug 02, 2023</span>
                        <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                        <span>4 min read</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                        Designing for Dark Mode
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-3">
                        Why simply inverting colors isn't enough. A deep dive into contrast ratios, elevation, and color
                        saturation.
                    </p>
                    <div class="mt-auto pt-4 flex items-center text-primary font-bold text-sm">
                        <span>Read Article</span>
                        <span
                            class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </div>
            </article>
            <!-- Card 4 -->
            <article
                class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark overflow-hidden hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300 hover:shadow-xl dark:hover:shadow-primary/5 hover:-translate-y-1">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Container ship loaded with cargo representing docker containers"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD3_pEkruqJiBhfr1_DmfWDSmMlIyR9z7VxveWSUm2DV_Utc2hKZPmOcGYZMaztuN8pZUcdO0W332twuBPeTCyqrc0Zzqi9pPuuMnxhxVdnahABJz-ZZaLXctB_IRUFBmm5L3sPxiqKdK2iPajt94IEeTCp5PAHWi6x4c-YBku1tPoIAbA2dqlXuHi7NSg3rkiBOD8S3ndkS437u94z-ve4_tBmLYxy6kUXDGu0fsyhH6ytT293gsKceZxY1IfFDJLIIQlraPKpIc2z");'>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-600/90 text-white backdrop-blur-sm">
                            DevOps
                        </span>
                    </div>
                </div>
                <div class="flex flex-col flex-1 p-5 gap-3">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-mono gap-2">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        <span>Jul 10, 2023</span>
                        <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                        <span>12 min read</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                        Kubernetes for Frontend Developers
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-3">
                        Demystifying pods, services, and ingress. How to deploy your Next.js application to a K8s
                        cluster without tears.
                    </p>
                    <div class="mt-auto pt-4 flex items-center text-primary font-bold text-sm">
                        <span>Read Article</span>
                        <span
                            class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </div>
            </article>
            <!-- Card 5 -->
            <article
                class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark overflow-hidden hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300 hover:shadow-xl dark:hover:shadow-primary/5 hover:-translate-y-1">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Minimalist desk setup with laptop and coffee"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCsVyoJHGSgacZas7DAOxKn2IeGF65nuI5wSeUuwl0MZsRAJfdABSu0jQSv4wQCejxuondsq9T5UXh4UFv-FBTSywqVPY4m1g183UY_xx9vKKxqAg2Y3yjBmfQVKmebtTaAx5gIOLsJQkuTxVIGGowt2S40DgmajCuJ_NFWUVB4ISIfXitvRnQ9W7-wKLONURDPOa3bO9yNpaszXxhCnfoMI_1-PffbwNB1qTU8l3WsMbSDD-xqS8y9EXPV5jiFrwK8IWaUIQck9FXW");'>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-600/90 text-white backdrop-blur-sm">
                            Career
                        </span>
                    </div>
                </div>
                <div class="flex flex-col flex-1 p-5 gap-3">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-mono gap-2">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        <span>Jun 28, 2023</span>
                        <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                        <span>6 min read</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                        From Junior to Senior Engineer
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-3">
                        It's not just about code. Soft skills, mentorship, and system design thinking are key to
                        leveling up your career.
                    </p>
                    <div class="mt-auto pt-4 flex items-center text-primary font-bold text-sm">
                        <span>Read Article</span>
                        <span
                            class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </div>
            </article>
            <!-- Card 6 -->
            <article
                class="group flex flex-col bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark overflow-hidden hover:border-primary/50 dark:hover:border-primary/50 transition-all duration-300 hover:shadow-xl dark:hover:shadow-primary/5 hover:-translate-y-1">
                <div class="h-48 overflow-hidden relative">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                        data-alt="Typescript code on a monitor with syntax highlighting"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBFYgX8fUnk0Nv_l0LgCNAQjX7uIecBKllKLzOriKKr2ECFKI07BfVuIfnXWVks8Ub7yvz-M4V2Ya4v1THoecTjPgAVCyGWBTKRRcsLkVdnaBvSKKpTChtEE-zRzqQ1HeK__dXYfhJHo3Mwa-C9etHcHIdscK91I_1YHjmRwepm8LG0G24r7_6HWEEoPNIHJqdtaRAiNfxOw57RR141JPHpOcd3dXIazqwCSJoutt926I2p4KgvHp5ynUYn0xCuEg18GDS-wF0R4IUV");'>
                    </div>
                    <div class="absolute top-4 left-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-500/90 text-white backdrop-blur-sm">
                            TypeScript
                        </span>
                    </div>
                </div>
                <div class="flex flex-col flex-1 p-5 gap-3">
                    <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 font-mono gap-2">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        <span>May 12, 2023</span>
                        <span class="w-1 h-1 rounded-full bg-gray-500"></span>
                        <span>10 min read</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 dark:text-white leading-tight group-hover:text-primary transition-colors">
                        Advanced TypeScript Patterns
                    </h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed line-clamp-3">
                        Mastering generics, conditional types, and utility types to write safer, self-documenting code.
                    </p>
                    <div class="mt-auto pt-4 flex items-center text-primary font-bold text-sm">
                        <span>Read Article</span>
                        <span
                            class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover:translate-x-1">arrow_forward</span>
                    </div>
                </div>
            </article>
        </section>
        <!-- Pagination -->
        <div class="flex justify-center pb-12">
            <nav class="flex items-center gap-2">
                <button
                    class="flex items-center justify-center w-10 h-10 rounded-lg border border-gray-200 dark:border-border-dark bg-white dark:bg-surface-dark text-gray-500 hover:text-primary disabled:opacity-50">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button
                    class="flex items-center justify-center w-10 h-10 rounded-lg bg-primary text-white font-bold text-sm">
                    1
                </button>
                <button
                    class="flex items-center justify-center w-10 h-10 rounded-lg border border-gray-200 dark:border-border-dark bg-white dark:bg-surface-dark text-gray-700 dark:text-gray-300 font-medium text-sm hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    2
                </button>
                <button
                    class="flex items-center justify-center w-10 h-10 rounded-lg border border-gray-200 dark:border-border-dark bg-white dark:bg-surface-dark text-gray-700 dark:text-gray-300 font-medium text-sm hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    3
                </button>
                <span class="flex items-center justify-center w-10 h-10 text-gray-500">...</span>
                <button
                    class="flex items-center justify-center w-10 h-10 rounded-lg border border-gray-200 dark:border-border-dark bg-white dark:bg-surface-dark text-gray-500 hover:text-primary">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </nav>
        </div>
    </main>
    <!-- Footer -->
    <x-footer />
</body>

</html>
