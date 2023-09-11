<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Homeslider;
use App\Models\Destinations;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destination = Destinations::orderBy('id','desc')->paginate(5);
        return view('admin.destinations.index', compact('destination'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image',
            'ordernumber' => 'required',
        ]);


        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/destination' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);


        // Destinations::create($request->post());

        $destination = new Destinations();
        $destination->name =$request->name;
        $destination->image =$imagePath;
        $destination->ordernumber =$request->ordernumber;
        $destination->save();




        return redirect()->route('destination.index')->with('success','Destinations has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinations $destination)
    {
        return view('destination.show',compact('destination'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinations $destination)
    {
        return view('admin.destinations.edit',compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string',
            'image' => 'nullable|image',
            'text' => 'nullable|image',
            'ordernumbr' => 'nullable',
        ]);

        $destination = Destinations::findOrFail($id);

        // Set the properties with updated data
      $destination->name = $request->name;
      $destination->ordernumber = $request->ordernumber;

      if ($request->hasFile('image')) {

        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/destination' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);
        if ($destination->image) {
            Storage::disk('public')->delete($destination->image);
        }
         // Update the image property with the new path
         $destination->image = $imagePath;
        }

        // Save the updated destination data to the database
        $destination->save();


        return redirect()->route('destination.index')->with('success','Destinations Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

         // Find the destination record by ID
    $destination = Destinations::findOrFail($id);
         // Delete the image from the file system
    if ($destination->image) {
        Storage::disk('public')->delete($destination->image);
    }

    // Delete the destination record from the database
    $destination->delete();

    // Redirect back to the destination index page with a success message

        return redirect()->route('destination.index')->with('success','Destinations has been deleted successfully');
    }
}
