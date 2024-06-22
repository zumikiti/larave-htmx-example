<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'laravel')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- htmx -->
        <script src="https://unpkg.com/htmx.org@2.0.0/dist/htmx.min.js"></script>
    </head>

    <body class="font-sans antialiased">
        <div class="bg-gray-50 text-black/50 dark:bg-black/80 dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    @include('partials.header')

                    <main class="mt-6 relative">
                        @yield('main')
                    </main>

                    @include('partials.footer')
                </div>
            </div>
        </div>
    </body>
</html>
