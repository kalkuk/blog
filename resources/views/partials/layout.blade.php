<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default title')</title>
    @vite('resources/css/app.scss')
</head>
<body>
    <div class="container my-2">
    @include('partials.nav')
   @yield('content')
   @vite('resources/js/app.js')
    </div>
</body>
</html>
