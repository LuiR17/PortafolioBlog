<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Projects List - Developer Portfolio</title>
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

<body class="bg-background-light dark:bg-background-dark font-display text-white antialiased overflow-x-hidden">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root">
        <!-- Top Navigation -->
       <header
        class="sticky top-0 z-50 w-full border-b border-solid border-b-[#282839] bg-background-dark/80 backdrop-blur-md px-4 sm:px-10 py-3">
        <div class="max-w-[1280px] mx-auto flex items-center justify-between whitespace-nowrap">
            <div class="flex items-center gap-4 text-white">
                <div class="size-8 text-primary">
                    <span class="material-symbols-outlined text-[32px]">terminal</span>
                </div>
                <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">DevPortfolio</h2>
            </div>
            <div class="flex items-center gap-8">
                <nav class="hidden md:flex items-center gap-9">
                    <a class="text-white text-sm font-medium hover:text-primary transition-colors leading-normal"
                        href="#">Home</a>
                    <a class="text-text-secondary text-sm font-medium hover:text-white transition-colors leading-normal"
                        href="#">Blog</a>
                    <a class="text-text-secondary text-sm font-medium hover:text-white transition-colors leading-normal"
                        href="#">Projects</a>
                </nav>
                <div class="flex items-center gap-4">
                    <a class="hidden md:block text-text-secondary text-xs hover:text-white" href="#"
                        title="Admin Panel">
                        <span class="material-symbols-outlined text-[20px]">admin_panel_settings</span>
                    </a>
                    <button
                        class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-blue-700 transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Contact Me</span>
                    </button>
                </div>
            </div>
        </div>
    </header>
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <!-- Page Heading -->
                    <div class="flex flex-wrap justify-between gap-3 p-4 mb-2">
                        <div class="flex min-w-72 flex-col gap-3">
                            <h1 class="text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                                Selected Works</h1>
                            <p class="text-[#9d9db9] text-base md:text-lg font-normal leading-normal max-w-2xl">A
                                curated collection of web applications, open source tools, and technical experiments
                                built with modern technologies.</p>
                        </div>
                    </div>
                    <!-- Search and Controls Row -->
                    <div class="flex flex-col md:flex-row gap-4 p-4 items-end md:items-center">
                        <!-- Search Bar -->
                        <div class="flex-1 w-full">
                            <label class="flex flex-col w-full">
                                <div
                                    class="flex w-full flex-1 items-stretch rounded-lg h-12 bg-[#282839] border border-transparent focus-within:border-[#3b3b54] transition-colors">
                                    <div class="text-[#9d9db9] flex items-center justify-center pl-4 pr-2">
                                        <span class="material-symbols-outlined text-[24px]">search</span>
                                    </div>
                                    <input
                                        class="flex w-full min-w-0 flex-1 bg-transparent text-white focus:outline-0 placeholder:text-[#9d9db9] px-2 text-base font-normal leading-normal"
                                        placeholder="Search projects by name, stack, or tag..." value="" />
                                </div>
                            </label>
                        </div>
                        <!-- Sort Dropdown -->
                        <div class="w-full md:w-auto md:min-w-[200px]">
                            <div class="relative">
                                <select
                                    class="appearance-none flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 border border-[#282839] bg-[#1c1c27] h-12 px-4 pr-10 text-base font-normal leading-normal cursor-pointer hover:bg-[#282839] transition-colors">
                                    <option value="newest">Newest First</option>
                                    <option value="oldest">Oldest First</option>
                                    <option value="relevant">Most Relevant</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-[#9d9db9]">
                                    <span class="material-symbols-outlined text-[20px]">expand_more</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Filter Chips -->
                    <div class="flex gap-3 px-4 pb-6 flex-wrap">
                        <button
                            class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-primary text-white pl-4 pr-4 transition-colors hover:opacity-90">
                            <span class="text-sm font-bold leading-normal">All</span>
                        </button>
                        <button
                            class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#282839] hover:bg-[#3b3b54] text-[#9d9db9] hover:text-white pl-4 pr-4 transition-all">
                            <span class="text-sm font-medium leading-normal">React</span>
                        </button>
                        <button
                            class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#282839] hover:bg-[#3b3b54] text-[#9d9db9] hover:text-white pl-4 pr-4 transition-all">
                            <span class="text-sm font-medium leading-normal">Node.js</span>
                        </button>
                        <button
                            class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#282839] hover:bg-[#3b3b54] text-[#9d9db9] hover:text-white pl-4 pr-4 transition-all">
                            <span class="text-sm font-medium leading-normal">UI/UX</span>
                        </button>
                        <button
                            class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#282839] hover:bg-[#3b3b54] text-[#9d9db9] hover:text-white pl-4 pr-4 transition-all">
                            <span class="text-sm font-medium leading-normal">Python</span>
                        </button>
                        <button
                            class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#282839] hover:bg-[#3b3b54] text-[#9d9db9] hover:text-white pl-4 pr-4 transition-all">
                            <span class="text-sm font-medium leading-normal">Open Source</span>
                        </button>
                    </div>
                    <!-- Projects Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
                        <!-- Project Card 1 -->
                        <div
                            class="group flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-[#1c1c27] transition-all hover:-translate-y-1 hover:border-[#3b3b54] hover:shadow-xl hover:shadow-black/20">
                            <div class="relative h-48 w-full overflow-hidden bg-[#282839]">
                                <!-- Gradient Placeholder for Image -->
                                <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-600 opacity-80"
                                    data-alt="Abstract gradient representing an ecommerce dashboard"></div>
                                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&amp;w=800&amp;auto=format&amp;fit=crop')] bg-cover bg-center mix-blend-overlay"
                                    data-alt="Dashboard data visualization interface"></div>
                                <div class="absolute top-3 right-3 flex gap-2">
                                    <div
                                        class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                        <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                                    </div>
                                    <div
                                        class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                        <span class="material-symbols-outlined text-[18px]">code</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-5">
                                <div class="mb-3">
                                    <h3 class="text-lg font-bold text-white group-hover:text-primary transition-colors">
                                        E-Commerce Analytics</h3>
                                    <p class="text-xs font-mono text-[#6c6c89] mt-1">Oct 2023</p>
                                </div>
                                <p class="text-sm text-[#9d9db9] leading-relaxed mb-5 line-clamp-3">A comprehensive
                                    dashboard for online store owners to track real-time sales, visitor demographics,
                                    and inventory levels with interactive charts.</p>
                                <div class="mt-auto flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">React</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">D3.js</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">Node.js</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 2 -->
                        <div
                            class="group flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-[#1c1c27] transition-all hover:-translate-y-1 hover:border-[#3b3b54] hover:shadow-xl hover:shadow-black/20">
                            <div class="relative h-48 w-full overflow-hidden bg-[#282839]">
                                <div class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-teal-700 opacity-80"
                                    data-alt="Abstract gradient representing finance app"></div>
                                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&amp;w=800&amp;auto=format&amp;fit=crop')] bg-cover bg-center mix-blend-overlay"
                                    data-alt="Mobile banking application screens"></div>
                                <div class="absolute top-3 right-3 flex gap-2">
                                    <div
                                        class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                        <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-5">
                                <div class="mb-3">
                                    <h3
                                        class="text-lg font-bold text-white group-hover:text-primary transition-colors">
                                        FinTrack Mobile</h3>
                                    <p class="text-xs font-mono text-[#6c6c89] mt-1">Aug 2023</p>
                                </div>
                                <p class="text-sm text-[#9d9db9] leading-relaxed mb-5 line-clamp-3">Cross-platform
                                    mobile application for personal finance management. Features include budget
                                    planning, expense scanning, and savings goals.</p>
                                <div class="mt-auto flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">Flutter</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">Firebase</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 3 -->
                        <div
                            class="group flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-[#1c1c27] transition-all hover:-translate-y-1 hover:border-[#3b3b54] hover:shadow-xl hover:shadow-black/20">
                            <div class="relative h-48 w-full overflow-hidden bg-[#282839]">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-cyan-500 opacity-80"
                                    data-alt="Abstract gradient representing cloud infrastructure"></div>
                                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1558494949-ef526b0042a0?q=80&amp;w=800&amp;auto=format&amp;fit=crop')] bg-cover bg-center mix-blend-overlay"
                                    data-alt="Server rack infrastructure close up"></div>
                                <div class="absolute top-3 right-3 flex gap-2">
                                    <div
                                        class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                        <span class="material-symbols-outlined text-[18px]">code</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-5">
                                <div class="mb-3">
                                    <h3
                                        class="text-lg font-bold text-white group-hover:text-primary transition-colors">
                                        CloudDeploy CLI</h3>
                                    <p class="text-xs font-mono text-[#6c6c89] mt-1">Jun 2023</p>
                                </div>
                                <p class="text-sm text-[#9d9db9] leading-relaxed mb-5 line-clamp-3">An open-source
                                    command-line interface tool designed to simplify the deployment process of static
                                    websites to AWS S3 and CloudFront.</p>
                                <div class="mt-auto flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">Go</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">AWS
                                        SDK</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">CLI</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 4 -->
                        <div
                            class="group flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-[#1c1c27] transition-all hover:-translate-y-1 hover:border-[#3b3b54] hover:shadow-xl hover:shadow-black/20">
                            <div class="relative h-48 w-full overflow-hidden bg-[#282839]">
                                <div class="absolute inset-0 bg-gradient-to-br from-pink-500 to-rose-600 opacity-80"
                                    data-alt="Abstract gradient representing social media"></div>
                                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1611162617474-5b21e879e113?q=80&amp;w=800&amp;auto=format&amp;fit=crop')] bg-cover bg-center mix-blend-overlay"
                                    data-alt="Social media app interface on phone"></div>
                                <div class="absolute top-3 right-3 flex gap-2">
                                    <div
                                        class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                        <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                                    </div>
                                    <div
                                        class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                        <span class="material-symbols-outlined text-[18px]">code</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-5">
                                <div class="mb-3">
                                    <h3
                                        class="text-lg font-bold text-white group-hover:text-primary transition-colors">
                                        SocialSync</h3>
                                    <p class="text-xs font-mono text-[#6c6c89] mt-1">Mar 2023</p>
                                </div>
                                <p class="text-sm text-[#9d9db9] leading-relaxed mb-5 line-clamp-3">A unified social
                                    media management platform allowing users to schedule posts, analyze engagement, and
                                    manage comments across multiple platforms.</p>
                                <div class="mt-auto flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">Vue.js</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">GraphQL</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">PostgreSQL</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 5 -->
                        <div
                            class="group flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-[#1c1c27] transition-all hover:-translate-y-1 hover:border-[#3b3b54] hover:shadow-xl hover:shadow-black/20">
                            <div class="relative h-48 w-full overflow-hidden bg-[#282839]">
                                <div class="absolute inset-0 bg-gradient-to-br from-orange-500 to-amber-600 opacity-80"
                                    data-alt="Abstract gradient representing task management"></div>
                                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?q=80&amp;w=800&amp;auto=format&amp;fit=crop')] bg-cover bg-center mix-blend-overlay"
                                    data-alt="Productivity workspace with laptop and notes"></div>
                                <div class="absolute top-3 right-3 flex gap-2">
                                    <div
                                        class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                        <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-5">
                                <div class="mb-3">
                                    <h3
                                        class="text-lg font-bold text-white group-hover:text-primary transition-colors">
                                        TaskFlow</h3>
                                    <p class="text-xs font-mono text-[#6c6c89] mt-1">Jan 2023</p>
                                </div>
                                <p class="text-sm text-[#9d9db9] leading-relaxed mb-5 line-clamp-3">Kanban-style
                                    project management tool for small teams. Includes drag-and-drop tasks, file
                                    attachments, and real-time collaboration.</p>
                                <div class="mt-auto flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">Svelte</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">Supabase</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 6 -->
                        <div
                            class="group flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-[#1c1c27] transition-all hover:-translate-y-1 hover:border-[#3b3b54] hover:shadow-xl hover:shadow-black/20">
                            <div class="relative h-48 w-full overflow-hidden bg-[#282839]">
                                <div class="absolute inset-0 bg-gradient-to-br from-violet-600 to-purple-800 opacity-80"
                                    data-alt="Abstract gradient representing AI code generation"></div>
                                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?q=80&amp;w=800&amp;auto=format&amp;fit=crop')] bg-cover bg-center mix-blend-overlay"
                                    data-alt="Code on computer screen"></div>
                                <div class="absolute top-3 right-3 flex gap-2">
                                    <div
                                        class="flex items-center justify-center size-8 rounded-full bg-black/40 backdrop-blur-sm text-white hover:bg-primary transition-colors cursor-pointer">
                                        <span class="material-symbols-outlined text-[18px]">code</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col p-5">
                                <div class="mb-3">
                                    <h3
                                        class="text-lg font-bold text-white group-hover:text-primary transition-colors">
                                        DevAssist AI</h3>
                                    <p class="text-xs font-mono text-[#6c6c89] mt-1">Dec 2022</p>
                                </div>
                                <p class="text-sm text-[#9d9db9] leading-relaxed mb-5 line-clamp-3">An experimental VS
                                    Code extension that uses generative AI to suggest code improvements, document
                                    functions, and write unit tests.</p>
                                <div class="mt-auto flex flex-wrap gap-2">
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">TypeScript</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">Python</span>
                                    <span
                                        class="inline-flex items-center rounded bg-[#282839] px-2 py-1 text-xs font-medium text-[#9d9db9]">OpenAI
                                        API</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination / Load More -->
                    <div class="flex justify-center py-8">
                        <button
                            class="flex items-center justify-center gap-2 rounded-lg bg-[#1c1c27] border border-[#282839] hover:border-primary hover:text-primary px-6 py-3 text-sm font-bold text-white transition-all shadow-lg hover:shadow-primary/20">
                            <span>Load More Projects</span>
                            <span class="material-symbols-outlined text-lg">arrow_downward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="mt-auto border-t border-[#282839] bg-[#111118] py-8">
            <div class="flex flex-col items-center justify-center gap-6 px-10 text-center">
                <div class="flex gap-8">
                    <a class="text-[#9d9db9] hover:text-white transition-colors" href="#">
                        <span class="sr-only">GitHub</span>
                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24">
                            <path clip-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a class="text-[#9d9db9] hover:text-white transition-colors" href="#">
                        <span class="sr-only">Twitter</span>
                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                    <a class="text-[#9d9db9] hover:text-white transition-colors" href="#">
                        <span class="sr-only">LinkedIn</span>
                        <svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24">
                            <path clip-rule="evenodd"
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <p class="text-sm text-[#9d9db9]">© 2023 DevFolio. Built with passion and code.</p>
            </div>
        </footer>
    </div>
</body>

</html>
