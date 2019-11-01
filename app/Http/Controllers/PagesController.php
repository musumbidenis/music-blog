<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Song;
use App\Image;
use Auth;

class PagesController extends Controller
{
    //Website Functions
    public function index(){
        $songs = Song::orderBy('created_at', 'desc')->take(6)->get();
        return view('pages.index')->with('songs', $songs);
    }
    public function songs(){
        $songs = Song::orderBy('created_at', 'desc')->get();
        return view('pages.music')->with('songs', $songs);
    }
    public function contact(){
        return view('pages.contact');
    }
    public function gallery(){
        $images = Image::orderBy('created_at', 'desc')->get();
        return view('pages.gallery')->with('images', $images);
    }

    //Adminstrator Functions
    public function home(){
        $songs = Song::all()->count();
        $image = Image::all()->count();
        return view('pages.dashboard')->with('songs', $songs)->with('image', $image);
    }

    public function music()
    {
        $songs = Song::all();
        return view('pages.muzic')->with('songs',$songs);
    }

    public function image(Request $request)
    {
        return view('pages.image');
    }
    
}
