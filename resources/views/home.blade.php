
@extends('layouts.app')

@section('content')


<body class="antialiased">

    <div class="topPanel">
        <div class="pageTitle">
                <div class="icon"></div>
                <div class="text"></div>
        </div>
        <div class="options">
            <div class="addPhoto">
                <div class="icon add"></div>
                <div class="button add"></div>
            </div>
            <div class="goFav">
                <div class="icon fav"></div>
                <div class="button fav"></div>
            </div>
        </div>
    </div>
        <div id="addPhoto">
            <a href="{{ route ('newPhoto') }}">Añadir foto</a>
        </div>

        <div class="container">
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
        </div>
</body>

</html>

@endsection