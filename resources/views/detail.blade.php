@extends('layouts.app')

@section('content')
<section id="details">
    <div class="detailContent">

        <div class="card" style="width: 20rem;">
            <img src="{{$photo->img}}" class="card-img-top" alt="{{$photo->name}}">
            <div class="card-body">
                <h5 class="title">{{$photo->name}}</h5>
                <h5 class="subtitle">{{$photo->artist}}</h5>
                <p class="text">Esta obra ha sido creada por {{$photo->artist}}. Además, se puede visitar en:</p> 
                <p class="text location">{{$photo->location}}</p>
                @if(Auth::check() && !Auth::user()->photo->contains($photo->id))
                <a class="favBtn" href="{{ route ('addFav', [$photo->id]) }}" onclick="return confirm('{{$photo->name}} añadido a tu lista de favoritos!')"><img src="{{ asset('img/heartBlue.png') }}" class="icon heart detailed"></a>
                @endif
                @if(Auth::check() && Auth::user()->photo->contains($photo->id))
                <a class="favBtn" href="{{ route ('removeFav', [$photo->id]) }}" onclick="return confirm('Has eliminado {{$photo->name}} de tu lista de favoritos')"><img src="{{ asset('img/noHeartBlue.png') }}" class="icon heart detailed"></a>
                @endif
            </div>
        </div>


        <div class="goHome">
            <div class="fav">
                <img src="{{ asset('img/homeGreen.png') }}" class="icon house">
            </div>
            <a href="{{ route ('home') }}" class="button fav"><button>INICIO</button></a>
        </div>
    </div>
</section>

@endsection