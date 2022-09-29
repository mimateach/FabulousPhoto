<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();

        return view('home', compact('photos'));
    }

    /**

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPhoto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = request()->except('_token');

        Photo::create($photo);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $photo = Photo::find($id);

        return view('detail', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);

        return view('editPhoto', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = request()->except(['_token', '_method']);

        Photo::where('id', '=', $id)
            ->update($photo);

        return redirect()->route('home');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo =  Photo::destroy($id);

        return redirect()->route('home');
    }


    // Functions for Favourites
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
