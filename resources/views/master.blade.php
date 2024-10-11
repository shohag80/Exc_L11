<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @notifyCss
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <style>
        .notifyCss {
            z-index: 1;
        }
    </style>
    <link rel="stylesheet" href="{{ url('/assets/css/login.css') }}">

    <!-- script -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="fixed top-0 max-w-[2000px]"
            src="https://laravel.com/assets/img/welcome/background.svg" />
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">

                <x-notify::notify />

                @include('partials.header')

                <main class="mt-2">
                    @yield('content')
                </main>

                @include('partials.footer')

            </div>
        </div>
    </div>
    @notifyJs
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    @yield('script')
    <script>
        // Online or Offline
        window.addEventListener('online', () => alert('You Are Online!'));
        window.addEventListener('offline', () => alert('You Are Offline!'));
    </script>
</body>

</html>
