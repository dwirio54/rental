<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div id="app">
        @include('layouts.nav')
        <main class="">
            <div class="jumbotron">
                <div class="container">
                    <h4>RENTAL</h4>
                    <h6>Jl. Raya Narogong, RT.4/RW.3, Limus Nunggal, Kec. Cileungsi, Kabupaten Bogor, Jawa Barat 16820</h6>
                </div>
            </div>
            @yield('content')
        </main>
    </div>

</body>

</html>
