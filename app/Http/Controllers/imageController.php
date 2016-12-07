<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Imageupload;

class imageController extends Controller
{
    public function index()
    {
        return view('image');
    }
    public function save(Request $request)
    {
        $destination = 'uploads/photos/'; // your upload folder
        $image       = $request->file('image');
        $filename    = $image->getClientOriginalName(); // get the filename
        $image->move($destination, $filename); // move file to destination

        // create a record
        Imageupload::create([
            'image' => $destination . $filename
        ]);

        return back()->withSuccess('Success.');
    }
}
