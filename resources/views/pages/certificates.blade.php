@extends('layouts.app')

@section('title', 'Our Certifications')

@section('content')

    <!-- Quality Assurance Section -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Quality Assurance</h2>
                <div class="h-1.5 w-28 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-12 bg-white p-8 md:p-12 rounded-xl shadow-xl border border-gray-100">
                <div class="md:w-2/3 text-center md:text-left order-2 md:order-1">
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                        A.K. Oxygen PVT LTD is proudly **Certified AN ISO 9001-2008** for Quality Assurance. This certification is a significant milestone, reflecting our unwavering commitment to product quality and complete customer satisfaction.
                    </p>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                        To achieve ultimate customer satisfaction, our quality targets at A.K Oxygen Pvt Ltd are set to deliver the best-in-class quality and the highest level of service in our industry. We understand that our customers are the architects of our future, entrusting us with new projects and business opportunities through their confidence.
                    </p>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-6">
                        To meet these ambitious objectives, A.K. Oxygen PVT LTD and its network of suppliers are collaboratively engaged in a continuous improvement process. We emphasize and expect a high level of performance from our entire supplier network to ensure consistency and excellence.
                    </p>
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        Almost all of our products are certified and manufactured to world-class quality standards, including **JAS-ANZ accreditation**. Furthermore, we highly value and integrate customer suggestions into our quality enhancement processes, ensuring that our products not only meet but exceed expectations.
                    </p>
                </div>
                <div class="md:w-1/3 flex justify-center order-1 md:order-2"> 
                    <img src="{{ asset('images/quality-assurance1.png') }}" alt="Quality Assurance Process" class="w-full md:w-auto h-auto max-h-96 object-cover rounded-xl shadow-lg border-4 border-blue-200">
                </div>
            </div>
        </div>
    </section>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-extrabold text-gray-800 text-center mb-6">Our Certifications</h1>

    <p class="text-lg text-gray-700 text-center mb-10 max-w-3xl mx-auto leading-relaxed">
        AKG Industries is committed to delivering quality you can trust. Below are some of the certifications
        that validate our unwavering commitment to excellence, rigorous standards, and adherence to international norms.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Certificate Card: ISO 9001:2015 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 text-center
                    transition-transform duration-300 hover:scale-105 hover:shadow-xl">
            <img src="{{ asset('images/iso9001.jpg') }}" class="w-full h-60 object-contain p-4" alt="ISO 14001 Certificate">
            <div class="p-6">
                <h5 class="text-2xl font-semibold text-gray-800 mb-3">ISO 14001:2015</h5>
                <p class="text-gray-600 text-base leading-relaxed">
                    Certified for Quality Management Systems, ensuring consistent performance,
                    continuous improvement, and customer satisfaction across all our processes.
                </p>
            </div>
        </div>

        <!-- Certificate Card: ISO 14001:2015 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 text-center
                    transition-transform duration-300 hover:scale-105 hover:shadow-xl">
            <img src="{{ asset('images/iso14001.jpg') }}" class="w-full h-60 object-contain p-4" alt="ISO 14001 Certificate">
            <div class="p-6">
                <h5 class="text-2xl font-semibold text-gray-800 mb-3">ISO 14001:2015</h5>
                <p class="text-gray-600 text-base leading-relaxed">
                    Recognized for our Environmental Management Systems, demonstrating our
                    commitment to reducing environmental impact and promoting sustainability in our operations.
                </p>
            </div>
        </div>

        <!-- Certificate Card: BIS Certification -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 text-center
                    transition-transform duration-300 hover:scale-105 hover:shadow-xl">
            <img src="{{ asset('images/bis.jpg') }}" class="w-full h-60 object-contain p-4" alt="BIS Certificate">
            <div class="p-6">
                <h5 class="text-2xl font-semibold text-gray-800 mb-3">BIS Certification</h5>
                <p class="text-gray-600 text-base leading-relaxed">
                    Bureau of Indian Standards certification, ensuring our products comply with
                    rigorous national quality and safety norms, giving you peace of mind.
                </p>
            </div>
        </div>

        <!-- Certificate Card: JAS-ANZ 'C' INTERNATIONAL CERTIFICATION under AN ISO 9001-2008 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 text-center
                    transition-transform duration-300 hover:scale-105 hover:shadow-xl">
            <img src="{{ asset('images/jas-anz.png') }}" class="w-full h-60 object-contain p-4" alt="JAS-ANZ">
            <div class="p-6">
                <h5 class="text-2xl font-semibold text-gray-800 mb-3">JAS-ANZ 'C' INTERNATIONAL CERTIFICATION</h5>
                <p class="text-gray-600 text-base leading-relaxed">
                    Quality Management System is certified by a JAS-ANZ accredited body, demonstrating adherence to 
                    international quality standards for consistent processes and customer satisfaction.
                </p>
            </div>
        </div>

    </div>
</div>

@endsection
