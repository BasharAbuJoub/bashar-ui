<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="tw-font-sans tw-text-sm lg:tw-text-base">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
