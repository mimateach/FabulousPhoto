<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

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

/* Auth::routes();
 */
Route::get('/home', [PhotoController::class, 'index']);
Route::get('/', [App\Http\Controllers\PhotoController::class, 'index'])->name('home');
Route::delete('/delete/{id}', [PhotoController::class, 'destroy'])->name('remove');
Route::get('/add', [PhotoController::class, 'create'])->name('newPhoto');
Route::post('/', [PhotoController::class, 'store'])->name('storePhoto');

// Routes edit
Route::get('/edit/{id}', [PhotoController::class, 'edit'])->name('edit');
Route::patch('/photo/{id}', [PhotoController::class, 'update'])->name('update');

// Routes show
Route::get('/detailsPhoto/{id}', [PhotoController::class, 'show'])->name('detail');