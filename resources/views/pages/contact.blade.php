<x-app>
    <x-section title="{{ __('messages.contact_us') ?? 'Contact Us' }}" bg="bg-white">
        <div class="max-w-3xl mx-auto text-center">
            <p class="text-lg text-slate-600 mb-10">{{ __('messages.contact_desc') ?? 'We would love to hear from you. Get in touch with our team for your next big project.' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-[#f9f8f8] rounded-xl shadow-sm text-center">
                    <span class="material-symbols-outlined text-[#c8af9e] text-4xl mb-4">location_on</span>
                    <h3 class="font-bold text-[#553f2f] mb-2">{{ __('messages.our_office') ?? 'Our Office' }}</h3>
                    <p class="text-slate-600 text-sm">1234 Skyline Avenue,<br/>Dubai, UAE</p>
                </div>
                <div class="p-6 bg-[#f9f8f8] rounded-xl shadow-sm text-center">
                    <span class="material-symbols-outlined text-[#c8af9e] text-4xl mb-4">call</span>
                    <h3 class="font-bold text-[#553f2f] mb-2">{{ __('messages.phone') ?? 'Phone' }}</h3>
                    <p class="text-slate-600 text-sm" dir="ltr">+971 4 123 4567</p>
                </div>
                <div class="p-6 bg-[#f9f8f8] rounded-xl shadow-sm text-center">
                    <span class="material-symbols-outlined text-[#c8af9e] text-4xl mb-4">mail</span>
                    <h3 class="font-bold text-[#553f2f] mb-2">{{ __('messages.email') ?? 'Email' }}</h3>
                    <p class="text-slate-600 text-sm">info@flow-engineering.com</p>
                </div>
            </div>
        </div>
    </x-section>
</x-app>
