<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Houseboatspackagegallery;
use App\Models\Houseboatspackages;
use App\Models\Houseboatspackagestypes;
use App\Models\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Houseboatsmail;

class HouseboatspackageController extends Controller
{

    public function index()
    {
        $houseboatspackagestypes =Houseboatspackagestypes::all();
        $houseboatspackages=Houseboatspackages::orderBy('id','desc')->paginate(5);
        return view('admin.houseboatspackages.index', compact('houseboatspackages','houseboatspackagestypes'));
    }

    public function create()
    {
        $hotels = Hotels::all();
        $houseboatspackagestypes =Houseboatspackagestypes::all();
        return view('admin.houseboatspackages.create',compact('houseboatspackagestypes','hotels'));

    }

    public function store(Request $request)
    {
        $showinhomepage = $request->has('showinhomepage') ? 1 : 0;

        $request->validate([
            'hotelname' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'destination' => 'required|string',
            'packagedetails' => 'required|string',
            'days' => 'required|string',
            'class' => 'required|string',
            'roomdetails' => 'required|string',
            'facilities' => 'required|string',
            'excludes' => 'required|string',
            'packagetype_id' => 'required|string',
            'hotel_id' => 'required|string',
            'ordernumber' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/houseboatspackages/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $houseboatspackages = new Houseboatspackages();
        $houseboatspackages->hotelname=$request->hotelname;
        $houseboatspackages->image=$imagePath;
        $houseboatspackages->destination=$request->destination;
        $houseboatspackages->packagedetails=$request->packagedetails;
        $houseboatspackages->days=$request->days;
        $houseboatspackages->class=$request->class;
        $houseboatspackages->roomdetails=$request->roomdetails;
        $houseboatspackages->facilities=$request->facilities;
        $houseboatspackages->excludes=$request->excludes;
        $houseboatspackages->packagetype_id=$request->packagetype_id;
        $houseboatspackages->hotel_id=$request->hotel_id;
        $houseboatspackages->showinhomepage =$request->showinhomepage;
        $houseboatspackages->ordernumber =$request->ordernumber;
        $houseboatspackages->save();

        return redirect()->route('houseboatspackages.index');
    }



    public function edit($id)
    {
        $houseboatspackages=Houseboatspackages::findOrFail($id);
        $hotels = Hotels::all();
        $houseboatspackagestypes =Houseboatspackagestypes::all();

        return view('admin.houseboatspackages.edit',compact('houseboatspackages','houseboatspackagestypes','hotels'));
    }

    public function update(Request $request, $id)
    {

        $houseboatspackages=Houseboatspackages::findOrFail($id);

        $showinhomepage = $request->has('showinhomepage') ? 1 : 0;


        $request->validate([
            'hotelname' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'destination' => 'nullable|string',
            'PackageDetails' => 'nullable|string',
            'days' => 'nullable|string',
            'class' => 'nullable|string',
            'roomdetails' => 'nullable|string',
            'facilities' => 'nullable|string',
            'excludes' => 'nullable|string',
            'packagetype_id' => 'nullable|string',
            'hotel_id' => 'nullable|string',
            'showinhomepage' => 'nullable|string',
            'ordernumber' => 'nullable|string',

        ]);

        $houseboatspackages->hotelname=$request->hotelname;
        $houseboatspackages->destination=$request->destination;
        $houseboatspackages->packagedetails=$request->packagedetails;
        $houseboatspackages->days=$request->days;
        $houseboatspackages->class=$request->class;
        $houseboatspackages->roomdetails=$request->roomdetails;
        $houseboatspackages->facilities=$request->facilities;
        $houseboatspackages->excludes=$request->excludes;
        $houseboatspackages->packagetype_id=$request->packagetype_id;
        $houseboatspackages->hotel_id=$request->hotel_id;
        $houseboatspackages->showinhomepage =$request->showinhomepage;
        $houseboatspackages->ordernumber =$request->ordernumber;



 if ($request->hasFile('image')) {
     $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/houseboatspackages/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

         if ($houseboatspackages->image) {
            Storage::disk('public')->delete($houseboatspackages->image);
        }
         // Update the image property with the new path
         $houseboatspackages->image = $imagePath;
      }
      $houseboatspackages->save();
   return redirect()->route('houseboatspackages.index');
    }

    public function destroy($id)
    {

         // Find the destination record by ID
         $houseboatspackages=Houseboatspackages::findOrFail($id);
         // Delete the image from the file system
    if ($houseboatspackages->image) {
        Storage::disk('public')->delete($houseboatspackages->image);
    }

    // Delete the destination record from the database
    $houseboatspackages->delete();

    // Redirect back to the destination index page with a success message
    return redirect()->route('houseboatspackages.index');

    }



    public function show()
    {

        $houseboatspackagestypes =Houseboatspackagestypes::all();
        return view('admin.houseboatspackages.keralahouseboatspackagetype',compact('houseboatspackagestypes'));

    }
    public function savepackage_type(Request $request){

        $request->validate([

            'package_type' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordernumber' => 'required|string',
            'text' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/houseboatspackagestypes/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $houseboatspackagestypes= new Houseboatspackagestypes();
        $houseboatspackagestypes->package_type=$request->package_type;
        $houseboatspackagestypes->image=$imagePath;
        $houseboatspackagestypes->ordernumber =$request->ordernumber;
        $houseboatspackagestypes->text =$request->text;
        $houseboatspackagestypes->save();

        return redirect()->route('Ayupackage_types.show');
    }


    public function editpackage_type($id)
    {
        $package_types = Houseboatspackagestypes::find($id);



        return view('admin.houseboatspackages.editkeralahouseboatspackagetype', compact('package_types'));
    }
    public function updatepackage_type(Request $request, $id)
    {
        $package_types =Houseboatspackagestypes::find($id);



        $request->validate([
            'package_type' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordernumber' => 'required|string',
            'text' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $filename = $request->file('image')->hashName();
            $imagePath = 'uploads/package_types/' . $filename;
            $request->file('image')->storeAs('public/' . $imagePath);
            $package_types->image = $imagePath;
        }

        $package_types->package_type = $request->package_type;
        $package_types->ordernumber = $request->ordernumber;
        $package_types->text = $request->text;
        $package_types->save();

        return redirect()->route('Ayupackage_types.show');
    }


    public function deletepackage_type($id)
    {
        $package_types = Houseboatspackagestypes::findOrFail($id);

        // Delete the image from storage if it exists
        if ($package_types->image && Storage::exists('public/' . $package_types->image)) {
            Storage::delete('public/' . $package_types->image);
        }

        $package_types->delete();

        return redirect()->route('Ayupackage_types.show');
    }


    public function display()
    {
        $houseboatspackagegalleries=Houseboatspackagegallery::all();
        $houseboatspackages=Houseboatspackages::all();
        return view('admin.houseboatspackages.houseboatgallery',compact('houseboatspackages','houseboatspackagegalleries'));

    }

    public function  savegallery(Request $request){

        $request->validate([

            'package_id' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordernumber' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/houseboatspackagegalleries/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $houseboatspackagegalleries= new Houseboatspackagegallery();
        $houseboatspackagegalleries->package_id=$request->package_id;
        $houseboatspackagegalleries->image=$imagePath;
        $houseboatspackagegalleries->ordernumber =$request->ordernumber;
        $houseboatspackagegalleries->save();

        return redirect()->route('houseboatspackagesgalleries.display');
    }


    public function listgallery(Request $request)
    {
        $selected_stud = $request->input('stud');
        $houseboatspackagegalleries=Houseboatspackagegallery::with('findpackage') // Eager load the destination relationship
            ->where('package_id', $selected_stud)
            ->get();

            $houseboatspackages=Houseboatspackages::all();

        return view('admin.houseboatspackages.houseboatgallery', compact('houseboatspackagegalleries','houseboatspackages'));
    }


    public function deletegallery($id)
    {

        $houseboatspackagegalleries=Houseboatspackagegallery::findOrFail($id);
        // Delete the image from the file system
   if ($houseboatspackagegalleries->image) {
       Storage::disk('public')->delete($houseboatspackagegalleries->image);
   }

   // Delete the destination record from the database
   $houseboatspackagegalleries->delete();

   return redirect()->route('houseboatspackagesgalleries.display');
    }

    public function pkages()
    {

        $packagegalleries=Houseboatspackagegallery::all();
        $packages = Houseboatspackages::all();
        $package_types =  Houseboatspackagestypes::all();

        return view('website.keralahouseboats',compact('packages','packagegalleries','package_types'));

    }
    public function pkages2($id)
    {

        $package_types =  Houseboatspackagestypes::findOrFail($id);

        $packagegalleries=Houseboatspackagegallery::all();
        $packages =Houseboatspackages ::all();

        return view('website.houseboats2',compact('packages','packagegalleries','package_types'));

    }

    public function packagesdetail($id)
    {

        $packages =Houseboatspackages ::findOrFail($id);
        $packagegalleries=Houseboatspackagegallery::all();

        $package_types = Houseboatspackagestypes::all();

        return view('website.houseboatdetail',compact('packages','packagegalleries','package_types'));

    }
    public function packagessendmail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $date= $request->input('date');
        $people= $request->input('people');
        $roomtype= $request->input('roomtype');
        $messages = $request->input('messages');

        $houseboatData= [

            "name" => $name, 
            "email" => $email,
            "phonenumber" => $phonenumber,
            "date" => $date,
            "people" => $people,
            "roomtype" => $roomtype,
            "messages" => $messages
        ];

        if($houseboatData)
        {
          $adminMail = 'ofmailwork@gmail.com';
          $subject = 'New packagesendmail from ' .$houseboatData['email'];

          Mail::to($adminMail)->send(new Houseboatsmail($houseboatData, $subject));

          return redirect()->route('website.houseboatspkages');

        }
    }


}
