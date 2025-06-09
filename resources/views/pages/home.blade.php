@extends('layouts.app')

@section('title', 'Home')

@section('content')

    {{-- Hero Section with Welcome and Image Carousel Placeholder --}}
    <section class="py-12 bg-white shadow-inner">
        <div class="container flex flex-col items-center px-4 mx-auto md:flex-row">
            <div class="mb-8 md:w-1/2 md:mb-0">
                <h1 class="mb-4 text-3xl font-bold text-blue-900 md:text-4xl">Welcome to A.K. Oxygen Pvt. Ltd.</h1>
                <p class="mb-4 text-gray-700">
                    (Manufacturer/Refiller/Supplier of Industrial & Medical Gases/Liquids)
                </p>
                <p class="leading-relaxed text-gray-600">
                    Welcome to A.K Oxygen Pvt Ltd, a distinguished entity renowned for its expertise in manufacturing, refilling, and supplying a comprehensive range of industrial and medical gases and liquids.At A.K Oxygen Pvt Ltd, we pride ourselves on our commitment to excellence and innovation in all aspects of our operations.
                    Led by our esteemed Director, Mr. Anil Kadam, a seasoned leader with a decade-long presence in the Indian market, we have consistently achieved remarkable success and sustained growth.
                </p>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('images/AKG factory.jpg') }}" alt="Oxygen Plant and Cylinders" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="py-12 bg-gray-50">
        <div class="container px-4 mx-auto">
            <h2 class="mb-6 text-2xl font-semibold text-center text-blue-900 md:text-3xl">Key Products & Features</h2>
            <ul class="max-w-3xl mx-auto space-y-4 text-gray-700">
                <li><i class="mr-2 text-green-600 fas fa-check"></i> Timely and On-Site Delivery.</li>
                <li><i class="mr-2 text-green-600 fas fa-check"></i> Gases with Purity Up to 99.5%.</li>
                <li><i class="mr-2 text-green-600 fas fa-check"></i> Round-the-Clock Gas Services (24x7).</li>
                <li><i class="mr-2 text-green-600 fas fa-check"></i> Customer-centric support and feedback-driven improvement.</li>
                <li><i class="mr-2 text-green-600 fas fa-check"></i> Complimentary Oxygen Service for Home Patients.</li>
            </ul>
        </div>
    </section>

    {{-- Mission, Vision, CSR --}}
    <section class="py-12 bg-white">
        <div class="container grid gap-8 px-4 mx-auto md:grid-cols-3">
            <div>
                <h3 class="mb-2 text-xl font-bold text-blue-800">Mission</h3>
                <p class="text-gray-700">
                    To provide high-quality and reliable products to other businesses, fostering collaboration to set new standards of excellence in our respective industries.
                </p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold text-blue-800">Vision</h3>
                <p class="text-gray-700">
                    To emerge as the foremost and most competitive gas manufacturing group in India, driving innovation and reshaping industry norms.
                </p>
            </div>
            <div>
                <h3 class="mb-2 text-xl font-bold text-blue-800">CSR</h3>
                <p class="text-gray-700">
                    Our CSR commitment revolves around cultivating holistic community empowerment through sustainable initiatives, aimed at addressing critical societal needs and maximizing our positive societal impact.
                </p>
            </div>
        </div>
    </section>

    {{-- Why Partner With Us Section --}}
    <section class="py-12 bg-gray-100">
        <div class="container px-4 mx-auto">
            <h2 class="mb-6 text-2xl font-semibold text-center text-blue-900 md:text-3xl">Why Partner With Us?</h2>
            <div class="grid grid-cols-2 gap-6 md:grid-cols-3">
                
                {{-- Badges with descriptions --}}
                <div class="flex flex-col items-center justify-center p-4 text-center bg-white rounded shadow-md">
                    <img src="{{ asset('images/best-quality.png') }}" alt="Best Quality" class="h-20 mb-2">
                    <p class="text-sm font-semibold text-gray-700">Best Quality Products</p>
                    <p class="text-xs text-gray-500">Delivering superior quality gases.</p>
                </div>
                <div class="flex flex-col items-center justify-center p-4 text-center bg-white rounded shadow-md">
                    <img src="{{ asset('images/nabcb.png') }}" alt="NABCB" class="h-20 mb-2">
                    <p class="text-sm font-semibold text-gray-700">NABCB Accredited</p>
                    <p class="text-xs text-gray-500">National Accreditation Board for Certification Bodies Ensuring highest standards.</p>
                </div>
                <div class="flex flex-col items-center justify-center p-4 text-center bg-white rounded shadow-md">
                    <img src="{{ asset('images/iaf.png') }}" alt="IAF" class="h-20 mb-2">
                    <p class="text-sm font-semibold text-gray-700">IAF Certified</p>
                    <p class="text-xs text-gray-500">Global recognition for our Company.</p>
                </div>
                <div class="flex flex-col items-center justify-center p-4 text-center bg-white rounded shadow-md">
                    <img src="{{ asset('images/on-time-delivery.png') }}" alt="On Time Delivery" class="h-20 mb-2">
                    <p class="text-sm font-semibold text-gray-700">On-Time Delivery</p>
                    <p class="text-xs text-gray-500">Committed to punctual and efficient product delivery.</p>
                </div>
                <div class="flex flex-col items-center justify-center p-4 text-center bg-white rounded shadow-md">
                    <img src="{{ asset('images/reasonable-price.png') }}" alt="Reasonable Price" class="h-20 mb-2">
                    <p class="text-sm font-semibold text-gray-700">Reasonable Pricing</p>
                    <p class="text-xs text-gray-500">High-quality solutions at competitive prices.</p>
                </div>
                <div class="flex flex-col items-center justify-center p-4 text-center bg-white rounded shadow-md">
                    <img src="{{ asset('images/quality-assurance.png') }}" alt="Quality Assurance" class="h-20 mb-2">
                    <p class="text-sm font-semibold text-gray-700">Rigorous Quality Assurance</p>
                    <p class="text-xs text-gray-500">Strict adherence to quality checks and standards.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- Our Clients Section --}}
    <section class="py-16 bg-gray-100 md:py-20">
        <div class="container px-4 mx-auto max-w-7xl">
            <div class="mb-12 text-center md:mb-16">
                <h2 class="mb-4 text-4xl font-bold text-gray-800 md:text-5xl">Our Valued Clients</h2>
                <div class="h-1.5 w-28 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            {{-- Scrolling Logos Container --}}
            <div class="relative w-full py-6 overflow-hidden">
                {{-- This inner div will hold all the logos and be animated --}}
                <div class="flex items-center whitespace-nowrap client-logos-wrapper">
                    @php
                        $clientLogos = [
                            'client1.png', 'client2.png', 'client3.png', 'client4.png', 'client5.png', 'client6.png', 'client7.png', 'client8.png', 'client9.png', 
                            'client10.png', 'client11.png', 'client12.png','client13.png', 'client14.png', 'client15.png', 'client16.png','client17.png'
                        ];
                        
                        $allLogos = array_merge($clientLogos, $clientLogos);
                    @endphp

                    @foreach ($allLogos as $logo)
                        <div class="flex-shrink-0 mx-6">
                            <img src="{{ asset('images/' . $logo) }}" alt="Client Logo" class="h-20 transition duration-100 max-w-none">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


<style>
/* CSS for continuous scrolling animation */
@keyframes scrollLeft {
    0% {
        transform: translateX(0%);
    }
    100% {
        /* Translate by exactly half the width of the duplicated content */
        /* If $allLogos has 2x content, translateX(-50%) will loop seamlessly */
        transform: translateX(-50%);
    }
}

.client-logos-wrapper {
    /* Apply the animation */
    animation: scrollLeft 40s linear infinite;
    width: max-content;
}

</style>



@endsection
