
@extends('layouts.app')

@section('content')

@foreach ($photo_user as $photo)
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
    
                <a class="editBtn" href="{{ route ('edit', ['id'=> $photo->id]) }}">
                        FAV
                    </a>
</div>

@endforeach

@endsection