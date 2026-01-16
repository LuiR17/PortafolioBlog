@extends('layouts.dashboard')

@push('styles')
<style>
    .pagination {
        @apply flex items-center gap-2;
    }

    .pagination .page-link {
        @apply px-3 py-1.5 rounded-md border border-[#292e38] bg-[#232936] text-[#9ea7b7] text-sm font-medium hover:bg-[#292e38] hover:text-white transition-colors;
    }

    .pagination .page-link.active {
        @apply bg-primary border-primary text-white;
    }

    .pagination .page-link.disabled {
        @apply opacity-50 cursor-not-allowed;
    }
</style>
@endpush

@section('content')
    <main class="flex-1 overflow-y-auto">
        <div class="container mx-auto max-w-7xl px-6 py-8">
            <!-- Page Heading -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-white text-3xl font-bold tracking-tight">Blog Posts</h1>
                    <p class="text-[#9ea7b7] mt-1 text-sm">Manage, edit, and publish your content.</p>
                </div>
                <a href="{{ route('admin.blog.create') }}"
                    class="flex items-center gap-2 bg-primary hover:bg-primary/90 text-white px-5 py-2.5 rounded-lg font-medium transition-colors shadow-lg shadow-primary/20">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                    <span>New Post</span>
                </a>
            </div>
            <!-- Filters & Search Toolbar -->
            <form method="GET" action="{{ route('admin.blog.index') }}" class="flex flex-col md:flex-row gap-4 mb-6">
                <!-- Search -->
                <div class="flex-1 relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <span class="material-symbols-outlined text-[#9ea7b7]">search</span>
                    </div>
                    <input name="search"
                        class="block w-full rounded-lg border-none bg-[#292e38] py-2.5 pl-10 pr-4 text-white placeholder-[#9ea7b7] focus:ring-2 focus:ring-primary sm:text-sm"
                        placeholder="Search posts by title..." type="text" value="{{ request('search') }}" />
                </div>
                <!-- Filters -->
                <div class="flex gap-3 overflow-x-auto pb-1 md:pb-0">
                    <div class="relative min-w-[140px]">
                        <select name="status"
                            class="appearance-none block w-full rounded-lg border-none bg-[#292e38] py-2.5 pl-4 pr-10 text-white focus:ring-2 focus:ring-primary sm:text-sm cursor-pointer">
                            <option value="">All Statuses</option>
                            <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published</option>
                            <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-[#9ea7b7]">
                            <span class="material-symbols-outlined text-[20px]">expand_more</span>
                        </div>
                    </div>
                    <button type="submit"
                        class="flex items-center justify-center gap-2 px-4 py-2.5 rounded-lg bg-[#292e38] hover:bg-[#343a46] text-white transition-colors border border-transparent hover:border-[#4a5568]">
                        <span class="material-symbols-outlined text-[20px]">filter_list</span>
                        <span class="text-sm font-medium">Apply Filters</span>
                    </button>
                </div>
            </form>
            <!-- Data Table -->
            <div class="w-full overflow-hidden rounded-xl border border-[#292e38] bg-[#1a202c] shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-[#292e38] bg-[#232936]">
                                <th
                                    class="py-4 pl-6 pr-4 text-[#9ea7b7] font-medium text-xs uppercase tracking-wider w-[40%]">
                                    Title</th>
                                <th class="px-4 py-4 text-[#9ea7b7] font-medium text-xs uppercase tracking-wider">Status
                                </th>
                                <th class="px-4 py-4 text-[#9ea7b7] font-medium text-xs uppercase tracking-wider">Date</th>
                                <th
                                    class="px-4 py-4 text-[#9ea7b7] font-medium text-xs uppercase tracking-wider text-right">
                                    Views</th>
                                <th
                                    class="px-4 py-4 text-[#9ea7b7] font-medium text-xs uppercase tracking-wider text-right pr-6">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#292e38]">
                            @forelse($blogPosts as $post)
                            <tr class="group hover:bg-[#232936] transition-colors">
                                <td class="py-4 pl-6 pr-4">
                                    <div class="flex flex-col">
                                        <span
                                            class="text-white font-medium text-sm group-hover:text-primary transition-colors cursor-pointer">{{ $post->title }}</span>
                                        <span class="text-[#9ea7b7] text-xs mt-0.5">/blog/{{ $post->slug }}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap">
                                    @if($post->status === 'published')
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                                            <span class="size-1.5 rounded-full bg-green-400"></span>
                                            Published
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-gray-500/10 text-gray-400 border border-gray-500/20">
                                            <span class="size-1.5 rounded-full bg-gray-400"></span>
                                            Draft
                                        </span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-[#9ea7b7] text-sm">
                                    {{ \Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-[#9ea7b7] text-sm text-right font-mono">
                                    -
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-right pr-6">
                                    <div
                                        class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <a href="{{ route('admin.blog.edit', $post->id) }}"
                                            class="p-1.5 rounded-md text-[#9ea7b7] hover:text-white hover:bg-[#2d3748] transition-colors"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </a>
                                        <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="p-1.5 rounded-md text-[#9ea7b7] hover:text-red-400 hover:bg-red-400/10 transition-colors"
                                                title="Delete"
                                                onclick="return confirm('¿Estás seguro de que quieres eliminar este post?')">
                                                <span class="material-symbols-outlined text-[20px]">delete</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-[#9ea7b7]">
                                    No blog posts found. <a href="{{ route('admin.blog.create') }}" class="text-primary hover:underline">Create your first post</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div
                    class="flex flex-col sm:flex-row items-center justify-between px-6 py-4 border-t border-[#292e38] bg-[#1a202c]">
                    <p class="text-sm text-[#9ea7b7] mb-4 sm:mb-0">
                        Showing <span class="font-medium text-white">{{ $blogPosts->firstItem() ?? 0 }}</span> to <span
                            class="font-medium text-white">{{ $blogPosts->lastItem() ?? 0 }}</span> of <span class="font-medium text-white">{{ $blogPosts->total() }}</span>
                        results
                    </p>
                    <div class="flex items-center gap-2">
                        @if($blogPosts->hasPages())
                            {{ $blogPosts->appends(request()->query())->links() }}
                        @endif
                    </div>
                </div>
            </div>
            <!-- Footer area spacing -->
            <div class="h-10"></div>
        </div>
    </main>
@endsection
