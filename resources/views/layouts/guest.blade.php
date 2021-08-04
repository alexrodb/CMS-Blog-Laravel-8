<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
        /* Bootstrap Icons*/
        @font-face {
                font-family: "bootstrap-icons";
                src: url('{{asset('assetsAdministrator/fonts/bootstrap-icons.woff2')}}') format("woff2");
                src: url('{{asset('assetsAdministrator/fonts/bootstrap-icons.woff')}}') format("woff");
        }
        </style> 

        <!-- Styles -->
        <link href="{{ asset('assetsAdministrator/css/stylelogin.css') }}" rel="stylesheet">
        <link href="{{ asset('assetsAdministrator/css/scss/bootstrap.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('assetsAdministrator/js/applogin.js') }}" defer></script>
    </head>
    <body class="text-white background">
        <section>
            <div class="d-flex flex-row justify-content-center align-items-center">
                {{ $slot }}
            </div>
        </section>    
    </body>
</html>
