<header class="relative text-white shadow-lg">
    
    {{-- Background Image for header with overlay --}}
    <div class="absolute inset-0">
        <img src="{{ asset('images/header-bg.jpg') }}" alt="Background" class="object-cover w-full h-full bg-opacity-50">
    </div>

    <div class="relative z-10 flex flex-col items-center justify-between px-4 py-6 bg-gradient-to-r from-blue-800/80 to-blue-900/80 md:px-6 md:flex-row">

        {{-- Logo Section --}}
        <div class="w-full mb-4 logo md:mb-0 md:w-auto md:flex-grow">
            <a href="{{ route('home') }}" class="flex items-center justify-center space-x-3">
                <img src="{{ asset('images/logo2.png') }}" alt="AKG Industries Logo" class="h-14 md:h-16">
            </a>
        </div>

        {{-- Contact Info Section --}}
        <div class="space-y-1 text-sm text-center contact-info md:text-base md:text-right md:ml-auto">
            <p class="flex items-center justify-center md:justify-end">
                <i class="mr-2 text-blue-300 fas fa-phone-alt"></i> Call Us:
                <span class="ml-2 font-semibold">+91 1234567890</span>
            </p>
            <p class="flex items-center justify-center md:justify-end">
                <i class="mr-2 text-blue-300 fas fa-envelope"></i> Email:
                <span class="ml-2 font-semibold">info@akgind.com</span>
            </p>
        </div>
    </div>
</header>