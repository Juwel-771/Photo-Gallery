<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $album = Album::with('Photos')->get();
        return view('album.index',['albums'=> $album]);
    }

    public function create(){
        return view('album.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name'=>'required',
            'cover_image'=>'image|max:5048|mimes:jpg,png,jpeg'
        ]);

        // File name With Extension
        $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

        // Just File Name
        $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

        // Get With Extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        // Create a New File
        $fileNameToStore = $filename.'_'.time().'_'.$extension;

        // Upload Image
        $path = $request->file('cover_image')->storeAs('public/album_covers',$fileNameToStore);

        $album = new Album();
        $album->name = $request->name;
        $album->description = $request->description;
        $album->cover_image = $fileNameToStore;

        $album->save();

        return redirect('/album/index')->with('message','Photo Uploaded');
    }

    public function show($id){
        $album = Album::with('Photos')->find($id);

        return view('album.show',['albums'=>$album]);
    }
}
