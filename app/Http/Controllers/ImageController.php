<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImageController extends Controller
{
    public function index () {
        return view('upload.index', [
            'images' => Image::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function show ($id) {

    }

    public function upload () {
        return view('upload.form');
    }

    // public function doUpload(ImageRequest $request) {
    //     $validatedAttributes = $request->validated();
    //     $validatedAttributes['file_path'] = $request->file('image')->store('images', 'public');

    //     $image = Image::create($validatedAttributes);

    //     return redirect()->route('upload.index')->with(['message' => ['type' => 'success', 'text' => 'Votre image a bien été sauvegardée.']]);
    // }

    public function doUpload(ImageRequest $request)
    {
        $request->validated();

        $filePath = $request->file('image')->store('images', 'public');

        Image::create([
            'file_path' => $filePath
        ]);

        return to_route('upload.index')->with(['message' => ['type' => 'success', 'text' => 'Votre image a bien été sauvegardée.']]);
    }


    

}