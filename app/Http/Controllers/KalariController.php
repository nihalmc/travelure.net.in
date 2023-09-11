<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\Kalarigallery;
use App\Models\Kalaripackages;
use App\Models\Kalaripackagestype;
use Illuminate\Support\Facades\Mail;
use App\Mail\Kalarimail;
class KalariController extends Controller
{
    public function index()
    {
        $package_types = Kalaripackagestype::all();
        $packages=Kalaripackages::orderBy('id','desc')->paginate(5);
        return view('admin.kalaripackages.index', compact('packages','package_types'));
    }

    public function create()
    {


        $package_types =Kalaripackagestype::all();
        return view('admin.kalaripackages.create',compact('package_types'));

    }

    public function store(Request $request)
    {
        $showinhomepage = $request->has('showinhomepage') ? 1 : 0;

        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'packagetype_id' => 'required|string',
            'PackageDetails' => 'required|string',
            'Itenarary' => 'required|string',
            'days' => 'required|string',
            'class' => 'required|string',
            'destination' => 'required|string',
            'includes' => 'required|string',
            'excludes' => 'required|string',
            'ordernumber' => 'required|string',
            'showinhomepage' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/packages/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $packages = new Kalaripackages();
        $packages->name=$request->name;
        $packages->image=$imagePath;
        $packages->packagetype_id=$request->packagetype_id;
        $packages->PackageDetails=$request->PackageDetails;
        $packages->Itenarary=$request->Itenarary;
        $packages->days=$request->days;
        $packages->class=$request->class;
        $packages->destination=$request->destination;
        $packages->includes=$request->includes;
        $packages->excludes=$request->excludes;
        $packages->ordernumber =$request->ordernumber;
        $packages->showinhomepage =$request->showinhomepage;
        $packages->save();

        return redirect()->route('kalaripackages.index');
    }



    public function edit($id)
    {
        $packages = Kalaripackages::findOrFail($id);

        $package_types =Kalaripackagestype::all();

        return view('admin.kalaripackages.edit',compact('packages','package_types'));
    }

    public function update(Request $request, $id)
    {

        $packages= Kalaripackages::findOrFail($id);

        $showinhomepage = $request->has('showinhomepage') ? 1 : 0;


        $request->validate([
            'name' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'packagetype_id' => 'nullable|string',
            'packageDetails' => 'nullable|string',
            'days' => 'nullable|string',
            'class' => 'nullable|string',
            'destination' => 'nullable|string',
            'includes' => 'nullable|string',
            'excludes' => 'nullable|string',
            'ordernumber' => 'nullable|string',
            'showinhomepage' => 'nullable|string',
        ]);




        $packages->name=$request->name;
        $packages->packagetype_id=$request->packagetype_id;
        $packages->PackageDetails=$request->PackageDetails;
        $packages->days=$request->days;
        $packages->class=$request->class;
        $packages->destination=$request->destination;
        $packages->includes=$request->includes;
        $packages->excludes=$request->excludes;
        $packages->ordernumber =$request->ordernumber;
        $packages->showinhomepage =$request->showinhomepage;

 if ($request->hasFile('image')) {
     $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/packages/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

         if ($packages->image) {
            Storage::disk('public')->delete($packages->image);
        }
         // Update the image property with the new path
         $packages->image = $imagePath;
      }
      $packages->save();
   return redirect()->route('kalaripackages.index');
    }

    public function destroy($id)
    {

         // Find the destination record by ID
         $packages = Kalaripackages::findOrFail($id);
         // Delete the image from the file system
    if ($packages->image) {
        Storage::disk('public')->delete($packages->image);
    }

    // Delete the destination record from the database
    $packages->delete();

    // Redirect back to the destination index page with a success message
    return redirect()->route('kalaripackages.index');

    }



    public function show()
    {
        $package_types =Kalaripackagestype::all();
        return view('admin.kalaripackages.kalaripackagetype',compact('package_types'));

    }
    public function savepackage_type(Request $request){

        $request->validate([

            'package_type' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordernumber' => 'required|string',
            'text' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/package_types/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $package_types= new Kalaripackagestype();
        $package_types->package_type=$request->package_type;
        $package_types->image=$imagePath;
        $package_types->ordernumber =$request->ordernumber;
        $package_types->text =$request->text;
        $package_types->save();

        return redirect()->route('kkalaripackages.show');
    }


    public function editpackage_type($id)
    {
        $package_types = Kalaripackagestype::find($id);



        return view('admin.kalaripackages.editkalaripackagetype', compact('package_types'));
    }
    public function updatepackage_type(Request $request, $id)
    {
        $package_types = Kalaripackagestype::find($id);



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

        return redirect()->route('kkalaripackages.show');
    }


    public function deletepackage_type($id)
    {
        $package_types = Kalaripackagestype::findOrFail($id);

        // Delete the image from storage if it exists
        if ($package_types->image && Storage::exists('public/' . $package_types->image)) {
            Storage::delete('public/' . $package_types->image);
        }

        $package_types->delete();

        return redirect()->route('kkalaripackages.show');
    }


    public function display()
    {
        $gallery=Kalarigallery::all();
        $packages =Kalaripackages::all();
        return view('admin.kalaripackages.kalarigallery',compact('packages','gallery'));

    }

    public function  savegallery(Request $request){

        $request->validate([

            'package_id' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordernumber' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/gallery/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $gallery= new Kalarigallery();
        $gallery->package_id=$request->package_id;
        $gallery->image=$imagePath;
        $gallery->ordernumber =$request->ordernumber;
        $gallery->save();

        return redirect()->route('kalarigalleries.display');
    }


    public function listgallery(Request $request)
    {
        $selected_stud = $request->input('stud');
        $gallery=Kalarigallery::with('findpackage') // Eager load the destination relationship
            ->where('package_id', $selected_stud)
            ->get();

            $packages = Kalaripackages::all();

        return view('admin.kalaripackages.kalarigallery', compact('packages','gallery'));
    }

    public function deletegallery($id)
    {

        $gallery=Kalarigallery::findOrFail($id);
        // Delete the image from the file system
   if ($gallery->image) {
       Storage::disk('public')->delete($gallery->image);
   }

   // Delete the destination record from the database
   $gallery->delete();

   return redirect()->route('kalarigalleries.display');
    }
    public function pkages()
    {

        $packagegalleries=Kalarigallery::all();
        $packages = Kalaripackages::all();
        $package_types =  Kalaripackagestype::all();

        return view('website.kalaripackages',compact('packages','packagegalleries','package_types'));

    }
    public function pkages2($id)
    {

        $package_types = Kalaripackagestype::findOrFail($id);

        $packagegalleries=Kalarigallery::all();
        $packages = Kalaripackages::all();

        return view('website.kalari2',compact('packages','packagegalleries','package_types'));

    }

    public function packagesdetail($id)
    {

        $packages =  Kalaripackages::findOrFail($id);
        $packagegalleries=Kalarigallery::all();

        $package_types =  Kalaripackagestype::all();

        return view('website.kalaridetails',compact('packages','packagegalleries','package_types'));

    }
    public function packagessendmail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $date= $request->input('date');
        $people= $request->input('people');
        $messages = $request->input('messages');

        $kalariData= [

            "name" => $name,
            "email" => $email,
            "phonenumber" => $phonenumber,
            "date" => $date,
            "people" => $people,
            "messages" => $messages
        ];

        if($kalariData)
        {
          $adminMail = 'ofmailwork@gmail.com';
          $subject = 'New packagesendmail from ' .$kalariData['email'];

          Mail::to($adminMail)->send(new Kalarimail($kalariData, $subject));

          return redirect()->route('website.kalaripkages');

        }
    }

}
