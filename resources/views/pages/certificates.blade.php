@extends('layouts.app')

@section('title', 'Our Certifications')

@section('bg-image', "background-image: url('/images/quality-assurance-bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;")

@section('content')

    <!-- Quality Assurance Section -->
    <section class="py-16 md:py-24">
        <div class="container px-6 mx-auto bg-white bg-opacity-50 rounded-lg shadow-xl max-w-7xl">
            <div class="mb-12 text-center md:mb-16">
                <h2 class="mb-4 text-4xl font-bold text-gray-800 md:text-5xl">Quality Assurance</h2>
                <div class="h-1.5 w-28 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            <div class="flex flex-col items-center gap-12 p-8 bg-white bg-opacity-50 border border-gray-100 shadow-xl md:flex-row md:p-12 rounded-xl">
                <div class="order-2 text-center md:w-2/3 md:text-left md:order-1">
                    <p class="mb-6 text-lg leading-relaxed text-gray-700 md:text-xl">
                        A.K. Oxygen PVT LTD is proudly <strong>Certified AN ISO 9001-2008</strong> for Quality Assurance. This certification is a significant milestone, reflecting our unwavering commitment to product quality and complete customer satisfaction.
                    </p>
                    <p class="mb-6 text-lg leading-relaxed text-gray-700 md:text-xl">
                        To achieve ultimate customer satisfaction, our quality targets at A.K Oxygen Pvt Ltd are set to deliver the best-in-class quality and the highest level of service in our industry. We understand that our customers are the architects of our future, entrusting us with new projects and business opportunities through their confidence.
                    </p>
                    <p class="mb-6 text-lg leading-relaxed text-gray-700 md:text-xl">
                        To meet these ambitious objectives, A.K. Oxygen PVT LTD and its network of suppliers are collaboratively engaged in a continuous improvement process. We emphasize and expect a high level of performance from our entire supplier network to ensure consistency and excellence.
                    </p>
                    <p class="text-lg leading-relaxed text-gray-700 md:text-xl">
                        Almost all of our products are certified and manufactured to world-class quality standards, including <strong>JAS-ANZ accreditation</strong>. Furthermore, we highly value and integrate customer suggestions into our quality enhancement processes, ensuring that our products not only meet but exceed expectations.
                    </p>
                </div>
                <div class="flex justify-center order-1 md:w-1/3 md:order-2"> 
                    <img src="{{ asset('images/quality-assurance1.png') }}" alt="Quality Assurance Process" class="object-cover w-full h-auto border-4 border-blue-200 shadow-lg md:w-auto max-h-96 rounded-xl">
                </div>
            </div>
        </div>
    </section>

<div class="container px-4 py-8 mx-auto bg-white bg-opacity-50 rounded-lg shadow-xl">
    <h1 class="mb-6 text-4xl font-extrabold text-center text-gray-800">Our Certifications</h1>

    <p class="max-w-3xl mx-auto mb-10 text-lg leading-relaxed text-center text-gray-700">
        AKG Industries is committed to delivering quality you can trust. Below are some of the certifications
        that validate our unwavering commitment to excellence, rigorous standards, and adherence to international norms.
    </p>

    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

        <!-- Certificate Card: ISO 9001:2015 -->
        <div class="overflow-hidden text-center transition-transform duration-300 bg-white bg-opacity-50 border border-gray-100 shadow-lg rounded-xl hover:scale-105 hover:shadow-xl">
            <img src="{{ asset('images/iso9001.jpg') }}" class="object-contain w-full p-4 h-60" alt="ISO 14001 Certificate">
            <div class="p-6">
                <h5 class="mb-3 text-2xl font-semibold text-gray-800">ISO 14001:2015</h5>
                <p class="text-base leading-relaxed text-gray-600">
                    Certified for Quality Management Systems, ensuring consistent performance,
                    continuous improvement, and customer satisfaction across all our processes.
                </p>
            </div>
        </div>

        <!-- Certificate Card: ISO 14001:2015 -->
        <div class="overflow-hidden text-center transition-transform duration-300 bg-white bg-opacity-50 border border-gray-100 shadow-lg rounded-xl hover:scale-105 hover:shadow-xl">
            <img src="{{ asset('images/iso14001.jpg') }}" class="object-contain w-full p-4 h-60" alt="ISO 14001 Certificate">
            <div class="p-6">
                <h5 class="mb-3 text-2xl font-semibold text-gray-800">ISO 14001:2015</h5>
                <p class="text-base leading-relaxed text-gray-600">
                    Recognized for our Environmental Management Systems, demonstrating our
                    commitment to reducing environmental impact and promoting sustainability in our operations.
                </p>
            </div>
        </div>

        <!-- Certificate Card: BIS Certification -->
        <div class="overflow-hidden text-center transition-transform duration-300 bg-white bg-opacity-50 border border-gray-100 shadow-lg rounded-xl hover:scale-105 hover:shadow-xl">
            <img src="{{ asset('images/bis.jpg') }}" class="object-contain w-full p-4 h-60" alt="BIS Certificate">
            <div class="p-6">
                <h5 class="mb-3 text-2xl font-semibold text-gray-800">BIS Certification</h5>
                <p class="text-base leading-relaxed text-gray-600">
                    Bureau of Indian Standards certification, ensuring our products comply with
                    rigorous national quality and safety norms, giving you peace of mind.
                </p>
            </div>
        </div>

        <!-- Certificate Card: JAS-ANZ 'C' INTERNATIONAL CERTIFICATION under AN ISO 9001-2008 -->
        <div class="overflow-hidden text-center transition-transform duration-300 bg-white bg-opacity-50 border border-gray-100 shadow-lg rounded-xl hover:scale-105 hover:shadow-xl">
            <img src="{{ asset('images/jas-anz.png') }}" class="object-contain w-full p-4 h-60" alt="JAS-ANZ">
            <div class="p-6">
                <h5 class="mb-3 text-2xl font-semibold text-gray-800">JAS-ANZ 'C' INTERNATIONAL CERTIFICATION</h5>
                <p class="text-base leading-relaxed text-gray-600">
                    Quality Management System is certified by a JAS-ANZ accredited body, demonstrating adherence to 
                    international quality standards for consistent processes and customer satisfaction.
                </p>
            </div>
        </div>

    </div>
</div>

@endsection
