<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function getImage(string $filename)
    {
        $file_path = Storage::disk('public')->path('images/' . $filename);

        if (Storage::disk('public')->exists('images/' . $filename)) {
            return response()->file($file_path);
        };

        return abort(404);

        // $path = storage_path('app/public/images/' . $filename);
        // if (!File::exists($path)) {
        //     abort(404);
        // }
        // $file = File::get($path);
        // $type = File::mimeType($path);
        // $response = Response::make($file, 200);
        // $response->header('Content-Type', $type);
        // return $response;
    }

    // public function testHelperUploadFile(Request $request)
    // {
    //     $file = $request->file('file');
    //     $folder = 'images';
    //     $file_path = $this->uploadFile($file, $folder);
    //     return $file_path;
    // }
}
