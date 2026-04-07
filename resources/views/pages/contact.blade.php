<x-app>
    <x-section title="{{ __('messages.contact_us') ?? 'Contact Us' }}" bg="bg-white">
        <div class="max-w-5xl mx-auto text-center">
            <p class="text-lg text-slate-600 mb-10">{{ __('messages.contact_desc') ?? 'We would love to hear from you. Get in touch with our team for your next big project.' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="p-6 bg-[#f9f8f8] rounded-xl shadow-sm text-center">
                    <span class="material-symbols-outlined text-[#c8af9e] text-4xl mb-4">location_on</span>
                    <h3 class="font-bold text-[#553f2f] mb-2">{{ __('messages.our_office') ?? 'Our Office' }}</h3>
                    <p class="text-slate-600 text-sm">1234 Skyline Avenue,<br/>Dubai, UAE</p>
                </div>
                <div class="p-6 bg-[#f9f8f8] rounded-xl shadow-sm text-center">
                    <span class="material-symbols-outlined text-[#c8af9e] text-4xl mb-4">chat</span>
                    <h3 class="font-bold text-[#553f2f] mb-2">{{ __('messages.whatsapp') ?? 'WhatsApp' }}</h3>
                    <a href="https://wa.me/201092449447" target="_blank" class="text-slate-600 text-sm hover:text-[#c8af9e] transition-colors font-semibold" dir="ltr">+2010 92449447</a>
                </div>
                <div class="p-6 bg-[#f9f8f8] rounded-xl shadow-sm text-center">
                    <span class="material-symbols-outlined text-[#c8af9e] text-4xl mb-4">mail</span>
                    <h3 class="font-bold text-[#553f2f] mb-2">{{ __('messages.email') ?? 'Email' }}</h3>
                    <p class="text-slate-600 text-sm">info@flow-egy.com</p>
                </div>
                <div class="p-6 bg-[#f9f8f8] rounded-xl shadow-sm text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 mb-4 fill-current text-[#c8af9e] mx-auto" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                    <h3 class="font-bold text-[#553f2f] mb-2">{{ __('messages.facebook') ?? 'Facebook' }}</h3>
                    <a href="https://www.facebook.com/share/1GxXmPV1Y1/?mibextid=wwXIfr" target="_blank" class="text-slate-600 text-sm hover:text-[#c8af9e] transition-colors font-semibold">Flow Engineering</a>
                </div>
                <div class="p-6 bg-[#f9f8f8] rounded-xl shadow-sm text-center">
                    <span class="material-symbols-outlined text-[#c8af9e] text-4xl mb-4">photo_camera</span>
                    <h3 class="font-bold text-[#553f2f] mb-2">{{ __('messages.instagram') ?? 'Instagram' }}</h3>
                    <a href="https://www.instagram.com/flow_endless_ideas?igsh=MWQwdWRwNXpweXM3ZQ==&utm_source=ig_contact_invite" target="_blank" class="text-slate-600 text-sm hover:text-[#c8af9e] transition-colors font-semibold">@flow_endless_ideas</a>
                </div>
            </div>
        </div>
    </x-section>
</x-app>
