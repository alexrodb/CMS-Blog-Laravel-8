<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Blog CMS">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>



    <div id="app" class="flex flex-col min-h-screen font-roboto dark:bg-gray-900">
        

    <main class="flex-1 lg:mt-20">

    <section class="container px-4 pt-4 pb-10 mx-auto">
        <h3 class="text-2xl font-semibold text-gray-800 ">Un simple blog...</h3>
        <p class="mt-4 text-gray-500 dark:text-gray-400">las últimas entradas del blog.</p>

        
    <!-- Page Content -->
    @yield('content')

    </section>

    </main>

            </div>
        </div>
    </div>
</body>

</html>

