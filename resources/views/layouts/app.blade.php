<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FabPhoto') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Scripts -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])

</head>
<body>
    <div id="app">

    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                FabulousPhoto
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul style="display: flex; align-items: center" class="navbar-nav ms-auto">
                    @guest
                    <li class="nav-item dropdown">
                        <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.375 8.125C9.375 11.2262 11.8988 13.75 15 13.75C18.1012 13.75 20.625 11.2262 20.625 8.125C20.625 5.02375 18.1012 2.5 15 2.5C11.8988 2.5 9.375 5.02375 9.375 8.125ZM25 26.25H26.25V25C26.25 20.1763 22.3237 16.25 17.5 16.25H12.5C7.675 16.25 3.75 20.1763 3.75 25V26.25H25Z" fill="white" />
                            </svg></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('login') }}">
                                Inicia sesión
                            </a>
                            <a class="dropdown-item" href="{{ route('register') }}">
                                    
                                Regístrate</a>
                        </div>
                    </li>

                    @else
                    <li class="nav-item dropdown">
                        <a style="color: white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    @if (Auth::check())
                    <li>
                        <a href="{{ route ('favourites') }}" style="display: flex; flex-direction: column; color: white; align-items: center; text-decoration: none; margin-right: 0.5vw; margin-left: 0.5vw" href="">
                            <!--ruta para registro-->
                            <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M29.1853 5.5518C29.447 5.65623 29.6714 5.83667 29.8295 6.06984C29.9876 6.30301 30.0722 6.57822 30.0725 6.85995V23.1404C30.0722 23.4222 29.9876 23.6974 29.8295 23.9305C29.6714 24.1637 29.447 24.3441 29.1853 24.4486L15.5587 29.8992C15.2227 30.0336 14.8479 30.0336 14.5118 29.8992L0.885258 24.4486C0.623945 24.3439 0.399974 24.1633 0.242197 23.9301C0.0844202 23.697 6.55202e-05 23.4219 0 23.1404L0 6.85995C6.55202e-05 6.57843 0.0844202 6.30339 0.242197 6.07024C0.399974 5.83709 0.623945 5.65652 0.885258 5.5518L13.9893 0.309794L14.0081 0.304156L14.5118 0.101166C14.8484 -0.0337222 15.224 -0.0337222 15.5606 0.101166L16.0662 0.304156L16.085 0.309794L29.1853 5.5518ZM19.5546 3.72302L7.988 8.34854L3.46961 6.54231L1.87953 7.17947V7.93128L14.0965 12.8181V27.7077L15.0362 28.0836L15.976 27.7077V12.8199L28.1929 7.93316V7.18135L26.6028 6.54419L15.0362 11.1678L10.5178 9.3616L22.0845 4.73608L19.5546 3.72302Z" fill="white" />
                            </svg>
                            Favourites
                        </a>
                    </li>
                    @endif
                    <!--@if (Auth::check() && Auth::user()->isAdmin))
                    @endif-->
                </ul>
            </div>
        </div>
    </nav>
    
        <main class="content">
            @yield('content')

        </main>
    </div>
</body>
</html>
