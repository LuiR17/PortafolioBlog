 <footer class="w-full border-t border-[#282839] bg-background-dark py-12 px-4 sm:px-10">
     <div class="max-w-[1080px] mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
         <div class="text-center md:text-left">
             <h2 class="text-white text-lg font-bold">Construyamos algo increíble juntos.</h2>
             <p class="text-text-secondary text-sm mt-1">Abierto a oportunidades freelance y roles de tiempo completo.
             </p>
         </div>
         <div class="flex items-center gap-6">
             <a class="{{ request()->routeIs('public.home') ? 'text-white text-sm font-medium hover:text-primary transition-colors leading-normal' : 'text-text-secondary text-sm font-medium hover:text-primary transition-colors leading-normal' }}"
                 href="{{ route('public.home') }}">Inicio</a>
             <a class="{{ request()->routeIs('public.blog.index') ? 'text-white text-sm font-medium hover:text-primary transition-colors leading-normal' : 'text-text-secondary text-sm font-medium hover:text-primary transition-colors leading-normal' }}"
                 href="{{ route('public.blog.index') }}">Blog</a>
             <a class="{{ request()->routeIs('public.projects.index') ? 'text-white text-sm font-medium hover:text-primary transition-colors leading-normal' : 'text-text-secondary text-sm font-medium hover:text-primary transition-colors leading-normal' }}"
                 href="{{ route('public.projects.index') }}">Proyectos</a>
         </div>
     </div>
    
 </footer>
