@extends('layouts.home')
@section('title', 'Real Estate Lead Magnet')
@section('meta_description', 'Join HomeBuyers CDO to get early access to the best real estate listings in Cagayan de Oro. Sign up now and find your dream home before anyone else!')
@section('meta_keywords', 'CDO, real estate, house for sale, housing, property, home buyers, real estate lead magnet')

@section('header')
    <div id="logo" class="px-2 py-2 rounded-md shadow-lg sm:px-4">
        <h1 class="font-sans font-extrabold text-gray-800 text-md sm:text-lg lg:text-xl dark:text-gray-200">HomeBuyers CDO</h1>
    </div>

        <a href="#leads-form"><x-primary-button class="">Get Access Now!</x-primary-button></a>
    

@endsection

@section('content')
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-center text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 w-[50%] mx-auto" role="alert">
            {{ session('success') }}
        </div>
        
    @endif

    <section id="hero-section" class="px-3 mb-12 md:px-5 lg:px-10">
        <div id="hero-content" class="flex flex-col items-center justify-center gap-6 lg:flex-row lg:gap-20">
            <div id="hero-headline" class="text-center text-gray-800 dark:text-gray-200 lg:text-start lg:w-[50%]">
                <h1 class="text-2xl font-extrabold sm:text-3xl md:text-4xl xl:text-5xl">Find Your Dream Home Before Anyone Else Does!</h1>
                <h2 class="text-md md:text-lg lg:text-xl">Sign up to get exclusive early access to the best properties in Area, personalized just for you.</h2>
                <div id="cta-btn" class="mt-4">
                    <a href="#leads-form">
                        <x-secondary-button class="px-6 py-3 text-lg font-bold">
                            Get Instant Access
                        </x-secondary-button>
                    </a>
                </div>
                <p class="text-sm text-gray-500">No spam. Unsubscribe anytime.</p>
            </div>

            <div id="hero-image" class="overflow-hidden max-w-screen lg:w-[50%]">
                <div id="image-container" class="grid h-[450px] md:h-[500px] lg:h-[550px] grid-rows-2 gap-4">

                    <div id="upper-row" class="grid grid-cols-4 gap-4">
                        <div id="upper-left" class="col-span-3 overflow-hidden rounded-md">
                            <img src="{{ asset('images/herobg.png') }}" alt="" class="w-full h-full">
                        </div>
                        <div id="upper-right" class="col-span-1 overflow-hidden rounded-md">
                            <img src="{{ asset('images/heroimage.jpg') }}" alt="" class="object-cover w-full h-full">
                        </div>
                    </div>

                    <div id="lower-row" class="grid grid-cols-4 gap-4">
                        <div id="upper-left" class="col-span-1 overflow-hidden rounded-md">
                            <img src="{{ asset('images/house1.jpg') }}" alt="" class="object-cover w-full h-full">
                        </div>
                        <div id="upper-right" class="col-span-3 overflow-hidden rounded-md">
                            <img src="{{ asset('images/house2.jpg') }}" alt="" class="w-full h-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits">
        <div id="benefits-content" class="max-w-4xl px-4 py-8 mx-auto text-center">
            <h2 class="mb-6 text-2xl font-extrabold text-gray-800 dark:text-gray-200 sm:text-3xl">Why Join HomeBuyers CDO?</h2>
            <ul class="space-y-4 text-gray-700 dark:text-gray-300 text-md md:text-lg text-start">
                <li>✅ Early Access to Listings: Be the first to know about new properties before they hit the market.</li>
                <li>✅ Personalized Property Matches: Receive recommendations tailored to your preferences and budget.</li>
                <li>✅ Expert Insights: Get tips and advice from real estate professionals to help you make informed decisions.</li>
                <li>✅ Exclusive Deals: Access special offers and discounts available only to our members.</li>
            </ul>
        </div>
    </section>

    <section id="testimonials">
        <div id="testimonials-content" class="max-w-[80%] px-4 py-8 mx-auto text-start">
            <h2 class="mb-6 text-2xl font-extrabold text-center text-gray-800 dark:text-gray-200 sm:text-3xl">What Our Members Say</h2>
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row md:space-x-6">
                <div class="p-4 bg-white rounded-md shadow-md dark:bg-gray-800  md:w-[20%]">
                    <p class="mb-2 text-gray-700 dark:text-gray-300">"Joining HomeBuyers CDO was the best decision I made during my home search. I found my dream home within weeks!"</p>
                    <span class="font-semibold text-gray-900 dark:text-gray-100">- Sarah L.</span>
                </div>
                <div class="p-4 bg-white rounded-md shadow-md dark:bg-gray-800  md:w-[20%]">
                    <p class="mb-2 text-gray-700 dark:text-gray-300">"The personalized property matches saved me so much time. I only saw homes that fit my criteria."</p>
                    <span class="font-semibold text-gray-900 dark:text-gray-100">- Mark D.</span>
                </div>
                <div class="p-4 bg-white rounded-md shadow-md dark:bg-gray-800  md:w-[20%]">
                    <p class="mb-2 text-gray-700 dark:text-gray-300">"The expert insights were invaluable. I felt confident throughout the entire buying process."</p>
                    <span class="font-semibold text-gray-900 dark:text-gray-100">- Emily R.</span>
                </div>
                <div class="p-4 bg-white rounded-md shadow-md dark:bg-gray-800  md:w-[20%]">
                    <p class="mb-2 text-gray-700 dark:text-gray-300">"Homebuyers CDO made my first home purchase so easy! They guided me from start to finish, and now I’m happily settled in Uptown CDO."</p>
                    <span class="font-semibold text-gray-900 dark:text-gray-100">- Mariel A.</span>
                </div>
                <div class="p-4 bg-white rounded-md shadow-md dark:bg-gray-800  md:w-[20%]">
                    <p class="mb-2 text-gray-700 dark:text-gray-300">"I bought my house while working in Dubai, and Homebuyers CDO handled everything smoothly. Super convenient and trustworthy!"</p>
                    <span class="font-semibold text-gray-900 dark:text-gray-100">- Jerome L.</span>
                </div>
                
                
            </div>
        </div>
    </section>

    <section id="leads-form">
        <div id="form-content" class="max-w-2xl px-4 py-8 mx-auto text-center">
            <h2 class="mb-6 text-2xl font-extrabold text-gray-800 dark:text-gray-200 sm:text-3xl">Ready to Find Your Dream Home?</h2>
            <form action="{{ route('leads.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="text" name="name" placeholder="Full Name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <input type="email" name="email" placeholder="Email Address" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <input type="tel" name="phone" placeholder="Phone Number" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <input type="address" name="address" placeholder="address" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <button type="submit" class="w-full px-4 py-3 font-bold text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Submit Form</button>
            </form>
        </div>
    </section>

    <section id="properties-preview">
        <div id="properties-content" class="max-w-full px-4 py-8 mx-auto text-center">
            <h2 class="text-2xl font-extrabold text-gray-800 dark:text-gray-200 sm:text-3xl">Sneak Peek of Hot Listings</h2>
            <p class="mb-6 text-gray-200 text-md md:text-lg">Here are just a few properties you could get early access to as a subscriber:</p>
            <div class="grid gap-6 mb-5 md:grid-cols-2 xl:grid-cols-4">
                <div class="overflow-hidden bg-white rounded-md shadow-md dark:bg-gray-800">
                    <img src="{{ asset('images/house1.jpg') }}" alt="Property 1" class="object-cover w-full h-48">
                    <div class="p-4 text-left">
                        <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">Modern Family Home</h3>
                        <p class="text-gray-700 dark:text-gray-300">$350,000 · 4 Beds · 3 Baths · 2,500 sqft</p>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-md shadow-md dark:bg-gray-800">
                    <img src="{{ asset('images/house2.jpg') }}" alt="Property 2" class="object-cover w-full h-48">
                    <div class="p-4 text-left">
                        <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">Downtown Villa</h3>
                        <p class="text-gray-700 dark:text-gray-300">$275,000 · 2 Beds · 2 Baths · 1,200 sqft</p>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-md shadow-md dark:bg-gray-800">
                    <img src="{{ asset('images/house3.jpg') }}" alt="Property 2" class="object-cover w-full h-48">
                    <div class="p-4 text-left">
                        <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">Uptown Village</h3>
                        <p class="text-gray-700 dark:text-gray-300">$400,000 · 4 Beds · 2 Baths · 1,700 sqft</p>
                    </div>
                </div>
                <div class="overflow-hidden bg-white rounded-md shadow-md dark:bg-gray-800">
                    <img src="{{ asset('images/house4.jpg') }}" alt="Property 2" class="object-cover w-full h-48">
                    <div class="p-4 text-left">
                        <h3 class="mb-2 text-lg font-semibold text-gray-800 dark:text-gray-200">Cozy Family Home</h3>
                        <p class="text-gray-700 dark:text-gray-300">$275,000 · 4 Beds · 5 Baths · 2,200 sqft</p>
                    </div>
                </div>
            </div>
            <a href="#leads-form"><x-secondary-button>Sign up to see more!</x-secondary-button></a>
        </div>
    </section>

    <section id="urgent-section">
        <div id="urgent-content" class="py-8 text-center">
        <h1 class="text-2xl font-bold text-gray-200">Don't Miss Out on Your Dream Home. Join Hundreds of Happy Subscribers Today!</h1>
        </div>
    </section>
@endsection

