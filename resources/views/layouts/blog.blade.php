<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="Blog CMS">

        <link href="{{ asset('assetsWeb/plugins/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assetsWeb/css/style.css') }}" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        
    </head>
    <body>
        
        <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">Text</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae veniam dolorem temporibus error nobis corrupti eum delectus, consequatur voluptatibus dolor minima eligendi saepe aliquam soluta magni tempora eius in voluptas!</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Lorem ipsum</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Link</a></li>
                    <li><a href="#" class="text-white">Link</a></li>
                    <li><a href="#" class="text-white">Link</a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
            <a href="{{ route('blog') }}" class="navbar-brand d-flex align-items-center">
                CMS <strong>BLog</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </div>
        </header>

        <main  class="container">
        @yield('content')
        </main>

        <footer class="text-muted py-5">

        </footer>

        <script src="{{ asset('assetsWeb/plugins/js/popper.min.js') }}"></script>
        <script src="{{ asset('assetsWeb/plugins/js/bootstrap.min.js') }}"></script>
        @yield('scripts')

    </body>
</html>