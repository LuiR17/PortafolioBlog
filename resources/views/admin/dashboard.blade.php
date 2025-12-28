<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Admin Dashboard</title>
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Theme Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1313ec",
                        "primary-hover": "#0c0cb8",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101022",
                        "surface-dark": "#1c1c2e",
                        "surface-hover": "#25253a",
                        "border-dark": "#2d2d3f",
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
    <style>
        /* Custom scrollbar for webkit */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #101022;
        }

        ::-webkit-scrollbar-thumb {
            background: #2d2d3f;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #3b3b54;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-hidden h-screen w-full flex">
    <!-- Sidebar -->
    <aside
        class="w-20 lg:w-64 flex flex-col justify-between border-r border-border-dark bg-background-dark dark:bg-[#111118] h-full shrink-0 transition-all duration-300">
        <div class="flex flex-col gap-6 p-4">
            <!-- Profile/Logo Area -->
            <div class="flex items-center gap-3 pb-4 border-b border-border-dark">
                <div class="bg-center bg-no-repeat bg-cover rounded-full h-10 w-10 shrink-0 border border-border-dark"
                    data-alt="Abstract gradient avatar representing user"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAIyNOPab0g05MQJzQcVhs9_Z21IhZUwHI4EExjFwWJ75pRUp3K2L70cWUwAW_kJCYvuf3OkSrALruvo1DOblCNQ3G4Zrqde5zU1jt3DNiA_Qk6L8O1wnbmjy4ZkSllfOY7pZ6lsv2EbsFCTTU-9Nhl6lezn6_WtI5gv_BeUv29pXBMstq8b_xJlthkXD4N7CIZk-wXgx-h0eMQGoYAIknvAykRVm8fTujXRCOzD3JTlsUIB_mi7iLTu3LpxVzOQNu9_IfwJYzE2FMV");'>
                </div>
                <div class="flex flex-col hidden lg:flex">
                    <h1 class="text-white text-base font-bold leading-tight">Alex Dev</h1>
                    <p class="text-text-secondary text-xs font-normal">Admin Panel</p>
                </div>
            </div>
            <!-- Navigation -->
            <nav class="flex flex-col gap-2">
                <a class="flex items-center gap-3 px-3 py-3 rounded-lg bg-primary text-white transition-colors group"
                    href="#">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">dashboard</span>
                    <span class="text-sm font-medium hidden lg:block">Dashboard</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-3 rounded-lg text-text-secondary hover:bg-surface-hover hover:text-white transition-colors group"
                    href="#">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">folder_open</span>
                    <span class="text-sm font-medium hidden lg:block">Projects</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-3 rounded-lg text-text-secondary hover:bg-surface-hover hover:text-white transition-colors group"
                    href="#">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">article</span>
                    <span class="text-sm font-medium hidden lg:block">Blog</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-3 rounded-lg text-text-secondary hover:bg-surface-hover hover:text-white transition-colors group"
                    href="#">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">chat</span>
                    <span class="text-sm font-medium hidden lg:block">Messages</span>
                </a>
                <a class="flex items-center gap-3 px-3 py-3 rounded-lg text-text-secondary hover:bg-surface-hover hover:text-white transition-colors group"
                    href="#">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">settings</span>
                    <span class="text-sm font-medium hidden lg:block">Settings</span>
                </a>
            </nav>
        </div>
        <!-- Footer Actions -->
        <div class="p-4 border-t border-border-dark">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="{{ route('logout') }}"
                    class="flex items-center gap-3 px-3 py-3 rounded-lg text-text-secondary hover:bg-surface-hover hover:text-red-400 transition-colors"
                    onclick="event.preventDefault(); this.closest('form').submit();">

                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">logout</span>
                    <span class="text-sm font-medium hidden lg:block">Logout</span>
                </a>
            </form>

        </div>
    </aside>
    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-full overflow-hidden relative">
        <!-- Top Scrollable Area -->
        <div class="flex-1 overflow-y-auto p-6 md:p-10 scroll-smooth">
            <div class="max-w-6xl mx-auto flex flex-col gap-10">
                <!-- Page Heading -->
                <header class="flex flex-wrap justify-between items-end gap-4">
                    <div class="flex flex-col gap-2">
                        <p class="text-text-secondary text-sm font-medium uppercase tracking-wider">Overview</p>
                        <h1 class="text-white text-3xl md:text-4xl font-bold leading-tight tracking-tight">Welcome back,
                            Alex</h1>
                        <p class="text-text-secondary text-base">Here is what is happening with your portfolio today.
                        </p>
                    </div>
                    <div
                        class="flex items-center gap-2 text-text-secondary text-sm bg-surface-dark px-3 py-1.5 rounded-full border border-border-dark">
                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                        <span>Oct 24, 2023</span>
                    </div>
                </header>
                <!-- Stats Cards -->
                <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    <!-- Stat 1 -->
                    <div
                        class="flex flex-col gap-4 rounded-xl p-6 bg-surface-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                        <div class="flex justify-between items-start">
                            <div
                                class="bg-primary/10 p-2.5 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined block">folder_special</span>
                            </div>
                            <span
                                class="flex items-center text-[#0bda68] text-xs font-medium bg-[#0bda68]/10 px-2 py-1 rounded-full">+2
                                this week</span>
                        </div>
                        <div>
                            <p class="text-text-secondary text-sm font-medium mb-1">Total Projects</p>
                            <p class="text-white text-3xl font-bold tracking-tight">12</p>
                        </div>
                    </div>
                    <!-- Stat 2 -->
                    <div
                        class="flex flex-col gap-4 rounded-xl p-6 bg-surface-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                        <div class="flex justify-between items-start">
                            <div
                                class="bg-primary/10 p-2.5 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined block">article</span>
                            </div>
                            <span
                                class="flex items-center text-[#0bda68] text-xs font-medium bg-[#0bda68]/10 px-2 py-1 rounded-full">+5
                                this month</span>
                        </div>
                        <div>
                            <p class="text-text-secondary text-sm font-medium mb-1">Published Posts</p>
                            <p class="text-white text-3xl font-bold tracking-tight">45</p>
                        </div>
                    </div>
                    <!-- Stat 3 -->
                    <div
                        class="flex flex-col gap-4 rounded-xl p-6 bg-surface-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                        <div class="flex justify-between items-start">
                            <div
                                class="bg-primary/10 p-2.5 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined block">visibility</span>
                            </div>
                            <span
                                class="flex items-center text-[#0bda68] text-xs font-medium bg-[#0bda68]/10 px-2 py-1 rounded-full">+15%</span>
                        </div>
                        <div>
                            <p class="text-text-secondary text-sm font-medium mb-1">Total Site Visits</p>
                            <p class="text-white text-3xl font-bold tracking-tight">12.5K</p>
                        </div>
                    </div>
                </section>
                <!-- Main Actions & Quick Access -->
                <section class="flex flex-col gap-6">
                    <h2 class="text-white text-xl font-bold tracking-tight">Manage Content</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Action: New Article -->
                        <button
                            class="flex flex-col sm:flex-row items-start sm:items-center gap-4 p-6 rounded-xl border border-border-dark bg-surface-dark hover:bg-surface-hover hover:border-primary/50 transition-all text-left group w-full">
                            <div
                                class="bg-[#282839] p-3 rounded-full shrink-0 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-white block"
                                    style="font-size: 28px;">edit_square</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <span class="text-white text-lg font-bold">Write new Article</span>
                                <span class="text-text-secondary text-sm">Draft a new technical blog post for your
                                    audience.</span>
                            </div>
                            <div
                                class="hidden sm:block ml-auto opacity-0 group-hover:opacity-100 transition-opacity transform translate-x-[-10px] group-hover:translate-x-0">
                                <span class="material-symbols-outlined text-primary">arrow_forward</span>
                            </div>
                        </button>
                        <!-- Action: New Project -->
                        <button
                            class="flex flex-col sm:flex-row items-start sm:items-center gap-4 p-6 rounded-xl border border-border-dark bg-surface-dark hover:bg-surface-hover hover:border-primary/50 transition-all text-left group w-full">
                            <div
                                class="bg-[#282839] p-3 rounded-full shrink-0 group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-white block"
                                    style="font-size: 28px;">add_to_photos</span>
                            </div>
                            <div class="flex flex-col gap-1">
                                <span class="text-white text-lg font-bold">Add new Project</span>
                                <span class="text-text-secondary text-sm">Showcase a new application or library you
                                    built.</span>
                            </div>
                            <div
                                class="hidden sm:block ml-auto opacity-0 group-hover:opacity-100 transition-opacity transform translate-x-[-10px] group-hover:translate-x-0">
                                <span class="material-symbols-outlined text-primary">arrow_forward</span>
                            </div>
                        </button>
                    </div>
                </section>
                <!-- Recent Activity Table -->
                <section class="flex flex-col gap-6 pb-10">
                    <div class="flex items-center justify-between">
                        <h2 class="text-white text-xl font-bold tracking-tight">Recent Content</h2>
                        <a class="text-sm font-medium text-primary hover:text-white transition-colors"
                            href="#">View All</a>
                    </div>
                    <div class="w-full overflow-hidden rounded-xl border border-border-dark bg-surface-dark shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm">
                                <thead class="bg-[#25253a] text-xs uppercase text-text-secondary font-semibold">
                                    <tr>
                                        <th class="px-6 py-4">Title</th>
                                        <th class="px-6 py-4">Category</th>
                                        <th class="px-6 py-4">Last Modified</th>
                                        <th class="px-6 py-4">Status</th>
                                        <th class="px-6 py-4 text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-border-dark text-white">
                                    <tr class="hover:bg-background-dark/30 transition-colors">
                                        <td class="px-6 py-4 font-medium">Building a Scalable API</td>
                                        <td class="px-6 py-4 text-text-secondary">
                                            <div class="flex items-center gap-2">
                                                <span class="material-symbols-outlined text-[16px]">article</span> Blog
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-text-secondary">Oct 22, 2023</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/20 text-primary-light text-blue-300 border border-primary/20">
                                                Published
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="text-text-secondary hover:text-white p-1 rounded hover:bg-[#2d2d3f]">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-background-dark/30 transition-colors">
                                        <td class="px-6 py-4 font-medium">E-commerce Dashboard UI</td>
                                        <td class="px-6 py-4 text-text-secondary">
                                            <div class="flex items-center gap-2">
                                                <span class="material-symbols-outlined text-[16px]">folder</span>
                                                Project
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-text-secondary">Oct 20, 2023</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-700/50 text-gray-300 border border-gray-600/30">
                                                Draft
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="text-text-secondary hover:text-white p-1 rounded hover:bg-[#2d2d3f]">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-background-dark/30 transition-colors">
                                        <td class="px-6 py-4 font-medium">Understanding React Hooks</td>
                                        <td class="px-6 py-4 text-text-secondary">
                                            <div class="flex items-center gap-2">
                                                <span class="material-symbols-outlined text-[16px]">article</span> Blog
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-text-secondary">Oct 18, 2023</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/20 text-blue-300 border border-primary/20">
                                                Published
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="text-text-secondary hover:text-white p-1 rounded hover:bg-[#2d2d3f]">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-background-dark/30 transition-colors">
                                        <td class="px-6 py-4 font-medium">Portfolio V2 Redesign</td>
                                        <td class="px-6 py-4 text-text-secondary">
                                            <div class="flex items-center gap-2">
                                                <span class="material-symbols-outlined text-[16px]">folder</span>
                                                Project
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-text-secondary">Oct 15, 2023</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/20 text-blue-300 border border-primary/20">
                                                Published
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="text-text-secondary hover:text-white p-1 rounded hover:bg-[#2d2d3f]">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-background-dark/30 transition-colors">
                                        <td class="px-6 py-4 font-medium">CSS Grid vs Flexbox</td>
                                        <td class="px-6 py-4 text-text-secondary">
                                            <div class="flex items-center gap-2">
                                                <span class="material-symbols-outlined text-[16px]">article</span> Blog
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-text-secondary">Oct 10, 2023</td>
                                        <td class="px-6 py-4">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-700/50 text-gray-300 border border-gray-600/30">
                                                Draft
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="text-text-secondary hover:text-white p-1 rounded hover:bg-[#2d2d3f]">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>

</html>
