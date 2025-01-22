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
        <h2 class="text-2xl font-bold text-blue-600 my-4">About Us</h2>
        <p class="text-lg text-gray-700">Into the Way is a blog about hiking, camping, and outdoor adventures. We share stories, tips, and gear reviews to help you get outside and explore the world.</p>
    </div>
</body>