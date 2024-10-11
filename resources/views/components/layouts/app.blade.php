<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <img id="background" class="absolute" src="https://laravel.com/assets/img/welcome/background.svg" />
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <x-notify::notify />
                @include('partials.header')
                    {{ $slot }}
                @include('partials.footer')
            </div>
        </div>
    </div>
    @notifyJs
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Online or Offline
        window.addEventListener('online', () => alert('You Are Online!'));
        window.addEventListener('offline', () => alert('You Are Offline!'));
    </script>
</body>

</html>
