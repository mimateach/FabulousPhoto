
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FabPhoto</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>

    </script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
</head>

<body class="antialiased">

    <div id="addPhoto">
        <a href="{{ route ('newPhoto') }}">Añadir foto</a>
    </div>
    @foreach ($photos as $photo)
    <div id="galleryTrial">
        <div class="grid">
            <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                <div class="absolute right-0 bottom-0 left-0 w-full h-20 overflow-hidden bg-fixed" style="background-color: rgba(8, 3, 21, 0.61)">

                    <h5>{{$photo->name}}</h5>
                    <p>{{$photo->artist}}</p>
                    <img src="{{$photo->img}}" />

                    <form action="{{ route('remove', ['id' => $photo->id]) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" onclick="return confirm('¿Eliminar {{$photo->name}}?')">🗑️</button>
                        <a class="editBtn" href="{{route ('edit', ['id'=> $photo->id]) }}">✏️</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    <!-- <section id="gallery">
        @foreach ($photos as $photo)
        <div class="grid">
            <div class="zoom shadow-lg rounded-lg relative overflow-hidden bg-no-repeat bg-cover" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                
                <img src="{{$photo->img}}" class="w-full transition duration-300 ease-linear align-middle" />

                <div class="absolute right-0 bottom-0 left-0 w-full h-20 overflow-hidden bg-fixed" style="background-color: rgba(8, 3, 21, 0.61)">

                    <div class="flex justify-items-start align-bottom items-end h-full">
                        <h5 class="text-lg font-bold text-white m-6">{{$photo->name}}</h5>
                        <p class="text-white m-5">{{$photo->artist}}</p>
                    </div>
                </div>
                <div class="hover-overlay">
                    <div class="mask absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100" style="background-color: rgba(253, 253, 253, 0.15)"></div>
                </div>
                
                
            </div>
            <form action="{{ route('remove', ['id' => $photo->id]) }}" method="POST">

                    @method('delete')
                    @csrf
                    <button type="submit" onclick="return confirm('¿Eliminar {{$photo->name}}?')">🗑️</button>
                    <a class="editBtn" href="{{ route ('edit', ['id'=> $photo->id]) }}">
                        ✏️
                    </a>
                </form>
        </div>

        @endforeach

    </section> -->

    <section id="gallery">
        @foreach ($photos as $photo)
        <div class="grid">
            <div class="zoom shadow-lg relative overflow-hidden bg-no-repeat bg-cover" data-mdb-ripple="true" data-mdb-ripple-color="dark">
                <img src="{{$photo->img}}" class="w-full" />
                <div class="absolute right-0 bottom-0 left-0 w-full h-20 overflow-hidden bg-fixed" style="background-color: rgba(8, 3, 21, 0.61)">
                    <div class="flex justify-items-start">
                        <h5 class="title">{{$photo->name}}</h5>
                        <p class="artist">{{$photo->artist}}</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('remove', [$photo->id]) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" onclick="return confirm('¿Eliminar {{$photo->name}}?')">🗑️</button>
                    <a class="editBtn" href="{{ route ('edit', ['id'=> $photo->id]) }}">✏️</a>
                    <a class="detailBtn" href="{{ route ('details', ['id'=> $photo->id]) }}">👀</a>
                    <a class="favBtn" href="{{ route ('addFav', [$photo->id]) }}" onclick="return confirm('{{$photo->name}} Added to your Favourites!')">FAV</a>
                    <a class="favBtn" href="{{ route ('removeFav', [$photo->id]) }}">Remove Fav</a>

            </form>
        </div>

        @endforeach

    </section>

</body>

</html>

@endsection