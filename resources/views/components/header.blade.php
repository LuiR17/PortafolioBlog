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
                <a class="{{ request()->routeIs('public.home') ? 'text-white text-sm font-medium hover:text-primary transition-colors leading-normal' : 'text-text-secondary text-sm font-medium hover:text-primary transition-colors leading-normal' }}"
                    href="{{ route('public.home') }}">Home</a>
                <a class="{{ request()->routeIs('public.blog.index') ? 'text-white text-sm font-medium hover:text-primary transition-colors leading-normal' : 'text-text-secondary text-sm font-medium hover:text-primary transition-colors leading-normal' }}"
                    href="{{ route('public.blog.index') }}">Blog</a>
                <a class="{{ request()->routeIs('public.projects.index') ? 'text-white text-sm font-medium hover:text-primary transition-colors leading-normal' : 'text-text-secondary text-sm font-medium hover:text-primary transition-colors leading-normal' }}"
                    href="{{ route('public.projects.index') }}">Projects</a>
            </nav>
            <div class="flex items-center gap-4">
                <a href="{{ route('contact') }}">
                    <button
                        class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-blue-700 transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Contact Me</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</header>
