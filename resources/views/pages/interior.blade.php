<x-app>
    <x-hero 
        title="{{ __('messages.interior_title') ?? 'Interior Design' }}"
        subtitle="{{ __('messages.interior_desc') ?? 'Our interior concepts merge functionality with sophisticated styling, creating spaces that feel as good as they look.' }}"
        image="https://lh3.googleusercontent.com/aida-public/AB6AXuDcqAUhVdCLZfXL00QxUbMCkhw0r0g9llOfLgMBD6GNo3aIbz0SuKyp431Lxdb-ucciP2dAKe5rubl4zVUQuMd5oLWyjWaj8ojwT1ttpVlZ65dJaZC1VDIPDnzHkZvcQSL9EuARM437LW1lJ_QZw1djnjQ6pTvg9rrJVBB9ixJVn-nLUEFSY_SEgV7ZVGCSymQUYuTthraUAzs2GWPxJk7zF7c8FSTtEMxx6Z9f6aq8q5iJdVCrP6wR6h27Tgz2fXLiN-PePcHPHuw"
    />

    <section class="py-16 px-6 md:px-10 lg:px-20 bg-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-[#553f2f] mb-8">{{ __('messages.our_interior_services') ?? 'Our Interior Services' }}</h2>
            <ul class="space-y-6">
                <li class="flex items-start gap-4">
                    <div class="p-3 bg-[#f1e8d9] rounded-full text-[#553f2f]">
                        <span class="material-symbols-outlined text-2xl block">grid_view</span>
                    </div>
                    <div>
                        <strong class="text-xl text-slate-900 block mb-1">Spatial Planning</strong>
                        <span class="text-slate-500 text-base">Optimizing flow and function through intelligent layout design.</span>
                    </div>
                </li>
                <li class="flex items-start gap-4">
                    <div class="p-3 bg-[#f1e8d9] rounded-full text-[#553f2f]">
                        <span class="material-symbols-outlined text-2xl block">light_mode</span>
                    </div>
                    <div>
                        <strong class="text-xl text-slate-900 block mb-1">Lighting Design</strong>
                        <span class="text-slate-500 text-base">Sculpting space with layered illumination strategies.</span>
                    </div>
                </li>
                <li class="flex items-start gap-4">
                    <div class="p-3 bg-[#f1e8d9] rounded-full text-[#553f2f]">
                        <span class="material-symbols-outlined text-2xl block">weekend</span>
                    </div>
                    <div>
                        <strong class="text-xl text-slate-900 block mb-1">Bespoke Furniture</strong>
                        <span class="text-slate-500 text-base">Custom pieces selected and crafted for perfect harmony.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</x-app>
