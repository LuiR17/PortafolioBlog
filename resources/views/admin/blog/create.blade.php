@extends('layouts.dashboard')

@section('content')
<main class="flex-1 flex flex-col h-full relative overflow-hidden bg-background-light dark:bg-[#0c0c16]">
<!-- Sticky TopNavBar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#282839] bg-background-dark/95 backdrop-blur-sm px-6 py-4 z-20 shrink-0">
<div class="flex items-center gap-4 text-white">
<button class="size-8 flex items-center justify-center rounded-full hover:bg-[#282839] transition-colors lg:hidden text-white">
<span class="material-symbols-outlined">menu</span>
</button>
<a class="flex items-center gap-2 text-[#9d9db9] hover:text-white transition-colors text-sm font-medium" href="#">
<span class="material-symbols-outlined text-lg">arrow_back</span>
<span>Back to Posts</span>
</a>
</div>
<div class="flex gap-3">
<button class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-[#282839] hover:bg-[#323246] text-white text-sm font-bold tracking-[0.015em] transition-all border border-transparent hover:border-[#3b3b54]">
<span>Save Draft</span>
</button>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-primary hover:bg-blue-600 text-white text-sm font-bold tracking-[0.015em] transition-all shadow-lg shadow-primary/20">
<span class="mr-2 material-symbols-outlined text-[18px]">rocket_launch</span>
<span>Publish</span>
</button>
</div>
</header>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-4 md:p-6 lg:p-8">
<div class="mx-auto max-w-[1200px] flex flex-col gap-6">
<!-- Breadcrumbs -->
<div class="flex items-center flex-wrap gap-2 text-sm">
<a class="text-[#9d9db9] hover:text-white transition-colors" href="#">Admin</a>
<span class="text-[#56566c]">/</span>
<a class="text-[#9d9db9] hover:text-white transition-colors" href="#">Posts</a>
<span class="text-[#56566c]">/</span>
<span class="text-white font-medium">New Blog Post</span>
</div>
<!-- Main Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 h-full">
<!-- Left Column: Editor (8 cols) -->
<div class="lg:col-span-8 flex flex-col gap-4">
<!-- Title Input -->
<input class="w-full bg-transparent text-3xl md:text-4xl lg:text-5xl font-bold placeholder:text-[#3b3b54] text-white border-none focus:ring-0 p-0 leading-tight" placeholder="Enter post title..." value="Building a Modern Developer Portfolio"/>
<!-- Editor Container -->
<div class="flex flex-col flex-1 min-h-[500px] bg-surface-dark rounded-xl border border-[#282839] overflow-hidden shadow-sm">
<!-- Toolbar -->
<div class="flex flex-wrap items-center gap-1 p-2 border-b border-[#282839] bg-[#1a1a24]">
<button class="p-1.5 rounded hover:bg-[#282839] text-[#9d9db9] hover:text-white transition-colors" title="Bold">
<span class="material-symbols-outlined text-[20px]">format_bold</span>
</button>
<button class="p-1.5 rounded hover:bg-[#282839] text-[#9d9db9] hover:text-white transition-colors" title="Italic">
<span class="material-symbols-outlined text-[20px]">format_italic</span>
</button>
<button class="p-1.5 rounded hover:bg-[#282839] text-[#9d9db9] hover:text-white transition-colors" title="Underline">
<span class="material-symbols-outlined text-[20px]">format_underlined</span>
</button>
<div class="w-px h-5 bg-[#3b3b54] mx-1"></div>
<button class="p-1.5 rounded hover:bg-[#282839] text-[#9d9db9] hover:text-white transition-colors" title="Heading 1">
<span class="material-symbols-outlined text-[20px]">format_h1</span>
</button>
<button class="p-1.5 rounded hover:bg-[#282839] text-[#9d9db9] hover:text-white transition-colors" title="Heading 2">
<span class="material-symbols-outlined text-[20px]">format_h2</span>
</button>
<div class="w-px h-5 bg-[#3b3b54] mx-1"></div>
<button class="p-1.5 rounded hover:bg-[#282839] text-[#9d9db9] hover:text-white transition-colors" title="Link">
<span class="material-symbols-outlined text-[20px]">link</span>
</button>
<button class="p-1.5 rounded hover:bg-[#282839] text-[#9d9db9] hover:text-white transition-colors" title="Image">
<span class="material-symbols-outlined text-[20px]">image</span>
</button>
<button class="p-1.5 rounded hover:bg-[#282839] text-[#9d9db9] hover:text-white transition-colors" title="Code Block">
<span class="material-symbols-outlined text-[20px]">code_blocks</span>
</button>
<button class="p-1.5 rounded hover:bg-[#282839] text-[#9d9db9] hover:text-white transition-colors" title="Quote">
<span class="material-symbols-outlined text-[20px]">format_quote</span>
</button>
<div class="ml-auto flex items-center gap-2">
<span class="text-xs text-[#56566c] uppercase tracking-wider font-bold px-2">Markdown</span>
</div>
</div>
<!-- Text Area -->
<textarea class="w-full h-full flex-1 bg-transparent p-6 text-base text-[#d1d5db] placeholder:text-[#3b3b54] border-none focus:ring-0 resize-none font-body leading-relaxed" placeholder="Start writing your masterpiece..."></textarea>
</div>
</div>
<!-- Right Column: Sidebar (4 cols) -->
<div class="lg:col-span-4 flex flex-col gap-6">
<!-- Publishing Card -->
<div class="bg-surface-dark rounded-xl border border-[#282839] p-5 shadow-sm">
<h3 class="text-white text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-xl">public</span>
                                    Publishing
                                </h3>
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<span class="text-[#9d9db9] text-sm">Status</span>
<div class="flex items-center gap-2 bg-[#282839] rounded-full px-3 py-1 border border-[#3b3b54]">
<div class="size-2 rounded-full bg-emerald-500"></div>
<span class="text-xs font-bold text-white uppercase tracking-wider">Draft</span>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="text-[#9d9db9] text-sm">Visibility</label>
<select class="w-full bg-[#151520] border border-[#3b3b54] rounded-lg text-white text-sm px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none">
<option>Public</option>
<option>Private</option>
<option>Password Protected</option>
</select>
</div>
<div class="flex flex-col gap-1">
<label class="text-[#9d9db9] text-sm">Publish Date</label>
<input class="w-full bg-[#151520] border border-[#3b3b54] rounded-lg text-white text-sm px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none [color-scheme:dark]" type="datetime-local"/>
</div>
</div>
</div>
<!-- URL Slug -->
<div class="bg-surface-dark rounded-xl border border-[#282839] p-5 shadow-sm">
<h3 class="text-white text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-xl">link</span>
                                    URL Slug
                                </h3>
<div class="flex flex-col gap-2">
<p class="text-xs text-[#9d9db9]">The URL-friendly version of the name.</p>
<div class="flex items-center bg-[#151520] border border-[#3b3b54] rounded-lg overflow-hidden focus-within:border-primary focus-within:ring-1 focus-within:ring-primary">
<span class="pl-3 pr-1 text-[#56566c] text-sm font-mono">/blog/</span>
<input class="flex-1 bg-transparent border-none text-white text-sm py-2.5 focus:ring-0 font-mono pl-0" type="text" value="building-modern-portfolio"/>
</div>
</div>
</div>
<!-- Tags -->
<div class="bg-surface-dark rounded-xl border border-[#282839] p-5 shadow-sm">
<h3 class="text-white text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-xl">label</span>
                                    Tags
                                </h3>
<div class="flex flex-col gap-3">
<div class="flex flex-wrap gap-2">
<span class="inline-flex items-center gap-1 rounded bg-primary/20 border border-primary/30 px-2 py-1 text-xs font-medium text-primary-300">
                                            React
                                            <button class="hover:text-white ml-1"><span class="material-symbols-outlined text-[14px]">close</span></button>
</span>
<span class="inline-flex items-center gap-1 rounded bg-primary/20 border border-primary/30 px-2 py-1 text-xs font-medium text-primary-300">
                                            Tailwind
                                            <button class="hover:text-white ml-1"><span class="material-symbols-outlined text-[14px]">close</span></button>
</span>
<span class="inline-flex items-center gap-1 rounded bg-primary/20 border border-primary/30 px-2 py-1 text-xs font-medium text-primary-300">
                                            Design
                                            <button class="hover:text-white ml-1"><span class="material-symbols-outlined text-[14px]">close</span></button>
</span>
</div>
<input class="w-full bg-[#151520] border border-[#3b3b54] rounded-lg text-white text-sm px-3 py-2.5 focus:border-primary focus:ring-1 focus:ring-primary outline-none placeholder:text-[#56566c]" placeholder="Add a tag..." type="text"/>
</div>
</div>
<!-- Featured Image -->
<div class="bg-surface-dark rounded-xl border border-[#282839] p-5 shadow-sm">
<h3 class="text-white text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-xl">image</span>
                                    Featured Image
                                </h3>
<div class="relative group cursor-pointer">
<div class="w-full aspect-video bg-[#151520] border-2 border-dashed border-[#3b3b54] rounded-lg flex flex-col items-center justify-center gap-2 hover:border-primary/50 hover:bg-[#1a1a25] transition-all">
<span class="material-symbols-outlined text-[#56566c] text-4xl group-hover:text-primary transition-colors">cloud_upload</span>
<p class="text-xs text-[#9d9db9] font-medium group-hover:text-white transition-colors">Click to upload or drag &amp; drop</p>
</div>
<!-- Preview Image (Hidden by default or overlay) -->
</div>
</div>
<!-- SEO Preview -->
<div class="bg-surface-dark rounded-xl border border-[#282839] p-5 shadow-sm">
<h3 class="text-white text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-xl">search</span>
                                    SEO Preview
                                </h3>
<div class="flex flex-col gap-1 p-3 bg-[#151520] rounded border border-[#282839]">
<p class="text-xs text-[#9d9db9]">Google Search Result</p>
<p class="text-primary text-sm font-medium truncate hover:underline cursor-pointer">Building a Modern Developer Portfolio - Alex's Blog</p>
<p class="text-green-500 text-xs truncate">https://devportfolio.com/blog/building-modern-portfolio</p>
<p class="text-[#9d9db9] text-xs line-clamp-2 mt-1">
                                        Learn how to build a stand-out developer portfolio using the latest web technologies including React, Tailwind CSS, and more...
                                    </p>
</div>
</div>
</div>
</div>
<div class="h-20"></div> <!-- Spacer for bottom scrolling -->
</div>
</div>
</main>
@endsection