<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!–– Favicon ––>
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assetsWeb/images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assetsWeb/images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assetsWeb/images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assetsWeb/images/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('assetsWeb/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <style>
        /* Bootstrap Icons*/
        @font-face {
                font-family: "bootstrap-icons";
                src: url('{{asset('assetsAdministrator/fonts/bootstrap-icons.woff2')}}') format("woff2");
                src: url('{{asset('assetsAdministrator/fonts/bootstrap-icons.woff')}}') format("woff");
        }
         /* Roboto */
        @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url('{{asset('assetsAdministrator/fonts/Roboto/Roboto-Regular.woff2')}}') format("woff2");
        src: url('{{asset('assetsAdministrator/fonts/Roboto/Roboto-Regular.ttf')}}') format('truetype');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: bold;
        font-display: swap;
        src: url('{{asset('assetsAdministrator/fonts/Roboto/Roboto-Bold.woff2')}}') format("woff2");
        src: url('{{asset('assetsAdministrator/fonts/Roboto/Roboto-Bold.ttf')}}') format('truetype');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        </style> 

        <!-- Styles -->
        <link href="{{ asset('assetsAdministrator/css/stylelogin.css') }}" rel="stylesheet">
        <link href="{{ asset('assetsAdministrator/css/scss/bootstrap.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('assetsAdministrator/js/applogin.js') }}" defer></script>
    </head>
    <body class="text-white background">
        
            <div class="container vh-100">

            <div class="vh-100 d-flex flex-row justify-content-center align-items-center">
                <div class="col-12 col-xxl-6 col-xl-6 col-lg-10 col-md-10 col-sm-10">
                    {{ $slot }}
                </div>

            </div>
            
    </body>
</html>
