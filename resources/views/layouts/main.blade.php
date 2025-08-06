<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">
    <header class="bg-white shadow-md h-[65px] top-0 fixed w-full z-10 flex items-center">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a href="/">
                <h1 class="text-xl font-bold">Go Blog</h1>
            </a>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('about') }}" class="hover:text-blue-500">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-blue-500">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-[105px] px-6 text-center">
        @yield('content')
    </main>
    <footer class="mt-10 py-6 bg-white text-center shadow-md">
        <p class="text-gray-600">&copy; {{ date('Y') }} Go Blog. All rights reserved.</p>
    </footer>
</body>

</html>