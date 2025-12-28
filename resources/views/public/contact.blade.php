<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact Me - DevPortfolio</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap"
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
                        "primary": "#1b5bda",
                        "background-light": "#f6f6f8",
                        "background-dark": "#111621",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
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
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display min-h-screen flex flex-col overflow-x-hidden selection:bg-primary/30">
    <!-- Header -->
    <x-header />

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center justify-center py-10 px-4 md:px-0 relative">
        <!-- Abstract Background Decoration -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full max-w-7xl pointer-events-none z-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-72 h-72 bg-primary/5 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-500/5 rounded-full blur-[100px]"></div>
        </div>
        <div class="layout-content-container flex flex-col max-w-4xl w-full z-10">
            <!-- Page Heading -->
            <div class="text-center mb-10 space-y-4 px-4">
                <h1
                    class="text-slate-900 dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                    Let's build something together.
                </h1>
                <p class="text-slate-500 dark:text-[#9da6b8] text-lg font-normal max-w-2xl mx-auto">
                    Have a project in mind or just want to say hi? Fill out the form below and I'll get back to you
                    within 24 hours.
                </p>
            </div>
            <div class="flex flex-col md:flex-row gap-8 items-start justify-center">
                <!-- Contact Form Card -->
                <div
                    class="w-full md:w-2/3 bg-white dark:bg-[#1c212e] rounded-xl shadow-xl dark:shadow-none border border-slate-200 dark:border-[#2e3545] p-6 md:p-8">
                    <form class="flex flex-col gap-6" onsubmit="event.preventDefault();">
                        <!-- Name & Email Row -->
                        <div class="flex flex-col md:flex-row gap-6">
                            <label class="flex flex-col flex-1">
                                <span class="text-slate-900 dark:text-white text-sm font-medium pb-2">Name</span>
                                <input
                                    class="w-full rounded-lg border border-slate-300 dark:border-[#3c4453] bg-slate-50 dark:bg-[#111621] text-slate-900 dark:text-white h-12 px-4 placeholder:text-slate-400 dark:placeholder:text-[#64748b] focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                    placeholder="Jane Doe" required="" type="text" />
                            </label>
                            <label class="flex flex-col flex-1">
                                <span class="text-slate-900 dark:text-white text-sm font-medium pb-2">Email
                                    Address</span>
                                <input
                                    class="w-full rounded-lg border border-slate-300 dark:border-[#3c4453] bg-slate-50 dark:bg-[#111621] text-slate-900 dark:text-white h-12 px-4 placeholder:text-slate-400 dark:placeholder:text-[#64748b] focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                    placeholder="jane@example.com" required="" type="email" />
                            </label>
                        </div>
                        <!-- Subject -->
                        <label class="flex flex-col w-full">
                            <span class="text-slate-900 dark:text-white text-sm font-medium pb-2">Subject</span>
                            <div class="relative">
                                <select
                                    class="w-full appearance-none rounded-lg border border-slate-300 dark:border-[#3c4453] bg-slate-50 dark:bg-[#111621] text-slate-900 dark:text-white h-12 px-4 pr-10 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all cursor-pointer">
                                    <option>Project Inquiry</option>
                                    <option>Collaboration Request</option>
                                    <option>Job Opportunity</option>
                                    <option>General Question</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-500">
                                    <span class="material-symbols-outlined text-sm">expand_more</span>
                                </div>
                            </div>
                        </label>
                        <!-- Message -->
                        <label class="flex flex-col w-full">
                            <span class="text-slate-900 dark:text-white text-sm font-medium pb-2">Your Message</span>
                            <textarea
                                class="w-full rounded-lg border border-slate-300 dark:border-[#3c4453] bg-slate-50 dark:bg-[#111621] text-slate-900 dark:text-white min-h-[160px] p-4 placeholder:text-slate-400 dark:placeholder:text-[#64748b] focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all resize-y"
                                placeholder="Tell me about your project context, timeline, and goals..."></textarea>
                        </label>
                        <!-- Submit Button -->
                        <button
                            class="group flex w-full items-center justify-center gap-2 rounded-lg bg-primary hover:bg-blue-600 h-12 px-6 text-white font-bold transition-all shadow-lg shadow-blue-500/20 active:scale-[0.98]"
                            type="submit">
                            <span>Send Message</span>
                            <span
                                class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">send</span>
                        </button>
                    </form>
                </div>
                <!-- Info Sidebar -->
                <div class="w-full md:w-1/3 flex flex-col gap-6">
                    <!-- Contact Info Card -->
                    <div
                        class="rounded-xl bg-white dark:bg-[#1c212e] border border-slate-200 dark:border-[#2e3545] p-6 shadow-sm">
                        <h3 class="text-slate-900 dark:text-white font-bold mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">alternate_email</span>
                            Direct Contact
                        </h3>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mb-4">
                            Prefer email? You can reach me directly at:
                        </p>
                        <a class="text-slate-900 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors block mb-6"
                            href="mailto:hello@devportfolio.com">
                            hello@devportfolio.com
                        </a>
                        <h3 class="text-slate-900 dark:text-white font-bold mb-4 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">share</span>
                            Connect
                        </h3>
                        <div class="flex gap-3">
                            <a aria-label="Github"
                                class="size-10 rounded-lg bg-slate-100 dark:bg-[#2e3545] hover:bg-slate-200 dark:hover:bg-[#3c4453] flex items-center justify-center text-slate-600 dark:text-slate-300 transition-colors"
                                href="#">
                                <span class="material-symbols-outlined">code</span>
                            </a>
                            <a aria-label="LinkedIn"
                                class="size-10 rounded-lg bg-slate-100 dark:bg-[#2e3545] hover:bg-slate-200 dark:hover:bg-[#3c4453] flex items-center justify-center text-slate-600 dark:text-slate-300 transition-colors"
                                href="#">
                                <span class="material-symbols-outlined">work</span>
                            </a>
                            <a aria-label="Twitter"
                                class="size-10 rounded-lg bg-slate-100 dark:bg-[#2e3545] hover:bg-slate-200 dark:hover:bg-[#3c4453] flex items-center justify-center text-slate-600 dark:text-slate-300 transition-colors"
                                href="#">
                                <span class="material-symbols-outlined">flutter_dash</span>
                            </a>
                        </div>
                    </div>
                    <!-- Availability Card -->
                    <div class="rounded-xl bg-primary/10 border border-primary/20 p-6 shadow-sm">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="relative flex h-3 w-3">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                            </span>
                            <span class="text-slate-900 dark:text-white font-bold text-sm">Available for work</span>
                        </div>
                        <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">
                            I am currently accepting new projects starting next month. Let's discuss your requirements
                            today.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-footer />
</body>

</html>
