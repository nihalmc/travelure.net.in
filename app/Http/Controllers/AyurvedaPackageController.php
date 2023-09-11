<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Ayurvedapackagetype;
use Illuminate\Http\Request;
use App\Models\Ayurvedapackages;
use App\Models\Ayurvedapackagegallery;
use Illuminate\Support\Facades\Mail;
use App\Mail\Ayurvedapmail;

class AyurvedaPackageController extends Controller
{
    public function index()
    {
        $ayurvedapackagetypes = Ayurvedapackagetype::all();
        $ayurvedapackages=Ayurvedapackages::orderBy('id','desc')->paginate(5);
        return view('admin.ayurvedapackages.index', compact('ayurvedapackages','ayurvedapackagetypes'));
    }

    public function create()
    {

        $ayurvedapackagetypes = Ayurvedapackagetype::all();
        return view('admin.ayurvedapackages.create',compact('ayurvedapackagetypes'));

    }

    public function store(Request $request)
    {
        $showinhomepage = $request->has('showinhomepage') ? 1 : 0;

        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'packagetype_id' => 'required|string',
            'PackageDetails' => 'required|string',
            'Treatment' => 'required|string',
            'days' => 'required|string',
            'class' => 'required|string',
            'destination' => 'required|string',
            'includes' => 'required|string',
            'excludes' => 'required|string',
            'ordernumber' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/ayurvedapackagegalleries/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $ayurvedapackages = new Ayurvedapackages();
        $ayurvedapackages->name=$request->name;
        $ayurvedapackages->image=$imagePath;
        $ayurvedapackages->packagetype_id=$request->packagetype_id;
        $ayurvedapackages->PackageDetails=$request->PackageDetails;
        $ayurvedapackages->Treatment=$request->Treatment;
        $ayurvedapackages->days=$request->days;
        $ayurvedapackages->class=$request->class;
        $ayurvedapackages->destination=$request->destination;
        $ayurvedapackages->includes=$request->includes;
        $ayurvedapackages->excludes=$request->excludes;
        $ayurvedapackages->showinhomepage =$request->showinhomepage;
        $ayurvedapackages->ordernumber =$request->ordernumber;
        $ayurvedapackages->save();

        return redirect()->route('ayurvedapackages.index');
    }



    public function edit($id)
    {
        $ayurvedapackages = Ayurvedapackages::findOrFail($id);

        $ayurvedapackagetypes = Ayurvedapackagetype::all();

        return view('admin.ayurvedapackages.edit',compact('ayurvedapackages','ayurvedapackagetypes'));
    }

    public function update(Request $request, $id)
    {

        $ayurvedapackages = Ayurvedapackages::findOrFail($id);

        $showinhomepage = $request->has('showinhomepage') ? 1 : 0;


        $request->validate([
            'name' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'packagetype_id' => 'nullable|string',
            'PackageDetails' => 'nullable|string',
            'Treatment' => 'nullable|string',
            'days' => 'nullable|string',
            'class' => 'nullable|string',
            'destination' => 'nullable|string',
            'includes' => 'nullable|string',
            'excludes' => 'nullable|string',
            'ordernumber' => 'nullable|string',

        ]);


        $ayurvedapackages->name=$request->name;
        $ayurvedapackages->packagetype_id=$request->packagetype_id;
        $ayurvedapackages->PackageDetails=$request->PackageDetails;
        $ayurvedapackages->Treatment=$request->Treatment;
        $ayurvedapackages->days=$request->days;
        $ayurvedapackages->class=$request->class;
        $ayurvedapackages->destination=$request->destination;
        $ayurvedapackages->includes=$request->includes;
        $ayurvedapackages->excludes=$request->excludes;
        $ayurvedapackages->showinhomepage =$request->showinhomepage;
        $ayurvedapackages->ordernumber =$request->ordernumber;


 if ($request->hasFile('image')) {
     $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/ayurvedapackages/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

         if ($ayurvedapackages->image) {
            Storage::disk('public')->delete($ayurvedapackages->image);
        }
         // Update the image property with the new path
         $ayurvedapackages->image = $imagePath;
      }
      $ayurvedapackages->save();
   return redirect()->route('ayurvedapackages.index');
    }

    public function destroy($id)
    {

         // Find the destination record by ID
         $ayurvedapackages = Ayurvedapackages::findOrFail($id);
         // Delete the image from the file system
    if ($ayurvedapackages->image) {
        Storage::disk('public')->delete($ayurvedapackages->image);
    }

    // Delete the destination record from the database
    $ayurvedapackages->delete();

    // Redirect back to the destination index page with a success message
    return redirect()->route('ayurvedapackages.index');

    }

    public function show()
    {

        $ayurvedapackagetypes =Ayurvedapackagetype::all();
        return view('admin.ayurvedapackages.ayurvedapackagetype',compact('ayurvedapackagetypes'));

    }
    public function savepackage_type(Request $request){

        $request->validate([

            'package_type' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordernumber' => 'required|string',
            'text' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/ $ayurvedapackagetypes/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $ayurvedapackagetypes= new Ayurvedapackagetype();
        $ayurvedapackagetypes->package_type=$request->package_type;
        $ayurvedapackagetypes->image=$imagePath;
        $ayurvedapackagetypes->ordernumber =$request->ordernumber;
        $ayurvedapackagetypes->text =$request->text;
        $ayurvedapackagetypes->save();

        return redirect()->route('Ayupackage_types.show');
    }

    public function editpackage_type($id)
    {
        $package_types =Ayurvedapackagetype::find($id);



        return view('admin.ayurvedapackages.editayurvedapackagetype', compact('package_types'));
    }
    public function updatepackage_type(Request $request, $id)
    {
        $package_types = Ayurvedapackagetype::find($id);



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


    public function deleteayurvedapackagetype($id)
    {
        $package_types = Ayurvedapackagetype::findOrFail($id);

        // Delete the image from storage if it exists
        if ($package_types->image && Storage::exists('public/' . $package_types->image)) {
            Storage::delete('public/' . $package_types->image);
        }

        $package_types->delete();

        return redirect()->route('Ayupackage_types.show');
    }





    public function display()
    {
        $ayurvedapackagegalleries=Ayurvedapackagegallery::all();
        $ayurvedapackages = Ayurvedapackages::all();
        return view('admin.ayurvedapackages.gallery',compact('ayurvedapackages','ayurvedapackagegalleries'));

    }
    public function  savegallery(Request $request){

        $request->validate([

            'package_id' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ordernumber' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/ayurvedapackagegalleries/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $packagegalleries= new Ayurvedapackagegallery();
        $packagegalleries->package_id=$request->package_id;
        $packagegalleries->image=$imagePath;
        $packagegalleries->ordernumber =$request->ordernumber;
        $packagegalleries->save();

        return redirect()->route('ayurvedapackagegalleries.display');
    }


    public function listgallery(Request $request)
    {
        $selected_stud = $request->input('stud');
        $ayurvedapackagegalleries=Ayurvedapackagegallery::with('ayurvedapackage') // Eager load the destination relationship
            ->where('package_id', $selected_stud)
            ->get();

            $ayurvedapackages = Ayurvedapackages::all();

        return view('admin.ayurvedapackages.gallery', compact('ayurvedapackagegalleries','ayurvedapackages'));
    }

    public function deletegallery($id)
    {

        $ayurvedapackagegalleries=Ayurvedapackagegallery::findOrFail($id);
        // Delete the image from the file system
   if ($ayurvedapackagegalleries->image) {
       Storage::disk('public')->delete($ayurvedapackagegalleries->image);
   }

   // Delete the destination record from the database
   $ayurvedapackagegalleries->delete();

   return redirect()->route('ayurvedapackagegalleries.display');
    }

    public function pkages()
    {

        $packagegalleries=Ayurvedapackagegallery::all();
        $packages = Ayurvedapackages::all();
        $package_types =  Ayurvedapackagetype::all();

        return view('website.ayurvedapackages',compact('packages','packagegalleries','package_types'));

    }
    public function pkages2($id)
    {

        $package_types = Ayurvedapackagetype::findOrFail($id);

        $packagegalleries=Ayurvedapackagegallery::all();
        $packages = Ayurvedapackages::all();

        return view('website.ayurveda2',compact('packages','packagegalleries','package_types'));

    }

    public function packagesdetail($id)
    {

        $packages =  Ayurvedapackages::findOrFail($id);
        $packagegalleries=Ayurvedapackagegallery::all();

        $package_types =  Ayurvedapackagetype::all();

        return view('website.ayurvedadetail',compact('packages','packagegalleries','package_types'));

    }
    public function packagessendmail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $date= $request->input('date');
        $people= $request->input('people');
        $messages = $request->input('messages');

        $ayurvedaData= [

            "name" => $name,
            "email" => $email,
            "phonenumber" => $phonenumber,
            "date" => $date,
            "people" => $people,
            "messages" => $messages
        ];

        if($ayurvedaData)
        {
          $adminMail = 'travelure.tours@gmail.com';
          $subject = 'New ayurvedapackagesendmail from ' .$ayurvedaData['email'];

          Mail::to($adminMail)->send(new Ayurvedapmail($ayurvedaData, $subject));

          return redirect()->route('website.ayurvedapkages');

        }
    }


}
