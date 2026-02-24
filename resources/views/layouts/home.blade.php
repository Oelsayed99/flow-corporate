@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">We Build Digital Solutions</h2>
        <p class="text-lg mb-8">
            Professional corporate services to grow your business.
        </p>
        <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200">
            Get Started
        </a>
    </div>
</section>

{{-- Services Section --}}
<section class="py-20">
    <div class="container mx-auto px-6 text-center">
        <h3 class="text-3xl font-bold mb-12">Our Services</h3>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 shadow rounded-lg">
                <h4 class="text-xl font-semibold mb-4">Web Development</h4>
                <p>Modern, scalable web applications.</p>
            </div>

            <div class="bg-white p-8 shadow rounded-lg">
                <h4 class="text-xl font-semibold mb-4">UI/UX Design</h4>
                <p>Beautiful and user-focused designs.</p>
            </div>

            <div class="bg-white p-8 shadow rounded-lg">
                <h4 class="text-xl font-semibold mb-4">Consulting</h4>
                <p>Strategic digital transformation solutions.</p>
            </div>
        </div>
    </div>
</section>

@endsection
