<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800 font-sans">
    <h1 class="text-4xl font-bold text-center text-blue-600 my-8">Into the Way</h1>
    @include('partials.navigation')
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center my-8">Contact Us</h2>
        <p class="text-center">You can contact us by sending an email to </p>
    </div>
</body>