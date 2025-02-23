<!DOCTYPE html>
<html lang="es-AR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Into the way: {{ $metaTitle }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-600 text-gray-800 font-sans">
    <h1 class="text-4xl font-bold text-center text-blue-600 my-8">Into the Way</h1>
    @include('partials.navigation')

    <div class="main-content">
        {{ $slot }}
    </div>
</body>

</html>
