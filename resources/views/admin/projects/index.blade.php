@extends('layouts.dashboard')

@section('content')
    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-screen overflow-y-auto">
        <div class="flex-1 max-w-[1200px] w-full mx-auto p-8">
            <!-- Page Heading -->
            <div class="flex flex-wrap justify-between items-end gap-4 mb-8">
                <div class="flex flex-col gap-2">
                    <h1 class="text-white text-3xl font-black leading-tight tracking-tight">Projects Directory</h1>
                    <p class="text-text-secondary text-base font-normal leading-normal">Manage, update, and organize your
                        portfolio content.</p>
                </div>
                <a href="{{ route('admin.projects.create') }}"
                    class="flex cursor-pointer items-center gap-2 justify-center overflow-hidden rounded-lg h-10 px-5 bg-primary hover:bg-blue-600 text-white shadow-lg shadow-blue-900/20 transition-all text-sm font-bold leading-normal tracking-[0.015em]">
                    <span class="material-symbols-outlined text-lg">add</span>
                    <span class="truncate">New Project</span>
                </a>
            </div>
            <!-- Search and Filter Bar -->
            <div class="mb-6">
                <label class="flex flex-col h-12 w-full max-w-md">
                    <div
                        class="flex w-full flex-1 items-center rounded-lg h-full bg-surface-dark border border-border-dark focus-within:border-primary/50 transition-colors">
                        <div class="text-text-secondary flex items-center justify-center pl-4 pr-2">
                            <span class="material-symbols-outlined">search</span>
                        </div>
                        <input
                            class="flex w-full flex-1 bg-transparent text-white focus:outline-0 border-none h-full placeholder:text-text-secondary/50 px-2 text-sm font-normal leading-normal"
                            placeholder="Search projects by name, tech stack..." value="" />
                    </div>
                </label>
            </div>
            <!-- Projects Table -->
            <div class="w-full overflow-hidden rounded-xl border border-border-dark bg-surface-dark shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#242a35] border-b border-border-dark">
                            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-text-secondary w-16">
                                Preview</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-text-secondary">Project
                                Name</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-text-secondary">
                                Plataforma</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-text-secondary w-32">
                                Status</th>
                            <th class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-text-secondary w-40">
                                Date Added</th>
                            <th
                                class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-text-secondary text-right w-28">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border-dark">
                        @forelse ($projects as $project)
                            <tr class="group hover:bg-white/[0.02] transition-colors">
                                <td class="px-6 py-4 align-middle">
                                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-10 ring-1 ring-white/10"
                                        data-alt="{{ $project->name }} preview image"
                                        style='background-image: url("{{ $project->preview_image ? Storage::disk('s3')->url($project->preview_image) : 'https://via.placeholder.com/150' }}");'>
                                    </div>
                                </td>
                                <td class="px-6 py-4 align-middle">
                                    <p class="text-white text-sm font-semibold leading-normal">{{ $project->name }}</p>
                                    <p class="text-text-secondary text-xs mt-0.5">{{ $project->short_description }}</p>
                                </td>
                                <td class="px-6 py-4 align-middle">
                                    <div class="flex flex-wrap gap-2">
                                        @if ($project->platform)
                                            <span
                                                class="inline-flex items-center rounded-md bg-blue-500/10 px-2 py-1 text-xs font-medium text-blue-400 ring-1 ring-inset ring-blue-500/20">{{ $project->platform }}</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4 align-middle">
                                    <div class="flex items-center gap-2">
                                        @if ($project->status == 'published')
                                            <span class="relative flex h-2 w-2">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                                <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                                            </span>
                                            <span class="text-sm text-white font-medium">Published</span>
                                        @else
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-gray-500"></span>
                                            <span class="text-sm text-text-secondary font-medium">Draft</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-6 py-4 align-middle text-text-secondary text-sm">
                                    {{ $project->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-6 py-4 align-middle text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('admin.projects.edit', $project) }}"
                                            class="p-2 rounded-lg text-text-secondary hover:text-primary hover:bg-primary/10 transition-colors"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-xl">edit</span>
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this project?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="p-2 rounded-lg text-text-secondary hover:text-red-500 hover:bg-red-500/10 transition-colors"
                                                title="Delete">
                                                <span class="material-symbols-outlined text-xl">delete</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-text-secondary">
                                    No projects found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="flex items-center justify-between border-t border-border-dark py-4 mt-4">
                <div class="text-sm text-text-secondary">
                    Showing <span class="font-medium text-white">{{ $projects->firstItem() }}</span> to <span class="font-medium text-white">{{ $projects->lastItem() }}</span>
                    of <span class="font-medium text-white">{{ $projects->total() }}</span> results
                </div>
                <div class="flex gap-2">
                    {{ $projects->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </main>
@endsection
