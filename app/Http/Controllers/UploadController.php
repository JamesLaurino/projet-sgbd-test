<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class UploadController extends Controller
{
    public function index() {
        return view("uploads.upload-form");
    }

    public function create(Request $request) {

        // Validate the file
        $request->validate([
            'document' => 'required|file|max:2048|mimes:jpg,png,pdf,txt',
        ]);

        $originalNameWithExtension = $request->file('document')
            ->getClientOriginalName();

        $path = $request->file('document')->store('uploads');

        Storage::move($path, '/uploads/' . $originalNameWithExtension);

        return redirect()->route("upload.index")
            ->with("success", "Image uploaded !");
    }
}
