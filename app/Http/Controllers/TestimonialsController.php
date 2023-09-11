<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\Testimonialsmail;
class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $testimonials=Testimonials::orderBy('id','desc')->paginate(5);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.testimonials.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string',
            'companyname' => 'required|string',
            'comment' => 'required|string',

        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/testimonials/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $testimonials = new Testimonials();
        $testimonials->image=$imagePath;
        $testimonials->name=$request->name;
        $testimonials->companyname=$request->companyname;
        $testimonials->comment=$request->comment;
        $testimonials->save();

        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $homeslider=Testimonials::orderBy('id','desc')->paginate(5);
        return view('website.testimonials', compact('homeslider'));
    }


    public function sendmail(Request $request){

        $txtDescription= $request->input('txtDescription');
        $name = $request->input('name');
        $email = $request->input('email');
        $Resume= $request->file('Resume');
        $website= $request->input('website');



        $testimonialsData= [

            "txtDescription" => $txtDescription,
            "name" => $name,
            "email" => $email,
            "website" => $website,
              "Resume"=>$Resume,
        ];

        if($testimonialsData)
        {
          $adminMail = 'ofmailwork@gmail.com';
          $subject = 'New packagesendmail from ' .$testimonialsData['email'];

          Mail::to($adminMail)->send(new Testimonialsmail($testimonialsData, $subject));

          return redirect()->route('website.index');

        }
    }

    public function destroy($id)
    {

         // Find the destination record by ID
         $testimonials=Testimonials::findOrFail($id);
         // Delete the image from the file system
    if ($testimonials->image) {
        Storage::disk('public')->delete($testimonials->image);
    }

    // Delete the destination record from the database
    $testimonials->delete();

    // Redirect back to the destination index page with a success message
    return redirect()->route('testimonials.index');

    }

}
