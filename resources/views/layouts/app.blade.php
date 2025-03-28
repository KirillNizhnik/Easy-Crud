<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Crud')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@include('partials.header')

<main class="container mt-4">
    @yield('content')
</main>

@include('partials.footer')
@yield('scripts')
</body>
</html>
