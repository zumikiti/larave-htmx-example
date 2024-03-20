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
        <script src="https://unpkg.com/htmx.org@1.9.11" integrity="sha384-0gxUXCCR8yv9FM2b+U3FDbsKthCI66oH5IA9fHppQq9DDMHuMauqq1ZHBpJxQ0J0" crossorigin="anonymous"></script>
    </head>

    <body class="font-sans antialiased">
        <div class="bg-gray-50 text-black/50 dark:bg-black/80 dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    @include('partials.header')

                    <main class="mt-6">
                        @yield('main')
                    </main>

                    @include('partials.footer')
                </div>
            </div>
        </div>

        <script>
        document.addEventListener('htmx:configRequest', function(event) {
            event.detail.headers['X-CSRF-TOKEN'] = '{{ csrf_token() }}'; // CSRF トークンをセット
        });

        // Ajax リクエストが実行されたとき
        document.addEventListener('htmx:afterRequest', (e) => {
            const shouldUpdateTable = e.target.id === 'delete' || e.target.id === 'addItem';

            if (shouldUpdateTable === true) {
                const xhr = e.detail.xhr;
                const status = xhr.getResponseHeader('X-Response-Status');

                if (status === 'success') {
                    htmx.trigger('#cart', 'reload'); // カートを更新
                }
            }
        });
        </script>
    </body>
</html>
