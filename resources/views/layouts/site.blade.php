<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/site/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body>
        @include('layouts.site.menu-panel')
        @include('layouts.site.auth-panel')
        @include('blocks.app-note')        
        
        <div class="wrapper">
            @include('layouts.site.top-panel')

            <main class="main">
                <div class="main__container">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
