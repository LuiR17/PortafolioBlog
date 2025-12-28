<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DevPortfolio // Admin Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "background-dark": "#101022",
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
    class="font-display bg-background-light dark:bg-background-dark text-slate-900 dark:text-white antialiased transition-colors duration-200">

    <div class="relative flex min-h-screen w-full flex-col overflow-hidden">

        <!-- Background -->
        <div class="absolute inset-0 z-0 opacity-20 dark:opacity-10 pointer-events-none"
            style="background-image: radial-gradient(#1313ec 1px, transparent 1px); background-size: 32px 32px;">
        </div>

        <!-- Header -->
        <header class="relative z-10 flex w-full items-center justify-between px-6 py-4 md:px-10 lg:px-20">
            <div class="flex items-center gap-3">
                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary/20 text-primary">
                    <span class="material-symbols-outlined text-xl">terminal</span>
                </div>
                <h2 class="text-lg font-bold tracking-tight">
                    DevPortfolio <span class="text-primary">//</span> Admin
                </h2>
            </div>

            <a href="{{ url('/') }}"
                class="group flex items-center gap-2 text-sm font-medium text-slate-500 hover:text-primary">
                <span class="material-symbols-outlined text-lg group-hover:-translate-x-1">arrow_back</span>
                <span class="hidden sm:inline">Regresar</span>
            </a>
        </header>

        <!-- Main -->
        <main class="relative z-10 flex flex-1 items-center justify-center px-4 py-10">

            <div
                class="w-full max-w-[480px] rounded-2xl border border-slate-200 bg-white/50 p-8 shadow-xl backdrop-blur-sm dark:bg-[#151520]/80">

                <!-- Heading -->
                <div class="mb-8 text-center">
                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-slate-100 dark:bg-[#1c1c27]">
                        <span class="material-symbols-outlined text-3xl text-primary">lock</span>
                    </div>
                    <h1 class="mb-2 text-3xl font-black">Login</h1>
                    <p class="text-sm text-slate-500">Inicia sesión para administrar</p>
                </div>

                <!-- Errors -->
                @if ($errors->any())
                    <div class="mb-4 rounded-lg bg-red-500/10 p-3 text-sm text-red-400">
                        {{ $errors->first() }}
                    </div>
                @endif

                <!-- FORM -->
                <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
                    @csrf

                    <!-- Email -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Email</label>
                        <div class="relative group">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary">
                                person
                            </span>
                            <input type="email" name="email" required autocomplete="username"
                                placeholder="you@email.com"
                                class="w-full rounded-lg border py-3.5 pl-12 pr-4 bg-slate-50 dark:bg-[#1c1c27] focus:border-primary focus:ring-1 focus:ring-primary">
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold">Password</label>
                        <div class="relative group">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary">
                                vpn_key
                            </span>
                            <input type="password" name="password" required autocomplete="current-password"
                                placeholder="••••••••"
                                class="w-full rounded-lg border py-3.5 pl-12 pr-4 bg-slate-50 dark:bg-[#1c1c27] focus:border-primary focus:ring-1 focus:ring-primary">
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="group relative flex w-full items-center justify-center rounded-lg bg-primary py-3.5 text-white font-bold shadow-lg hover:bg-blue-700">
                        Iniciar Sesión
                        <span class="material-symbols-outlined ml-2">arrow_forward</span>
                    </button>
                </form>

            </div>
        </main>
    </div>
</body>

</html>
