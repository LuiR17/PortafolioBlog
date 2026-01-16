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
                        "text-secondary": "#9d9db9",
                        "input-dark": "#111117",
                        "surface-dark-highlight": "#292e38"
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
    @vite(['resources/js/Admin/ImageProjects.js'])
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
    <x-head.tiny-mce-config/> 
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-hidden h-screen w-full flex">
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
                    <h1 class="text-white text-base font-bold leading-tight">{{ auth()->user()->name }}</h1>
                    <p class="text-text-secondary text-xs font-normal">Admin Panel</p>
                </div>
            </div>
            <!-- Navigation -->
            <nav class="flex flex-col gap-2">
                <a class="{{ request()->routeIs('admin.dashboard') ? 'bg-primary text-white flex items-center gap-3 px-3 py-3 rounded-lg bg-primary transition-colors group' : 'text-text-secondary flex items-center gap-3 px-3 py-3 rounded-lg transition-colors group' }}"
                    href="{{ route('admin.dashboard') }}">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">dashboard</span>
                    <span class="text-sm font-medium hidden lg:block">Dashboard</span>
                </a>
                <a class="{{ request()->routeIs('admin.projects.index') ? 'bg-primary text-white flex items-center gap-3 px-3 py-3 rounded-lg bg-primary transition-colors group' : 'text-text-secondary flex items-center gap-3 px-3 py-3 rounded-lg transition-colors group' }}"
                    href="{{ route('admin.projects.index') }}">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">folder_open</span>
                    <span class="text-sm font-medium hidden lg:block">Projects</span>
                </a>
                <a class="{{ request()->routeIs('admin.blog.index') ? 'bg-primary text-white flex items-center gap-3 px-3 py-3 rounded-lg bg-primary transition-colors group' : 'text-text-secondary flex items-center gap-3 px-3 py-3 rounded-lg transition-colors group' }}"
                    href="{{ route('admin.blog.index') }}">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">article</span>
                    <span class="text-sm font-medium hidden lg:block">Blog</span>
                </a>
                 <a class="{{ request()->routeIs('admin.skills.index') ? 'bg-primary text-white flex items-center gap-3 px-3 py-3 rounded-lg bg-primary transition-colors group' : 'text-text-secondary flex items-center gap-3 px-3 py-3 rounded-lg transition-colors group' }}"
                    href="{{ route('admin.skills.index') }}">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">handyman</span>
                    <span class="text-sm font-medium hidden lg:block">skills</span>
                </a>
                <a class="{{ request()->routeIs('admin.education.index') ? 'bg-primary text-white flex items-center gap-3 px-3 py-3 rounded-lg bg-primary transition-colors group' : 'text-text-secondary flex items-center gap-3 px-3 py-3 rounded-lg transition-colors group' }}"
                    href="{{ route('admin.education.index') }}">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">school</span>
                    <span class="text-sm font-medium hidden lg:block">Education</span>
                </a>
                <a class="{{ request()->routeIs('admin.curriculum.index') ? 'bg-primary text-white flex items-center gap-3 px-3 py-3 rounded-lg bg-primary transition-colors group' : 'text-text-secondary flex items-center gap-3 px-3 py-3 rounded-lg transition-colors group' }}"
                    href="{{ route('admin.curriculum.index') }}">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">description</span>
                    <span class="text-sm font-medium hidden lg:block">Curriculum vitae</span>
                </a>
                 <a class="{{ request()->routeIs('admin.profile.index') ? 'bg-primary text-white flex items-center gap-3 px-3 py-3 rounded-lg bg-primary transition-colors group' : 'text-text-secondary flex items-center gap-3 px-3 py-3 rounded-lg transition-colors group' }}"
                    href="{{ route('admin.profile.index') }}">
                    <span class="material-symbols-outlined shrink-0" style="font-size: 24px;">person</span>
                    <span class="text-sm font-medium hidden lg:block">about me</span>
                </a>
                <a class="{{ request()->routeIs('') ? 'bg-primary text-white flex items-center gap-3 px-3 py-3 rounded-lg bg-primary transition-colors group' : 'text-text-secondary flex items-center gap-3 px-3 py-3 rounded-lg transition-colors group' }}"
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

    @yield('content')



</body>
