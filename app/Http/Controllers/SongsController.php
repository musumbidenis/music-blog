<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use Alert;

class SongsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required',
           'artist' => 'required',
           'genre' => 'required',
           'released' => 'required',
           'image' => 'required',
           'audio' => 'required',
        ]);
        
        $image = $request->file('image');
        $imageName = $request->image->getClientOriginalName();
        $path = 'images';

        $image->move($path, $imageName);

        $audio = $request->file('audio');
        $audioName = $request->audio->getClientOriginalName();
        $path = 'songs';

        $audio->move($path, $audioName);
        
        $song = new Song();
        $song->title = $request->input('title');
        $song->artist = $request->input('artist');
        $song->released = $request->input('released');
        $song->genre = $request->input('genre');
        $song->image = $imageName;
        $song->audio = $audioName;
        
       
        $song->save();

        return redirect('/muzic')->withSuccess('Uploaded successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Song::where('id', $id)->delete();
        return redirect('/muzic')->withError('Deleted successfully!');
}

}
