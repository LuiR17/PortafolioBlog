@extends('layouts.dashboard')

@section('content')
<main class="flex-1 flex flex-col h-full relative overflow-hidden">
<!-- Top Header -->
<header class="h-16 border-b border-border-dark bg-background-dark/80 backdrop-blur-md flex items-center justify-between px-6 shrink-0 z-10">
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
<button class="flex items-center justify-center gap-2 h-9 px-4 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white transition-colors text-sm font-bold">
<span>View Live Site</span>
<span class="material-symbols-outlined text-[18px]">open_in_new</span>
</button>
<div class="h-8 w-[1px] bg-border-dark mx-2"></div>
<button class="size-9 rounded-full bg-border-dark flex items-center justify-center text-text-secondary hover:text-white">
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
<p class="text-text-secondary text-base font-normal">Add, edit, or delete your technical expertise.</p>
</div>
<!-- Mobile Add Button -->
<button class="md:hidden flex items-center gap-2 h-10 px-5 rounded-lg bg-primary text-white text-sm font-bold shadow-lg shadow-primary/25 hover:bg-blue-600 transition-all">
<span class="material-symbols-outlined text-[20px]">add</span>
<span>Add New Skill</span>
</button>
</div>
<!-- Stats Row -->
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
<div class="bg-surface-dark border border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-text-secondary text-sm font-medium uppercase tracking-wider">Total Skills</p>
<span class="material-symbols-outlined text-primary bg-primary/10 p-1.5 rounded-lg text-[20px]">code</span>
</div>
<p class="text-white text-3xl font-bold mt-2">24</p>
</div>
<div class="bg-surface-dark border border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-text-secondary text-sm font-medium uppercase tracking-wider">Featured</p>
<span class="material-symbols-outlined text-yellow-500 bg-yellow-500/10 p-1.5 rounded-lg text-[20px] icon-filled">star</span>
</div>
<p class="text-white text-3xl font-bold mt-2">8</p>
</div>
<div class="bg-surface-dark border border-border-dark rounded-xl p-5 flex flex-col gap-1 shadow-sm">
<div class="flex justify-between items-start">
<p class="text-text-secondary text-sm font-medium uppercase tracking-wider">Categories</p>
<span class="material-symbols-outlined text-purple-500 bg-purple-500/10 p-1.5 rounded-lg text-[20px]">category</span>
</div>
<p class="text-white text-3xl font-bold mt-2">4</p>
</div>
</div>
<!-- Filter & Actions Toolbar -->
<div class="flex flex-col md:flex-row gap-4 justify-between items-center bg-surface-dark p-2 rounded-xl border border-border-dark">
<!-- Search -->
<div class="relative w-full md:max-w-md">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-text-secondary text-[20px]">search</span>
</div>
<input class="block w-full pl-10 pr-3 py-2.5 border-none rounded-lg bg-background-dark text-white placeholder-text-secondary focus:ring-1 focus:ring-primary sm:text-sm" placeholder="Search languages, frameworks..." type="text"/>
</div>
<!-- Filters & Add -->
<div class="flex items-center gap-3 w-full md:w-auto">
<div class="relative hidden md:block">
<select class="appearance-none bg-background-dark text-white text-sm pl-4 pr-10 py-2.5 rounded-lg border-none focus:ring-1 focus:ring-primary cursor-pointer hover:bg-border-dark transition-colors">
<option>All Categories</option>
<option>Languages</option>
<option>Frameworks</option>
<option>Tools</option>
</select>
<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-white">
<span class="material-symbols-outlined text-[20px]">arrow_drop_down</span>
</div>
</div>
<button class="hidden md:flex items-center gap-2 h-10 px-5 rounded-lg bg-primary text-white text-sm font-bold shadow-lg shadow-primary/25 hover:bg-blue-600 transition-all whitespace-nowrap">
<span class="material-symbols-outlined text-[20px]">add</span>
<span>Add New Skill</span>
</button>
</div>
</div>
<!-- Skills Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">
<!-- Skill Card 1 (Featured) -->
<div class="group relative bg-surface-dark rounded-xl border border-border-dark p-5 hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
<div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2">
<button class="p-1.5 rounded-md hover:bg-background-dark text-text-secondary hover:text-white" title="Edit">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-red-500/20 text-text-secondary hover:text-red-500" title="Delete">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
<div class="flex items-start gap-4 mb-4">
<div class="size-12 rounded-lg bg-[#F7DF1E]/10 flex items-center justify-center p-2">
<img alt="JavaScript Logo" class="w-full h-full object-contain" data-alt="JavaScript yellow shield logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUJUchi7TVQySzPPSL9fyNrzKDkVaNWq5Eo8QpV51Uy6o14VMX2EYFmPJjEyPjAhj7RVguvLZOfwHrONh-AAt8JiTG8TKOdpE98a74j2N3MidNKTFoK_bN1gBIZLyxYXYnFTC9you9bQNLXUGG1yS57RTkEuV3gp8rJf4T2TCALRG8U0PzRiS-SouB5Ve9kUCCMb-iP-T58n5oW9MFWgjPNmDwFMXBxF91YY3fV5tBiN1fA3BCbjQMIzvqE3S8AK8e1MJ63raNmxhQ"/>
</div>
<div>
<h3 class="text-white font-bold text-lg">JavaScript</h3>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-border-dark text-text-secondary mt-1">Language</span>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-xs font-medium">
<span class="text-text-secondary">Proficiency</span>
<span class="text-white">95%</span>
</div>
<div class="w-full bg-background-dark rounded-full h-2 overflow-hidden">
<div class="bg-[#F7DF1E] h-2 rounded-full" style="width: 95%"></div>
</div>
</div>
<div class="mt-4 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-yellow-500 icon-filled">star</span>
<span class="text-xs text-yellow-500 font-medium">Featured on Home</span>
</div>
</div>
<!-- Skill Card 2 -->
<div class="group relative bg-surface-dark rounded-xl border border-border-dark p-5 hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
<div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2">
<button class="p-1.5 rounded-md hover:bg-background-dark text-text-secondary hover:text-white" title="Edit">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-red-500/20 text-text-secondary hover:text-red-500" title="Delete">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
<div class="flex items-start gap-4 mb-4">
<div class="size-12 rounded-lg bg-[#61DAFB]/10 flex items-center justify-center p-2">
<img alt="React Logo" class="w-full h-full object-contain" data-alt="React blue atom logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOiLQ3I1z2yrNnmewr1hRsU-tsa7xxOn2Bczk0eZN7zhTaDlMWUX2tSPRDzuyTGiqeR62rsyiSVIjEzA3RDAAurmBizA-k9tFqgT-b8OTbTSWTqWskASNE9catBABJv_rlnhkYmQLZlwz8L_zTN36JKfkShJ35TvvmMXYxpGusr31PIpT-ELsvB_skPeiuLrlvkN11m0jZV-_NbobInXv4Hmro0HG-3-qA_Dko1HIQcq1vJXkT3suJ88mypTbIgk2RgknXc2QVTOB4"/>
</div>
<div>
<h3 class="text-white font-bold text-lg">React</h3>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-border-dark text-text-secondary mt-1">Framework</span>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-xs font-medium">
<span class="text-text-secondary">Proficiency</span>
<span class="text-white">90%</span>
</div>
<div class="w-full bg-background-dark rounded-full h-2 overflow-hidden">
<div class="bg-[#61DAFB] h-2 rounded-full" style="width: 90%"></div>
</div>
</div>
<div class="mt-4 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-yellow-500 icon-filled">star</span>
<span class="text-xs text-yellow-500 font-medium">Featured on Home</span>
</div>
</div>
<!-- Skill Card 3 -->
<div class="group relative bg-surface-dark rounded-xl border border-border-dark p-5 hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
<div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2">
<button class="p-1.5 rounded-md hover:bg-background-dark text-text-secondary hover:text-white" title="Edit">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-red-500/20 text-text-secondary hover:text-red-500" title="Delete">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
<div class="flex items-start gap-4 mb-4">
<div class="size-12 rounded-lg bg-blue-500/10 flex items-center justify-center p-2">
<span class="material-symbols-outlined text-blue-500 text-3xl">css</span>
</div>
<div>
<h3 class="text-white font-bold text-lg">Tailwind CSS</h3>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-border-dark text-text-secondary mt-1">Framework</span>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-xs font-medium">
<span class="text-text-secondary">Proficiency</span>
<span class="text-white">100%</span>
</div>
<div class="w-full bg-background-dark rounded-full h-2 overflow-hidden">
<div class="bg-blue-500 h-2 rounded-full" style="width: 100%"></div>
</div>
</div>
<div class="mt-4 h-5"></div> <!-- Spacer for non-featured alignment -->
</div>
<!-- Skill Card 4 -->
<div class="group relative bg-surface-dark rounded-xl border border-border-dark p-5 hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
<div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2">
<button class="p-1.5 rounded-md hover:bg-background-dark text-text-secondary hover:text-white" title="Edit">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-red-500/20 text-text-secondary hover:text-red-500" title="Delete">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
<div class="flex items-start gap-4 mb-4">
<div class="size-12 rounded-lg bg-orange-500/10 flex items-center justify-center p-2">
<span class="material-symbols-outlined text-orange-500 text-3xl">terminal</span>
</div>
<div>
<h3 class="text-white font-bold text-lg">Git</h3>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-border-dark text-text-secondary mt-1">Tool</span>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-xs font-medium">
<span class="text-text-secondary">Proficiency</span>
<span class="text-white">85%</span>
</div>
<div class="w-full bg-background-dark rounded-full h-2 overflow-hidden">
<div class="bg-orange-500 h-2 rounded-full" style="width: 85%"></div>
</div>
</div>
<div class="mt-4 h-5"></div>
</div>
<!-- Skill Card 5 -->
<div class="group relative bg-surface-dark rounded-xl border border-border-dark p-5 hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
<div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2">
<button class="p-1.5 rounded-md hover:bg-background-dark text-text-secondary hover:text-white" title="Edit">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-red-500/20 text-text-secondary hover:text-red-500" title="Delete">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
<div class="flex items-start gap-4 mb-4">
<div class="size-12 rounded-lg bg-[#3776AB]/10 flex items-center justify-center p-2">
<img alt="Python Logo" class="w-full h-full object-contain" data-alt="Python blue and yellow snakes logo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYfRBCUUtS9u07vEUtt-6sCxajd3SY6n89e8xnckrY1EtkTRuRa4_5c0xBR9S4LUjadjv_idiiiRwtkdRpPPblpiQGIVDtLZg-0gaSVDkVRO3SeLFRuiST_HQTdK8aue25ahwdITdyiDcaOnWYGgUFA8HrH8jxvxu07weLG3atsNmfnCz5Ks2auhevhx-J4wO6K8Xx1Ndnj_PqJ4eqyeYOoxt2FYX17tOAzUS1h5--gQ-L1JqVhKwkYFKH4M0Fl5kFsgja29kdGEcc"/>
</div>
<div>
<h3 class="text-white font-bold text-lg">Python</h3>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-border-dark text-text-secondary mt-1">Language</span>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-xs font-medium">
<span class="text-text-secondary">Proficiency</span>
<span class="text-white">75%</span>
</div>
<div class="w-full bg-background-dark rounded-full h-2 overflow-hidden">
<div class="bg-[#3776AB] h-2 rounded-full" style="width: 75%"></div>
</div>
</div>
<div class="mt-4 flex items-center gap-2">
<span class="material-symbols-outlined text-[16px] text-yellow-500 icon-filled">star</span>
<span class="text-xs text-yellow-500 font-medium">Featured on Home</span>
</div>
</div>
<!-- Skill Card 6 -->
<div class="group relative bg-surface-dark rounded-xl border border-border-dark p-5 hover:border-primary/50 transition-all hover:shadow-lg hover:shadow-primary/5">
<div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity flex gap-2">
<button class="p-1.5 rounded-md hover:bg-background-dark text-text-secondary hover:text-white" title="Edit">
<span class="material-symbols-outlined text-[18px]">edit</span>
</button>
<button class="p-1.5 rounded-md hover:bg-red-500/20 text-text-secondary hover:text-red-500" title="Delete">
<span class="material-symbols-outlined text-[18px]">delete</span>
</button>
</div>
<div class="flex items-start gap-4 mb-4">
<div class="size-12 rounded-lg bg-purple-600/10 flex items-center justify-center p-2">
<span class="material-symbols-outlined text-purple-600 text-3xl">design_services</span>
</div>
<div>
<h3 class="text-white font-bold text-lg">Figma</h3>
<span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-border-dark text-text-secondary mt-1">Design</span>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-xs font-medium">
<span class="text-text-secondary">Proficiency</span>
<span class="text-white">80%</span>
</div>
<div class="w-full bg-background-dark rounded-full h-2 overflow-hidden">
<div class="bg-purple-600 h-2 rounded-full" style="width: 80%"></div>
</div>
</div>
<div class="mt-4 h-5"></div>
</div>
</div>
</div>
</div>
</main>
@endsection