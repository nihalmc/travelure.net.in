<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function edit()
    {
        $abouts = Abouts::find(1); // Assuming you only have one row for career information
        return view('admin.about.edit', compact('abouts'));
    }
    public function update(Request $request)
    {

        $abouts = Abouts::find(1);
        
        $request->validate([
            'text' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $abouts->text = $request->text;


      if ($request->hasFile('image')) {

        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/abouts' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);
        if ($abouts->image) {
            Storage::disk('public')->delete($abouts->image);
        }
         // Update the image property with the new path
         $abouts->image = $imagePath;
        }
        // Save the updated destination data to the database
        $abouts->save();

        return redirect()->route('abouts.edit');
    }


}
