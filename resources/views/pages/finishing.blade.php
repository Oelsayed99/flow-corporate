<x-app>
    <x-hero 
        title="{{ __('messages.finishing_title') ?? 'Finishing Works' }}"
        subtitle="{{ __('messages.finishing_desc') ?? 'Detail is not just a detail; it is the design. Our finishing works transform structural shells into masterpieces of texture and light.' }}"
        image="https://lh3.googleusercontent.com/aida-public/AB6AXuAP560d0svThzyVbFjMu4XhCLGbQFSw6JC4M1gn-knVr0-6E9tWqfUq38LSKwOYZIx-g7nU3eRmJ8eI1Ns4PH9k8fSPXIa90E3ASzGg9rugYV-N7Ecy2qVspPpPFFuW6AbDtCpf18emQe4D9Q5llX2VLOCjZmA-QIAvJSMnRXU9WK17pyS3ExmhxeVXmHsBJj9qA4Jp_xEB0w9VDvD7yjOSv8rV0Ag7Et7nwnGKhO24CVfimTqxgH1lg5NC6jabi3TObiph6WhUjp4"
    />

    <section class="py-20 px-6 md:px-10 lg:px-20 bg-slate-900 text-white">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl hover:bg-white/10 transition-colors group">
                <div class="size-12 rounded-lg bg-[#c8af9e] flex items-center justify-center text-[#553f2f] mb-6 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined">texture</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-white">Marble Installation</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Sourcing and installing the world's finest stones with seamless book-matching and precision cuts.
                </p>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl hover:bg-white/10 transition-colors group">
                <div class="size-12 rounded-lg bg-[#c8af9e] flex items-center justify-center text-[#553f2f] mb-6 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined">carpenter</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-white">Custom Joinery</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Bespoke woodwork and cabinetry designed to fit perfectly within the architectural context of your space.
                </p>
            </div>
            <!-- Feature 3 -->
            <div class="bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-xl hover:bg-white/10 transition-colors group">
                <div class="size-12 rounded-lg bg-[#c8af9e] flex items-center justify-center text-[#553f2f] mb-6 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined">format_paint</span>
                </div>
                <h3 class="text-xl font-bold mb-3 text-white">Plaster &amp; Paint</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    High-end decorative finishes, including Venetian plaster, micro-cement, and specialty paint effects.
                </p>
            </div>
        </div>
    </section>
</x-app>
