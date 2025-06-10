<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKG Industries - @yield('title', 'Home')</title>
    <link rel="icon" href="/images/logo.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" xintegrity="sha512-Fo3rlalTjsF0+eR12v/t2Jt0+r1s5s1b+7r+n/3/f3/g/g/e/h/h/p/i/j/k/l/m/n/o/p/q/r/s/t/u/v/w/x/y/z/A/B/C/D/E/F/G/H/I/J/K/L/M/N/O/P/Q/R/S/T/U/V/W/X/Y/Z/0/1/2/3/4/5/6/7/8/9/-/" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex flex-col min-h-screen overflow-x-hidden font-sans antialiased text-gray-900 bg-gray-50"
      style="@yield('bg-image')">
    @include('layouts._header')
    @include('layouts._nav')
    <main class="flex-grow pt-8 pb-8">
        @yield('content')
    </main>
    @include('layouts._footer')

    {{-- Floating Contact Us Text --}}
    <div class="fixed z-50 flex items-center px-4 py-2 text-white bg-blue-600 rounded-full shadow-lg bg-opacity-90 right-8" style="top: 25%;">
        <i class="mr-2 fas fa-phone-alt animate-bounce"></i>
        <span class="font-semibold">Contact Us: +91 1234567890</span>
    </div>
</body>
</html>
