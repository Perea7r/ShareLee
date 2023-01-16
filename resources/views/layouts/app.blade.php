<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareLee - @yield('title')</title>
    <meta name="description" content="@yield('meta-description',  'default meta description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        <img src="" alt="Logo">
    </div>
    @yield('content')
</body>
</html>
