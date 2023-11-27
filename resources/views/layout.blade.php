<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css'])
    @vite(['resources/js/bootstrap.js'])
</head>
<body>
    <script src="./js/layout_mother.js"></script>
    @yield('content')
        <!-- 
    @extends('layout')
    -->

</body>
</html>
