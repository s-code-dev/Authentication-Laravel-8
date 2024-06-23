<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
 <div id="app">
        @include('_partisals.header')
        <main class="py-4">
            @yield('content')
        </main>
 
  </div>
  		@include('_partisals.footer')
</body>

</html>
