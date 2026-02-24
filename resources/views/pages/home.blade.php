<x-app>
    <x-hero 
        title="{{ __('messages.home_hero_title') ?? 'Engineering Excellence.' }}"
        highlight="{{ __('messages.home_hero_highlight') ?? 'Designed to Last.' }}"
        subtitle="{{ __('messages.home_hero_subtitle') ?? 'Premium finishing and structural integrity for the modern era. We combine technical mastery with an artistic eye to create spaces that define luxury.' }}"
        image="https://lh3.googleusercontent.com/aida-public/AB6AXuDUTHkQR2QVABLwAHUOr_qntey0DPXSc6-4_SPndL963r4BoYY6TS1ZItaMHQObDMrQur2aJ3scBI6uINIcM4-d517fL6ZW5D1S0mhB_DpnjZsz4hvLVQLI9kE3qaqIKpqEt8dlP4OqV3VQtDMOJy8JX9y2wccFuGv4cPlErVyIRBxBR6zptzw-ILJaudY_1HIHhhDNd2Vs8GbqlodDqovptQ2kGuTqVwuDsn4gJgMM4reH8wP8oAaNb2gjmvPpDVSGacEA2Yk1AmE"
        :primaryAction="['label' => __('messages.request_consultation') ?? 'Request Consultation', 'url' => route('contact')]"
        :secondaryAction="['label' => __('messages.explore_services') ?? 'Explore Services', 'url' => route('services')]"
    />

    <!-- Services Preview Section -->
    <x-section id="services" title="{{ __('messages.home_services_title') ?? 'Comprehensive Solutions' }}" subtitle="{{ __('messages.home_services_subtitle') ?? 'Our Expertise' }}" bg="bg-white">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1: Finishing -->
            <div class="group hover-card-lift rounded-xl bg-[#f1e8d9]/30 border border-[#f1e8d9] p-8 flex flex-col h-full">
                <div class="w-14 h-14 bg-[#553f2f] text-white rounded-lg flex items-center justify-center mb-6 shadow-md group-hover:bg-[#c8af9e] transition-colors">
                    <span class="material-symbols-outlined text-3xl">brush</span>
                </div>
                <h3 class="text-2xl font-bold text-[#553f2f] mb-3">{{ __('messages.service_finishing') ?? 'High-End Finishing' }}</h3>
                <p class="text-[#94a4b5] mb-6 leading-relaxed flex-grow">
                    Impeccable interior and exterior detailing for luxury spaces. We source the finest materials to ensure every surface speaks of quality.
                </p>
                <a class="inline-flex items-center text-[#553f2f] font-semibold hover:text-[#c8af9e] transition-colors" href="{{ route('finishing') }}">
                    {{ __('messages.learn_more') ?? 'Learn more' }} <span class="material-symbols-outlined text-sm ms-1 rtl:rotate-180">arrow_forward</span>
                </a>
            </div>
            <!-- Service 2: Civil Structures -->
            <div class="group hover-card-lift rounded-xl bg-[#f1e8d9]/30 border border-[#f1e8d9] p-8 flex flex-col h-full">
                <div class="w-14 h-14 bg-[#553f2f] text-white rounded-lg flex items-center justify-center mb-6 shadow-md group-hover:bg-[#c8af9e] transition-colors">
                    <span class="material-symbols-outlined text-3xl">foundation</span>
                </div>
                <h3 class="text-2xl font-bold text-[#553f2f] mb-3">{{ __('messages.service_structure') ?? 'Civil Structures' }}</h3>
                <p class="text-[#94a4b5] mb-6 leading-relaxed flex-grow">
                    Robust and precise structural engineering for lasting durability. From foundations to complex frameworks, we build with precision.
                </p>
                <a class="inline-flex items-center text-[#553f2f] font-semibold hover:text-[#c8af9e] transition-colors" href="{{ route('structure') }}">
                    {{ __('messages.learn_more') ?? 'Learn more' }} <span class="material-symbols-outlined text-sm ms-1 rtl:rotate-180">arrow_forward</span>
                </a>
            </div>
            <!-- Service 3: Training -->
            <div class="group hover-card-lift rounded-xl bg-[#f1e8d9]/30 border border-[#f1e8d9] p-8 flex flex-col h-full">
                <div class="w-14 h-14 bg-[#553f2f] text-white rounded-lg flex items-center justify-center mb-6 shadow-md group-hover:bg-[#c8af9e] transition-colors">
                    <span class="material-symbols-outlined text-3xl">school</span>
                </div>
                <h3 class="text-2xl font-bold text-[#553f2f] mb-3">{{ __('messages.service_training') ?? 'Engineering Training' }}</h3>
                <p class="text-[#94a4b5] mb-6 leading-relaxed flex-grow">
                    Professional courses designed to empower the next generation. Learn directly from industry experts in practical, hands-on workshops.
                </p>
                <a class="inline-flex items-center text-[#553f2f] font-semibold hover:text-[#c8af9e] transition-colors" href="{{ route('training') }}">
                    {{ __('messages.learn_more') ?? 'Learn more' }} <span class="material-symbols-outlined text-sm ms-1 rtl:rotate-180">arrow_forward</span>
                </a>
            </div>
        </div>
    </x-section>

    <!-- About Split Section -->
    <section class="py-24 bg-[#f1e8d9] overflow-hidden" id="about">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image Side -->
                <div class="w-full lg:w-1/2 relative">
                    <div class="absolute -top-4 -start-4 w-24 h-24 bg-[#c8af9e]/20 rounded-full blur-xl"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img alt="Elegant modern interior" class="w-full h-[600px] object-cover hover:scale-105 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAT1y58JQJ3eTFT29WBKrx6KnoqLjvVY5JoD-n_pskC3w6mV-TLiaM8ii3f8T0zAg1r51g55fXTn2i0Z_HutzRlXRa26d1MLnok-6eAHJZ0zsSX0yDH5fRp4HRSg4PurSobO5dcSKD6O2zLJ2RtAZKY2pznDnbaIKtyz68HC66yeVYRteQGUxgo7cre57x99vqK31kBLd29H0i8h03lmK_HyVIVdJDv_Z8JnqNAd-t_aRE-hlmDZo6WyIhoHowiuNNOOYoCUg-x08"/>
                    </div>
                </div>
                <!-- Content Side -->
                <div class="w-full lg:w-1/2">
                    <span class="text-[#c8af9e] text-sm font-bold uppercase tracking-widest mb-2 block">About Flow</span>
                    <h2 class="text-4xl lg:text-5xl font-light text-[#553f2f] mb-6 leading-tight">
                        Precision Meets <span class="font-bold">Artistry</span>
                    </h2>
                    <p class="text-lg text-[#94a4b5] mb-8 leading-relaxed">
                        At Flow, we believe that true luxury lies in the details. Our team combines technical mastery with an artistic eye to create spaces that are not only structurally sound but visually stunning.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-6">
                        <div class="flex items-start gap-4">
                            <div class="p-2 bg-white rounded-lg shadow-sm text-[#c8af9e]">
                                <span class="material-symbols-outlined">verified</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#553f2f] text-lg">Certified Experts</h4>
                                <p class="text-sm text-[#94a4b5]">Licensed professionals leading every project.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="p-2 bg-white rounded-lg shadow-sm text-[#c8af9e]">
                                <span class="material-symbols-outlined">diamond</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#553f2f] text-lg">Premium Materials</h4>
                                <p class="text-sm text-[#94a4b5]">Only the finest sourcing for lasting quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-[#553f2f] text-white font-bold rounded-lg hover:bg-opacity-90 transition-all shadow-md">
                            {{ __('messages.read_our_story') ?? 'Read Our Story' }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app>
