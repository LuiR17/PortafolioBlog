@extends('layouts.dashboard')

@section('content')
    <main class="flex-1 flex flex-col h-full relative overflow-hidden">
        <!-- Top Header -->
        <header
            class="h-16 border-b border-border-dark bg-background-dark/80 backdrop-blur-md flex items-center justify-between px-6 shrink-0 z-10">
            <div class="flex items-center gap-4 lg:hidden">
                <button class="text-white">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <h2 class="text-white text-lg font-bold">Manage Skills</h2>
            </div>
            <div class="hidden lg:flex items-center gap-2 text-text-secondary">
                <span class="material-symbols-outlined text-[20px]">home</span>
                <span class="text-xs">/</span>
                <span class="text-sm">Admin</span>
                <span class="text-xs">/</span>
                <span class="text-white text-sm font-medium">Skills</span>
            </div>
            <div class="flex items-center gap-4 ml-auto">
                <button
                    class="flex items-center justify-center gap-2 h-9 px-4 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white transition-colors text-sm font-bold">
                    <span>View Live Site</span>
                    <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                </button>
                <div class="h-8 w-[1px] bg-border-dark mx-2"></div>
                <button
                    class="size-9 rounded-full bg-border-dark flex items-center justify-center text-text-secondary hover:text-white">
                    <span class="material-symbols-outlined text-[20px]">notifications</span>
                </button>
            </div>
        </header>
        <!-- Scrollable Page Content -->
        <div class="flex-1 overflow-y-auto p-4 md:p-8 lg:p-10">
            <div class="max-w-6xl mx-auto flex flex-col gap-8">
                <!-- Page Heading -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                    <div class="flex flex-col gap-1">
                        <h1 class="text-white text-3xl md:text-4xl font-bold tracking-tight">Skills &amp; Tools</h1>
                        <p class="text-text-secondary text-base font-normal">Add, edit, or delete your technical expertise.
                        </p>
                    </div>
                    <!-- Mobile Add Button -->
                        <a href="{{ route('admin.skills.create') }}"
                            class="md:hidden flex items-center gap-2 h-10 px-5 rounded-lg bg-primary text-white text-sm font-bold shadow-lg shadow-primary/25 hover:bg-blue-600 transition-all">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            <span>Add New Skill</span>
                        </a>
                </div>
                <!-- Stats Row -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-surface-dark border border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                        <div class="flex justify-between items-start">
                            <p class="text-text-secondary text-sm font-medium uppercase tracking-wider">Total Skills</p>
                            <span
                                class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-lg text-[20px]">code</span>
                        </div>
                        <p class="text-white text-3xl font-bold mt-2">{{ $skills->count() }}</p>
                    </div>
                    <div class="bg-surface-dark border border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                        <div class="flex justify-between items-start">
                            <p class="text-text-secondary text-sm font-medium uppercase tracking-wider">Featured</p>
                            <span
                                class="material-symbols-outlined text-yellow-500 bg-yellow-500/10 p-1.5 rounded-lg text-[20px] icon-filled">star</span>
                        </div>
                        <p class="text-white text-3xl font-bold mt-2">{{ $skills->where('category', 'language')->count() }}</p>
                    </div>
                    <div class="bg-surface-dark border border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                        <div class="flex justify-between items-start">
                            <p class="text-text-secondary text-sm font-medium uppercase tracking-wider">Categories</p>
                            <span
                                class="material-symbols-outlined text-purple-500 bg-purple-500/10 p-1.5 rounded-lg text-[20px]">category</span>
                        </div>
                        <p class="text-white text-3xl font-bold mt-2">{{ $skills->pluck('category')->unique()->count() }}</p>
                    </div>
                </div>
                <!-- Filter & Actions Toolbar -->
                <div
                    class="flex flex-col md:flex-row gap-4 justify-between items-center bg-surface-dark p-2 rounded-xl border border-border-dark">
                    <!-- Search -->
                    <div class="relative w-full md:max-w-md">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-text-secondary text-[20px]">search</span>
                        </div>
                        <input
                            class="block w-full pl-10 pr-3 py-2.5 border-none rounded-lg bg-background-dark text-white placeholder-text-secondary focus:ring-1 focus:ring-primary sm:text-sm"
                            placeholder="Search languages, frameworks..." type="text" />
                    </div>
                    <!-- Filters & Add -->
                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <div class="relative hidden md:block">
                            <select
                                class="appearance-none bg-background-dark text-white text-sm pl-4 pr-10 py-2.5 rounded-lg border-none focus:ring-1 focus:ring-primary cursor-pointer hover:bg-border-dark transition-colors">
                                <option>All Categories</option>
                                <option>Languages</option>
                                <option>Frameworks</option>
                                <option>Tools</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-white">
                                <span class="material-symbols-outlined text-[20px]">arrow_drop_down</span>
                            </div>
                        </div>
                        <a href="{{ route('admin.skills.create') }}"
                            class="hidden md:flex items-center gap-2 h-10 px-5 rounded-lg bg-primary text-white text-sm font-bold shadow-lg shadow-primary/25 hover:bg-blue-600 transition-all whitespace-nowrap">
                            <span class="material-symbols-outlined text-[20px]">add</span>
                            <span>Add New Skill</span>
                        </a>
                    </div>
                </div>
                <!-- Skills Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
                    @if($skills->count() > 0)
                        @foreach($skills as $skill)
                            <div
                                class="group relative bg-surface-dark rounded-xl border border-border-dark p-5 hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
                                <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2">
                                    <a href="{{ route('admin.skills.edit', $skill) }}" class="p-1.5 rounded-md hover:bg-background-dark text-text-secondary hover:text-white"
                                        title="Edit">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </a>
                                    <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this skill?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-1.5 rounded-md hover:bg-red-500/20 text-text-secondary hover:text-red-500"
                                            title="Delete">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                                <div class="flex items-start gap-4 mb-4">
                                    <div class="size-12 rounded-lg bg-primary/10 flex items-center justify-center p-2">
                                        @if($skill->icon)
                                            <img src="{{ asset('storage/' . $skill->icon) }}" alt="{{ $skill->name }} Logo" class="w-full h-full object-contain">
                                        @else
                                            <span class="material-symbols-outlined text-primary text-3xl">code</span>
                                        @endif
                                    </div>
                                    <div>
                                        <h3 class="text-white font-bold text-lg">{{ $skill->name }}</h3>
                                        <span
                                            class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-border-dark text-text-secondary mt-1">
                                            {{ ucfirst($skill->category) }}
                                        </span>
                                    </div>
                                </div>
                                @if($skill->order)
                                    <div class="space-y-2">
                                        <div class="flex justify-between text-xs font-medium">
                                            <span class="text-text-secondary">Order</span>
                                            <span class="text-white">#{{ $skill->order }}</span>
                                        </div>
                                        <div class="w-full bg-background-dark rounded-full h-2 overflow-hidden">
                                            <div class="bg-primary h-2 rounded-full" style="width: {{ min(100, $skill->order * 10) }}%"></div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @else
                        <div class="col-span-full text-center py-12">
                            <div class="flex flex-col items-center gap-4">
                                <span class="material-symbols-outlined text-6xl text-text-secondary">code_off</span>
                                <h3 class="text-xl font-semibold text-white">No skills found</h3>
                                <p class="text-text-secondary">Get started by adding your first skill.</p>
                                <a href="{{ route('admin.skills.create') }}" class="inline-flex items-center gap-2 h-10 px-5 rounded-lg bg-primary text-white text-sm font-bold shadow-lg shadow-primary/25 hover:bg-blue-600 transition-all">
                                    <span class="material-symbols-outlined text-[20px]">add</span>
                                    <span>Add Your First Skill</span>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
