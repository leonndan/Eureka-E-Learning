<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Eureka-Elearning Easy') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        
        

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>


       
    </head>
    <body class="font-sans antialiased bg-light bm-white">
        <x-jet-banner />
        @livewire('navigation-menu')

        <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header>

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
            <script>
                var botmanWidget = {
                    frameEndpoint: "/botman/chat",
                    aboutText: '/',
                    mainColor:  "#041D5B",
                    bubbleBackground: "#041D5B",  
                    title: "Chat Bot",
                    introMessage: "Prueba"
                };
                </script>
        </main>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
    <footer class="border-top footer">
        <div class="container">
            &copy; 2023 - Eureka E-learning Easy - <a href="https://github.com/leonndan">leonndan</a>            
        </div>
  </footer>
</html>