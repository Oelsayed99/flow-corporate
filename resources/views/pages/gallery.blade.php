<x-app>
    <main x-data="{ filter: 'all' }" class="flex-grow w-full max-w-[1440px] mx-auto px-6 lg:px-12 py-12 lg:py-20">
        <!-- Hero Section -->
        <div class="flex flex-col lg:flex-row justify-between items-end gap-10 mb-20">
            <div class="max-w-2xl">
                <h1 class="text-[#553f2f] text-5xl lg:text-7xl font-black tracking-tight leading-[0.9] mb-6">
                    {{ __('messages.our_work') ?? 'Our Work' }}
                </h1>
                <p class="text-[#94a4b5] text-lg lg:text-xl font-light leading-relaxed max-w-lg">
                    {{ __('messages.our_work_desc') ?? 'Precision engineering meets luxury finishing. Explore our portfolio of residential and commercial spaces designed to inspire.' }}
                </p>
            </div>
            <!-- Filters -->
            <div class="flex flex-wrap gap-2 lg:gap-0 lg:border-b lg:border-[#553f2f]/20 w-full lg:w-auto">
                <button @click="filter = 'all'" :class="filter === 'all' ? 'border-b-2 border-[#553f2f] text-[#553f2f]' : 'border-b-2 border-transparent hover:border-[#c8af9e]/50 text-[#553f2f]/60 hover:text-[#553f2f]'" class="px-6 py-3 font-bold text-sm tracking-wide transition-colors">
                    {{ __('messages.filter_all') ?? 'All Projects' }}
                </button>
                <button @click="filter = 'Finishing'" :class="filter === 'Finishing' ? 'border-b-2 border-[#553f2f] text-[#553f2f]' : 'border-b-2 border-transparent hover:border-[#c8af9e]/50 text-[#553f2f]/60 hover:text-[#553f2f]'" class="px-6 py-3 font-medium text-sm tracking-wide transition-colors">
                    {{ __('messages.filter_finishing') ?? 'Finishing' }}
                </button>
                <button @click="filter = 'Structure'" :class="filter === 'Structure' ? 'border-b-2 border-[#553f2f] text-[#553f2f]' : 'border-b-2 border-transparent hover:border-[#c8af9e]/50 text-[#553f2f]/60 hover:text-[#553f2f]'" class="px-6 py-3 font-medium text-sm tracking-wide transition-colors">
                    {{ __('messages.filter_structure') ?? 'Structure' }}
                </button>
                <button @click="filter = 'Interior'" :class="filter === 'Interior' ? 'border-b-2 border-[#553f2f] text-[#553f2f]' : 'border-b-2 border-transparent hover:border-[#c8af9e]/50 text-[#553f2f]/60 hover:text-[#553f2f]'" class="px-6 py-3 font-medium text-sm tracking-wide transition-colors">
                    {{ __('messages.filter_interior') ?? 'Interior' }}
                </button>
            </div>
        </div>

        <!-- Masonry Grid -->
        <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6">
            <!-- Item 1: Interior -->
            <div x-show="filter === 'all' || filter === 'Interior'" x-transition class="project-card group relative break-inside-avoid rounded-xl overflow-hidden bg-white shadow-sm">
                <div class="aspect-[3/4] w-full bg-gray-200 relative overflow-hidden">
                    <img alt="Interior" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGxwmkg2c9SUtc1P8lB03YCmaG_4EvnRv08hUIafjhfTnn12weKofQHKN3CnOlGqmVdlPYtr8fLthtl0qilbW6JovM_SQ990bVsy6Q2dxx0UqPVPtdBDyP4apSX0SPd2ykViUKT58ChTo1MZ6BjAvWGTj0dShf-seAhan8Lxb4eaLM4ug_KyHaz_rV_oyjN_-yJdzuceGIBrZHPBNX4Ozrk3I5yttIMKe6EfsyDVUesSDs9VDZlLRhmbDAs-mF5wKOB3OreKDi5F8"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-[#c8af9e] text-xs font-bold uppercase tracking-wider mb-1">Interior</span>
                        <h3 class="text-white text-xl font-bold leading-tight">Riviera Penthouse</h3>
                    </div>
                </div>
            </div>
            <!-- Item 2: Structure -->
            <div x-show="filter === 'all' || filter === 'Structure'" x-transition class="project-card group relative break-inside-avoid rounded-xl overflow-hidden bg-white shadow-sm">
                <div class="aspect-video w-full bg-gray-200 relative overflow-hidden">
                    <img alt="Structure" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjXP0EmWti_rcuJdG_PgDr5xOYObwycnL8HEahApqd5hTz2AUc1OHDwav3cDIu_MyqqoAeAtCht4fFbgp2JSCwuAITv_WfR9cZsE3yVTxQuBzTnGEi4FAMySHWQre3BiJoXsuZ5Gu7Caj10L2P-8tzLPgg3BFlNRShYM1pm_94QZQDmw7zZv6SsAmZTkgttYETWRlsEqhqvYhcVyiKaYQpKRK_4xW1m7yvmc_sbssNen8aCHpTGYeFjTUg-XoHsTXy7zaHMmLM9WI"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-[#c8af9e] text-xs font-bold uppercase tracking-wider mb-1">Structure</span>
                        <h3 class="text-white text-xl font-bold leading-tight">Apex Tower</h3>
                    </div>
                </div>
            </div>
            <!-- Item 3: Finishing -->
            <div x-show="filter === 'all' || filter === 'Finishing'" x-transition class="project-card group relative break-inside-avoid rounded-xl overflow-hidden bg-white shadow-sm">
                <div class="aspect-square w-full bg-gray-200 relative overflow-hidden">
                    <img alt="Finishing" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABFU0MwK08wotbvlVMFTkZ5bfkQCmLaH8iqskIHtRIjBghv2w0IOlbEiOt32oB6YykmxZHDxgBgqp79D4Fzd7uy0w_OlagRbArPIhERXihazqP6r-QzF37GfXx_E1SM4qoSlMst2CAkm0K4F7613EDTzp2JH2IVFSbRx6MAfHqWowvYJCH-8ytrrjaxX6-3Pg9o3AKW2aI_r4oJ3CdQjrkDxrqPRqGEV1vFlCGC_ZE7v4i1y0K2xr9rbdlOVhAXc9wh7lBkOv3HPw"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-[#c8af9e] text-xs font-bold uppercase tracking-wider mb-1">Finishing</span>
                        <h3 class="text-white text-xl font-bold leading-tight">Marble Detail Study</h3>
                    </div>
                </div>
            </div>
            <!-- Item 4: Structure -->
            <div x-show="filter === 'all' || filter === 'Structure'" x-transition class="project-card group relative break-inside-avoid rounded-xl overflow-hidden bg-white shadow-sm">
                <div class="aspect-[3/4] w-full bg-gray-200 relative overflow-hidden">
                    <img alt="Structure" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsNKqQdYMZ_YA0YQ4f4sylnwpQFMu3iqNhI8ldpBVk6PEeeh3SFPgQIL2O1_rjfjOWHVwhGpgjW5bW5PR30IIg6StT2KG6YxWM-4P9ixetrVC9RUSxzxJOZUGAyZdZQeTHXlLpbrzju27AUN2z9XFbvbhcFMczmo8efQjaiM0v6M8UJoVIuiF5aVRxAzbC5_McPLetw6zd7BPiK4jgdDiJMqvtFNKPfgug78o0bARby_SRXHgcyCT_GjmgJahSkPVnIb8CowyWJr0"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-[#c8af9e] text-xs font-bold uppercase tracking-wider mb-1">Structure</span>
                        <h3 class="text-white text-xl font-bold leading-tight">The Brutalist Wing</h3>
                    </div>
                </div>
            </div>
            <!-- Item 5: Finishing -->
            <div x-show="filter === 'all' || filter === 'Finishing'" x-transition class="project-card group relative break-inside-avoid rounded-xl overflow-hidden bg-white shadow-sm">
                <div class="aspect-[4/5] w-full bg-gray-200 relative overflow-hidden">
                    <img alt="Finishing" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1um1maYwVqtRFQiyKEBVFLy6SuMlWHGtrna5BBw3UKFZ_7rv-7015l8fDCNSYtLLMUB2d5oTyH_GHtKyL90iFNz2bZUDZcWcub2zK-gwpsC69avTkJ3KRs-8rVZNrvSxkok_emsFmifGrhbOB4zQbtLrneumRUGQotVDNJPhfzwAkGQAkmK4u9Lpt1Y8m8_BUytU6rJDVnqJtGuoq2lDQacijcjpFuWdQ2Ukkd3ffsH0g_MlhM-VmGfSELOg-eh8jGvrOys67gVQ"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-[#c8af9e] text-xs font-bold uppercase tracking-wider mb-1">Finishing</span>
                        <h3 class="text-white text-xl font-bold leading-tight">Cedar Paneling</h3>
                    </div>
                </div>
            </div>
            <!-- Item 6: Interior -->
            <div x-show="filter === 'all' || filter === 'Interior'" x-transition class="project-card group relative break-inside-avoid rounded-xl overflow-hidden bg-white shadow-sm">
                <div class="aspect-[3/4] w-full bg-gray-200 relative overflow-hidden">
                    <img alt="Interior" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhNxK1mDsAJ1W0AO3ev-28gVQCTNZvpjOtuF7LXiYuQtAqx-i0un57Qx70KP7_wj6kz5FWhI-AxImp3wwI4Ag6IV4Jlm1M-fkJu2ADs6WzXsSxd3UIua8ZvLx3bHjNrla3Whh9Sbpvf9i64XeHkMDypJLQKlMifdsoLaQkaN_ApMgU9Fm5qSvIWQX50E0RRDgRtQ4quLWtEMmhOB3i03u0KsWL0XmZM69GWChKiiF0X_M2LeXbWeoYv9Q37_nxDwD5PtqtKWk3IHM"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                        <span class="text-[#c8af9e] text-xs font-bold uppercase tracking-wider mb-1">Interior</span>
                        <h3 class="text-white text-xl font-bold leading-tight">Spiral Loft</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app>
