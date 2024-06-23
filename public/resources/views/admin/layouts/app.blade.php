<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@section('title')NEWS_WORLD @show</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
="<div>
    @include('admin._partisals.header')

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-4">

                    @include('admin._partisals.flash-message')

                </div>
            </div>
        </div>

        @yield('content')
    </main>
</div>

@include('admin._partisals.footer')

@stack('js');
</body>
</html>
