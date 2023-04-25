<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Http;

class ImageUploadController extends Controller
{
    public function index()
    {
        return view('image-upload');
    }

    public function upload(Request $request)
    {
        // Validate the uploaded image
        $request->validate([
            'image' => 'required|image'
        ]);

        // Get the file from the request
        $file = $request->file('image');

        // Resize the image to 200px by width
        $image = Image::make($file);
        $image->resize(200, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        // Upload the resized image to the API
        $response = Http::attach(
            'image',
            $image->stream()->detach(),
            'image.jpg'
        )->post('https://codelime.in/api/remind-app-token');

        // Redirect to the image upload form with a success message
        return view('/image-upload')->with('success', 'Image resized and pushed to the API successfully!');
    }
}
