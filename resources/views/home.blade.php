@extends('layouts.app')

@section('content')


<body class="antialiased">

    <div id="topPanel">
        <div class="pageTitle">
            <div class="pageName">
                <div>
                    <img src="{{ asset('img/cameraGreen.png') }}" class="icon camera">
                </div>
                <div class="page">Manage your photos</div>
            </div>
            <div class="options">
                <div class="add" id="addPhoto">
                    <img src="{{ asset('img/plusGreen.png') }}" class="icon plus">
                    <a href="{{ route ('newPhoto') }}" class="button">NUEVA</a>
                </div>
                <div class="goFav">
                    <div class="fav">
                        <img src="{{ asset('img/heartGreen.png') }}" class="icon camera">
                    </div>
                    <a href="{{ route ('favourites') }}" class="button fav"><button>FAVORITAS</button></a>
                </div>
            </div>
        </div>
    </div>


    <section class="container">
        <div class="row">
            @foreach ($photos as $photo)
            <div class="col-md-4 mt-3 col-lg-4">
                <img src="{{$photo->img}}" class="img-fluid" alt="image">
                <div>{{$photo->name}}</div>
                <div>{{$photo->name}}</div>
                <div>
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
            </div>
            @endforeach

        </div>
    </section>
</body>

</html>

@endsection