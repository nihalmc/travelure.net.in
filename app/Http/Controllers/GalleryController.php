<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;
use App\Models\Hotels;
use Illuminate\Http\Request;

class GalleryController extends Controller

{

    public function index()
    {
        $hotels = Hotels::all();

        $galleries=Gallery::with('hotel')->orderBy('id','desc')->paginate(5);
        return view('admin.galleries.index', compact('galleries','hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'hotels_id' => 'required|string',
            'image' => 'required|image',
            'ordernumber' => 'required',
        ]);


        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/gallerys' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);


        // Destinations::create($request->post());

        $galleries = new Gallery();
        $galleries->hotels_id=$request->hotels_id;
        $galleries->image =$imagePath;
        $galleries->ordernumber =$request->ordernumber;
        $galleries->save();

        return redirect()->route('galleries.index');

    }
    public function show()
{
    // Retrieve the gallery record by ID and display it
    $hotels = Hotels::all();
    $galleries= Gallery::orderBy('id','desc')->get();
    return view('admin.galleries.index', compact('galleries','hotels'));
}

public function destroy($id)
{

     // Find the destination record by ID
     $galleries = Gallery::findOrFail($id);
     // Delete the image from the file system
if ($galleries->image) {
    Storage::disk('public')->delete($galleries->image);
}

// Delete the destination record from the database
$galleries->delete();

// Redirect back to the destination index page with a success message
return redirect()->route('galleries.index');

}



public function listByHotel(Request $request)
{
    $selectedHotelId = $request->input('stud');

    $hotels = Hotels::all(); // Fetch all hotels

    $galleries = Gallery::with('hotel')
        ->where('hotels_id', $selectedHotelId)
        ->get();

    return view('admin.galleries.index', compact('galleries', 'hotels', 'selectedHotelId'));
}



    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */



}
