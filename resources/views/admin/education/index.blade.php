@extends('layouts.dashboard')

@section('content')
    <main class="flex-1 flex flex-col h-screen overflow-y-auto bg-background-light dark:bg-background-dark relative">
        <!-- Mobile Header (Visible only on small screens) -->
        <header
            class="lg:hidden flex items-center justify-between p-4 bg-white dark:bg-[#111418] border-b border-slate-200 dark:border-slate-800 sticky top-0 z-30">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-slate-900 dark:text-white">school</span>
                <span class="font-bold text-lg dark:text-white">Education</span>
            </div>
            <button class="text-slate-500 dark:text-slate-400">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </header>
        <div class="flex-1 max-w-[1200px] w-full mx-auto p-4 md:p-8 flex flex-col gap-8">
            <!-- Breadcrumbs & Header Section -->
            <div class="flex flex-col gap-6">
                <nav class="flex items-center text-sm font-medium text-slate-500 dark:text-slate-400">
                    <a class="hover:text-primary transition-colors" href="#">Admin</a>
                    <span class="mx-2 text-slate-400 dark:text-slate-600">/</span>
                    <span class="text-slate-900 dark:text-white">Education</span>
                </nav>
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                    <div class="flex flex-col gap-2 max-w-2xl">
                        <h2 class="text-3xl md:text-4xl font-black tracking-tight text-slate-900 dark:text-white">Manage
                            Education</h2>
                        <p class="text-slate-500 dark:text-slate-400 text-base leading-relaxed">
                            Keep your academic history up to date. Add new degrees, edit existing certifications, or
                            reorganize your learning timeline.
                        </p>
                    </div>
                    <a href="{{ route('admin.education.create') }}"
                        class="flex items-center gap-2 bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg font-bold text-sm shadow-lg shadow-blue-500/20 transition-all active:scale-95 whitespace-nowrap">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        <span>Add New Education</span>
                    </a>
                </div>
            </div>
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Stat Card 1 -->
                <div
                    class="flex flex-col gap-1 rounded-xl p-5 border border-slate-200 dark:border-slate-800 bg-white dark:bg-[#111418] shadow-sm">
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium uppercase tracking-wider">Degrees
                        </p>
                        <span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-md">school</span>
                    </div>
                    <p class="text-slate-900 dark:text-white text-3xl font-bold">{{ $educations->count() }}</p>
                    <p class="text-slate-400 dark:text-slate-500 text-xs">Total Education Records</p>
                </div>
                <!-- Stat Card 2 -->
                <div
                    class="flex flex-col gap-1 rounded-xl p-5 border border-slate-200 dark:border-slate-800 bg-white dark:bg-[#111418] shadow-sm">
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium uppercase tracking-wider">
                            Certifications</p>
                        <span
                            class="material-symbols-outlined text-emerald-500 bg-emerald-500/10 p-1.5 rounded-md">verified</span>
                    </div>
                    <p class="text-slate-900 dark:text-white text-3xl font-bold">{{ $educations->where('end_year', null)->count() }}</p>
                    <p class="text-slate-400 dark:text-slate-500 text-xs">Current Studies</p>
                </div>
                <!-- Stat Card 3 -->
                <div
                    class="flex flex-col gap-1 rounded-xl p-5 border border-slate-200 dark:border-slate-800 bg-white dark:bg-[#111418] shadow-sm">
                    <div class="flex items-center justify-between mb-2">
                        <p class="text-slate-500 dark:text-slate-400 text-sm font-medium uppercase tracking-wider">Courses
                        </p>
                        <span
                            class="material-symbols-outlined text-purple-500 bg-purple-500/10 p-1.5 rounded-md">cast_for_education</span>
                    </div>
                    <p class="text-slate-900 dark:text-white text-3xl font-bold">{{ $educations->pluck('career')->unique()->count() }}</p>
                    <p class="text-slate-400 dark:text-slate-500 text-xs">Different Careers</p>
                </div>
            </div>
            <!-- List Content -->
            <div class="flex flex-col gap-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Academic History</h3>
                    <div class="flex gap-2">
                        <button aria-label="Filter list"
                            class="p-2 text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                            <span class="material-symbols-outlined">filter_list</span>
                        </button>
                        <button aria-label="Sort list"
                            class="p-2 text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
                            <span class="material-symbols-outlined">sort</span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    @forelse ($educations as $education)
                        <div
                            class="group flex flex-col sm:flex-row gap-4 bg-white dark:bg-[#111418] border border-slate-200 dark:border-slate-800 p-4 rounded-xl hover:border-primary/50 transition-colors shadow-sm">
                            <!-- Image/Logo -->
                            <div class="bg-center bg-no-repeat bg-cover rounded-lg w-full sm:w-[80px] h-[80px] shrink-0 border border-slate-100 dark:border-slate-700 @if($education->institution_logo) bg-gray-100 dark:bg-slate-800 @endif"
                                @if($education->institution_logo)
                                    style="background-image: url('{{ Storage::url($education->institution_logo) }}')"
                                @else
                                    style="background-image: url('https://via.placeholder.com/80x80/e2e8f0/64748b?text={{ substr($education->institution_name, 0, 1) }}')"
                                @endif>
                            </div>
                            <!-- Content -->
                            <div class="flex flex-1 flex-col justify-center gap-1">
                                <div class="flex flex-wrap justify-between items-start gap-2">
                                    <h4 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">{{ $education->degree_title }}</h4>
                                    <span
                                        class="inline-flex items-center rounded-md @if($education->end_year) bg-green-50 dark:bg-green-500/10 text-green-700 dark:text-green-400 @else bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 @endif px-2 py-1 text-xs font-medium ring-1 ring-inset @if($education->end_year) ring-green-600/20 @else ring-slate-500/10 @endif">
                                        {{ $education->end_year ? 'Completed' : 'In Progress' }}
                                    </span>
                                </div>
                                <p class="text-slate-700 dark:text-slate-300 text-sm font-medium">{{ $education->institution_name }}</p>
                                @if($education->career)
                                    <p class="text-slate-600 dark:text-slate-400 text-sm">{{ $education->career }}</p>
                                @endif
                                <div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 text-xs mt-1">
                                    <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                                    <span>{{ $education->start_year }}{{ $education->end_year ? ' - ' . $education->end_year : ' - Present' }}</span>
                                </div>
                                @if($education->description)
                                    <p class="text-slate-500 dark:text-slate-400 text-sm mt-2 line-clamp-2">
                                        {{ Str::limit($education->description, 150) }}
                                    </p>
                                @endif
                            </div>
                            <!-- Actions -->
                            <div
                                class="flex sm:flex-col items-center justify-center sm:border-l border-slate-200 dark:border-slate-800 sm:pl-4 gap-2 pt-4 sm:pt-0 mt-2 sm:mt-0 border-t sm:border-t-0">
                                <a href="{{ route('admin.education.edit', $education) }}" aria-label="Edit"
                                    class="flex items-center justify-center size-9 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </a>
                                <form action="{{ route('admin.education.destroy', $education) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this education record?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" aria-label="Delete"
                                        class="flex items-center justify-center size-9 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 text-slate-500 dark:text-slate-400 hover:text-red-600 dark:hover:text-red-400 transition-colors">
                                        <span class="material-symbols-outlined text-[20px]">delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="flex flex-col items-center justify-center py-12 text-center">
                            <div class="w-16 h-16 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center mb-4">
                                <span class="material-symbols-outlined text-2xl text-slate-400 dark:text-slate-600">school</span>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-900 dark:text-white mb-2">No Education Records</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 max-w-md">
                                You haven't added any education records yet. Start by adding your first degree, certification, or course.
                            </p>
                            <a href="{{ route('admin.education.create') }}"
                                class="inline-flex items-center gap-2 bg-primary hover:bg-blue-600 text-white px-4 py-2 rounded-lg font-medium text-sm shadow-lg shadow-blue-500/20 transition-all">
                                <span class="material-symbols-outlined text-[20px]">add</span>
                                <span>Add Education</span>
                            </a>
                        </div>
                    @endforelse
                </div>
            </div>
            <!-- Footer / Pagination (Simulated) -->
            <div class="flex items-center justify-between border-t border-slate-200 dark:border-slate-800 pt-4 pb-8">
                <p class="text-sm text-slate-500 dark:text-slate-400">Showing <span
                        class="font-medium text-slate-900 dark:text-white">{{ $educations->count() }}</span> education record{{ $educations->count() != 1 ? 's' : '' }}</p>
                <nav aria-label="Pagination" class="isolate inline-flex -space-x-px rounded-md shadow-sm">
                    <a class="relative inline-flex items-center rounded-l-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 dark:ring-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 focus:z-20 focus:outline-offset-0"
                        href="#">
                        <span class="sr-only">Previous</span>
                        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                    </a>
                    <a aria-current="page"
                        class="relative z-10 inline-flex items-center bg-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary"
                        href="#">1</a>
                    <a class="relative inline-flex items-center rounded-r-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 dark:ring-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 focus:z-20 focus:outline-offset-0"
                        href="#">
                        <span class="sr-only">Next</span>
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </a>
                </nav>
            </div>
        </div>
    </main>
@endsection
