<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="Blog CMS">

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
        </style> 

        <link href="{{ asset('assetsWeb/plugins/css/scss/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assetsWeb/css/styleMenu.css') }}" rel="stylesheet">
        <link href="{{ asset('assetsWeb/css/style.css') }}" rel="stylesheet">
    
    </head>
    <body>
    <header>    
        <nav class="menu" id="menu">
            <div class="contenedor contenedor-botones-menu">
                <button id="btn-menu-barras" class="btn-menu-barras"><i class="fas fa-bars"></i></button>
                <button id="btn-menu-cerrar" class="btn-menu-cerrar"><i class="fas fa-times"></i></button>
            </div>

            <div class="contenedor contenedor-enlaces-nav">
                <div class="btn-departamentos" id="btn-departamentos">
                    <p>Todas las <span>Secciones</span></p>
                    <i class="fas fa-caret-down"></i>
                </div>
                
                <div class="enlaces">
                    <a href="#"><img src="{{ asset('assetsWeb/images/svg/paypal.svg') }}"  alt="Paypal"></a>
                    <a href="#"><img src="{{ asset('assetsWeb/images/svg/Instagram.svg') }}" class="img-fluid" alt="Instagram"></a>
                    <a href="#"><img src="{{ asset('assetsWeb/images/svg/Facebook.svg') }}" class="img-fluid" alt="Facebook"></a>
                    <a href="#"><img src="{{ asset('assetsWeb/images/svg/Twitter.svg') }}" class="img-fluid" alt="Twitter"></a>
                    <a href="#"><img src="{{ asset('assetsWeb/images/svg/Youtube.svg') }}" class="img-fluid" alt="Youtube"></a>
                    <a href="#"><img src="{{ asset('assetsWeb/images/svg/Telegram.svg') }}" class="img-fluid" alt="Telegram"></a>
                    <a href="#"><img src="{{ asset('assetsWeb/images/svg/twitch.svg') }}" class="img-fluid" alt="Twitch"></a>
                    <a href="#"><img src="{{ asset('assetsWeb/images/svg/discord.svg') }}" class="img-fluid" alt="discord"></a>
                </div>
                
            </div>
            
            <div class="contenedor contenedor-grid">
                <div class="grid" id="grid">
                    <div class="categorias">
                        <button class="btn-regresar"><i class="fas fa-arrow-left"></i> Regresar</button>
                        <h3 class="subtitulo">Categorias</h3>

                        <a href="#" data-categoria="tecnologia-y-computadoras">Tecnología y Computadoras <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="libros">Libros <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="ropa-y-accesorios">Ropa y Accesorios <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="hogar-y-cocina">Hogar y Cocina <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="juegos-y-juguetes">Juegos y Juguetes <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="salud-y-belleza">Salud y Belleza <i class="fas fa-angle-right"></i></a>
                        <a href="#" data-categoria="alimentos-y-bebidas">Alimentos y Bebidas <i class="fas fa-angle-right"></i></a>
                    </div>

                    <div class="contenedor-subcategorias">
                        <div class="subcategoria" data-categoria="tecnologia-y-computadoras">
                            <div class="enlaces-subcategoria">
                                <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                <h3 class="subtitulo">Tecnología y Computadoras</h3>
                                <a href="#">Laptops</a>
                                <a href="#">Tablets</a>
                                <a href="#">Computadoras de Escritorio</a>
                                <a href="#">Monitores</a>
                                <a href="#">Componentes</a>
                            </div>

                            <div class="banner-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/tecnologia-banner-1.png') }}" alt="">
                                </a>
                            </div>

                            <div class="galeria-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/tecnologia-galeria-1.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/tecnologia-galeria-2.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/tecnologia-galeria-3.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/tecnologia-galeria-4.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="subcategoria" data-categoria="libros">
                            <div class="enlaces-subcategoria">
                                <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                <h3 class="subtitulo">Libros</h3>
                                <a href="#">Top Sellers</a>
                                <a href="#">Ciencia Ficcion</a>
                                <a href="#">Fantasia</a>
                                <a href="#">Miedo</a>
                            </div>

                            <div class="banner-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/libros-banner-1.png') }}" alt="">
                                </a>
                            </div>

                            <div class="galeria-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/libros-galeria-1.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/libros-galeria-2.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/libros-galeria-3.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/libros-galeria-4.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="subcategoria" data-categoria="ropa-y-accesorios">
                            <div class="enlaces-subcategoria">
                                <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                <h3 class="subtitulo">Ropa y Accesorios</h3>
                                <a href="#">Ropa</a>
                                <a href="#">Zapatos</a>
                                <a href="#">Accesorios</a>
                                <a href="#">Relojes</a>
                            </div>

                            <div class="banner-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/ropa-banner-1.png') }}" alt="">
                                </a>
                            </div>

                            <div class="galeria-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/ropa-galeria-1.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/ropa-galeria-2.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/ropa-galeria-3.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/ropa-galeria-4.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="subcategoria" data-categoria="hogar-y-cocina">

                            <div class="enlaces-subcategoria">
                                <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                <h3 class="subtitulo">Hogar y Cocina</h3>
                                <a href="#">Cocina</a>
                                <a href="#">Electrodomesticos</a>
                                <a href="#">Limpieza</a>
                                <a href="#">Baño</a>
                                <a href="#">Decoracion</a>
                                <a href="#">Arte</a>
                                <a href="#">Manualidades</a>
                                <a href="#">Jardin</a>
                            </div>

                            <div class="banner-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/hogar-banner-1.png') }}" alt="">
                                </a>
                            </div>

                            <div class="galeria-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/hogar-galeria-1.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/hogar-galeria-2.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/hogar-galeria-3.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/hogar-galeria-4.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="subcategoria" data-categoria="juegos-y-juguetes">
                            <div class="enlaces-subcategoria">
                                <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                <h3 class="subtitulo">Juegos y Juguetes</h3>
                                <a href="#">Juguetes</a>
                                <a href="#">Juegos de Mesa</a>
                                <a href="#">Aire Libre</a>
                                <a href="#">Muñecas</a>
                            </div>

                            <div class="banner-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/juegos-banner-1.png') }}" alt="">
                                </a>
                            </div>

                            <div class="galeria-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/juegos-galeria-1.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/juegos-galeria-2.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/juegos-galeria-3.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/juegos-galeria-4.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="subcategoria" data-categoria="salud-y-belleza">
                            <div class="enlaces-subcategoria">
                                <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                <h3 class="subtitulo">Salud y Belleza</h3>
                                <a href="#">Cuidado de la Piel</a>
                                <a href="#">Maquillaje</a>
                                <a href="#">Lociones</a>
                                <a href="#">Shampoo</a>
                            </div>

                            <div class="banner-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/belleza-banner-1.png') }}" alt="">
                                </a>
                            </div>

                            <div class="galeria-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/belleza-galeria-1.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/belleza-galeria-2.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/belleza-galeria-3.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/belleza-galeria-4.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="subcategoria" data-categoria="alimentos-y-bebidas">
                            <div class="enlaces-subcategoria">
                                <button class="btn-regresar"><i class="fas fa-arrow-left"></i>Regresar</button>
                                <h3 class="subtitulo">Alimentos y Bebidas</h3>
                                <a href="#">Alimentos</a>
                                <a href="#">Bebidas</a>
                            </div>

                            <div class="banner-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/comida-banner-1.png') }}" alt="">
                                </a>
                            </div>

                            <div class="galeria-subcategoria">
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/comida-galeria-1.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/comida-galeria-2.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/comida-galeria-3.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assetsWeb/images/menu/comida-galeria-4.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        </header>

        <main class="container mtopem">
            <div class="row logo mt-4 mb-5">
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
                                <span><img class="icontamano" src="{{ asset('assetsWeb/images/svg/icons/sol.svg') }}"  alt="Sol"></span>
                                <span><img class="icontamano" src="{{ asset('assetsWeb/images/svg/icons/luna.svg') }}"  alt="luna"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @yield('content')
        </main>

        <script src="{{ asset('assetsWeb/js/menujs.min.js') }}"></script>
        <script src="{{ asset('assetsWeb/js/switch.js') }}"></script>
        <script src="{{ asset('assetsWeb/plugins/js/popper.min.js') }}"></script>
        <script src="{{ asset('assetsWeb/plugins/js/bootstrap.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
        @yield('scripts')

        <footer class="d-flex footer mt-5 bg-dark text-white" >
            <div class="container-footer">
                <div class="d-flex flex-column">
                    <div class="mainFooter_container">

                        <div class="container">

                            <div class="row">

                                <div class="col-6 col-sm-6 col-md-3">
                                    <h4 class="listTitle">Lorem ipsum</h4>
                                    <ul class="listItems">
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-6 col-sm-6 col-md-3">
                                    <h4 class="listTitle">Lorem ipsum</h4>
                                    <ul class="listItems">
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">Lorem ipsum</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-6 col-sm-6 col-md-3">
                                    <h4 class="listTitle">Sobre nosotros</h4>
                                    <ul class="listItems">
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">¿De Dónde Venimos?</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">¿Quiénes Somos?</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex flex-row justify-content-start align-items-center">
                                                <div  class="mt-2">
                                                    <span class="material-icons-two-tone rotate-icon">link</span>
                                                </div>
                                                <div>
                                                    <a href="#}">¿Adónde Vamos?</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-12 col-sm-12 col-md-3">
                                    <div class="d-flex flex-column justify-content-center align-items-center">

                                        <div class="d-flex flex-row justify-content-center align-items-center logoheight">
                                            <div>
                                                <a href="{{ route('blog') }}"><img src="{{ asset('assetsWeb/images/logo.svg') }}" class="img-fluid" alt="Logo CMS BLOG"></a>
                                            </div>
                                        </div>
                                        <div><p>¡Síguenos en nuestras Redes Sociales!</p></div>
                                        <div class="d-flex flex-row justify-content-center align-items-center enlaces">
                                            <a href="#"><img src="{{ asset('assetsWeb/images/svg/paypal.svg') }}"  alt="Paypal"></a>
                                            <a href="#"><img src="{{ asset('assetsWeb/images/svg/Instagram.svg') }}" class="img-fluid" alt="Instagram"></a>
                                            <a href="#"><img src="{{ asset('assetsWeb/images/svg/Facebook.svg') }}" class="img-fluid" alt="Facebook"></a>
                                            <a href="#"><img src="{{ asset('assetsWeb/images/svg/Twitter.svg') }}" class="img-fluid" alt="Twitter"></a>
                                            <a href="#"><img src="{{ asset('assetsWeb/images/svg/Youtube.svg') }}" class="img-fluid" alt="Youtube"></a>
                                            <a href="#"><img src="{{ asset('assetsWeb/images/svg/Telegram.svg') }}" class="img-fluid" alt="Telegram"></a>
                                            <a href="#"><img src="{{ asset('assetsWeb/images/svg/twitch.svg') }}" class="img-fluid" alt="Twitch"></a>
                                            <a href="#"><img src="{{ asset('assetsWeb/images/svg/discord.svg') }}" class="img-fluid" alt="discord"></a>
                                        </div>
                                        <div><p class="mt-3 textmainFooter">¿Ya conoces todas nuestras redes sociales? Si la respuesta es no, te invitamos a que nos sigas en ellas y te enteres de lo último en noticias.</p></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mainFooter_subcontainer">
                        <div class="d-flex flex-row justify-content-center">
                        <div class="">Se prohíbe la reproducción total o parcial de cualquiera de los contenidos que aquí aparezca, así como su traducción a cualquier idioma sin autorización escrita por su titular.</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    
</html>