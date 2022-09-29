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
            <a href="{{ route ('details', ['id'=> $photo->id]) }}"><img src="{{$photo->img}}" action="{{ route('remove', [$photo->id]) }}" class="img-fluid" alt="image">
                <div id="photoDetails">
                    <div id="text">
                        <div class="name">{{$photo->name}}</div>
                        <div class="artist">{{$photo->artist}}</div>
                    </div>
                    <div id="optionsPhoto">
                        <form action="{{ route('remove', [$photo->id]) }}" method="POST">
                            @method('delete')
                            @csrf
                            <a class="editBtn" href="{{ route ('edit', ['id'=> $photo->id]) }}"><img src="{{ asset('img/editBlue.png') }}" class="icon edit"></a>
                            <button type="submit" onclick="return confirm('¿Eliminar {{$photo->name}}?')"><img src="{{ asset('img/binBlue.png') }}" class="icon bin"></button>
                            @if(Auth::check() && !Auth::user()->photo->contains($photo->id))
                            <a class="favBtn" href="{{ route ('addFav', [$photo->id]) }}" onclick="return confirm('{{$photo->name}} Added to your Favourites!')"><img src="{{ asset('img/heartBlue.png') }}" class="icon heart"></a>
                            @endif
                            @if(Auth::check() && Auth::user()->photo->contains($photo->id))
                            <a class="favBtn" href="{{ route ('removeFav', [$photo->id]) }}"><img src="{{ asset('img/noHeartBlue.png') }}" class="icon camera"></a>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</body>
</html>

@endsection