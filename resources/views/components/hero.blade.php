@props([
    'title' => '',
    'highlight' => '',
    'subtitle' => '',
    'image' => '',
    'primaryAction' => null,
    'secondaryAction' => null
])

<header class="relative w-full h-[85vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 z-10" style="background-image: linear-gradient(to right bottom, rgba(28, 25, 22, 0.6), rgba(85, 63, 47, 0.4));"></div>
        <img alt="Hero Image" class="w-full h-full object-cover" src="{{ $image }}" />
    </div>
    
    <div class="relative z-20 container mx-auto px-6 text-center text-white max-w-4xl">
        <h1 class="text-5xl md:text-7xl font-light tracking-tight mb-6 leading-tight">
            {{ $title }}<br/>
            @if($highlight)
                <span class="font-bold">{{ $highlight }}</span>
            @endif
        </h1>
        
        @if($subtitle)
            <p class="text-lg md:text-xl text-gray-200 font-light mb-10 max-w-2xl mx-auto leading-relaxed">
                {{ $subtitle }}
            </p>
        @endif
        
        @if($primaryAction || $secondaryAction)
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                @if($primaryAction)
                    <a href="{{ $primaryAction['url'] }}" class="w-full sm:w-auto px-8 py-4 bg-[#c8af9e] hover:bg-white hover:text-[#553f2f] text-[#553f2f] font-bold rounded-lg transition-all duration-300 shadow-lg text-base text-center">
                        {{ $primaryAction['label'] }}
                    </a>
                @endif
                
                @if($secondaryAction)
                    <a href="{{ $secondaryAction['url'] }}" class="w-full sm:w-auto px-8 py-4 bg-transparent border border-white text-white hover:bg-white hover:text-[#553f2f] font-bold rounded-lg transition-all duration-300 text-base text-center">
                        {{ $secondaryAction['label'] }}
                    </a>
                @endif
            </div>
        @endif
    </div>
</header>
