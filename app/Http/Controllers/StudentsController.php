<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\StudentsGallery;
use App\Models\Studentspackages;
use App\Models\Hotels;
use App\Models\Studentspackagestype;
use Illuminate\Support\Facades\Mail;
use App\Mail\Studentmail;

class StudentsController extends Controller
{
    public function index()
    {



        $packages=Studentspackages ::orderBy('id','desc')->paginate(5);
        return view('admin.studentspackages.index', compact('packages'));
    }

    public function create()
    {
        $hotels = Hotels::all();

        $package_types = Studentspackagestype::all();
        return view('admin.studentspackages.create',compact('hotels','package_types'));

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

        $packages = new Studentspackages();
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

        return redirect()->route('studentspackages.index');
    }



    public function edit($id)
    {
        $packages = Studentspackages::findOrFail($id);
        $hotels = Hotels::all();
        $package_types = Studentspackagestype::all();

        return view('admin.studentspackages.edit',compact('hotels','packages','package_types'));
    }

    public function update(Request $request, $id)
    {

        $packages= Studentspackages::findOrFail($id);

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
   return redirect()->route('studentspackages.index');
    }

    public function destroy($id)
    {

         // Find the destination record by ID
         $packages = Studentspackages::findOrFail($id);
         // Delete the image from the file system
    if ($packages->image) {
        Storage::disk('public')->delete($packages->image);
    }

    // Delete the destination record from the database
    $packages->delete();

    // Redirect back to the destination index page with a success message
    return redirect()->route('studentspackages.index');

    }



    public function show()
    {
        $package_types =Studentspackagestype::all();
        return view('admin.studentspackages.studentspackagetype',compact('package_types'));

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

        $package_types= new Studentspackagestype();
        $package_types->package_type=$request->package_type;
        $package_types->image=$imagePath;
        $package_types->ordernumber =$request->ordernumber;
        $package_types->text =$request->text;
        $package_types->save();

        return redirect()->route('kstudentspackages.show');
    }

    public function editpackage_type($id)
    {
        $package_types = Studentspackagestype::find($id);



        return view('admin.studentspackages.editstudentspackagetype', compact('package_types'));
    }
    public function updatepackage_type(Request $request, $id)
    {
        $package_types = Studentspackagestype::find($id);



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

        return redirect()->route('kstudentspackages.show');
    }


    public function deletepackage_type($id)
    {
        $package_types = Studentspackagestype::findOrFail($id);

        // Delete the image from storage if it exists
        if ($package_types->image && Storage::exists('public/' . $package_types->image)) {
            Storage::delete('public/' . $package_types->image);
        }

        $package_types->delete();

        return redirect()->route('kstudentspackages.show');
    }



    public function display()
    {
        $gallery=StudentsGallery::all();
        $packages =Studentspackages::all();
        return view('admin.studentspackages.studentsgallery',compact('packages','gallery'));

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

        $gallery= new StudentsGallery();
        $gallery->package_id=$request->package_id;
        $gallery->image=$imagePath;
        $gallery->ordernumber =$request->ordernumber;
        $gallery->save();

        return redirect()->route('studentsgalleries.display');
    }


    public function listgallery(Request $request)
    {
        $selected_stud = $request->input('stud');
        $gallery=StudentsGallery::with('findpackage') // Eager load the destination relationship
            ->where('package_id', $selected_stud)
            ->get();

            $packages = Studentspackages::all();

        return view('admin.studentspackages.studentsgallery', compact('packages','gallery'));
    }

    public function deletegallery($id)
    {

        $gallery=StudentsGallery::findOrFail($id);
        // Delete the image from the file system
   if ($gallery->image) {
       Storage::disk('public')->delete($gallery->image);
   }

   // Delete the destination record from the database
   $gallery->delete();

   return redirect()->route('studentsgalleries.display');
    }

    public function pkages()
    {

        $packagegalleries=StudentsGallery::all();
        $packages = Studentspackages::all();
        $package_types =Studentspackagestype ::all();

        return view('website.studentspackages',compact('packages','packagegalleries','package_types'));

    }
    public function pkages2($id)
    {

        $package_types =Studentspackagestype  ::findOrFail($id);

        $packagegalleries=StudentsGallery::all();
        $packages = Studentspackages::all();

        return view('website.students2',compact('packages','packagegalleries','package_types'));

    }

    public function packagesdetail($id)
    {

        $packages = Studentspackages::findOrFail($id);
        $packagegalleries=StudentsGallery::all();

        $package_types =  Studentspackagestype::all();

        return view('website.studentspackagedetail',compact('packages','packagegalleries','package_types'));

    }
    public function packagessendmail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $date= $request->input('date');
        $people= $request->input('people');
        $messages = $request->input('messages');

        $studentData= [

            "name" => $name,
            "email" => $email,
            "phonenumber" => $phonenumber,
            "date" => $date,
            "people" => $people,
            "messages" => $messages
        ];

        if($studentData)
        {
          $adminMail = 'ofmailwork@gmail.com';
          $subject = 'New  packagesendmail from ' .$studentData['email'];

          Mail::to($adminMail)->send(new Studentmail($studentData, $subject));

          return redirect()->route('website.studentspkages');

        }
    }

}
