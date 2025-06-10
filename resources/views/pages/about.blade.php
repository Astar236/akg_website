@extends('layouts.app')

@section('title', 'About Us')

@section('bg-image', "background-image: url('/images/about-us-bg.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;")

@section('content')

<!-- About Us Section -->
<div class="container px-4 py-8 mx-auto">
    <h1 class="mb-10 text-4xl font-extrabold text-center text-blue-800">About AK Oxygen PVT LTD</h1>

    <div class="flex flex-col items-center gap-8 p-8 mb-12 bg-white bg-opacity-50 rounded-lg shadow-xl md:flex-row">
        <div class="md:w-1/2">
            <img src="{{ asset('images/about-us.jpg') }}" alt="About Us" class="w-full h-auto transition-transform duration-500 shadow-2xl rounded-xl hover:scale-105">
        </div>
        <div class="md:w-1/2">
            <p class="mb-4 text-lg leading-relaxed text-gray-700">
            <p class="text-lg leading-relaxed text-gray-700">
                A.K Oxygen Pvt Ltd, established in 2008, has been a prominent business group in India, formally registered as a private limited company in 2010.
            </p>
            <br>
            <p class="text-lg leading-relaxed text-gray-700">
                Specializing in manufacturing, refilling, and supplying a wide range of Industrial and Medical Gases, we offer a diverse selection of products.
            </p>
            <p class="text-lg leading-relaxed text-gray-700">
                Our Industrial Gases include Oxygen(O2), Carbon DiOxide(CO2), Nitrogen(N2)Liquid/gas, Dissolved Acetylene (DA), Argon(Ar), Amonia(NH3),Liquid Clorine(Cl),Hydrogen(H2),ACM(ArCo2/Ar+Co2), and Helium(He), 
                while our Medical gases encompass Oxygen, Liquid Nitrogen, and Nitrous Oxide (N2O)Gas.
            </p>
            <br>
            <p class="text-lg leading-relaxed text-gray-700">
                Our Gas Filling Service operates round-the-clock(24x7), equipped with modern and computerized systems.
            </p>
            <br>
            <p class="text-lg leading-relaxed text-gray-700">
                Moreover, we extend a complimentary(Free Of Cost) Home Patient Oxygen Refilling Service, emphasizing our commitment to customer care.
            </p>
            <br>
            <p class="text-lg leading-relaxed text-gray-700">
                Furthermore, A.K. Oxygen Pvt Ltd serves as a reputable trader of TIG rods and MIG/MAG wires, with an additional range of MIG welding consumables.
            </p>
            <p class="text-lg leading-relaxed text-gray-700">
                As a leading manufacturer, refiller, and supplier of Industrial & Medical Gases, A.K Oxygen Pvt Ltd maintains the highest purity standards (99.7%).
            </p>
        </div>
    </div>

    <!-- Director's Message Section -->
    <section class="py-16 md:py-24">
        <div class="container px-6 mx-auto bg-white bg-opacity-50 rounded-lg shadow-xl max-w-7xl">
            <div class="mb-12 text-center md:mb-16">
                <h2 class="mb-4 text-4xl font-bold text-gray-800 md:text-5xl">A Message from Our Director</h2>
                <div class="h-1.5 w-28 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            {{-- New container for the letter-like message --}}
            <div class="container max-w-5xl px-4 py-8 mx-auto bg-white bg-opacity-50 border border-gray-100 shadow-xl rounded-xl">
                <div class="flex flex-col items-center gap-10 md:flex-row">
                    <div class="text-center md:text-left">
                        {{-- Letter content --}}
                        <p class="mb-1 text-xl font-bold text-gray-800">
                            Dear Colleagues and Partners,
                        </p>
                        <p class="mb-6 text-lg leading-relaxed text-gray-700 md:text-xl">
                            At A.K.Oxygen Pvt Ltd, we have embarked on a journey of growth and excellence since our inception in 2014. Today, we stand as a leading manufacturer of Industrial and Medical gases, equipped with a comprehensive infrastructure to support our operations.
                        </p>
                        <p class="mb-6 text-lg leading-relaxed text-gray-700 md:text-xl">
                            Our success story is a testament to the unwavering dedication and commitment of each member of our team. By aligning with our company's policies and objectives, our employees have played a pivotal role in driving our progress forward.
                            I extend my sincere appreciation to our valued customers whose continued trust and support have been instrumental in our achievements.
                        </p>
                        <p class="mb-6 text-lg leading-relaxed text-gray-700 md:text-xl">
                            As we strive for excellence, we remain steadfast in our commitment to deliver quality products on time, leveraging cutting-edge technology to ensure consistency and accuracy across our offerings.
                            Our production facilities are strategically organized to optimize efficiency and streamline processes, enabling us to maintain superior standards of operation.
                        </p>
                        <p class="mb-6 text-lg leading-relaxed text-gray-700 md:text-xl">
                            Looking ahead, we recognize the dynamic nature of the business landscape and the challenges it presents. However, we are confident in our ability to adapt and thrive in the face of adversity.
                            As a team, we are united in our pursuit of innovation and excellence, committed to overcoming obstacles and realizing our vision of becoming a global leader in our industry.
                        </p>
                        <p class="mb-6 text-lg leading-relaxed text-gray-700 md:text-xl">
                            As we celebrate our successes, let us also reflect on the lessons learned and the opportunities that lie ahead. 
                            Together, let us continue to push the boundaries of what is possible, fueled by our collective determination and shared sense of purpose.
                        </p>
                        <p class="mb-6 text-lg leading-relaxed text-gray-700 md:text-xl">
                            Thank you for your continued support and dedication.
                        </p>
                        <p class="mb-1 text-xl font-bold text-gray-800">Sincerely,</p>
                        <p class="mb-1 text-xl font-bold text-gray-800">Mr. Anil V. Kadam</p>
                        <p class="text-lg text-blue-600">Managing Director & Founder</p>
                        <p class="text-lg text-blue-600">AK Oxygen PVT LTD</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="p-8 my-10 bg-white bg-opacity-50 rounded-lg shadow-inner">
        <h2 class="mb-8 text-3xl font-bold text-center text-gray-800">Why Choose AK Oxygen PVT LTD?</h2>
        <ul class="max-w-3xl mx-auto space-y-4 text-lg text-gray-700">
            <li class="flex items-start p-4 bg-white bg-opacity-50 border border-gray-200 rounded-lg shadow-sm">
                <span class="mr-3 text-2xl font-bold text-green-500">✔</span>
                <span>Proven track record of quality and reliability, built over decades of successful projects.</span>
            </li>
            <li class="flex items-start p-4 bg-white bg-opacity-50 border border-gray-200 rounded-lg shadow-sm">
                <span class="mr-3 text-2xl font-bold text-green-500">✔</span>
                <span>ISO-certified production processes ensuring adherence to the highest international quality standards.</span>
            </li>
            <li class="flex items-start p-4 bg-white bg-opacity-50 border border-gray-200 rounded-lg shadow-sm">
                <span class="mr-3 text-2xl font-bold text-green-500">✔</span>
                <span>Highly experienced and skilled workforce, dedicated to precision engineering and client satisfaction.</span>
            </li>
            <li class="flex items-start p-4 bg-white bg-opacity-50 border border-gray-200 rounded-lg shadow-sm">
                <span class="mr-3 text-2xl font-bold text-green-500">✔</span>
                <span>State-of-the-art infrastructure and machinery, allowing for complex and large-scale manufacturing capabilities.</span>
            </li>
            <li class="flex items-start p-4 bg-white bg-opacity-50 border border-gray-200 rounded-lg shadow-sm">
                <span class="mr-3 text-2xl font-bold text-green-500">✔</span>
                <span>Unwavering commitment to customer satisfaction, providing tailored solutions and exceptional support.</span>
            </li>
        </ul>
    </section>
</div>

@endsection
