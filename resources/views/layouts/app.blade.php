<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async="">
    </script>
    <script src="https://www.youtube.com/player_api"></script>
    <link rel="stylesheet preload" as="style" href="{{ asset('template/css/preload.min.css') }}" />
    <link rel="stylesheet preload" as="style" href="{{ asset('template/css/icomoon.css') }}" />
    <link rel="stylesheet preload" as="style" href="{{ asset('template/css/libs.min.css') }}" />

    @stack('styles')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    @yield('scripts')

    <link rel="stylesheet" href="{{ asset('template/css/index.min.css') }}" />
</head>

<body>
    @include('includes.header')
    <!-- homepage content start -->
    <main>
        @yield('content')
    </main>
    <!-- homepage content end -->
    @include('includes.footer')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="template/js/common.min.js"></script>
</body>

</html>
