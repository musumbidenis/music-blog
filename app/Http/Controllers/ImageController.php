<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Alert;

class ImageController extends Controller
{
    /*POST
     */
    public function save(Request $request)
    {
        $this->validate($request, [
            'photos' => 'required',
        ]);

        $photos = $request->file('photos');
               
        foreach ($photos as $photo){
            $imageName=$photo->getClientOriginalName();
            $path='gallery_images';
     
            $photo->move($path,$imageName);
     
            $imageSave = new Image();
            $imageSave->image=$imageName;
             
            $imageSave->save();
        }

        return redirect('/image')->withSuccess('Uploaded successfully!');
            
    }
    /**
     */
    public function destroy($id)
    {
        //
    }
}
