@extends('layouts.dashboard')

@section('content')
    <main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark h-full">
        <div class="flex justify-center w-full min-h-full py-8 px-4 sm:px-6 md:px-12 lg:px-24">
            <div class="flex flex-col w-full max-w-[960px] gap-8">
                <!-- Page Heading -->
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div class="flex flex-col gap-1">
                        <h2
                            class="text-3xl md:text-4xl font-black leading-tight tracking-tight text-gray-900 dark:text-white">
                            Add New Education</h2>
                        <p class="text-gray-500 dark:text-text-secondary text-base">Add details about your degree,
                            certificate, or bootcamp.</p>
                    </div>
                    <button
                        class="group flex items-center justify-center gap-2 rounded-lg bg-white dark:bg-surface-dark border border-gray-200 dark:border-border-dark px-4 py-2.5 transition-all hover:bg-gray-50 dark:hover:bg-[#252a33]">
                        <span
                            class="material-symbols-outlined text-[20px] text-gray-600 dark:text-white group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        <span class="text-sm font-bold text-gray-800 dark:text-white">Back to List</span>
                    </button>
                </div>
                <!-- Main Form Card -->
                <div
                    class="bg-white dark:bg-surface-dark rounded-xl border border-gray-200 dark:border-border-dark shadow-sm overflow-hidden">
                    <!-- Form Content -->
                    <div class="p-6 md:p-8 flex flex-col gap-8">
                        <!-- Section: Basic Info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Institution /
                                    University</span>
                                <input
                                    class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow"
                                    placeholder="e.g. Stanford University" type="text" />
                            </label>
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Degree / Certificate
                                    Title</span>
                                <input
                                    class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow"
                                    placeholder="e.g. Master of Computer Science" type="text" />
                            </label>
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Field of Study <span
                                        class="text-text-secondary font-normal">(Optional)</span></span>
                                <input
                                    class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow"
                                    placeholder="e.g. Artificial Intelligence" type="text" />
                            </label>
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Location</span>
                                <div class="relative">
                                    <input
                                        class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow"
                                        placeholder="e.g. San Francisco, CA" type="text" />
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-text-secondary">location_on</span>
                                </div>
                            </label>
                        </div>
                        <hr class="border-gray-200 dark:border-border-dark" />
                        <!-- Section: Dates -->
                        <div class="flex flex-col gap-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                                <label class="flex flex-col gap-2">
                                    <span class="text-sm font-medium text-gray-700 dark:text-white">Start Date</span>
                                    <input
                                        class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow"
                                        type="month" />
                                </label>
                                <div class="flex flex-col gap-2">
                                    <label class="flex flex-col gap-2 opacity-100 transition-opacity" id="end-date-label">
                                        <span class="text-sm font-medium text-gray-700 dark:text-white">End Date</span>
                                        <input
                                            class="form-input w-full rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow"
                                            type="month" />
                                    </label>
                                    <!-- Checkbox -->
                                    <label class="flex items-center gap-3 pt-2 cursor-pointer group">
                                        <input
                                            class="h-5 w-5 rounded border-gray-300 dark:border-border-dark bg-transparent text-primary focus:ring-0 focus:ring-offset-0 transition-all checked:bg-primary checked:border-primary"
                                            type="checkbox" />
                                        <span
                                            class="text-sm text-gray-600 dark:text-text-secondary group-hover:text-primary transition-colors">I
                                            am currently studying here</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="border-gray-200 dark:border-border-dark" />
                        <!-- Section: Details -->
                        <div class="flex flex-col gap-6">
                            <label class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Description &amp; Key
                                    Achievements</span>
                                <textarea
                                    class="form-textarea w-full resize-y rounded-lg border border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-4 py-3 text-base text-gray-900 dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-shadow"
                                    placeholder="Describe your responsibilities, key subjects, GPA, or projects..." rows="6"></textarea>
                                <span class="text-xs text-text-secondary text-right">Markdown supported</span>
                            </label>
                            <!-- File Upload -->
                            <div class="flex flex-col gap-2">
                                <span class="text-sm font-medium text-gray-700 dark:text-white">Institution Logo <span
                                        class="text-text-secondary font-normal">(Optional)</span></span>
                                <div
                                    class="flex w-full items-center justify-center rounded-xl border-2 border-dashed border-gray-300 dark:border-border-dark bg-gray-50 dark:bg-[#111621] p-8 transition-colors hover:border-primary hover:bg-primary/5 cursor-pointer group">
                                    <div class="flex flex-col items-center gap-3 text-center">
                                        <div
                                            class="rounded-full bg-gray-200 dark:bg-surface-dark p-3 text-gray-500 dark:text-text-secondary group-hover:text-primary transition-colors">
                                            <span class="material-symbols-outlined text-[32px]">cloud_upload</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">
                                                <span class="text-primary font-bold">Click to upload</span> or drag and drop
                                            </p>
                                            <p class="text-xs text-text-secondary">SVG, PNG, JPG or GIF (max. 2MB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Actions Footer -->
                    <div
                        class="flex items-center justify-end gap-3 border-t border-gray-200 dark:border-border-dark bg-gray-50 dark:bg-[#111621] px-6 py-4 md:px-8">
                        <button
                            class="h-10 rounded-lg px-6 text-sm font-bold text-gray-600 dark:text-text-secondary hover:bg-gray-200 dark:hover:bg-surface-dark transition-colors">
                            Cancel
                        </button>
                        <button
                            class="h-10 rounded-lg bg-primary px-6 text-sm font-bold text-white shadow-lg shadow-primary/30 hover:bg-primary/90 hover:shadow-primary/50 transition-all">
                            Save Education
                        </button>
                    </div>
                </div>
                <div class="h-10"></div> <!-- Spacer -->
            </div>
        </div>
    </main>
@endsection
