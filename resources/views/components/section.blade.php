@props([
    'id' => '',
    'title' => '',
    'subtitle' => '',
    'bg' => 'bg-white'
])

<section class="py-24 {{ $bg }}" id="{{ $id }}">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        @if($title || $subtitle)
            <div class="text-center mb-16">
                @if($subtitle)
                    <span class="text-[#c8af9e] text-sm font-bold uppercase tracking-widest mb-2 block">{{ $subtitle }}</span>
                @endif
                @if($title)
                    <h2 class="text-4xl md:text-5xl font-light text-[#553f2f] mb-6">{{ $title }}</h2>
                    <div class="w-24 h-1 bg-[#c8af9e] mx-auto rounded-full"></div>
                @endif
            </div>
        @endif
        
        {{ $slot }}
    </div>
</section>
