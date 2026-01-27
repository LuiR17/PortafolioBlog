@extends('layouts.dashboard')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-full overflow-hidden relative">
        <!-- Top Scrollable Area -->
        <div class="flex-1 overflow-y-auto p-6 md:p-10 scroll-smooth">
            <div class="max-w-6xl mx-auto flex flex-col gap-10">
                <!-- Page Heading -->
                <header class="flex flex-wrap justify-between items-end gap-4">
                    <div class="flex flex-col gap-2">
                        <p class="text-text-secondary text-sm font-medium uppercase tracking-wider">Resumen</p>
                        <h1 class="text-white text-3xl md:text-4xl font-bold leading-tight tracking-tight">Bienvenido de nuevo, Luis</h1>
                        <p class="text-text-secondary text-base">Aquí está lo que está sucediendo con tu portafolio hoy.</p>
                    </div>
                    <div class="flex items-center gap-2 text-text-secondary text-sm bg-surface-dark px-3 py-1.5 rounded-full border border-border-dark">
                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                        <span>{{ now()->format('M d, Y') }}</span>
                    </div>
                </header>
                <!-- Stats Cards -->
                <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    <!-- Stat 1 -->
                    <div class="flex flex-col gap-4 rounded-xl p-6 bg-surface-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                        <div class="flex justify-between items-start">
                            <div class="bg-primary/10 p-2.5 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined block">folder_special</span>
                            </div>
                            <span class="flex items-center text-[#0bda68] text-xs font-medium bg-[#0bda68]/10 px-2 py-1 rounded-full">+2 esta semana</span>
                        </div>
                        <div>
                            <p class="text-text-secondary text-sm font-medium mb-1">Total de Proyectos</p>
                            <p class="text-white text-3xl font-bold tracking-tight">{{ $totalProjects }}</p>
                        </div>
                    </div>
                    <!-- Stat 2 -->
                    <div class="flex flex-col gap-4 rounded-xl p-6 bg-surface-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                        <div class="flex justify-between items-start">
                            <div class="bg-primary/10 p-2.5 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined block">article</span>
                            </div>
                            <span class="flex items-center text-[#0bda68] text-xs font-medium bg-[#0bda68]/10 px-2 py-1 rounded-full">+5 este mes</span>
                        </div>
                        <div>
                            <p class="text-text-secondary text-sm font-medium mb-1">Artículos Publicados</p>
                            <p class="text-white text-3xl font-bold tracking-tight">{{ $publishedPosts }}</p>
                        </div>
                    </div>
                    <!-- Stat 3 -->
                    <div class="flex flex-col gap-4 rounded-xl p-6 bg-surface-dark border border-border-dark shadow-sm hover:border-primary/50 transition-colors group">
                        <div class="flex justify-between items-start">
                            <div class="bg-primary/10 p-2.5 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined block">visibility</span>
                            </div>
                            <span class="flex items-center text-[#0bda68] text-xs font-medium bg-[#0bda68]/10 px-2 py-1 rounded-full">+15%</span>
                        </div>
                        <div>
                            <p class="text-text-secondary text-sm font-medium mb-1">Total de Educación</p>
                            <p class="text-white text-3xl font-bold tracking-tight">{{ $totalEducation }}</p>
                        </div>
                    </div>
                </section>
                <!-- Main Actions & Quick Access -->
                <section class="flex flex-col gap-6">
                    <h2 class="text-white text-xl font-bold tracking-tight">Gestionar Contenido</h2>
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
                                <span class="text-white text-lg font-bold">Escribir nuevo Artículo</span>
                                <span class="text-text-secondary text-sm">Redacta una nueva publicación de blog técnico para tu
                                    audiencia.</span>
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
                                <span class="text-white text-lg font-bold">Agregar nuevo Proyecto</span>
                                <span class="text-text-secondary text-sm">Muestra una nueva aplicación o biblioteca que
                                    construiste.</span>
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
                        <h2 class="text-white text-xl font-bold tracking-tight">Contenido Reciente</h2>
                        <a class="text-sm font-medium text-primary hover:text-white transition-colors"
                            href="#">Ver Todo</a>
                    </div>
                    <div class="w-full overflow-hidden rounded-xl border border-border-dark bg-surface-dark shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm">
                                <thead class="bg-[#25253a] text-xs uppercase text-text-secondary font-semibold">
                                    <tr>
                                        <th class="px-6 py-4">Título</th>
                                        <th class="px-6 py-4">Categoría</th>
                                        <th class="px-6 py-4">Última Modificación</th>
                                        <th class="px-6 py-4">Estado</th>
                                        <th class="px-6 py-4 text-right">Acción</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-border-dark text-white">
                                    @forelse($recentContent as $content)
                                    <tr class="hover:bg-background-dark/30 transition-colors">
                                        <td class="px-6 py-4 font-medium">{{ $content['title'] }}</td>
                                        <td class="px-6 py-4 text-text-secondary">
                                            <div class="flex items-center gap-2">
                                                <span class="material-symbols-outlined text-[16px]">
                                                    {{ $content['type'] === 'Blog' ? 'article' : 'folder' }}
                                                </span> 
                                                {{ $content['type'] }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-text-secondary">{{ $content['updated_at']->format('M d, Y') }}</td>
                                        <td class="px-6 py-4">
                                            @if($content['status'] === 'published')
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/20 text-primary-light text-blue-300 border border-primary/20">
                                                    Publicado
                                                </span>
                                            @else
                                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-700/50 text-gray-300 border border-gray-600/30">
                                                    Borrador
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="text-text-secondary hover:text-white p-1 rounded hover:bg-[#2d2d3f]">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-8 text-center text-text-secondary">
                                            ¡No se encontró contenido reciente! Comienza creando tu primer proyecto o publicación de blog.
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection