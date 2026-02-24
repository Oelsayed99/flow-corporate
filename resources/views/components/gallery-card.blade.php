@props([
    'title',
    'category',
    'image',
    'span' => ''
])

<div class="group relative rounded-xl overflow-hidden {{ $span }}">
    <img alt="{{ $title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ $image }}" />
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
        <h3 class="text-white text-2xl font-bold">{{ $title }}</h3>
        <p class="text-gray-300">{{ $category }}</p>
    </div>
</div>
