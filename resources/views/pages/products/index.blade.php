@extends('layouts.app')

@section('title', 'Our Products')


@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-extrabold text-gray-800 text-center mb-6">Our Products</h1>

    <p class="text-lg text-gray-700 text-center mb-10 max-w-3xl mx-auto leading-relaxed">
        Explore our comprehensive range of high-quality industrial products, engineered for precision,
        durability, and superior performance across various sectors.
    </p>

    {{-- Product List Display --}}
    <div class="space-y-10 mb-12">

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 flex flex-col md:flex-row items-center md:items-start gap-6 hover:shadow-xl transition duration-300">
            <div class="flex-shrink-0 w-full md:w-1/4 lg:w-1/5 flex justify-center md:justify-start">
                <img src="{{ asset('images/OXYGEN (O2) GAS.jpg') }}" alt="OXYGEN (O2) GAS" class="w-40 h-40 object-cover rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="text-2xl font-semibold text-gray-800 mb-2">OXYGEN (O2) GAS</h5>
                <p>Purity: 99.95%</p>
                <p class="text-gray-700 mb-4">Pressure: 150 Kg/m3</p>
                <p class="text-gray-700 leading-relaxed mb-4">Industry sector: s.s foundry, heavy fabrication. Workshop, ship building and cutting, furnace lancing, Chemical, pharmaceuticals and petroleum industry. Glass, pilp and pepar industry. Health care</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 flex flex-col md:flex-row items-center md:items-start gap-6 hover:shadow-xl transition duration-300">
            <div class="flex-shrink-0 w-full md:w-1/4 lg:w-1/5 flex justify-center md:justify-start">
                <img src="{{ asset('images/NITROGEN(N2) GAS.jpg') }}" alt="NITROGEN(N2) GAS" class="w-40 h-40 object-cover rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="text-2xl font-semibold text-gray-800 mb-2">NITROGEN (N2) GAS</h5>
                <p>Purity: 99.95%</p>
                <p class="text-gray-700 mb-4">Pressure : 150 Kg/m3</p>
                <p class="text-gray-700 leading-relaxed mb-4"> Industry sector: degassing in aluminum foundry Inert gas in chemical sector. Animal husbandry, Pharmaceutical, Food processing industry.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 flex flex-col md:flex-row items-center md:items-start gap-6 hover:shadow-xl transition duration-300">
            <div class="flex-shrink-0 w-full md:w-1/4 lg:w-1/5 flex justify-center md:justify-start">
                <img src="{{ asset('images/CARBON DIOXIDE(CO2) GAS.jpg') }}" alt="CARBON DIOXIDE(CO2) GAS" class="w-40 h-40 object-cover rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="text-2xl font-semibold text-gray-800 mb-2">CARBON DIOXIDE(CO2) GAS</h5>
                <p>Purity : 99.90%</p>
                <p class="text-gray-700 mb-4">Pressure : 50 Kg/m3.</p>
                <p class="text-gray-700 leading-relaxed mb-4">Fire extinguishers, CO2 welding, Foundry sector, Dry ice for cooling, Beverages.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 flex flex-col md:flex-row items-center md:items-start gap-6 hover:shadow-xl transition duration-300">
            <div class="flex-shrink-0 w-full md:w-1/4 lg:w-1/5 flex justify-center md:justify-start">
                <img src="{{ asset('images/DISSOLVED ACETYLENE(D.A) GAS.jpg') }}" alt="DISSOLVED ACETYLENE(D.A) GAS" class="w-40 h-40 object-cover rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="text-2xl font-semibold text-gray-800 mb-2">DISSOLVED ACETYLENE(D.A) GAS</h5>
                <p>Purity: 99.50%.</p>
                <p class="text-gray-700 mb-4">Pressure : 17.5 Kg/m3</p>
                <p class="text-gray-700 leading-relaxed mb-4">Metal cutting industry.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 flex flex-col md:flex-row items-center md:items-start gap-6 hover:shadow-xl transition duration-300">
            <div class="flex-shrink-0 w-full md:w-1/4 lg:w-1/5 flex justify-center md:justify-start">
                <img src="{{ asset('images/NITROS OXIDE(N2O)GAS.jpg') }}" alt="NITROS OXIDE(N2O)GAS" class="w-40 h-40 object-cover rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="text-2xl font-semibold text-gray-800 mb-2">NITROS OXIDE(N2O)GAS</h5>
                <p>Purity: 99.50%.</p>
                <p class="text-gray-700 mb-4">Pressure : 60 Kg/m3</p>
                <p class="text-gray-700 leading-relaxed mb-4">Health Care.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-6 flex flex-col md:flex-row items-center md:items-start gap-6 hover:shadow-xl transition duration-300">
            <div class="flex-shrink-0 w-full md:w-1/4 lg:w-1/5 flex justify-center md:justify-start">
                <img src="{{ asset('images/ARGON(Ar) GAS.jpg') }}" alt="ARGON(Ar) GAS" class="w-40 h-40 object-cover rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="text-2xl font-semibold text-gray-800 mb-2">ARGON(Ar) GAS</h5>
                <p>Purity 99.995%.</p>
                <p class="text-gray-700 mb-4">Pressure : 150 Kg/m3.</p>
                <p class="text-gray-700 leading-relaxed mb-4">Metallurgy and stainless steel industry, Argo shield mixture-sheet metal welding, Lab application, Electronics industry.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium group">
                    Contact us for more info
                </a>
            </div>
        </div>

    </div>

    <div class="text-center mt-12">
        <p class="text-lg text-gray-700">For detailed technical specifications or custom orders, please
            <a href="{{ route('contact.form') }}" class="text-blue-600 hover:underline font-semibold">contact us</a>.
        </p>
    </div>
</div>

@endsection
