<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Photo;

class FavouritesController extends Controller
{
    public function addToFav($id)
    {

        $user = User::find(Auth::id());

        $photo = Photo::find($id);

        $user->photo($id)->attach($photo);

        return redirect()->route('home');
    }

    public function removeFromFav($id)
    {
        $user = User::find(Auth::id());
        $photo = Photo::find($id);

        $user->photo($id)->detach($photo);

        return redirect()->route('home');
    }

    public function listFavourites()
    {
        $user = User::find(Auth::id());

        $photo_user = ($user->photo);

        return view('favourites', compact('photo_user'));
    }
}
