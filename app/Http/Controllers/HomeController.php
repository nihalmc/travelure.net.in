<?php

namespace App\Http\Controllers;
use App\Models\Homeslider;
use App\Models\Abouts;

use App\Models\Keralapackages;
use App\Models\Package_type;
use Illuminate\Http\Request;
use App\Mail\Homesmail;
use App\Models\Internationalpackages;
use App\Models\Internationalpackagestype;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $abouts = Abouts::all();
        $homeslider = Homeslider::all();
        $homeint=Internationalpackagestype::all();
        $homekeralatypes=Package_type::all();

        return view('website.index', compact('homeslider','abouts','homeint','homekeralatypes'));


    }
    public function homesendmail(Request $request){
        $country = $request->input('country');
        $what= $request->input('what');
        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');

        $homesData= [
            "country" => $country,
            "what" => $what,
            "name" => $name,
            "email" => $email,
            "phonenumber" => $phonenumber,
        ];

        if($homesData)
        {
          $adminMail = 'travelure.tours@gmail.com';
          $subject = 'New Homes  from ' .$homesData['email'];

          Mail::to($adminMail)->send(new Homesmail($homesData, $subject));

          return redirect()->route('website.index');

        }
    }
}
