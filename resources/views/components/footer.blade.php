<footer class="bg-[#1c1916] text-white pt-20 pb-10 border-t border-white/5">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
            <!-- Column 1: Brand -->
            <div class="flex flex-col gap-6">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/logos/LOGO FLOW & slogan W.svg') }}" alt="Flow Logo" class="w-64 h-64 object-contain">
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    {{ __('messages.footer_desc') ?? 'Engineering excellence delivered with precision and artistry. We create spaces that stand the test of time.' }}
                </p>
            </div>
            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-white font-bold mb-4">{{ __('messages.quick_links') ?? 'Quick Links' }}</h3>
                <ul class="space-y-3">
                    <li><a class="text-gray-400 hover:text-[#c8af9e] transition-colors" href="{{ route('home') }}">{{ __('messages.nav_home') ?? 'Home' }}</a></li>
                    <li><a class="text-gray-400 hover:text-[#c8af9e] transition-colors" href="{{ route('services') }}">{{ __('messages.nav_services') ?? 'Services' }}</a></li>
                    <li><a class="text-gray-400 hover:text-[#c8af9e] transition-colors" href="{{ route('gallery') }}">{{ __('messages.nav_projects') ?? 'Projects' }}</a></li>
                    <li><a class="text-gray-400 hover:text-[#c8af9e] transition-colors" href="{{ route('training') }}">{{ __('messages.nav_training') ?? 'Training Academy' }}</a></li>
                    <li><a class="text-gray-400 hover:text-[#c8af9e] transition-colors" href="{{ route('contact') }}">{{ __('messages.nav_contact') ?? 'Contact' }}</a></li>
                </ul>
            </div>
            <!-- Column 3: Contact -->
            <div>
                <h3 class="text-white font-bold mb-4">{{ __('messages.contact') ?? 'Contact' }}</h3>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#c8af9e] text-sm mt-1">location_on</span>
                        <span>{{ __('messages.address_line1') ?? '1234 Skyline Avenue,' }}<br/>{{ __('messages.address_line2') ?? 'Luxury Business District,' }}<br/>{{ __('messages.address_line3') ?? 'Dubai, UAE' }}</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#c8af9e] text-sm">call</span>
                        <a href="https://wa.me/201092449447" target="_blank" dir="ltr" class="hover:text-white transition-colors">+2010 92449447</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#c8af9e] text-sm">mail</span>
                        <span>info@flow-egy.com</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-[#c8af9e]" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        <a href="https://www.facebook.com/share/1GxXmPV1Y1/?mibextid=wwXIfr" target="_blank" class="hover:text-white transition-colors">Facebook</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#c8af9e] text-sm">photo_camera</span>
                        <a href="https://www.instagram.com/flow_endless_ideas?igsh=MWQwdWRwNXpweXM3ZQ==&utm_source=ig_contact_invite" target="_blank" class="hover:text-white transition-colors">Instagram</a>
                    </li>
                </ul>
            </div>
            <!-- Column 4: Newsletter -->
            <div>
                <h3 class="text-white font-bold mb-4">{{ __('messages.newsletter_title') ?? 'Stay Updated' }}</h3>
                <p class="text-gray-400 text-sm mb-4">{{ __('messages.newsletter_desc') ?? 'Subscribe to our newsletter for the latest design trends.' }}</p>
                <form class="flex flex-col gap-3">
                    <input class="w-full bg-white/5 border border-white/10 rounded px-4 py-2 text-white placeholder-gray-500 focus:outline-none focus:border-[#c8af9e]" placeholder="{{ __('messages.email_address') ?? 'Email Address' }}" type="email"/>
                    <button class="w-full bg-[#c8af9e] text-[#553f2f] font-bold py-2 rounded hover:bg-white transition-colors" type="button">{{ __('messages.subscribe') ?? 'Subscribe' }}</button>
                </form>
            </div>
        </div>
        
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Flow Engineering. All rights reserved.</p>
            <div class="flex gap-2 text-gray-400">
                <a href="{{ route('locale.switch', 'en') }}" class="{{ App::getLocale() == 'en' ? 'text-white' : 'hover:text-white transition-colors' }}">EN</a>
                <span class="mx-1">|</span>
                <a href="{{ route('locale.switch', 'ar') }}" class="{{ App::getLocale() == 'ar' ? 'text-white' : 'hover:text-white transition-colors' }}">AR</a>
            </div>
        </div>
    </div>
</footer>
