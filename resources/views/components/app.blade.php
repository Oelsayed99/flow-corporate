<!DOCTYPE html>
<html dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.site_title') ?? 'Flow - Luxury Engineering & Finishing' }}</title>
    <link rel="icon" href="{{ asset('images/logos/Single logo.ico') }}" type="image/x-icon">
    
    <!-- SEO Tags -->
    <meta name="description" content="{{ __('messages.home_hero_subtitle') ?? 'Premium finishing and structural integrity for the modern era.' }}">
    <meta name="keywords" content="luxury finishing, civil engineering, structural integrity, interior design, Flow">
    <meta name="author" content="Flow Engineering">
    <meta property="og:title" content="{{ __('messages.site_title') ?? 'Flow - Luxury Engineering & Finishing' }}">
    <meta property="og:description" content="{{ __('messages.home_hero_subtitle') ?? 'Premium finishing and structural integrity for the modern era.' }}">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Smooth scrolling for anchor links */
        html { scroll-behavior: smooth; }
        /* Custom scrollbar for a premium feel */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--color-brand-bone, #f1e8d9); }
        ::-webkit-scrollbar-thumb { background: var(--color-brand-sand, #c8af9e); border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--color-brand-brown, #553f2f); }

        .hover-card-lift { transition: transform 0.4s ease, box-shadow 0.4s ease; }
        .hover-card-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -5px rgba(85, 63, 47, 0.15);
        }
    </style>
</head>
<body class="font-display bg-white text-[#553f2f] antialiased selection:bg-[#c8af9e] selection:text-white overflow-x-hidden">
    
    <x-navbar />

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <x-footer />
    
</body>
</html>