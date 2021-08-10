<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
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
                        <div class="logo-time"><p>{{ $date->isoFormat('dddd, D [de] MMMM [de] YYYY. h:mm a')}}</p></div>
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
        @yield('content')
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