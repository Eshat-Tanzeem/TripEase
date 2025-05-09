<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TripEase')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <header class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-800">TripEase</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('login') }}" class="text-gray-700 font-medium">Login</a></li>
                    <li><a href="{{ route('register') }}" class="text-gray-700 font-medium">Register</a></li>
                    <li><a href="{{ route('preferences') }}" class="text-gray-700 font-medium">Preferences</a></li>
                    <li><a href="{{ route('recommendations') }}" class="text-gray-700 font-medium">Recommendations</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8 mt-10">
        <div class="container mx-auto text-center">
            <p class="text-sm">© 2025 TripEase. All rights reserved.</p>
            <p class="mt-2 text-sm">Contact us: <a href="mailto:support@tripease.com" class="underline">support@tripease.com</a></p>
        </div>
    </footer>
</body>
</html>
