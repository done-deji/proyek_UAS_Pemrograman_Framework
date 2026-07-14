<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smart Garage</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">

<div class="min-h-screen flex justify-center items-center px-4"

style="

background:
linear-gradient(rgba(70,0,0,.80),rgba(25,0,0,.88)),
url('https://images.unsplash.com/photo-1619642751034-765dfdf7c58e?auto=format&fit=crop&w=1600&q=80');

background-size:cover;

background-position:center;

background-repeat:no-repeat;

">

    <div

    class="w-full sm:max-w-md bg-white"

    style="

    border-radius:25px;

    padding:35px;

    box-shadow:0 20px 60px rgba(0,0,0,.45);

    ">

        {{ $slot }}

    </div>

</div>

</body>

</html>