@extends('layouts.dashboard')

@section('content')
    <main class="flex-1 overflow-y-auto p-4 lg:p-10 scroll-smooth">
        <div class="max-w-[1200px] mx-auto flex flex-col gap-8 pb-20">
            <!-- Page Heading & Actions -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="flex flex-col gap-1">
                    <h1 class="text-white text-3xl font-bold tracking-tight">Create New Project</h1>
                    <p class="text-[#9d9db9] text-sm">Fill in the details below to add a new case study to your
                        portfolio.</p>
                </div>
                <div class="flex items-center gap-3">
                    <button
                        class="px-4 py-2 rounded-lg bg-[#282839] text-white text-sm font-medium hover:bg-[#3b3b54] transition-colors border border-transparent hover:border-[#4b4b6a]">
                        Save Draft
                    </button>
                    <button
                        class="px-4 py-2 rounded-lg bg-primary text-white text-sm font-medium hover:bg-blue-700 transition-colors shadow-[0_0_15px_rgba(19,19,236,0.3)]">
                        Publish Project
                    </button>
                </div>
            </div>
            <!-- Form Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Column (Left) -->
                <div class="lg:col-span-2 flex flex-col gap-6">
                    <!-- Basic Info Card -->
                    <div class="bg-[#1c1c27] rounded-xl border border-[#282839] p-6 flex flex-col gap-6">
                        <h3 class="text-white text-lg font-bold border-b border-[#282839] pb-4">Project Details</h3>
                        <!-- Title Input -->
                        <label class="flex flex-col gap-2">
                            <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Project
                                Title</span>
                            <input
                                class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-3 text-base"
                                placeholder="e.g. Fintech Dashboard Redesign" />
                        </label>
                        <!-- Slug Input -->
                        <label class="flex flex-col gap-2">
                            <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Slug</span>
                            <div
                                class="flex w-full rounded-lg border border-[#3b3b54] bg-[#111118] overflow-hidden focus-within:border-primary focus-within:ring-1 focus-within:ring-primary">
                                <span
                                    class="flex items-center pl-3 text-[#9d9db9] text-sm border-r border-[#3b3b54] bg-[#1c1c27] px-3">domain.com/projects/</span>
                                <input
                                    class="flex-1 bg-transparent border-none text-white placeholder-[#9d9db9] p-3 text-sm focus:ring-0"
                                    placeholder="fintech-dashboard" />
                            </div>
                        </label>
                        <!-- Short Description -->
                        <label class="flex flex-col gap-2">
                            <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Short
                                Description</span>
                            <textarea
                                class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-3 text-base resize-none"
                                placeholder="A brief summary for the project card..." rows="3"></textarea>
                            <span class="text-xs text-[#9d9db9] text-right">0/160 characters</span>
                        </label>
                    </div>
                    <!-- Rich Text Editor (Mock) -->
                    <div
                        class="bg-[#1c1c27] rounded-xl border border-[#282839] flex flex-col overflow-hidden min-h-[400px]">
                        <!-- Editor Toolbar -->
                        <div class="bg-[#282839] p-2 flex gap-1 border-b border-[#3b3b54] flex-wrap">
                            <button class="p-2 rounded hover:bg-[#3b3b54] text-white" title="Bold"><span
                                    class="material-symbols-outlined text-[20px]">format_bold</span></button>
                            <button class="p-2 rounded hover:bg-[#3b3b54] text-white" title="Italic"><span
                                    class="material-symbols-outlined text-[20px]">format_italic</span></button>
                            <button class="p-2 rounded hover:bg-[#3b3b54] text-white" title="Underline"><span
                                    class="material-symbols-outlined text-[20px]">format_underlined</span></button>
                            <div class="w-px h-6 bg-[#4b4b6a] mx-1 self-center"></div>
                            <button class="p-2 rounded hover:bg-[#3b3b54] text-white" title="H1"><span
                                    class="material-symbols-outlined text-[20px]">format_h1</span></button>
                            <button class="p-2 rounded hover:bg-[#3b3b54] text-white" title="H2"><span
                                    class="material-symbols-outlined text-[20px]">format_h2</span></button>
                            <div class="w-px h-6 bg-[#4b4b6a] mx-1 self-center"></div>
                            <button class="p-2 rounded hover:bg-[#3b3b54] text-white" title="List"><span
                                    class="material-symbols-outlined text-[20px]">format_list_bulleted</span></button>
                            <button class="p-2 rounded hover:bg-[#3b3b54] text-white" title="Quote"><span
                                    class="material-symbols-outlined text-[20px]">format_quote</span></button>
                            <button class="p-2 rounded hover:bg-[#3b3b54] text-white" title="Link"><span
                                    class="material-symbols-outlined text-[20px]">link</span></button>
                            <button class="p-2 rounded hover:bg-[#3b3b54] text-white" title="Image"><span
                                    class="material-symbols-outlined text-[20px]">image</span></button>
                        </div>
                        <!-- Editor Content Area -->
                        <div class="flex-1 bg-[#111118] p-6 text-gray-300 font-body leading-relaxed outline-none"
                            contenteditable="true">
                            <p>Describe the project challenge, your role, and the solution...</p>
                            <br />
                            <h2 class="text-xl font-bold text-white mb-2">The Challenge</h2>
                            <p class="mb-4">Start typing here...</p>
                        </div>
                    </div>
                </div>
                <!-- Secondary Column (Right) -->
                <div class="lg:col-span-1 flex flex-col gap-6">
                    <!-- Thumbnail Upload -->
                    <div class="bg-[#1c1c27] rounded-xl border border-[#282839] p-6 flex flex-col gap-4">
                        <h3 class="text-white text-sm font-bold uppercase tracking-wide">Featured Image</h3>
                        <div
                            class="border-2 border-dashed border-[#3b3b54] rounded-lg bg-[#111118] hover:bg-[#161621] transition-colors cursor-pointer group flex flex-col items-center justify-center p-8 text-center relative overflow-hidden">
                            <span
                                class="material-symbols-outlined text-[#9d9db9] text-4xl mb-3 group-hover:text-primary transition-colors">cloud_upload</span>
                            <p class="text-white text-sm font-medium">Click to upload</p>
                            <p class="text-[#9d9db9] text-xs mt-1">or drag and drop SVG, PNG, JPG</p>
                        </div>
                    </div>
                    <!-- Metadata -->
                    <div class="bg-[#1c1c27] rounded-xl border border-[#282839] p-6 flex flex-col gap-6">
                        <h3 class="text-white text-sm font-bold uppercase tracking-wide">Metadata</h3>
                        <!-- Tech Stack Tags -->
                        <label class="flex flex-col gap-2">
                            <span class="text-[#9d9db9] text-xs font-medium uppercase">Tech Stack</span>
                            <div
                                class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] p-2 flex flex-wrap gap-2 focus-within:border-primary focus-within:ring-1 focus-within:ring-primary min-h-[50px]">
                                <span
                                    class="bg-[#282839] text-white text-xs font-medium px-2 py-1 rounded flex items-center gap-1">
                                    React
                                    <button class="hover:text-red-400"><span
                                            class="material-symbols-outlined text-[14px]">close</span></button>
                                </span>
                                <span
                                    class="bg-[#282839] text-white text-xs font-medium px-2 py-1 rounded flex items-center gap-1">
                                    Tailwind
                                    <button class="hover:text-red-400"><span
                                            class="material-symbols-outlined text-[14px]">close</span></button>
                                </span>
                                <input
                                    class="bg-transparent border-none text-white text-sm p-1 focus:ring-0 flex-1 min-w-[60px]"
                                    placeholder="Add..." />
                            </div>
                        </label>
                        <!-- Date Picker -->
                        <label class="flex flex-col gap-2">
                            <span class="text-[#9d9db9] text-xs font-medium uppercase">Date Completed</span>
                            <div class="relative">
                                <input
                                    class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white p-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary [color-scheme:dark]"
                                    type="date" />
                            </div>
                        </label>
                        <!-- Links -->
                        <div class="flex flex-col gap-3">
                            <span class="text-[#9d9db9] text-xs font-medium uppercase">External Links</span>
                            <div class="flex items-center gap-2">
                                <div class="bg-[#282839] p-2 rounded-lg text-white">
                                    <span class="material-symbols-outlined text-[20px]">link</span>
                                </div>
                                <input
                                    class="flex-1 rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-2 text-sm"
                                    placeholder="Live Demo URL" />
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="bg-[#282839] p-2 rounded-lg text-white">
                                    <span class="material-symbols-outlined text-[20px]">code</span>
                                </div>
                                <input
                                    class="flex-1 rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-2 text-sm"
                                    placeholder="GitHub Repo URL" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
