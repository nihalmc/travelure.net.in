<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Homeslider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomesliderController extends Controller
{
   
    public function index()
    {
        $homeslider = Homeslider::orderBy('id','desc')->paginate(5);
        return view('admin.homeslider.index',compact('homeslider'));
    }

    public function create()
    {
        return view('admin.homeslider.create');
    }



    public function store(Request $request)
    {
        $request->validate([  // image title order_number title2 link
            'title' => 'required|string',
            'title2' => 'required|string',
            'image' => 'required|image',
            'order_number' => 'required',
            'link' => 'required',
        ]);

        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/homeslider' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);




        $homeslider = new Homeslider();
        $homeslider->title =$request->title;
        $homeslider->title2 =$request->title2;
        $homeslider->order_number =$request->order_number;
        $homeslider->image =$imagePath;
        $homeslider->link =$request->link;
        $homeslider->save();




        $homeslider = Homeslider::orderBy('id','desc')->paginate(5);
        return view('admin.homeslider.index', compact('homeslider'));
    }

    /**
    * Display the specified resource.
    *
    *

    */
    public function show()
    {


        return view('admin.homeslider.index',compact('homeslider'));

    }

    /**
    * Show the form for editing the specified resource.
    *
    * public function edit(Destinations $destination)

    */
    public function edit(Homeslider $homeslider)
    {
        return view('admin.homeslider.edit',compact('homeslider'));
    }

    /**
    * Update the specified resource in storage.
    *
    *
    */
    public function update(Request $request,$id)
    {

        $request->validate([
            'title' => 'nullable|string',
            'title2' => 'nullable|string',
            'image' => 'nullable|image',
            'order_number' => 'nullable',
            'link' => 'nullable',
        ]);

        $homeslider=Homeslider::findOrFail($id);

        $homeslider->title =$request->title;
        $homeslider->title2 =$request->title2;
        $homeslider->order_number =$request->order_number;
        $homeslider->link =$request->link;


      if ($request->hasFile('image')) {

        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/homeslider' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);
        if ($homeslider->image) {
            Storage::disk('public')->delete($homeslider->image);
        }
         // Update the image property with the new path
         $homeslider->image = $imagePath;
        }

        // Save the updated destination data to the database
        $homeslider->save();

        return redirect()->route('homesliders.index');

     }

    /**
    * Remove the specified resource from storage.
    *
    *
    */
    public function destroy($id)
    {
        $homeslider=Homeslider::find($id);
        // Delete the image from the file system
   if ($homeslider->image) {
       Storage::disk('public')->delete ($homeslider->image);
   }

   // Delete the destination record from the database
   $homeslider->delete();

   return redirect()->route('homesliders.index')->with('success','Destinations has been deleted successfully');

}


}
