@extends('layouts.app')

@section('title', 'Contact Us')

@section('bg-image', "background-image: url('/images/contact-us-bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;")

@section('content')

{{-- Main container for the page content, centered with some padding --}}
<div class="container px-4 py-8 mx-auto bg-white bg-opacity-50 rounded-lg shadow-xl">
    
    {{-- Main heading for the page, centered --}}
    <h1 class="mb-6 text-3xl font-bold text-center text-gray-800">Contact A.K. Oxygen Pvt. Ltd.</h1>

    {{-- Introductory paragraph, centered and constrained in width --}}
    <p class="max-w-2xl mx-auto mb-8 text-lg text-center text-gray-700">
        We'd love to hear from you. Whether you have an inquiry about our products, need technical support,
        or want to discuss a custom project, our team is ready to assist you.
    </p>

    {{-- Layout for the form and contact details, using a simple grid --}}
    <div class="grid grid-cols-1 gap-8 mb-12 md:grid-cols-2">
        
        <!-- Contact Form Section -->
        <div class="p-6 bg-white bg-opacity-50 rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-bold text-center text-gray-800">Send Us a Message</h2>
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block mb-1 text-sm font-semibold text-gray-700">
                        <span class="text-red-600">*</span> Your Name
                    </label>
                    <input type="text" id="name" name="name"
                           class="w-full px-3 py-2 border border-gray-300 rounded"
                           placeholder="Full Name" required>
                </div>
                <div>
                    <label for="email" class="block mb-1 text-sm font-semibold text-gray-700">
                        <span class="text-red-600">*</span> Your Email
                    </label>
                    <input type="email" id="email" name="email"
                           class="w-full px-3 py-2 border border-gray-300 rounded"
                           placeholder="your.email@example.com" required>
                </div>
                <div>
                    <label for="phone" class="block mb-1 text-sm font-semibold text-gray-700">
                        <span class="text-red-600">*</span> Phone Number
                    </label>
                    <input type="tel" id="phone" name="phone"
                           class="w-full px-3 py-2 border border-gray-300 rounded"
                           placeholder="+91 98765 43210">
                </div>
                <div>
                    <label for="message" class="block mb-1 text-sm font-semibold text-gray-700">
                        <span class="text-red-600">*</span> Your Message
                    </label>
                    <textarea id="message" name="message" rows="5"
                              class="w-full px-3 py-2 border border-gray-300 rounded"
                              placeholder="Type your message here..." required></textarea>
                </div>
                <div class="mt-4 text-center">
                    <button type="submit"
                            class="inline-block px-6 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600">
                        Send Message
                    </button>
                </div>

                <span class="text-red-600">*</span> marked are required fields.
            </form>
        </div>

        <!-- Contact Information Section -->
        <div class="p-6 bg-white bg-opacity-50 rounded-lg shadow-md">
            <h2 class="mb-4 text-2xl font-bold text-center text-gray-800">Our Contact Details</h2>
            <div class="space-y-4 text-base text-gray-700">
                <p class="flex items-center">
                    <i class="mr-2 text-blue-500 fas fa-map-marker-alt"></i>
                    <span class="font-semibold text-gray-800">Address:</span> A.K. Oxygen PVT LTD, <br> Plot No: C-21, Near Fire Office, <br> MIDC, Baramati, Dist: Pune. <br> Maharashtra, INDIA - 413133
                </p>
                <p class="flex items-center">
                    <i class="mr-2 text-blue-500 fas fa-phone-alt"></i>
                    <span class="font-semibold text-gray-800">Phone:</span> +91 9049449999
                </p>
                <p class="flex items-center">
                    <i class="mr-2 text-blue-500 fas fa-envelope"></i>
                    <span class="font-semibold text-gray-800">Email: </span> info@akgind.com OR akoxygenbmt@gmail.com
                </p>
                <p class="flex items-center">
                    <i class="mr-2 text-blue-500 fas fa-clock"></i>
                    <span class="font-semibold text-gray-800">Working Hours: </span> Mon - Sat: 9:00 AM - 6:00 PM
                </p>
            </div>
            
            {{-- Map Embed Section --}}
            <div class="mt-6">
                <h2 class="mb-4 text-2xl font-bold text-center text-gray-800">Find Us on Map</h2>
                <div class="overflow-hidden bg-white bg-opacity-50 rounded shadow-sm" style="height: 400px; width: 100%;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3790.340679917975!2d74.60286817579168!3d18.19426177905906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc37545f3646abf%3A0xc3ce571c02457757!2sA.K.%20OXYGEN%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1749210845968!5m2!1sen!2sin"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
