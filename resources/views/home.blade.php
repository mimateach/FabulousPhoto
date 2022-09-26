<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        <style>.zoom:hover img {
            transform: scale(1.1);
        }

        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

        body {
            margin: 0
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
    <section id="gallery">
        @foreach ($photos as $photo)


        <div class="grid lg:grid-cols-3 gap-6">
            <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%;" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                <img src="{{$photo->img}}" class="w-full transition duration-300 ease-linear align-middle" />
                <a href="#!">
                    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
                        <div class="flex justify-items-start align-bottom items-end h-full">
                            <h5 class="text-lg font-bold text-white m-6">{{$photo->name}}</h5>
                            <p class="text-white m-5">{{$photo->artist}}</p>
                            <button>♥️</button>
                        </div>
                    </div>
                    <div class="hover-overlay">
                        <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
                    </div>
                </a>
            </div>
        </div>

        @endforeach

    </section>

</body>

</html>