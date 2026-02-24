<nav class="sticky top-0 z-50 w-full bg-white/95 backdrop-blur-md border-b border-[#f1e8d9]">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 mr-6">
                <img src="{{ asset('images/logos/Single logo.svg') }}" alt="Flow Logo" class="w-24 h-24 object-contain">
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8 rtl:space-x-reverse">
                <a class="text-sm font-medium text-[#553f2f] hover:text-[#c8af9e] transition-colors" href="{{ route('home') }}">{{ __('messages.nav_home') ?? 'Home' }}</a>
                <a class="text-sm font-medium text-[#553f2f] hover:text-[#c8af9e] transition-colors" href="{{ route('services') }}">{{ __('messages.nav_services') ?? 'Services' }}</a>
                <a class="text-sm font-medium text-[#553f2f] hover:text-[#c8af9e] transition-colors" href="{{ route('gallery') }}">{{ __('messages.nav_projects') ?? 'Projects' }}</a>
                <a class="text-sm font-medium text-[#553f2f] hover:text-[#c8af9e] transition-colors" href="{{ route('training') }}">{{ __('messages.nav_training') ?? 'Training' }}</a>
                <a class="text-sm font-medium text-[#553f2f] hover:text-[#c8af9e] transition-colors" href="{{ route('contact') }}">{{ __('messages.nav_contact') ?? 'Contact' }}</a>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center gap-4">
                <div class="text-sm font-semibold text-[#553f2f] border-e border-gray-200 pe-4">
                    <a href="{{ route('locale.switch', 'en') }}" class="{{ App::getLocale() == 'en' ? 'text-[#c8af9e]' : 'hover:text-[#c8af9e] transition-colors' }}">EN</a>
                    <span class="text-gray-300 mx-1 tablet:hidden">|</span>
                    <a href="{{ route('locale.switch', 'ar') }}" class="{{ App::getLocale() == 'ar' ? 'text-[#c8af9e]' : 'hover:text-[#c8af9e] transition-colors' }}">AR</a>
                </div>
                
                <a href="{{ route('contact') }}" class="hidden md:flex items-center justify-center h-10 px-6 rounded-lg bg-[#553f2f] text-white text-sm font-bold hover:bg-opacity-90 transition-all shadow-md">
                    {{ __('messages.request_consultation') ?? 'Request Consultation' }}
                </a>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-[#553f2f]">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </div>
</nav>
