<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Developer Portfolio</title>
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
                                Available for hire
                            </span>
                            <h1
                                class="text-white text-4xl font-black leading-tight tracking-[-0.033em] sm:text-5xl md:text-6xl">
                                Full-Stack Developer &amp; UI Enthusiast
                            </h1>
                            <h2 class="text-text-secondary text-base font-normal leading-relaxed max-w-lg">
                                I build scalable web applications and intuitive user experiences. Passionate about clean
                                code, modern architecture, and solving complex problems with simple solutions.
                            </h2>
                        </div>
                        <div class="flex flex-wrap gap-4 mt-2">
                            <button
                                class="flex cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary hover:bg-blue-700 transition-all text-white text-base font-bold leading-normal tracking-[0.015em]">
                                <span class="material-symbols-outlined mr-2 text-[20px]">download</span>
                                <span>Download CV</span>
                            </button>
                            <button
                                class="flex cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-[#282839] hover:bg-[#32324a] transition-all text-white text-base font-medium leading-normal tracking-[0.015em]">
                                View Projects
                            </button>
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
                    <h2 class="text-white text-3xl font-bold leading-tight tracking-[-0.015em]">Technical Arsenal</h2>
                    <p class="text-text-secondary">The tools and technologies I use to bring ideas to life.</p>
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
                            <h3 class="text-white text-xl font-bold">Languages</h3>
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
                            <h3 class="text-white text-xl font-bold">Tools</h3>
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
                <h2 class="text-white text-3xl font-bold leading-tight tracking-[-0.015em]">Featured Projects</h2>
                <a class="hidden sm:flex items-center gap-1 text-primary text-sm font-bold hover:gap-2 transition-all"
                    href="#">
                    View all projects <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Project Card 1 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-card-dark hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
                    <div class="w-full aspect-video bg-cover bg-center overflow-hidden"
                        data-alt="Dashboard interface with charts and dark mode ui"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBgV8OIz0EPimAH2m49C268kQceFG7v8De-qzMpc88USu9cSzpr-X15KPZa89GhS4mwXoJiwCa3yKkkcqSl7ky_qJqvct6FgT25IeAoldGMKs0oGi_6Vx9f4Je1CTCF7kWVoY-KKQjMdjaI_nCbS_6dJlIkYYSJ8AyQUTo5FvGzyKQWzIuUNU3RF9SBb4LV6pwfmV24LF3XgvHlUr9GQLiupZnp2s1w8Pk90uBLTwfTE_eZ-t_jNCYXaZqWIX9WUsHvzhibsRX8iF2o");'>
                        <div class="w-full h-full bg-black/40 group-hover:bg-black/20 transition-all"></div>
                    </div>
                    <div class="flex flex-col p-6 gap-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-white text-xl font-bold mb-1">E-Commerce Analytics</h3>
                                <p class="text-text-secondary text-sm">Real-time sales dashboard with inventory
                                    management.</p>
                            </div>
                        </div>
                        <div class="flex gap-2 mt-auto">
                            <span
                                class="px-2 py-1 bg-[#282839] text-[10px] text-text-secondary uppercase tracking-wider font-bold rounded">React</span>
                            <span
                                class="px-2 py-1 bg-[#282839] text-[10px] text-text-secondary uppercase tracking-wider font-bold rounded">Node.js</span>
                            <span
                                class="px-2 py-1 bg-[#282839] text-[10px] text-text-secondary uppercase tracking-wider font-bold rounded">MongoDB</span>
                        </div>
                        <div class="flex gap-3 pt-2">
                            <a class="flex-1 flex items-center justify-center gap-2 h-9 rounded bg-[#282839] hover:bg-white hover:text-black transition-colors text-white text-sm font-medium"
                                href="#">
                                <span class="material-symbols-outlined text-[18px]">visibility</span> Demo
                            </a>
                            <a class="flex-1 flex items-center justify-center gap-2 h-9 rounded border border-[#282839] hover:border-white transition-colors text-white text-sm font-medium"
                                href="#">
                                <span class="material-symbols-outlined text-[18px]">code</span> Code
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Project Card 2 -->
                <div
                    class="group relative flex flex-col overflow-hidden rounded-xl border border-[#282839] bg-card-dark hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
                    <div class="w-full aspect-video bg-cover bg-center overflow-hidden"
                        data-alt="Mobile app interface design showing tasks and calendar"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD51m1m6A4AEs3dtkXAliTssG_hgzauR4A22WlvV89VkPoIQ3TdlSXXkR0uYyjWAw2WmckQV07vHw6lINcpNS0TvcQTaIegXePHJ8uXVUFEtn8cl3ta1Ks6qWpj-fwGRGyTQ__1uzJmhU-Sm5XNyPbA4a7du72SLnpHmOOx-Wt0r5cyxfYUE9Xh9KXxCdX5jnZENsv4YVOC4kDQRr2u-h_X3--i37EjyUBPX9ItCzHZK7GawD8HqLCZcMv8Egwt6_wPQ8OlCbPAbXGA");'>
                        <div class="w-full h-full bg-black/40 group-hover:bg-black/20 transition-all"></div>
                    </div>
                    <div class="flex flex-col p-6 gap-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-white text-xl font-bold mb-1">TaskFlow API</h3>
                                <p class="text-text-secondary text-sm">Robust REST API for task management with team
                                    collaboration features.</p>
                            </div>
                        </div>
                        <div class="flex gap-2 mt-auto">
                            <span
                                class="px-2 py-1 bg-[#282839] text-[10px] text-text-secondary uppercase tracking-wider font-bold rounded">Python</span>
                            <span
                                class="px-2 py-1 bg-[#282839] text-[10px] text-text-secondary uppercase tracking-wider font-bold rounded">Django</span>
                            <span
                                class="px-2 py-1 bg-[#282839] text-[10px] text-text-secondary uppercase tracking-wider font-bold rounded">PostgreSQL</span>
                        </div>
                        <div class="flex gap-3 pt-2">
                            <a class="flex-1 flex items-center justify-center gap-2 h-9 rounded bg-[#282839] hover:bg-white hover:text-black transition-colors text-white text-sm font-medium"
                                href="#">
                                <span class="material-symbols-outlined text-[18px]">visibility</span> Demo
                            </a>
                            <a class="flex-1 flex items-center justify-center gap-2 h-9 rounded border border-[#282839] hover:border-white transition-colors text-white text-sm font-medium"
                                href="#">
                                <span class="material-symbols-outlined text-[18px]">code</span> Code
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:hidden mt-6 flex justify-center">
                <a class="flex items-center gap-1 text-primary text-sm font-bold hover:gap-2 transition-all"
                    href="#">
                    View all projects <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>
        </section>
        <!-- Education & Certification Section -->
        <section class="w-full px-4 sm:px-10 py-10 max-w-[1080px] mb-10">
            <h2 class="text-white text-3xl font-bold leading-tight tracking-[-0.015em] mb-8">Education</h2>
            <div class="relative pl-8 border-l border-[#282839] space-y-10">
                <!-- Item 1 -->
                <div class="relative">
                    <div class="absolute -left-[39px] p-1 bg-background-dark rounded-full border border-[#282839]">
                        <div class="w-4 h-4 rounded-full bg-primary"></div>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                        <div>
                            <h3 class="text-white text-lg font-bold">B.S. Computer Science</h3>
                            <p class="text-text-secondary">University of Technology</p>
                        </div>
                        <span class="text-sm font-mono text-text-secondary px-3 py-1 bg-[#282839] rounded w-fit">2019 -
                            2023</span>
                    </div>
                    <p class="mt-2 text-text-secondary text-sm max-w-2xl">
                        Specialized in Software Engineering and Database Systems. Graduated with Honors. Capstone
                        project focused on distributed systems.
                    </p>
                </div>
                <!-- Item 2 -->
                <div class="relative">
                    <div class="absolute -left-[39px] p-1 bg-background-dark rounded-full border border-[#282839]">
                        <div class="w-4 h-4 rounded-full bg-[#3b3b54]"></div>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                        <div>
                            <h3 class="text-white text-lg font-bold">Full Stack Web Development Certification</h3>
                            <p class="text-text-secondary">FreeCodeCamp</p>
                        </div>
                        <span
                            class="text-sm font-mono text-text-secondary px-3 py-1 bg-[#282839] rounded w-fit">2018</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA / Footer Area -->
        <footer class="w-full border-t border-[#282839] bg-background-dark py-12 px-4 sm:px-10">
            <div class="max-w-[1080px] mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="text-center md:text-left">
                    <h2 class="text-white text-lg font-bold">Let's build something amazing together.</h2>
                    <p class="text-text-secondary text-sm mt-1">Open for freelance opportunities and full-time roles.
                    </p>
                </div>
                <div class="flex items-center gap-6">
                    <a class="text-text-secondary hover:text-white transition-colors" href="#">Home</a>
                    <a class="text-text-secondary hover:text-white transition-colors" href="#">Projects</a>
                    <a class="text-text-secondary hover:text-white transition-colors" href="#">Blog</a>
                    <a class="text-text-secondary hover:text-white transition-colors opacity-50 hover:opacity-100"
                        href="#" title="Admin Login">
                        <span class="material-symbols-outlined text-[18px]">lock</span>
                    </a>
                </div>
            </div>
            <div
                class="max-w-[1080px] mx-auto mt-12 pt-8 border-t border-[#282839] flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-[#585870]">
                <p>© 2023 DevPortfolio. All rights reserved.</p>
                <p>Designed with Space Grotesk</p>
            </div>
        </footer>
    </main>
</body>

</html>
