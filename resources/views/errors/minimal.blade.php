<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <meta name="description" content="Blog CMS">

        <!–– Favicon ––>
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assetsWeb/images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assetsWeb/images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assetsWeb/images/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assetsWeb/images/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('assetsWeb/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <style>
        /* Material Icons*/
        @font-face {
            font-family: 'Material Icons Two Tone';
                font-style: normal;
                font-weight: 400;
                src: url('{{asset('assetsWeb/fonts/MaterialIcons/MaterialIconsTwoTone-Regular.woff2')}}') format('woff2');
                src: url('{{asset('assetsWeb/fonts/MaterialIcons/MaterialIconsTwoTone-Regular.otf')}}') format('opentype');
            }
        /* FontCMSBLOG*/
        @font-face {
                font-family: 'FontCMSBLOGSans-Regular';
                font-display: swap;
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/Sans/WOFF2/FontCMSBLOGSans-Regular.woff2')}}') format('woff2');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/Sans/WOFF/FontCMSBLOGSans-Regular.woff')}}') format('woff');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/Sans/TTF/FontCMSBLOGSans-Regular.ttf')}}') format('truetype');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/Sans/OTF/FontCMSBLOGSans-Regular.otf')}}') format('opentype');
                
            }
        @font-face {
                font-family: 'FontCMSBLOGSans-Medium';
                font-display: swap;
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/Sans/WOFF2/FontCMSBLOGSans-Medium.woff2')}}') format('woff2');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/Sans/WOFF/FontCMSBLOGSans-Medium.woff')}}') format('woff');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/Sans/TTF/FontCMSBLOGSans-Medium.ttf')}}') format('truetype');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/Sans/OTF/FontCMSBLOGSans-Medium.otf')}}') format('opentype');
                
            } 
        @font-face {
                font-family: 'FontCMSBLOGSerif-Medium';
                font-display: swap;
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/WOFF2/FontCMSBLOGSerif-Medium.woff2')}}') format('woff2');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/WOFF/FontCMSBLOGSerif-Medium.woff')}}') format('woff');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/TTF/FontCMSBLOGSerif-Medium.ttf')}}') format('truetype');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/OTF/FontCMSBLOGSerif-Medium.otf')}}') format('opentype');
                
            }
        @font-face {
                font-family: 'FontCMSBLOGSerif-ExtraBold';
                font-display: swap;
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/WOFF2/FontCMSBLOGSerif-ExtraBold.woff2')}}') format('woff2');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/WOFF/FontCMSBLOGSerif-ExtraBold.woff')}}') format('woff');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/TTF/FontCMSBLOGSerif-ExtraBold.ttf')}}') format('truetype');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/OTF/FontCMSBLOGSerif-ExtraBold.otf')}}') format('opentype');
                
            }
        @font-face {
                font-family: 'FontCMSBLOGSerif-Bold';
                font-display: swap;
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/WOFF2/FontCMSBLOGSerif-Bold.woff2')}}') format('woff2');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/WOFF/FontCMSBLOGSerif-Bold.woff')}}') format('woff');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/TTF/FontCMSBLOGSerif-Bold.ttf')}}') format('truetype');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/OTF/FontCMSBLOGSerif-Bold.otf')}}') format('opentype');
                
        }
        @font-face {
                font-family: 'FontCMSBLOGSerif-ExtraBold';
                font-display: swap;
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/WOFF2/FontCMSBLOGSerif-ExtraBold.woff2')}}') format('woff2');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/WOFF/FontCMSBLOGSerif-ExtraBold.woff')}}') format('woff');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/TTF/FontCMSBLOGSerif-ExtraBold.ttf')}}') format('truetype');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif/OTF/FontCMSBLOGSerif-ExtraBold.otf')}}') format('opentype');
                
            }
        @font-face {
                font-family: 'FontCMSBLOGSerif-BoldItalic';
                font-display: swap;
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif-italic/WOFF2/FontCMSBLOGSerif-BoldItalic.woff2')}}') format('woff2');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif-italic/WOFF/FontCMSBLOGSerif-BoldItalic.woff')}}') format('woff');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif-italic/TTF/FontCMSBLOGSerif-BoldItalic.ttf')}}') format('truetype');
                src: url('{{asset('assetsWeb/fonts/FontCMSBLOG/serif-italic/OTF/FontCMSBLOGSerif-BoldItalic.otf')}}') format('opentype');
                
            }    

            /* Parisienne */
            @font-face {
            font-family: 'Parisienne';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('{{asset('assetsWeb/fonts/Parisienne/Parisienne-Regular.woff2')}}') format('woff2');
            src: url('{{asset('assetsWeb/fonts/Parisienne/Parisienne-Regular.ttf')}}') format('truetype');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
            }    
        </style>
        @yield('styles')
        <link href="{{ asset('assetsWeb/plugins/bootstrap/css/scss/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assetsWeb/css/styleMenu.css') }}" rel="stylesheet">
        <link href="{{ asset('assetsWeb/css/style.css') }}" rel="stylesheet">
    
    </head>
    <body>
    @include('layouts.blogStructure.header')  

        <main class="container mtopem">
            <div class="row logo mt-4 mb-3">
                <div class=" col-md-4 col-xs-12p-0 p-0">
                    <div class="d-flex flex-row justify-content-start align-items-center logoheight">
                    </div>
                </div>
                <div class=" col-md-4 col-xs-12 p-0">
                    <div class="d-flex flex-row justify-content-center align-items-center logoheight">
                        <div>
                            <a href="{{ route('blog') }}"><img src="{{ asset('assetsWeb/images/logo.svg') }}" class="img-fluid" alt="Logo CMS BLOG"></a>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-xs-12 p-0">
                    <div class="d-flex flex-row justify-content-end align-items-center logoheight">
                        <div>
                            <button class="switch" id="switch">
                                <span><img class="iconSizeSwitch" src="{{ asset('assetsWeb/images/svg/icons/sol.svg') }}"  alt="Sol"></span>
                                <span><img class="iconSizeSwitch" src="{{ asset('assetsWeb/images/svg/icons/luna.svg') }}"  alt="luna"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 col-md-12">
                    <div class="errorinfo px-4 py-5 my-5 ">
                        <a href="#"><img class="d-block mx-auto mb-4" src="{{ asset('assetsWeb/images/svg/computer.svg') }}"  alt="Computador" width="125"></a>
                        <h1 class="display-1 fw-bold text-center">Error @yield('code') : @yield('message')</h1>
                        <div class="col-lg-12">
                            <div class="errorinfo d-flex flex-row justify-content-start align-items-start">
                                <p>¡Tenemos buenas y malas noticias para ti!<br>
                                Primero, lo malo, la página a la  que intentabas acceder no existe o ha ocurrido un error al intentar visualizar este contenido.<br>
                                Y ahora, la buena noticia, es que lo que quieres ver; puedes encontrarlo visitando los links disponibles en nuestra nueva web.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script defer src="{{ asset('assetsWeb/js/menujs.min.js') }}"></script>
        <script defer src="{{ asset('assetsWeb/js/switch.js') }}"></script>
        <!-- Bootstrap -->
        <script defer src="{{ asset('assetsWeb/plugins/bootstrap/js/popper.min.js') }}"></script>
        <script defer src="{{ asset('assetsWeb/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        @yield('scripts')

    @include('layouts.blogStructure.footer') 
    </body>
    
</html>