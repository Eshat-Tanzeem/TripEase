""@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-image">
        <div class="text-center px-4">
            <h2 class="text-5xl font-bold mb-4">Simplify Your Travel with TripEase</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Experience seamless trip planning with our all-in-one platform for bookings, budgeting, and personalized recommendations.
            </p>
            <a href="{{ route('register') }}" class="btn-primary text-white px-8 py-3 rounded-full font-semibold text-lg mr-2">Get Started</a>
            <a href="{{ route('login') }}" class="btn-secondary text-white px-8 py-3 rounded-full font-semibold text-lg">Login</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16 section-gradient">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-10">Explore TripEase Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=200&q=80" alt="Book Tickets" class="clickable-image mb-6 mx-auto">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Book Tickets</h3>
                    <p class="text-gray-600">Easily book flights, trains, and other transportation with a secure payment gateway.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=200&q=80" alt="Manage Budget" class="clickable-image mb-6 mx-auto">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Manage Budget</h3>
                    <p class="text-gray-600">Set and monitor your travel expenses with flexible payment options.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="https://images.unsplash.com/photo-1563986768494-4dee8d9163d9?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=200&q=80" alt="Personalized Recommendations" class="clickable-image mb-6 mx-auto">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Personalized Recommendations</h3>
                    <p class="text-gray-600">Discover destinations and activities tailored to your preferences and budget.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-gray-800 text-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">Ready to Transform Your Travel Experience?</h2>
            <p class="text-xl mb-8 max-w-3xl mx-auto">
                Join TripEase today and enjoy stress-free travel planning with our intuitive platform.
            </p>
            <a href="{{ route('register') }}" class="btn-secondary text-white px-8 py-3 rounded-full font-semibold text-lg">Sign Up Now</a>
        </div>
    </section>
@endsection
""
