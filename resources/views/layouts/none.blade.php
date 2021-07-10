<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
        /* Material Icons*/
        @font-face {
                font-family: 'Material Icons';
                font-style: normal;
                font-weight: 400;
                src: url('{{asset('assetsAdministrator/fonts/MaterialIcons-Regular.ttf')}}') format('truetype');
                src: url('{{asset('assetsAdministrator/fonts/MaterialIcons-Regular.woff2')}}') format('woff2');
            }
        /* Bootstrap Icons*/
        @font-face {
                font-family: "bootstrap-icons";
                src: url('{{asset('assetsAdministrator/fonts/bootstrap-icons.woff2')}}') format("woff2");
                src: url('{{asset('assetsAdministrator/fonts/bootstrap-icons.woff')}}') format("woff");
        }
        </style> 

        <!-- Styles -->
        <link href="{{ asset('assetsAdministrator/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assetsAdministrator/css/scss/bootstrap.css') }}" rel="stylesheet">
        @yield('MyStyles')

        <!-- Scripts -->
        <script src="{{ asset('assetsAdministrator/js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="sidebar close">
            <div class="logo-details">
                <span class="material-icons"> coronavirus </span>
                <span class="logo_name">CMSBlog</span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="#">
                    <span class="material-icons"> dashboard </span>
                    <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                    </ul>
                </li>

                <li>
                    <div class="icon-link">
                    <a href="#">
                        <span class="material-icons"> category </span>
                        <span class="link_name">Blog</span>
                    </a>
                    <span class="material-icons arrow"> expand_more </span>
                    </div>
                    <ul class="sub-menu">
                    <li><a class="link_name" href="#">Blog</a></li>
                    <li>
                        <a href="#">
                        <div class="flexContainer">
                            <div>
                            <span class="material-icons"> label </span>
                            </div>
                            <div class="customSpan">Etiquetas</div>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.index') }}">
                        <div class="flexContainer">
                            <div>
                            <span class="material-icons"> category </span>
                            </div>
                            <div class="customSpan">Categorías</div>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <div class="flexContainer">
                            <div>
                            <span class="material-icons"> article </span>
                            </div>
                            <div class="customSpan">Entradas</div>
                        </div>
                        </a>
                    </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                    <span class="material-icons"> label </span>
                    <span class="link_name">Etiquetas</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Etiquetas</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.categories.index') }}">
                    <span class="material-icons"> category </span>
                    <span class="link_name">Categorías</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Categorías</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                    <span class="material-icons"> article </span>
                    <span class="link_name">Entradas</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Entradas</a></li>
                    </ul>
                </li>
                
                <li>
                    
                <div class="profile-details">
                <div class="profile-content">
                    
                </div>
                <div class="name-job">
                    <div class="profile_name">{{ Auth::user()->name }}</div>
                    <div class="job">Role</div>
                </div>
                <a href="{{ route('profile.show') }}"><span class="material-icons"> settings </span></a>
                </div>
                </li>
            </ul>
        </div>

        <div class="home-section">

            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="home-content">
                    <span class="material-icons ico-menu">menu</span>
                    <span class="text"></span>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                    <span class="navbar-text p-1">Cerrar sesión</span>
                    <span class="material-icons"> logout </span>
                    </div>
                </div>
            </nav>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </section>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <!-- stringToSlug -->
        <script src="{{ asset('vendor/stringToSlug/stringToSlug.js') }}"></script>
        @yield('scripts')
    </body>
</html>
