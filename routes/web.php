<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
}); 

Auth::routes();
 
// Read photos - routes
Route::get('/home', [PhotoController::class, 'index']);
Route::get('/', [App\Http\Controllers\PhotoController::class, 'index'])->name('home');
 
// Delete photos - routes
Route::delete('/delete/{id}', [PhotoController::class, 'destroy'])->middleware('isAdmin', 'auth')->name('remove');

 
// Create photos - routes
Route::get('/add', [PhotoController::class, 'create'])->name('newPhoto')->middleware('isAdmin', 'auth');
Route::post('/', [PhotoController::class, 'store'])->name('storePhoto');
 
// Edit/Update photos - routes
Route::get('/edit/{id}', [PhotoController::class, 'edit'])->name('edit')->middleware('isAdmin', 'auth');
Route::patch('/photo/{id}', [PhotoController::class, 'update'])->name('update');
 
// Photos detail - routes
Route::get('/detail/{id}', [PhotoController::class, 'detail'])->name('details');
 
// Favourite photos - routes
Route::group(['middleware' => ['auth']], function () {
Route::get('/favourites', [PhotoController::class, 'listFavourites'])->name('favourites');
Route::get('/addToFav/{id}', [PhotoController::class, 'addToFav'])->name('addFav');
Route::get('/removeFav/{id}', [PhotoController::class, 'removeFromFav'])->name('removeFav');
});











Auth::routes();

//Routes Create
Route::get('/add', [PhotoController::class, 'create'])->name('newPhoto')->middleware('isAdmin', 'auth');
Route::post('/', [PhotoController::class, 'store'])->name('storePhoto');

//Route Read
Route::get('/home', [PhotoController::class, 'index']);
Route::get('/', [App\Http\Controllers\PhotoController::class, 'index'])->name('home');

// Routes Edit/Update
Route::get('/edit/{id}', [PhotoController::class, 'edit'])->name('edit')->middleware('isAdmin', 'auth');
Route::patch('/photo/{id}', [PhotoController::class, 'update'])->name('update');

// Route Delete
Route::delete('/delete/{id}', [PhotoController::class, 'destroy'])->middleware('isAdmin', 'auth')->name('remove');

// Routes Details
Route::get('/detail/{id}', [PhotoController::class, 'detail'])->name('details');

// Routes Favourites
Route::get('/favourites', [PhotoController::class, 'listFavourites'])->middleware('auth')->name('favourites');
Route::get('/addToFav/{id}', [PhotoController::class, 'addToFav'])->middleware('auth')->name('addFav');
Route::get('/removeFav/{id}', [PhotoController::class, 'removeFromFav'])->middleware('auth')->name('removeFav');

