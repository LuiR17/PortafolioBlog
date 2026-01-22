@extends('layouts.dashboard')

@section('content')
    <main class="flex-1 overflow-y-auto">
        <div class="container mx-auto max-w-7xl px-6 py-8">
            <!-- Page Heading -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-white text-3xl font-bold tracking-tight">Skills & Tools</h1>
                    <p class="text-[#9ea7b7] mt-1 text-sm">Manage your technical expertise and tools.</p>
                </div>
                <a href="{{ route('admin.skills.create') }}"
                    class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg font-medium transition-colors shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                    <span>New Skill</span>
                </a>
            </div>
            <!-- Stats Row -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                <div class="bg-[#232936] border border-[#292e38] rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                    <div class="flex justify-between items-start">
                        <p class="text-[#9ea7b7] text-sm font-medium uppercase tracking-wider">Total Skills</p>
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-lg text-[20px]">code</span>
                    </div>
                    <p class="text-white text-3xl font-bold mt-2">{{ $skills->count() }}</p>
                </div>
                <div class="bg-[#232936] border border-[#292e38] rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                    <div class="flex justify-between items-start">
                        <p class="text-[#9ea7b7] text-sm font-medium uppercase tracking-wider">Languages</p>
                        <span class="material-symbols-outlined text-yellow-500 bg-yellow-500/10 p-1.5 rounded-lg text-[20px] icon-filled">star</span>
                    </div>
                    <p class="text-white text-3xl font-bold mt-2">{{ $skills->where('category', 'language')->count() }}</p>
                </div>
                <div class="bg-[#232936] border border-[#292e38] rounded-xl p-5 flex flex-col gap-1 shadow-sm">
                    <div class="flex justify-between items-start">
                        <p class="text-[#9ea7b7] text-sm font-medium uppercase tracking-wider">Categories</p>
                        <span class="material-symbols-outlined text-purple-500 bg-purple-500/10 p-1.5 rounded-lg text-[20px]">category</span>
                    </div>
                    <p class="text-white text-3xl font-bold mt-2">{{ $skills->pluck('category')->unique()->count() }}</p>
                </div>
            </div>
            <!-- Filters & Search Toolbar -->
            <form method="GET" action="{{ route('admin.skills.index') }}" class="flex flex-col md:flex-row gap-4 mb-6">
                <!-- Search -->
                <div class="flex-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-[#9ea7b7]">search</span>
                    </div>
                    <input name="search"
                        class="block w-full rounded-lg border-none bg-[#292e38] py-2.5 pl-10 pr-4 text-white placeholder-[#9ea7b7] focus:ring-2 focus:ring-primary sm:text-sm"
                        placeholder="Search skills by name..." type="text" value="{{ request('search') }}" />
                </div>
                <!-- Filters -->
                <div class="flex gap-3 overflow-x-auto pb-1 md:pb-0">
                    <select name="category" 
                        class="rounded-lg border-none bg-[#292e38] px-4 py-2.5 text-white text-sm focus:ring-2 focus:ring-primary">
                        <option value="">All Categories</option>
                        <option value="language" {{ request('category') == 'language' ? 'selected' : '' }}>Languages</option>
                        <option value="framework" {{ request('category') == 'framework' ? 'selected' : '' }}>Frameworks</option>
                        <option value="tool" {{ request('category') == 'tool' ? 'selected' : '' }}>Tools</option>
                    </select>
                    <button type="submit" class="px-4 py-2.5 bg-[#292e38] text-white rounded-lg hover:bg-[#3a424f] transition-colors">
                        <span class="material-symbols-outlined text-[20px]">filter_list</span>
                    </button>
                </div>
            </form>
            <!-- Skills Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if($skills->count() > 0)
                    @foreach($skills as $skill)
                        <div class="bg-[#232936] border border-[#292e38] rounded-xl p-6 hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5 group">
                            <div class="flex items-start justify-between mb-4">
                                <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center p-2">
                                    @if($skill->icon)
                                        <img src="{{ Storage::url($skill->icon) }}" alt="{{ $skill->name }} Logo" class="w-full h-full object-contain">
                                    @else
                                        <span class="material-symbols-outlined text-primary text-3xl">code</span>
                                    @endif
                                </div>
                                <div class="opacity-0 group-hover:opacity-100 transition-opacity flex gap-2">
                                    <a href="{{ route('admin.skills.edit', $skill) }}" class="p-1.5 rounded-md hover:bg-[#292e38] text-[#9ea7b7] hover:text-white" title="Edit">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                    </a>
                                    <form action="{{ route('admin.skills.destroy', $skill) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this skill?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-1.5 rounded-md hover:bg-red-500/20 text-[#9ea7b7] hover:text-red-500" title="Delete">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <h3 class="text-white font-bold text-lg mb-2">{{ $skill->name }}</h3>
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-[#292e38] text-[#9ea7b7]">
                                {{ ucfirst($skill->category) }}
                            </span>
                            @if($skill->order)
                                <div class="mt-3 pt-3 border-t border-[#292e38]">
                                    <div class="flex justify-between text-xs font-medium">
                                        <span class="text-[#9ea7b7]">Order</span>
                                        <span class="text-white">#{{ $skill->order }}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                @else
                    <div class="col-span-full text-center py-12">
                        <div class="flex flex-col items-center gap-4">
                            <span class="material-symbols-outlined text-6xl text-[#9ea7b7]">code_off</span>
                            <h3 class="text-xl font-semibold text-white">No skills found</h3>
                            <p class="text-[#9ea7b7]">Get started by adding your first skill.</p>
                            <a href="{{ route('admin.skills.create') }}" class="inline-flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg font-medium transition-colors shadow-lg shadow-primary/20">
                                <span class="material-symbols-outlined text-[20px]">add</span>
                                <span>Add Your First Skill</span>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection
