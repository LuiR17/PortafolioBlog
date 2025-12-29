@extends('layouts.dashboard')

@section('content')
<main class="flex-1 flex flex-col h-screen overflow-y-auto bg-background-light dark:bg-background-dark relative">
<!-- Mobile Header (Visible only on small screens) -->
<header class="lg:hidden flex items-center justify-between p-4 bg-white dark:bg-[#111418] border-b border-slate-200 dark:border-slate-800 sticky top-0 z-30">
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
<h2 class="text-3xl md:text-4xl font-black tracking-tight text-slate-900 dark:text-white">Manage Education</h2>
<p class="text-slate-500 dark:text-slate-400 text-base leading-relaxed">
                                Keep your academic history up to date. Add new degrees, edit existing certifications, or reorganize your learning timeline.
                            </p>
</div>
<button class="flex items-center gap-2 bg-primary hover:bg-blue-600 text-white px-5 py-2.5 rounded-lg font-bold text-sm shadow-lg shadow-blue-500/20 transition-all active:scale-95 whitespace-nowrap">
<span class="material-symbols-outlined text-[20px]">add</span>
<span>Add New Education</span>
</button>
</div>
</div>
<!-- Stats Overview -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
<!-- Stat Card 1 -->
<div class="flex flex-col gap-1 rounded-xl p-5 border border-slate-200 dark:border-slate-800 bg-white dark:bg-[#111418] shadow-sm">
<div class="flex items-center justify-between mb-2">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium uppercase tracking-wider">Degrees</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-md">school</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold">2</p>
<p class="text-slate-400 dark:text-slate-500 text-xs">Bachelor's &amp; Master's</p>
</div>
<!-- Stat Card 2 -->
<div class="flex flex-col gap-1 rounded-xl p-5 border border-slate-200 dark:border-slate-800 bg-white dark:bg-[#111418] shadow-sm">
<div class="flex items-center justify-between mb-2">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium uppercase tracking-wider">Certifications</p>
<span class="material-symbols-outlined text-emerald-500 bg-emerald-500/10 p-1.5 rounded-md">verified</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold">5</p>
<p class="text-slate-400 dark:text-slate-500 text-xs">Active credentials</p>
</div>
<!-- Stat Card 3 -->
<div class="flex flex-col gap-1 rounded-xl p-5 border border-slate-200 dark:border-slate-800 bg-white dark:bg-[#111418] shadow-sm">
<div class="flex items-center justify-between mb-2">
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium uppercase tracking-wider">Courses</p>
<span class="material-symbols-outlined text-purple-500 bg-purple-500/10 p-1.5 rounded-md">cast_for_education</span>
</div>
<p class="text-slate-900 dark:text-white text-3xl font-bold">12</p>
<p class="text-slate-400 dark:text-slate-500 text-xs">Continuing education</p>
</div>
</div>
<!-- List Content -->
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Academic History</h3>
<div class="flex gap-2">
<button aria-label="Filter list" class="p-2 text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
<span class="material-symbols-outlined">filter_list</span>
</button>
<button aria-label="Sort list" class="p-2 text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors">
<span class="material-symbols-outlined">sort</span>
</button>
</div>
</div>
<div class="flex flex-col gap-3">
<!-- Item 1 -->
<div class="group flex flex-col sm:flex-row gap-4 bg-white dark:bg-[#111418] border border-slate-200 dark:border-slate-800 p-4 rounded-xl hover:border-primary/50 transition-colors shadow-sm">
<!-- Image/Logo -->
<div class="bg-center bg-no-repeat bg-cover rounded-lg w-full sm:w-[80px] h-[80px] shrink-0 border border-slate-100 dark:border-slate-700" data-alt="University campus building with modern architecture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCcuj_78C8rhgiHOenMa__Q0YQnbF2tGivdqjNvPoDQjddKwgtAgGq-9MajGpPhpPYTRlO2vutlT9aWq0cYL8Q_Qr7Ryy_Q-xPfknt8NtIQDS84cKsajggmv1F-G9OjSkrlFN04HGdPk5M33N3KRZmGN75i2Se27jejsXBTdw4ifprybXz6fKNnLbiG8kzQhGQhp5TI0jzwgb5a1NrV8i0qKYZyLHL1NIO9Uue82HHvSO59VX4Yg9D_KubonY2uMNQrb1WgJfp8F51d");'>
</div>
<!-- Content -->
<div class="flex flex-1 flex-col justify-center gap-1">
<div class="flex flex-wrap justify-between items-start gap-2">
<h4 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">Master of Business Administration</h4>
<span class="inline-flex items-center rounded-md bg-green-50 dark:bg-green-500/10 px-2 py-1 text-xs font-medium text-green-700 dark:text-green-400 ring-1 ring-inset ring-green-600/20">Completed</span>
</div>
<p class="text-slate-700 dark:text-slate-300 text-sm font-medium">Harvard Business School</p>
<div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 text-xs mt-1">
<span class="material-symbols-outlined text-[16px]">calendar_month</span>
<span>2020 - 2022</span>
<span class="w-1 h-1 rounded-full bg-slate-300 dark:bg-slate-600"></span>
<span>Boston, MA</span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-2 line-clamp-2">
                                    Focus on Strategic Management and Entrepreneurship. Graduated with Distinction. Led the Annual Tech Symposium.
                                </p>
</div>
<!-- Actions -->
<div class="flex sm:flex-col items-center justify-center sm:border-l border-slate-200 dark:border-slate-800 sm:pl-4 gap-2 pt-4 sm:pt-0 mt-2 sm:mt-0 border-t sm:border-t-0">
<button aria-label="Edit" class="flex items-center justify-center size-9 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button aria-label="Delete" class="flex items-center justify-center size-9 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 text-slate-500 dark:text-slate-400 hover:text-red-600 dark:hover:text-red-400 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</div>
<!-- Item 2 -->
<div class="group flex flex-col sm:flex-row gap-4 bg-white dark:bg-[#111418] border border-slate-200 dark:border-slate-800 p-4 rounded-xl hover:border-primary/50 transition-colors shadow-sm">
<!-- Image/Logo -->
<div class="bg-center bg-no-repeat bg-cover rounded-lg w-full sm:w-[80px] h-[80px] shrink-0 border border-slate-100 dark:border-slate-700" data-alt="Abstract geometric logo representing technology" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBINqmxUvsKXw19q-bw4LL1xqVIMjAoErhf9fYsfZhPvmu4SxEUlzi6puyooRxp_dZ4BwCHEdDnImHwVf23rQ_q4Gkgmt_fC6_oR89p5-6JHpPPnpQQeAyLcvD9RP4OlXEW1yzXkWn7w34QCuN_DKhKOi437J9Atb3C9sSkvG_YFsYSZg7Re4PIupREwAgDbYC4XbtwNssSl3vHq4iv_tCV1uHG6il7891w_LVe-cayc0o4wVNLfOVY8ejwjRpoCYDera1iN3lKA2pg");'>
</div>
<!-- Content -->
<div class="flex flex-1 flex-col justify-center gap-1">
<div class="flex flex-wrap justify-between items-start gap-2">
<h4 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">Bachelor of Science in Computer Science</h4>
<span class="inline-flex items-center rounded-md bg-green-50 dark:bg-green-500/10 px-2 py-1 text-xs font-medium text-green-700 dark:text-green-400 ring-1 ring-inset ring-green-600/20">Completed</span>
</div>
<p class="text-slate-700 dark:text-slate-300 text-sm font-medium">University of Technology</p>
<div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 text-xs mt-1">
<span class="material-symbols-outlined text-[16px]">calendar_month</span>
<span>2015 - 2019</span>
<span class="w-1 h-1 rounded-full bg-slate-300 dark:bg-slate-600"></span>
<span>San Francisco, CA</span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-2 line-clamp-2">
                                    Specialized in Artificial Intelligence and Machine Learning. Capstone project focused on Neural Networks for Image Recognition.
                                </p>
</div>
<!-- Actions -->
<div class="flex sm:flex-col items-center justify-center sm:border-l border-slate-200 dark:border-slate-800 sm:pl-4 gap-2 pt-4 sm:pt-0 mt-2 sm:mt-0 border-t sm:border-t-0">
<button aria-label="Edit" class="flex items-center justify-center size-9 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button aria-label="Delete" class="flex items-center justify-center size-9 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 text-slate-500 dark:text-slate-400 hover:text-red-600 dark:hover:text-red-400 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</div>
<!-- Item 3 -->
<div class="group flex flex-col sm:flex-row gap-4 bg-white dark:bg-[#111418] border border-slate-200 dark:border-slate-800 p-4 rounded-xl hover:border-primary/50 transition-colors shadow-sm">
<!-- Image/Logo -->
<div class="bg-center bg-no-repeat bg-cover rounded-lg w-full sm:w-[80px] h-[80px] shrink-0 border border-slate-100 dark:border-slate-700" data-alt="Minimalist design representing online code editor" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCfO0TZ5YQuXgFhNrh17Df1f8zNV19_DsGnxTjrJYfaeUQcJboUka4siRX16dQPha4g6mGDUykksVIgbzbSMyqB5mhNq4FijGPJgH0iEQ2EJNMjCF8JKuAqhPRNL-yFWMq9AuPxpX7kpanZ2TmEB35KV8qyoBVTC1WDist2T-bzfdPWLWkqe4MYiUxuKmuz6O6t0xmf7J8-qMMybS2biD9fXeTa4-s2gzU0tNbaaraGqQr803DDx3v7F4r02dRCi2r-Lu0wLhm4IX0h");'>
</div>
<!-- Content -->
<div class="flex flex-1 flex-col justify-center gap-1">
<div class="flex flex-wrap justify-between items-start gap-2">
<h4 class="text-slate-900 dark:text-white text-lg font-bold leading-tight">Full Stack Web Development Bootcamp</h4>
<span class="inline-flex items-center rounded-md bg-slate-100 dark:bg-slate-800 px-2 py-1 text-xs font-medium text-slate-600 dark:text-slate-400 ring-1 ring-inset ring-slate-500/10">Certification</span>
</div>
<p class="text-slate-700 dark:text-slate-300 text-sm font-medium">CodeAcademy Pro</p>
<div class="flex items-center gap-2 text-slate-500 dark:text-slate-400 text-xs mt-1">
<span class="material-symbols-outlined text-[16px]">calendar_month</span>
<span>2023</span>
<span class="w-1 h-1 rounded-full bg-slate-300 dark:bg-slate-600"></span>
<span>Remote</span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-2 line-clamp-2">
                                    Intensive 12-week program covering React, Node.js, PostgreSQL, and AWS deployment strategies.
                                </p>
</div>
<!-- Actions -->
<div class="flex sm:flex-col items-center justify-center sm:border-l border-slate-200 dark:border-slate-800 sm:pl-4 gap-2 pt-4 sm:pt-0 mt-2 sm:mt-0 border-t sm:border-t-0">
<button aria-label="Edit" class="flex items-center justify-center size-9 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[20px]">edit</span>
</button>
<button aria-label="Delete" class="flex items-center justify-center size-9 rounded-lg hover:bg-red-50 dark:hover:bg-red-900/20 text-slate-500 dark:text-slate-400 hover:text-red-600 dark:hover:text-red-400 transition-colors">
<span class="material-symbols-outlined text-[20px]">delete</span>
</button>
</div>
</div>
</div>
</div>
<!-- Footer / Pagination (Simulated) -->
<div class="flex items-center justify-between border-t border-slate-200 dark:border-slate-800 pt-4 pb-8">
<p class="text-sm text-slate-500 dark:text-slate-400">Showing <span class="font-medium text-slate-900 dark:text-white">1</span> to <span class="font-medium text-slate-900 dark:text-white">3</span> of <span class="font-medium text-slate-900 dark:text-white">3</span> results</p>
<nav aria-label="Pagination" class="isolate inline-flex -space-x-px rounded-md shadow-sm">
<a class="relative inline-flex items-center rounded-l-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 dark:ring-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 focus:z-20 focus:outline-offset-0" href="#">
<span class="sr-only">Previous</span>
<span class="material-symbols-outlined text-[20px]">chevron_left</span>
</a>
<a aria-current="page" class="relative z-10 inline-flex items-center bg-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary" href="#">1</a>
<a class="relative inline-flex items-center rounded-r-md px-2 py-2 text-slate-400 ring-1 ring-inset ring-slate-300 dark:ring-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800 focus:z-20 focus:outline-offset-0" href="#">
<span class="sr-only">Next</span>
<span class="material-symbols-outlined text-[20px]">chevron_right</span>
</a>
</nav>
</div>
</div>
</main>
@endsection