<x-app>
    <x-hero 
        title="{{ __('messages.structure_title') ?? 'Structural Design' }}"
        subtitle="{{ __('messages.structure_desc') ?? 'We provide robust civil engineering solutions, ensuring safety, longevity, and architectural integrity in every build.' }}"
        image="https://lh3.googleusercontent.com/aida-public/AB6AXuAxXHSoCt4myf9Ja6MjZVkJo8RYY2eKAtUhI9UZqfamdb6QFFwNaJQKflRgZ6kgaxQcVwivwsd5tOfNQKZcuXyOxpyO4ZmJEN5V6h1bAwIrpcbiX5eYwf7GNtbWq8MAcC4hZJqVlG5MzLFPPIpH4nNyLcipNafL4LdkpuiTX7drNslbF6VFH3JKOAL4MpUx-wIbsmNOFOfUPKJUfCUL2a__WporWGYmZgZgLpDD_PSPfrskLya0Va6qqhHAgjbya5-RjV61HGKxRek"
    />

    <section class="py-16 px-6 md:px-10 lg:px-20 bg-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-[#553f2f] mb-8">{{ __('messages.our_structural_services') ?? 'Our Structural Services' }}</h2>
            <ul class="space-y-6">
                <li class="flex items-start gap-4">
                    <span class="material-symbols-outlined text-[#c8af9e] text-3xl">check_circle</span>
                    <div>
                        <strong class="text-xl text-slate-900 block mb-1">Civil Engineering</strong>
                        <span class="text-slate-500 text-base">Comprehensive planning and execution for large-scale infrastructure.</span>
                    </div>
                </li>
                <li class="flex items-start gap-4">
                    <span class="material-symbols-outlined text-[#c8af9e] text-3xl">check_circle</span>
                    <div>
                        <strong class="text-xl text-slate-900 block mb-1">Seismic Retrofitting</strong>
                        <span class="text-slate-500 text-base">Advanced reinforcement techniques for earthquake resilience.</span>
                    </div>
                </li>
                <li class="flex items-start gap-4">
                    <span class="material-symbols-outlined text-[#c8af9e] text-3xl">check_circle</span>
                    <div>
                        <strong class="text-xl text-slate-900 block mb-1">Concrete Frameworks</strong>
                        <span class="text-slate-500 text-base">High-precision casting and structural concrete solutions.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</x-app>
