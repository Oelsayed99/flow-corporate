<x-app>
    <!-- Page Header -->
    <section class="px-6 py-16 md:px-10 lg:px-40 lg:py-24 flex flex-col items-center text-center">
        <span class="text-[#553f2f] font-bold tracking-[0.2em] text-xs uppercase mb-4">{{ __('messages.services_expertise') ?? 'Our Expertise' }}</span>
        <h1 class="text-slate-900 text-4xl md:text-5xl lg:text-6xl font-black leading-[1.1] tracking-[-0.03em] max-w-4xl mb-6">
            {{ __('messages.services_title1') ?? 'Engineering Perfection.' }}<br/><span class="text-slate-400 font-light">{{ __('messages.services_title2') ?? 'Curated Spaces.' }}</span>
        </h1>
        <p class="text-slate-600 text-lg md:text-xl font-normal leading-relaxed max-w-2xl mx-auto">
            {{ __('messages.services_subtitle') ?? 'We bring a legacy of precision engineering and refined aesthetics to every project, ensuring that the structural backbone and the finishing touches are executed with equal mastery.' }}
        </p>
    </section>

    <!-- Section 1: Structural Design -->
    <section class="py-12 px-6 md:px-10 lg:px-20 border-t border-black/5 bg-[#f9f8f8]">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="flex flex-col gap-8 order-2 lg:order-1">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-2 text-[#553f2f]">
                        <span class="material-symbols-outlined text-3xl">architecture</span>
                        <span class="text-sm font-bold tracking-wider uppercase">{{ __('messages.structural_integrity') ?? 'Structural Integrity' }}</span>
                    </div>
                    <h2 class="text-slate-900 text-3xl md:text-4xl font-black leading-tight tracking-tight">
                        {{ __('messages.structural_title') ?? 'The Backbone of Excellence' }}
                    </h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        {{ __('messages.structural_desc') ?? 'We provide robust civil engineering solutions, ensuring safety, longevity, and architectural integrity in every build. From complex seismic retrofitting to high-rise frameworks, our engineering is the invisible art that holds everything together.' }}
                    </p>
                </div>
                <div class="pt-4">
                    <a href="{{ route('structure') }}" class="inline-flex items-center justify-center h-12 px-8 rounded-lg bg-[#553f2f] hover:bg-[#c8af9e] text-white font-bold text-sm tracking-wide transition-all shadow-md group">
                        {{ __('messages.view_structural') ?? 'View Structural Details' }}
                        <span class="material-symbols-outlined ms-2 text-lg group-hover:translate-x-1 rtl:group-hover:-translate-x-1 transition-transform rtl:rotate-180">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="relative order-1 lg:order-2 w-full">
                <div class="absolute inset-0 bg-[#553f2f]/5 rounded-2xl transform rotate-3 translate-x-2 translate-y-2"></div>
                <div class="relative w-full h-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md group">
                    <img alt="Construction site" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxXHSoCt4myf9Ja6MjZVkJo8RYY2eKAtUhI9UZqfamdb6QFFwNaJQKflRgZ6kgaxQcVwivwsd5tOfNQKZcuXyOxpyO4ZmJEN5V6h1bAwIrpcbiX5eYwf7GNtbWq8MAcC4hZJqVlG5MzLFPPIpH4nNyLcipNafL4LdkpuiTX7drNslbF6VFH3JKOAL4MpUx-wIbsmNOFOfUPKJUfCUL2a__WporWGYmZgZgLpDD_PSPfrskLya0Va6qqhHAgjbya5-RjV61HGKxRek"/>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Interior Design -->
    <section class="py-12 px-6 md:px-10 lg:px-20 bg-white">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="relative w-full">
                <div class="absolute inset-0 bg-[#c8af9e]/20 rounded-2xl transform -rotate-2 -translate-x-2 translate-y-2"></div>
                <div class="relative w-full h-full aspect-[4/3] rounded-2xl overflow-hidden shadow-md group">
                    <img alt="Modern luxury living room" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcqAUhVdCLZfXL00QxUbMCkhw0r0g9llOfLgMBD6GNo3aIbz0SuKyp431Lxdb-ucciP2dAKe5rubl4zVUQuMd5oLWyjWaj8ojwT1ttpVlZ65dJaZC1VDIPDnzHkZvcQSL9EuARM437LW1lJ_QZw1djnjQ6pTvg9rrJVBB9ixJVn-nLUEFSY_SEgV7ZVGCSymQUYuTthraUAzs2GWPxJk7zF7c8FSTtEMxx6Z9f6aq8q5iJdVCrP6wR6h27Tgz2fXLiN-PePcHPHuw"/>
                </div>
            </div>
            <div class="flex flex-col gap-8">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-2 text-[#553f2f]">
                        <span class="material-symbols-outlined text-3xl">chair</span>
                        <span class="text-sm font-bold tracking-wider uppercase">{{ __('messages.living_spaces') ?? 'Living Spaces' }}</span>
                    </div>
                    <h2 class="text-slate-900 text-3xl md:text-4xl font-black leading-tight tracking-tight">
                        {{ __('messages.interior_title') ?? 'Atmospheres That Breathe' }}
                    </h2>
                    <p class="text-slate-600 text-base leading-relaxed">
                        {{ __('messages.interior_desc') ?? 'Our interior concepts merge functionality with sophisticated styling, creating spaces that feel as good as they look. We curate environments that reflect the unique personality of their inhabitants while maximizing spatial potential.' }}
                    </p>
                </div>
                <div class="pt-4">
                    <a href="{{ route('interior') }}" class="inline-flex items-center justify-center h-12 px-8 rounded-lg border-2 border-[#553f2f] text-[#553f2f] hover:bg-[#553f2f] hover:text-white font-bold text-sm tracking-wide transition-all shadow-none hover:shadow-md group">
                        {{ __('messages.view_interior') ?? 'View Interior Concepts' }}
                        <span class="material-symbols-outlined ms-2 text-lg group-hover:translate-x-1 rtl:group-hover:-translate-x-1 transition-transform rtl:rotate-180">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Finishing Works -->
    <section class="py-20 bg-slate-900 text-white relative overflow-hidden">
        <div class="container mx-auto px-6 md:px-10 lg:px-20 relative z-10">
            <div class="flex flex-col items-center text-center mb-16">
                <span class="text-[#c8af9e] font-bold tracking-[0.2em] text-xs uppercase mb-4">{{ __('messages.precision_craftsmanship') ?? 'Precision Craftsmanship' }}</span>
                <h2 class="text-white text-3xl md:text-5xl font-black leading-tight tracking-tight mb-6">
                    {{ __('messages.finishing_title') ?? 'The Art of the Final Touch' }}
                </h2>
                <p class="text-slate-300 text-lg max-w-2xl mx-auto">
                    {{ __('messages.finishing_desc') ?? 'Detail is not just a detail; it is the design. Our finishing works transform structural shells into masterpieces of texture and light.' }}
                </p>
            </div>
            <div class="flex justify-center mt-16">
                <a href="{{ route('finishing') }}" class="flex min-w-[200px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-white text-[#553f2f] text-base font-bold leading-normal tracking-[0.015em] hover:bg-[#f1e8d9] transition-colors">
                    <span class="truncate">{{ __('messages.view_finishing') ?? 'Consult a Finishing Expert' }}</span>
                </a>
            </div>
        </div>
    </section>
</x-app>
