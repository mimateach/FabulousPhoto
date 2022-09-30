@extends('layouts.app')

@section('content')

<section id="forms">
    <div class="formContent">
<form class="w-full max-w-lg" action="{{ route('storePhoto') }}" method="post">
    @csrf
  <div id="addForm" class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide font-bold mb-2" for="grid-first-name">
        Título
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="name" placeholder="Nombre de la obra">
      <p class="text-red-500 text-xs italic">Por favor, rellena este campo.</p>
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Artista
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="artist" placeholder="Autor/a">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        ¿Dónde se puede ver?
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="location" placeholder="Ubicación">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Enlace de la imagen
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="img" placeholder="URL de la imagen">
      <p class="text-gray-600 text-xs italic">¡Pega aquí la URL de la imagen!</p>
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">


  </div>
  <div class="float-right">
    <a class="btn" href="{{ route('home') }}"> 
    Cancelar
</a>
</div>
<div class="btnCreate">
<button id="addButton"class="btn" type="submit" value="Create">
      Añadir
    </button>
    </div>
</form>

</div>
</section>




@endsection