<header class="relative text-white shadow-lg">
    
    {{-- Background Image for header with overlay --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/header-bg.jpg') }}" alt="Background" class="w-full h-full object-cover opacity-50">
    </div>

    <div class="relative z-10 bg-gradient-to-r from-blue-800/80 to-blue-900/80 px-4 md:px-6 py-6
                flex flex-col md:flex-row items-center justify-between">

        {{-- Logo Section --}}
        <div class="logo mb-4 md:mb-0 w-full md:w-auto md:flex-grow">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 justify-center">
                <img src="{{ asset('images/logo2.png') }}" alt="AKG Industries Logo" class="h-14 md:h-16">
            </a>
        </div>

        {{-- Contact Info Section --}}
        <div class="contact-info text-sm md:text-base text-center md:text-right space-y-1 md:ml-auto">
            <p class="flex items-center justify-center md:justify-end">
                <i class="fas fa-phone-alt mr-2 text-blue-300"></i> Call Us:
                <span class="font-semibold ml-2">+91 1234567890</span>
            </p>
            <p class="flex items-center justify-center md:justify-end">
                <i class="fas fa-envelope mr-2 text-blue-300"></i> Email:
                <span class="font-semibold ml-2">info@akgind.com</span>
            </p>
        </div>
    </div>
</header>