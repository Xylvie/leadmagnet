<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lead Magnet')</title>
    <meta name="description" content="@yield('meta_description', 'HomeBuyers CDO Real Estate Lead Magnet')">
    <meta name="keywords" content="@yield('meta_keywords', 'CDO, real estate, house for sale, housing, property')">
    <meta name="author" content="Joshua Neri">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="@yield('title', 'Default OG Title')">
    <meta property="og:description" content="@yield('meta_description', 'Default OG Description')">
    <meta property="og:image" content="@yield('meta_image', asset('images/og-image.jpg'))">
    <meta property="og:type" content="website">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">


        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-XXXXXXXXXX');
    </script>
</head>
<body class="pt-0 m-0 font-sans antialiased">

    <div class="min-h-full bg-gray-100 dark:bg-gray-900">
        <header class="sticky top-0 z-50 flex items-center justify-between max-w-full px-5 py-5 mx-auto bg-gray-100 shadow-lg dark:bg-gray-900 sm:px-6 lg:px-20">
            @yield('header', 'Default Header')
        </header>

        <!-- Page Content -->
        <main class="min-h-screen px-4 py-6 sm:px-6 lg:px-8">
            @yield('content')
        </main>
    </div>

    <footer class="bg-gray-100 dark:bg-gray-900">
        <div class="px-4 py-6 mx-auto text-center text-gray-500 max-w-7xl sm:px-6 lg:px-8">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </div>
    </footer>
    
</body>
</html> 