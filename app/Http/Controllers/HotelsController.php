<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Destinations;
use App\Models\Hotels;
use App\Models\Gallery;
use Illuminate\Support\Facades\Mail;
use App\Mail\Bookhotelsendmail;


class HotelsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destinations = Destinations::all(); // Replace with your actual destination model

        $hotels = Hotels::with('destination')->orderBy('id', 'desc')->paginate(5);
        return view('admin.hotels.index', compact('hotels', 'destinations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels = Destinations::all();
        return view('admin.hotels.create', compact('hotels'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'destination_id' => 'required',
            'title' => 'required|string',
            'image' => 'required|image',
            'text' => 'required',
            'facilities' => 'required',
            'roomtype' => 'required|string',
            'rooms' => 'required',
            'webpage' => 'required',
            'reservation' => 'required',
            'ordernumber' => 'required',
            'rooms_details' => 'required',
            'popularplaces' => 'required',
            'excludes' => 'required',

        ]);

        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/hotels' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);

        $hotels = new Hotels();
        $hotels->destination_id =$request->destination_id;
        $hotels->title =$request->title;
        $hotels->image =$imagePath;
        $hotels->text =$request->text;
        $hotels->facilities=$request->facilities;
        $hotels->roomtype =$request->roomtype;
        $hotels->rooms =$request->rooms;
        $hotels->webpage =$request->webpage;
        $hotels->reservation =$request->reservation;
        $hotels->ordernumber =$request->ordernumber;
        $hotels->rooms_details =$request->rooms_details;
        $hotels->popularplaces =$request->popularplaces;
        $hotels->excludes =$request->excludes;
        $hotels->save();

        return redirect()->route('hotels.index');
    }





    /**
     * Display the specified resource.
     */
    public function show()
    {
        $destinations =Destinations::all();
        $hotels = Hotels::orderBy('id','desc')->get();
        return view('admin.hotels.index', compact('hotels','destinations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $hotels = Hotels::findOrFail($id);
        $destinations =Destinations::all();

        return view('admin.hotels.edit',compact('hotels','destinations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'destination_id' => 'nullable',
            'title' => 'nullable|string',
            'image' => 'nullable|image',
            'text' => 'nullable',
            'facilities' => 'nullable',
            'roomtype' => 'nullable|string',
            'rooms' => 'nullable',
            'webpage' => 'nullable',
            'reservation' => 'nullable',
            'ordernumber' => 'nullable',
            'rooms_details' => 'nullable',
            'popularplaces' => 'nullable',
            'excludes' => 'nullable',
        ]);


        $hotels =Hotels::findOrFail($id);

        $hotels->destination_id =$request->destination_id;
        $hotels->title =$request->title;
        $hotels->text =$request->text;
        $hotels->facilities=$request->facilities;
        $hotels->roomtype =$request->roomtype;
        $hotels->rooms =$request->rooms;
        $hotels->webpage=$request->webpage;
        $hotels->reservation =$request->reservation;
        $hotels->ordernumber =$request->ordernumber;
        $hotels->rooms_details =$request->rooms_details;
        $hotels->popularplaces =$request->popularplaces;
        $hotels->excludes =$request->excludes;

        if ($request->hasFile('image')) {

        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/hotels' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);
        $filename =$request->file('image')->hashName();
        $imagePath ='uploads/hotels' .$filename;
        $request->file('image')->storeAs('public/' .$imagePath);

        if ($hotels->image) {
            Storage::disk('public')->delete($hotels->image);
        }
         // Update the image property with the new path
         $hotels->image = $imagePath;
        }

        // Save the updated destination data to the database
        $hotels->save();

return redirect()->route('hotels.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hotels =Hotels::findOrFail($id);
        // Delete the image from the file system
   if ( $hotels->image) {
       Storage::disk('public')->delete ($hotels->image);
   }

   // Delete the destination record from the database
   $hotels->delete();

   // Redirect back to the destination index page with a success message
       return redirect()->route('hotels.index');
    }


    public function listByDestination(Request $request)
    {
        $selected_stud = $request->input('stud');
        $hotels = Hotels::with('destination') // Eager load the destination relationship
            ->where('destination_id', $selected_stud)
            ->get();

        $destinations = Destinations::all();

        return view('admin.hotels.index', compact('hotels', 'destinations'));
    }

    //hotel

public function hotel(){
    $destinations = Destinations::all();
    $hotels = Hotels::with('destination')->orderBy('id', 'desc')->paginate(5);
    return view('website.hotels', compact('hotels', 'destinations'));
}

public function hotel2($id){

    $destinations = Destinations::findOrFail($id);
    $hotels = Hotels::with('destination')->orderBy('id', 'desc')->paginate(5);
    return view('website.hotels2', compact('hotels', 'destinations'));
}



public function hoteldetail($id){
    $hotels = Hotels::findOrFail($id);

    $galleries = Gallery::all();
    $destinations = Destinations::all();
    return view('website.hotel-detail', compact('hotels', 'galleries','destinations'));
}

public function sendmail(Request $request){

    $name = $request->input('name');
    $email = $request->input('email');
    $phonenumber = $request->input('phonenumber');
    $indate= $request->input('indate');
    $outdate= $request->input('outdate');
    $roomtype= $request->input('roomtype');
    $messages = $request->input('messages');

    $hotelsData= [

        "name" => $name,
        "email" => $email,
        "phonenumber" => $phonenumber,
        "indate" => $indate,
        "outdate" => $outdate,
        "roomtype" => $roomtype,
        "messages" => $messages
    ];

    if($hotelsData)
    {
      $adminMail = 'travelure.tours@gmail.com';
      $subject = 'New Bookhotelsendmail from ' .$hotelsData['email'];

      Mail::to($adminMail)->send(new Bookhotelsendmail($hotelsData, $subject));

      return redirect()->route('website.hotel');

    }
}
}
