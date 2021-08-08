<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!–– https://realfavicongenerator.net/ ––>
        <!–– Favicon ––>
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assetsAdministrator/image/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assetsAdministrator/image/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assetsAdministrator/image/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assetsAdministrator/image/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('assetsAdministrator/image/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

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
        <link href="{{ asset('assetsAdministrator/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assetsAdministrator/css/scss/bootstrap.css') }}" rel="stylesheet">
        @yield('MyStyles')

        <!-- Scripts -->
        <script src="{{ asset('assetsAdministrator/js/app.js') }}" defer></script>

        @FilemanagerScript

    </head>
    <body>
        <div class="sidebar close">
            <div class="logo-details">
                <span class="material-icons"> coronavirus </span>
                <span class="logo_name">CMSBlog</span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="{{ route('dashboard') }}">
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
                        <a href="{{ route('admin.tags.index') }}">
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
                        <a href="{{ route('admin.posts.index') }}">
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
                    <a href="{{ route('admin.tags.index') }}">
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
                    <a href="{{ route('admin.posts.index') }}">
                    <span class="material-icons"> article </span>
                    <span class="link_name">Entradas</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Entradas</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('profile.show') }}">
                    <span class="material-icons"> manage_accounts </span>
                    <span class="link_name">Administrar cuenta</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Administrar cuenta</a></li>
                    </ul>
                </li>
                
                <li>
                    
                <div class="profile-details">
                <div class="profile-content">
                    
                </div>
                <div class="name-job">
                    <div class="profile_name">{{ Auth::user()->name }}</div>
                    <div class="job"></div>
                </div>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><span class="material-icons"> logout </span></a>
                </div>
                </li>
            </ul>
        </div>

        <div class="home-section">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="home-content">
                    <span class="material-icons ico-menu">menu</span>
                    <span class="text"></span>
                </div>

                <div class="d-flex align-items-center justify-content-end mx-5">
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <div class="d-flex align-items-center">
                                        <span class="navbar-text p-1">{{ __('Logout') }}</span>
                                        <span class="material-icons"> logout </span>
                                    </div>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                            </li>
                        </ul>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            </nav>

            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    
                    
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

        <script src="{{ asset('assetsAdministrator/js/popper.min.js') }}"></script>
        <script src="{{ asset('assetsAdministrator/js/bootstrap.min.js') }}"></script>
        <!-- stringToSlug -->
        <script src="{{ asset('vendor/stringToSlug/stringToSlug.js') }}"></script>
        
        @yield('scripts')
    </body>
</html>
