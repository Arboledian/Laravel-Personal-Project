<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="shortcut icon" href="/images/logo.png">
    <link rel="stylesheet" href="/css/main.css" />
    {{-- llamada del js --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    {{-- esta es una forma para hacer comentarios en laravel, no estoy seguro si es cosa de .blade o php --}}
    <!-- esta es la forma normal de hacer comentarios en html-->
</head>

<body>
    @include('/partials._loadingscreen')
    <!-- sesion -->

    <nav id="header-nav">
        <h1 id=title> AYUDA POR FAVOR </h1>
        <div class="grid grid-cols-2 m-0">
            <a href="/register" class="w-full">
                <i class="fa-solid fa-user-plus"></i> Register </a>
            <a href="/login" class="w-full">
                <i class="fa-solid fa-arrow-right-to-bracket"></i> Login </a>
        </div>
    </nav>

    <!-- navegacion -->

    {{-- literalmente una linea --}}

    <div class="line"></div>

    <!-- navegacion -->

    <nav class="main-nav">
        <a class=" hover:bg-black">INICIO </a>
        <a class=" hover:bg-black">DESARROLLO</a>
        <a class=" hover:bg-black">FINAL</a>
    </nav>

    {{-- View Output --}}
    {{ $slot }}
</body>

</html>
