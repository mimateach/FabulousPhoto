
@extends('layouts.app')

@section('content')




<div id="topPanel">
        <div class="pageTitle">
            <div class="pageName">
                <div>
                    <img src="{{ asset('img/heartGreen.png') }}" class="icon heart">
                </div>
                <div class="page">Tus fotos favoritas</div>
            </div>
                <div class="goHome">
                    <div class="fav">
                        <img src="{{ asset('img/homeGreen.png') }}" class="icon house">
                    </div>
                    <a href="{{ route ('home') }}" class="button fav"><button>INICIO</button></a>
                </div>
        </div>
    </div>


        <section class="container">
        <div class="row">
            @foreach ($photo_user as $photo)
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

@endsection