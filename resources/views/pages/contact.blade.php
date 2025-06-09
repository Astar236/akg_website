{{--
    File: resources/views/pages/contact.blade.php
    Purpose: Provides contact information and a contact form for AKG Industries.
    Design: Rewritten with simpler Tailwind CSS for a beginner-friendly approach.
--}}

{{--
    This view still extends the main application layout.
    It brings in the header, navigation, and footer defined in layouts/app.blade.php.
    This is a fundamental Laravel concept.
--}}
@extends('layouts.app')

{{--
    This sets the title of the browser tab for this page.
    It fills the @yield('title') placeholder in layouts/app.blade.php.
--}}
@section('title', 'Contact Us')

{{--
    This is where the main content of the contact page goes.
    It fills the @yield('content') placeholder in layouts/app.blade.php.
--}}
@section('content')

{{-- Main container for the page content, centered with some padding --}}
<div class="container mx-auto px-4 py-8">
    {{-- Main heading for the page, centered --}}
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">Contact AKG Industries</h1>

    {{-- Introductory paragraph, centered and constrained in width --}}
    <p class="text-lg text-gray-700 text-center mb-8 max-w-2xl mx-auto">
        We'd love to hear from you. Whether you have an inquiry about our products, need technical support,
        or want to discuss a custom project, our team is ready to assist you.
    </p>

    {{-- Layout for the form and contact details, using a simple grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <!-- Contact Form Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Send Us a Message</h2>
            {{--
                The form action points to a named route for submitting data.
                The @csrf directive is important for security in Laravel forms.
            --}}
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Your Name</label>
                    <input type="text" id="name" name="name"
                           class="w-full px-3 py-2 border border-gray-300 rounded"
                           placeholder="Full Name" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Your Email</label>
                    <input type="email" id="email" name="email"
                           class="w-full px-3 py-2 border border-gray-300 rounded"
                           placeholder="your.email@example.com" required>
                </div>
                <div>
                    <label for="phone" class="block text-sm font-semibold text-gray-700 mb-1">Phone Number (Optional)</label>
                    <input type="tel" id="phone" name="phone"
                           class="w-full px-3 py-2 border border-gray-300 rounded"
                           placeholder="+91 98765 43210">
                </div>
                <div>
                    <label for="message" class="block text-sm font-semibold text-gray-700 mb-1">Your Message</label>
                    <textarea id="message" name="message" rows="5"
                              class="w-full px-3 py-2 border border-gray-300 rounded"
                              placeholder="Type your message here..." required></textarea>
                </div>
                <div class="text-center mt-4">
                    <button type="submit"
                            class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded">
                        Send Message
                    </button>
                </div>
            </form>
        </div>

        <!-- Contact Information Section -->
        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Our Contact Details</h2>
            <div class="space-y-4 text-base text-gray-700">
                <p class="flex items-center">
                    {{-- Font Awesome icon for address. This assumes Font Awesome is linked in layouts/app.blade.php --}}
                    <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>
                    <span class="font-semibold text-gray-800">Address:</span> AKG Industries Pvt. Ltd., <br>123 Industrial Area, Pimpri-Chinchwad, <br>Maharashtra, India - 411018
                </p>
                <p class="flex items-center">
                    {{-- Font Awesome icon for phone --}}
                    <i class="fas fa-phone-alt text-blue-500 mr-2"></i>
                    <span class="font-semibold text-gray-800">Phone:</span> +91 123 456 7890
                </p>
                <p class="flex items-center">
                    {{-- Font Awesome icon for email --}}
                    <i class="fas fa-envelope text-blue-500 mr-2"></i>
                    <span class="font-semibold text-gray-800">Email:</span> info@akgind.com
                </p>
                <p class="flex items-center">
                    {{-- Font Awesome icon for working hours --}}
                    <i class="fas fa-clock text-blue-500 mr-2"></i>
                    <span class="font-semibold text-gray-800">Working Hours:</span> Mon - Sat: 9:00 AM - 6:00 PM
                </p>
            </div>
            
            {{-- Map Embed Section --}}
            <div class="mt-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Find Us on Map</h2>
                {{-- Basic container for the map iframe --}}
                <div class="bg-gray-200 rounded overflow-hidden shadow-sm" style="height: 200px; width: 100%;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.340679917975!2d74.60286817579168!3d18.19426177905906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc37545f3646abf%3A0xc3ce571c02457757!2sA.K.%20OXYGEN%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1749210845968!5m2!1sen!2sin"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
