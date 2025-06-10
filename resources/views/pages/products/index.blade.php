@extends('layouts.app')

@section('title', 'Our Products')

@section('bg-image', "background-image: url('/images/products-bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;")

@section('content')

<div class="container px-4 py-8 mx-auto bg-white bg-opacity-50 rounded-lg shadow-xl">
    <h1 class="mb-6 text-4xl font-extrabold text-center text-gray-800">Our Products</h1>

    <p class="max-w-3xl mx-auto mb-10 text-lg leading-relaxed text-center text-gray-700">
        Explore our comprehensive range of high-quality industrial products, engineered for precision,
        durability, and superior performance across various sectors.
    </p>

    {{-- Product List Display --}}
    <div class="grid grid-cols-1 gap-10 mb-12 md:grid-cols-2">

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/OXYGEN (O2) GAS.jpg') }}" alt="OXYGEN (O2) GAS" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">OXYGEN (O2) GAS</h5>
                <p>Purity: 99.95%</p>
                <p class="mb-4 text-gray-700">Pressure: 150 Kg/m3</p>
                <p class="mb-4 leading-relaxed text-gray-700">Industry sector: s.s foundry, heavy fabrication. Workshop, ship building and cutting, furnace lancing, Chemical, pharmaceuticals and petroleum industry. Glass, pilp and pepar industry. Health care</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/NITROGEN(N2) GAS.jpg') }}" alt="NITROGEN(N2) GAS" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">NITROGEN (N2) GAS</h5>
                <p>Purity: 99.95%</p>
                <p class="mb-4 text-gray-700">Pressure : 150 Kg/m3</p>
                <p class="mb-4 leading-relaxed text-gray-700"> Industry sector: degassing in aluminum foundry Inert gas in chemical sector. Animal husbandry, Pharmaceutical, Food processing industry.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/CARBON DIOXIDE(CO2) GAS.jpg') }}" alt="CARBON DIOXIDE(CO2) GAS" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">CARBON DIOXIDE(CO2) GAS</h5>
                <p>Purity : 99.90%</p>
                <p class="mb-4 text-gray-700">Pressure : 50 Kg/m3.</p>
                <p class="mb-4 leading-relaxed text-gray-700">Fire extinguishers, CO2 welding, Foundry sector, Dry ice for cooling, Beverages.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/DISSOLVED ACETYLENE(D.A) GAS.jpg') }}" alt="DISSOLVED ACETYLENE(D.A) GAS" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">DISSOLVED ACETYLENE(D.A) GAS</h5>
                <p>Purity: 99.50%.</p>
                <p class="mb-4 text-gray-700">Pressure : 17.5 Kg/m3</p>
                <p class="mb-4 leading-relaxed text-gray-700">Metal cutting industry.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/NITROS OXIDE(N2O)GAS.jpg') }}" alt="NITROS OXIDE(N2O)GAS" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">NITROS OXIDE(N2O)GAS</h5>
                <p>Purity: 99.50%.</p>
                <p class="mb-4 text-gray-700">Pressure : 60 Kg/m3</p>
                <p class="mb-4 leading-relaxed text-gray-700">Health Care.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/HYDROGEN(H2) GAS.jpg') }}" alt="HYDROGEN(H2) GAS" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">HYDROGEN(H2) GAS</h5>
                <p>Purity: 99.9%.</p>
                <p>Supply form: Industrial Cylinder</p>
                <p>Type: Colorless</p> 
                <p class="mb-4 text-gray-700">Quantity: 6-7 m3 per Cylinder.</p>
                <p>Hydrogen as a gas is valued for its reactive and protective properties. Many industries such as electronics, foods, glass, chemicals, refining and more can benefit from its unique properties to improve quality, optimize performance and reduce costs.</p>
                <p class="mb-4 leading-relaxed text-gray-700">Glass purification, Semiconductor manufacturing, Aerospace applications, Lab application, Electronics industry, Fertilizer production, Welding annealing and heat-treating metals, Pharmaceuticals.
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/LIQUID CLORINE(Cl).jpg') }}" alt="LIQUID CLORINE(Cl)" class="object-cover h-40 rounded-md shadow-sm w-max">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">LIQUID CLORINE(Cl)</h5>
                <p>Purity 99.995%.</p>
                <p>Supply form: Industrial Cylinder</p>
                <p>Type: Greenish Yellow</p> 
                <p class="mb-4 text-gray-700">Quantity: 100,900Kg Cylinder.</p>
                <p class="mb-4 leading-relaxed text-gray-700">Safe Drinking Water Wastewater Treatment(Water Purification), Chemical Industries, Lab application, Electronics industry, Fertilizer production, Pharmaceuticals.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/HELIUM(He) GAS.jpg') }}" alt="HELIUM(He) GAS" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">HELIUM(He) GAS</h5>
                <p>Purity 99.9%.</p>
                <p>Supply form: Industrial Cylinder</p>
                <p>Type: Helium is a colorless odorless gas. It is lighter than air. It is nonflammable and is only slightly soluble in water. Helium is a colorless, odorless, insipid and non-toxic gas.</p>
                <p class="mb-4 text-gray-700">Quantity: 60Kg Cylinder.</p>
                <p class="mb-4 leading-relaxed text-gray-700">Metallurgy and stainless steel industry, Argo shield mixture-sheet metal welding, Lab application, Electronics industry.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/AMONIA(NH3) GAS.jpg') }}" alt="AMONIA(NH3) GAS" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">AMONIA(NH3) GAS</h5>
                <p>Purity 99.9%.</p>
                <p>Supply form: Industrial Cylinder</p>
                <p>Quantity: 60Kg Cylinder.</p>
                <p class="mb-4 text-gray-700">Type: At room temperature, ammonia is a colorless, highly irritating gas with a pungent, suffocating odor. In pure form, it is known as anhydrous ammonia and is hygroscopic (readily absorbs moisture). Ammonia has alkaline properties and is corrosive.</p>
                <p class="mb-4 leading-relaxed text-gray-700">Ammonia is used in wastewater treatment, leather, rubber, paper, food and beverage industries. It also is used in cold storage, refrigeration systems and in the production of pharmaceuticals. Ammonia is used in the printing as well as cosmetics industries. It is also used in fermentation.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/ACM(ArCO2) GAS.jpg') }}" alt="ACM(ArCO2/Argon+CO2) GAS" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">ACM(ArCO2/Argon+CO2) GAS</h5>
                <p>Purity 99.9%.</p>
                <p>Supply form: Industrial Cylinder</p>
                <p class="mb-4 text-gray-700">Quantity: 60Kg Cylinder.</p>
                <p class="mb-4 leading-relaxed text-gray-700">Argon Carbon Dioxide blends are used for all kinds of structural steel, farm implements and machinery. Lower levels of CO2 can be used for pulsed arc or spray arc welding, while higher levels > 20% are used for short arc welding and the shielding of some flux-cored wires.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

        <div class="flex flex-col items-center gap-6 p-6 transition duration-300 bg-white border border-gray-100 shadow-lg rounded-xl md:flex-row md:items-start hover:shadow-xl">
            <div class="flex justify-center flex-shrink-0 w-full md:w-1/4 lg:w-1/5 md:justify-start">
                <img src="{{ asset('images/LIQUID NITROGEN(N2).jpg') }}" alt="LIQUID NITROGEN(N2)" class="object-cover w-40 h-40 rounded-md shadow-sm">
            </div>
            <div class="flex-grow text-center md:text-left"> {{-- Text Content --}}
                <h5 class="mb-2 text-2xl font-semibold text-gray-800">LIQUID NITROGEN(N2)</h5>
                <p>Purity 99.995%.</p>
                <p class="mb-4 text-gray-700">Filling Capcity(in L) : 5/10/20/35/50/51.7 Litres As Per Container capacity(in Litres).</p>
                <p class="mb-4 leading-relaxed text-gray-700">Lab Veterinary, Cooling.</p>
                <a href="{{ route('contact.form') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800 group">
                    Contact us for more info
                </a>
            </div>
        </div>

    </div>

    <div class="mt-12 text-center">
        <p class="text-lg text-gray-700">For detailed technical specifications or custom orders, please
            <a href="{{ route('contact.form') }}" class="font-semibold text-blue-600 hover:underline">contact us</a>.
        </p>
    </div>
</div>

@endsection
