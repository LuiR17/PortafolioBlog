@extends('layouts.dashboard')

@section('content')
    <main class="flex-1 overflow-y-auto p-4 lg:p-10 scroll-smooth">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="max-w-[1200px] mx-auto flex flex-col gap-8 pb-20">
                <!-- Page Heading & Actions -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <div class="flex flex-col gap-1">
                        <h1 class="text-white text-3xl font-bold tracking-tight">Create New Project</h1>
                        <p class="text-[#9d9db9] text-sm">Fill in the details below to add a new case study to your
                            portfolio.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button type="submit" name="status" value="draft"
                            class="px-4 py-2 rounded-lg bg-[#282839] text-white text-sm font-medium hover:bg-[#3b3b54] transition-colors border border-transparent hover:border-[#4b4b6a]">
                            Save Draft
                        </button>
                        <button type="submit" name="status" value="published"
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
                                    placeholder="e.g. Fintech Dashboard Redesign" name="name" />
                            </label>
                            <!-- Short Description -->
                            <label class="flex flex-col gap-2">
                                <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Short
                                    Description</span>
                                <textarea
                                    class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-3 text-base resize-none"
                                    placeholder="A brief summary for the project card..." rows="3" name="short_description"></textarea>
                                <span class="text-xs text-[#9d9db9] text-right">0/160 characters</span>
                            </label>
                            <!-- Client Name Input -->
                            <label class="flex flex-col gap-2">
                                <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Client Name</span>
                                <input
                                    class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-3 text-base"
                                    placeholder="e.g. Acme Corporation" name="client_name" />
                            </label>
                            <!-- Role Input -->
                            <label class="flex flex-col gap-2">
                                <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Your Role</span>
                                <input
                                    class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-3 text-base"
                                    placeholder="e.g. Lead Developer" name="role" />
                            </label>
                            <!-- Platform Input -->
                            <label class="flex flex-col gap-2">
                                <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Platform</span>
                                <input
                                    class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-3 text-base"
                                    placeholder="e.g. Web, Mobile, Desktop" name="platform" />
                            </label>
                            <!-- Full Description -->
                            <label class="flex flex-col gap-2">
                                <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Full
                                    Description</span>
                                <textarea
                                    class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-3 text-base resize-none"
                                    placeholder="A detailed description of the project..." rows="6" name="full_description"></textarea>
                            </label>
                            <!-- Problem Solved -->
                            <label class="flex flex-col gap-2">
                                <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Problem
                                    Solved</span>
                                <textarea
                                    class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-3 text-base resize-none"
                                    placeholder="What problem did this project solve?" rows="3" name="problem_solved"></textarea>
                            </label>
                            <!-- Status Select -->
                            <label class="flex flex-col gap-2">
                                <span class="text-[#e0e0e0] text-sm font-medium uppercase tracking-wide">Status</span>
                                <select name="status"
                                    class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white p-3 text-base focus:border-primary focus:ring-1 focus:ring-primary">
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                </select>
                            </label>
                        </div>
                        <!-- Rich Text Editor (tinyMce) -->
                        <div
                            class="bg-[#1c1c27] rounded-xl border border-[#282839] flex flex-col overflow-hidden min-h-[400px]">
                            <x-forms.tinymce-editor/>
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
                                <input type="file" name="preview_image"
                                    class="absolute inset-0 opacity-0 cursor-pointer" />
                            </div>
                        </div>
                        <!-- Metadata -->
                        <div class="bg-[#1c1c27] rounded-xl border border-[#282839] p-6 flex flex-col gap-6">
                            <h3 class="text-white text-sm font-bold uppercase tracking-wide">Metadata</h3>
                            <!-- Tech Stack Tags -->

                            <!-- Date Picker -->
                            <label class="flex flex-col gap-2">
                                <span class="text-[#9d9db9] text-xs font-medium uppercase">Date Completed</span>
                                <div class="relative">
                                    <input
                                        class="w-full rounded-lg border border-[#3b3b54] bg-[#111118] text-white p-3 text-sm focus:border-primary focus:ring-1 focus:ring-primary [color-scheme:dark]"
                                        type="date" name="development_time" />
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
                                        placeholder="Live Demo URL" name="demo_url" />
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="bg-[#282839] p-2 rounded-lg text-white">
                                        <span class="material-symbols-outlined text-[20px]">code</span>
                                    </div>
                                    <input
                                        class="flex-1 rounded-lg border border-[#3b3b54] bg-[#111118] text-white placeholder-[#9d9db9] focus:border-primary focus:ring-1 focus:ring-primary p-2 text-sm"
                                        placeholder="GitHub Repo URL" name="repository_url" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </main>
@endsection
