<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Internationalgallery;
use App\Models\Internationalpackages;
use App\Models\Hotels;
use App\Models\Internationalpackagestype;
use Illuminate\Support\Facades\Mail;
use App\Mail\Internationmail;

class InternationalController extends Controller
{
    public function index()
    {
        $package_types =Internationalpackagestype::all();
        $packages=Internationalpackages ::orderBy('id','desc')->paginate(5);
        return view('admin.internationalpackages.index', compact('packages','package_types'));
    }

    public function create()
    {
        $hotels = Hotels::all();

        $package_types = Internationalpackagestype::all();
        return view('admin.internationalpackages.create',compact('hotels','package_types'));

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
        $imagePath = 'uploads/packages/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $packages = new Internationalpackages();
        $packages->name=$request->name;
        $packages->image=$imagePath;
        $packages->destination=$request->destination;
        $packages->Itenarary=$request->Itenarary;
        $packages->days=$request->days;
        $packages->class=$request->class;
        $packages->includes=$request->includes;
        $packages->excludes=$request->excludes;
        $packages->packagetype_id=$request->packagetype_id;
        $packages->hotel_id=$request->hotel_id;
        $packages->showinhomepage =$request->showinhomepage;
        $packages->ordernumber =$request->ordernumber;
        $packages->save();

        return redirect()->route('internationalpackages.index');
    }



    public function edit($id)
    {
        $packages = Internationalpackages::findOrFail($id);
        $hotels = Hotels::all();
        $package_types = Internationalpackagestype::all();

        return view('admin.internationalpackages.edit',compact('hotels','packages','package_types'));
    }

    public function update(Request $request, $id)
    {

        $packages= Internationalpackages::findOrFail($id);

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



        $packages->name=$request->name;
        $packages->destination=$request->destination;
        $packages->Itenarary=$request->Itenarary;
        $packages->days=$request->days;
        $packages->class=$request->class;
        $packages->includes=$request->includes;
        $packages->excludes=$request->excludes;
        $packages->packagetype_id=$request->packagetype_id;
        $packages->hotel_id=$request->hotel_id;
        $packages->showinhomepage =$request->showinhomepage;
        $packages->ordernumber =$request->ordernumber;

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

   return redirect()->route('internationalpackages.index');
    }

    public function destroy($id)
    {

         // Find the destination record by ID
         $packages = Internationalpackages::findOrFail($id);
         // Delete the image from the file system
    if ($packages->image) {
        Storage::disk('public')->delete($packages->image);
    }

    // Delete the destination record from the database
    $packages->delete();

    // Redirect back to the destination index page with a success message
    return redirect()->route('internationalpackages.index');

    }



    public function show()
    {
        $package_types =Internationalpackagestype::all();
        return view('admin.internationalpackages.packagetype',compact('package_types'));

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

        $package_types= new Internationalpackagestype();
        $package_types->package_type=$request->package_type;
        $package_types->image=$imagePath;
        $package_types->ordernumber =$request->ordernumber;
        $package_types->text =$request->text;
        $package_types->save();

        return redirect()->route('kinternationaltype.show');
    }


    public function editpackage_type($id)
    {
        $package_types = Internationalpackagestype::find($id);



        return view('admin.internationalpackages.editinternationalpackagetype', compact('package_types'));
    }
    public function updatepackage_type(Request $request, $id)
    {
        $package_types = Internationalpackagestype::find($id);



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

        return redirect()->route('kinternationaltype.show');
    }


    public function deletepackage_type($id)
    {
        $package_types = Internationalpackagestype::findOrFail($id);

        // Delete the image from storage if it exists
        if ($package_types->image && Storage::exists('public/' . $package_types->image)) {
            Storage::delete('public/' . $package_types->image);
        }

        $package_types->delete();

        return redirect()->route('kinternationaltype.show');
    }


    public function display()
    {
        $gallery=Internationalgallery::all();
        $packages = Internationalpackages::all();
        return view('admin.internationalpackages.internationalgallery',compact('packages','gallery'));

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

        $gallery= new Internationalgallery();
        $gallery->package_id=$request->package_id;
        $gallery->image=$imagePath;
        $gallery->ordernumber =$request->ordernumber;
        $gallery->save();

        return redirect()->route('internationalgalleries.display');
    }


    public function listgallery(Request $request)
    {
        $selected_stud = $request->input('stud');
        $gallery=Internationalgallery::with('findpackage') // Eager load the destination relationship
            ->where('package_id', $selected_stud)
            ->get();

            $packages = Internationalpackages::all();

        return view('admin.internationalpackages.internationalgallery', compact('packages','gallery'));
    }

    public function deletegallery($id)
    {

        $gallery=Internationalgallery::findOrFail($id);
        // Delete the image from the file system
   if ($gallery->image) {
       Storage::disk('public')->delete($gallery->image);
   }

   // Delete the destination record from the database
   $gallery->delete();

   return redirect()->route('internationalgalleries.display');
    }

    public function pkages()
    {

        $packagegalleries=Internationalgallery::all();
        $packages =Internationalpackages::all();
        $package_types = Internationalpackagestype::all();

        return view('website.internationalpackages',compact('packages','packagegalleries','package_types'));

    }
    public function pkages2($id)
    {

        $package_types = Internationalpackagestype::findOrFail($id);

        $packagegalleries=Internationalgallery::all();
        $packages = Internationalpackages::all();

        return view('website.international2',compact('packages','packagegalleries','package_types'));

    }

    public function packagesdetail($id)
    {

        $packages =  Internationalpackages::findOrFail($id);
        $packagegalleries=Internationalgallery::all();

        $package_types =  Internationalpackagestype::all();

        return view('website.internationalpackagedetail',compact('packages','packagegalleries','package_types'));

    }
    public function packagessendmail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $date= $request->input('date');
        $people= $request->input('people');
        $messages = $request->input('messages');

        $internationalData= [

            "name" => $name,
            "email" => $email,
            "phonenumber" => $phonenumber,
            "date" => $date,
            "people" => $people,
            "messages" => $messages
        ];

        if($internationalData)
        {
          $adminMail = 'ofmailwork@gmail.com';
          $subject = 'New ayurvedapackagesendmail from ' .$internationalData['email'];

          Mail::to($adminMail)->send(new Internationmail($internationalData, $subject));

          return redirect()->route('website.internationalpkages');

        }
    }

}
