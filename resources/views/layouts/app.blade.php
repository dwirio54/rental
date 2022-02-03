<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        @include('layouts.nav')
        <div class="jumbotron">
            <div class="container">
                <div>
                    <h5 class="text-white">Manage Rental</h5>
                    <h3 class="text-white">Rumah Dwirio</h3>
                    <p class="text-white">
                        Jl. Raya Narogong, RT.4/RW.3, Limus Nunggal, Kec. Cileungsi, Kabupaten Bogor, Jawa Barat 16820
                    </p>
                </div>
            </div>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
