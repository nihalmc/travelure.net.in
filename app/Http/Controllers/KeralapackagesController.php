<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\Packagegallery;
use App\Models\Keralapackages;
use App\Models\Hotels;
use App\Models\Package_type;
use Illuminate\Support\Facades\Mail;
use App\Mail\Keralapsmail;

class KeralapackagesController extends Controller
{
    public function index()
    {
        $package_types = Package_type::all();
        $keralapackages=Keralapackages ::orderBy('id','desc')->paginate(5);
        return view('admin.keralapackages.index', compact('keralapackages','package_types'));
    }

    public function create()
    {
        $hotels = Hotels::all();

        $package_types = Package_type::all();
        return view('admin.keralapackages.create',compact('hotels','package_types'));

    }

    public function store(Request $request)
    {
        $showinhomepage = $request->has('showinhomepage') ? 1 : 0;

        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Itenarary' => 'required|string',
            'destination' => 'required|string',
            'days' => 'required|string',
            'class' => 'required|string',
            'includes' => 'required|string',
            'excludes' => 'required|string',
            'packagetype_id' => 'required|string',
            'hotel_id' => 'required|string',
            'ordernumber' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/keralapackages/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $keralapackages = new Keralapackages();
        $keralapackages->name=$request->name;
        $keralapackages->image=$imagePath;
        $keralapackages->destination=$request->destination;
        $keralapackages->Itenarary=$request->Itenarary;
        $keralapackages->days=$request->days;
        $keralapackages->class=$request->class;
        $keralapackages->includes=$request->includes;
        $keralapackages->excludes=$request->excludes;
        $keralapackages->packagetype_id=$request->packagetype_id;
        $keralapackages->hotel_id=$request->hotel_id;
        $keralapackages->showinhomepage =$request->showinhomepage;
        $keralapackages->ordernumber =$request->ordernumber;
        $keralapackages->save();

        return redirect()->route('keralapackages.index');
    }



    public function edit($id)
    {
        $keralapackages = Keralapackages::findOrFail($id);
        $hotels = Hotels::all();
        $package_types = Package_type::all();

        return view('admin.keralapackages.edit',compact('hotels','keralapackages','package_types'));
    }

    public function update(Request $request, $id)
    {

        $keralapackages = Keralapackages::findOrFail($id);

        $showinhomepage = $request->has('showinhomepage') ? 1 : 0;


        $request->validate([

            'name' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Itenarary' => 'nullable|string',
            'destination' => 'nullable|string',
            'days' => 'nullable|string',
            'class' => 'nullable|string',
            'includes' => 'nullable|string',
            'excludes' => 'nullable|string',
            'packagetype_id' => 'nullable|string',
            'hotel_id' => 'nullable|string',
            'ordernumber' => 'nullable|string',
        ]);



        $keralapackages->name=$request->name;
        $keralapackages->destination=$request->destination;
        $keralapackages->Itenarary=$request->Itenarary;
        $keralapackages->days=$request->days;
        $keralapackages->class=$request->class;
        $keralapackages->includes=$request->includes;
        $keralapackages->excludes=$request->excludes;
        $keralapackages->packagetype_id=$request->packagetype_id;
        $keralapackages->hotel_id=$request->hotel_id;
        $keralapackages->showinhomepage =$request->showinhomepage;
        $keralapackages->ordernumber =$request->ordernumber;

 if ($request->hasFile('image')) {
     $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/keralapackages/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

         if ($keralapackages->image) {
            Storage::disk('public')->delete($keralapackages->image);
        }
         // Update the image property with the new path
      $keralapackages->image = $imagePath;
      }
    $keralapackages->save();
   return redirect()->route('keralapackages.index');
    }

    public function destroy($id)
    {

         // Find the destination record by ID
         $keralapackages = Keralapackages::findOrFail($id);
         // Delete the image from the file system
    if ($keralapackages->image) {
        Storage::disk('public')->delete($keralapackages->image);
    }

    // Delete the destination record from the database
    $keralapackages->delete();

    // Redirect back to the destination index page with a success message
    return redirect()->route('keralapackages.index');

    }

    public function display()
    {
        $packagegalleries=Packagegallery::all();
        $keralapackages = Keralapackages::all();
        return view('admin.keralapackages.keralagallery',compact('keralapackages','packagegalleries'));

    }

    public function  savekeralagallery(Request $request){

        $request->validate([

            'package_id' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordernumber' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/packagegalleries/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $packagegalleries= new Packagegallery();
        $packagegalleries->package_id=$request->package_id;
        $packagegalleries->image=$imagePath;
        $packagegalleries->ordernumber =$request->ordernumber;
        $packagegalleries->save();

        return redirect()->route('packagegalleries.display');
    }


    public function listKeralagallery(Request $request)
    {
        $selected_stud = $request->input('stud');
        $packagegalleries=Packagegallery::with('keralapackage') // Eager load the destination relationship
            ->where('package_id', $selected_stud)
            ->get();

            $keralapackages = Keralapackages::all();

        return view('admin.keralapackages.keralagallery', compact('keralapackages','packagegalleries'));
    }



    public function show()
    {
        $package_types = Package_type::all();
        return view('admin.keralapackages.keralapackagetype',compact('package_types'));

    }
    public function savekeralapackage_type(Request $request){

        $request->validate([

            'package_type' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordernumber' => 'required|string',
            'text' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/package_types/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $package_types= new Package_type();
        $package_types->package_type=$request->package_type;
        $package_types->image=$imagePath;
        $package_types->ordernumber =$request->ordernumber;
        $package_types->text =$request->text;
        $package_types->save();

        return redirect()->route('kpackage_types.show');
    }

    public function editkeralapackage_type($id)
{
    $package_types = Package_type::find($id);



    return view('admin.keralapackages.editkeralapackagetype', compact('package_types'));
}
public function updatekeralapackage_type(Request $request, $id)
{
    $package_types = Package_type::find($id);



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

    return redirect()->route('kpackage_types.show');
}


public function deletekeralapackage_type($id)
{
    $package_types = Package_type::findOrFail($id);

    // Delete the image from storage if it exists
    if ($package_types->image && Storage::exists('public/' . $package_types->image)) {
        Storage::delete('public/' . $package_types->image);
    }

    $package_types->delete();

    return redirect()->route('kpackage_types.show');
}



    public function deleteKeralagallery($id)
    {

        $packagegalleries=Packagegallery::findOrFail($id);
        // Delete the image from the file system
   if ($packagegalleries->image) {
       Storage::disk('public')->delete($packagegalleries->image);
   }

   // Delete the destination record from the database
   $packagegalleries->delete();

   return redirect()->route('packagegalleries.display');
    }

    public function Keralapkages()
    {
        $packagegalleries=Packagegallery::all();
        $keralapackages = Keralapackages::all();
        $package_types = Package_type::all();

        return view('website.keralatourpackages',compact('keralapackages','packagegalleries','package_types'));

    }
    public function Keralapkages2($id)
    {

        $package_types = Package_type::findOrFail($id);
        $packagegalleries=Packagegallery::all();
        $keralapackages = Keralapackages::all();


        return view('website.packages2',compact('keralapackages','packagegalleries','package_types'));

    }

    public function packagesdetail($id)
    {

        $keralapackages = Keralapackages::findOrFail($id);
        $packagegalleries=Packagegallery::all();
        $package_types = Package_type::all();
        $hotels = Hotels::all();
        return view('website.packagedetail',compact('keralapackages','packagegalleries','hotels','package_types'));

    }
    public function packagessendmail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $date= $request->input('date');
        $people= $request->input('people');
        $messages = $request->input('messages');

        $keralaData= [

            "name" => $name,
            "email" => $email,
            "phonenumber" => $phonenumber,
            "date" => $date,
            "people" => $people,
            "messages" => $messages
        ];

        if($keralaData)
        {
          $adminMail = 'ofmailwork@gmail.com';
          $subject = 'New Keralapackagesendmail from ' .$keralaData['email'];

          Mail::to($adminMail)->send(new Keralapsmail($keralaData, $subject));

          return redirect()->route('website.Keralapkages');

        }
    }



}
