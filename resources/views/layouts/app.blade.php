<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FabPhoto') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <!-- Scripts -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])

</head>
<body>
    <div id="app">


        <main class="content">
            @yield('content')

        </main>
    </div>
</body>
</html>
