<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Airlineticketing;
use App\Mail\Rentacarmail;
use App\Mail\Starcruismail;
use App\Mail\Visamail;



class AirlineticketingController extends Controller
{

    public function show()
{
    return view('website.airlineticketing');
}

 public function Airline(Request $request)
    {
      $name = $request->input('name');
      $email = $request->input('email');
      $phonenumber = $request->input('phonenumber');
      $from = $request->input('from');
      $destination = $request->input('destination');
      $ddate = $request->input('ddate');
      $rdate = $request->input('rdate');
      $address = $request->input('address');
      $adults = $request->input('adults');
      $child = $request->input('child');
      $infant = $request->input('infant');
      $class = $request->input('class');
      $airline = $request->input('airline');
      $messages = $request->input('messages');

      $airlineData = [
        "name" => $name,
        "email" => $email,
        "phonenumber" => $phonenumber,
        "from" => $from,
        "destination" => $destination,
        "ddate" => $ddate,
        "rdate" => $rdate,
        "address" => $address,
        "adults" => $adults,
        "child" => $child,
        "infant" => $infant,
        "class" => $class,
        "airline" => $airline,
        "messages" => $messages,

    ];



    if($airlineData)
    {
      $adminMail = 'travelure.tours@gmail.com';
      $subject = 'New Airline Ticketing Booking from ' . $airlineData['email'];

      Mail::to($adminMail)->send(new Airlineticketing($airlineData, $subject));

      return view('website.airlineticketing');

    }

    }
    public function starcruis(){

        return view('website.starcruises');
    }
    public function starcruismail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $from = $request->input('from');
        $destination = $request->input('destination');
        $ddate = $request->input('ddate');
        $rdate = $request->input('rdate');
        $address = $request->input('address');
        $adults = $request->input('adults');
        $child = $request->input('child');
        $infant = $request->input('infant');
        $class = $request->input('class');
        $airline = $request->input('airline');
        $messages = $request->input('messages');

        $starcruisData = [
          "name" => $name,
          "email" => $email,
          "phonenumber" => $phonenumber,
          "from" => $from,
          "destination" => $destination,
          "ddate" => $ddate,
          "rdate" => $rdate,
          "address" => $address,
          "adults" => $adults,
          "child" => $child,
          "infant" => $infant,
          "class" => $class,
          "airline" => $airline,
          "messages" => $messages,

      ];



      if($starcruisData)
      {
        $adminMail = 'travelure.tours@gmail.com';
        $subject = 'New Airline Ticketing Booking from ' .$starcruisData['email'];

        Mail::to($adminMail)->send(new Starcruismail($starcruisData, $subject));



        return view('website.starcruises');
      }
    }

    public function visa(){

        return view('website.visaapplication');
    }
    public function visamail(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $gender = $request->input('gender');
        $marirtalstatus = $request->input('marirtalstatus');
        $spousenationality = $request->input('spousenationality');
        $countrybirth = $request->input('countrybirth');
        $birthstate = $request->input('birthstate');
        $nationality = $request->input('nationality');
        $documenttype = $request->input('documenttype');
        $documentno = $request->input('documentno');
        $issuedate = $request->input('issuedate');
        $expirydate = $request->input('expirydate');
        $countryissue=$request->input('countryissue');
        $placeissue = $request->input('placeissue');
        $countryorigin = $request->input('countryorigin');
        $provinceorigin = $request->input('provinceorigin');
        $districtorigin = $request->input('districtorigin');
        $address = $request->input('address');
        $occupation = $request->input('occupation');
        $qualification = $request->input('qualification');
        $religion = $request->input('religion');
        $visitpurpose = $request->input('visitpurpose');
        $traveltype = $request->input('traveltype');
        $class = $request->input('class');
        $messages = $request->input('messages');

        $visaData = [
          "name" => $name,
          "email" => $email,
          "phonenumber" => $phonenumber,
          "gender" => $gender,
          "marirtalstatus" => $marirtalstatus,
          "spousenationality" => $spousenationality,
          "countrybirth" => $countrybirth,
          "birthstate" => $birthstate,
          "nationality" => $nationality,
          "documenttype" => $documenttype,
          "documentno" => $documentno,
          "issuedate" => $issuedate,
          "expirydate" => $expirydate,
          "countryissue" => $countryissue,
          "placeissue" => $placeissue,
          "countryorigin" => $countryorigin,
          "provinceorigin" => $provinceorigin,
          "districtorigin" => $districtorigin,
          "address" => $address,
          "occupation" => $occupation,
          "qualification" => $qualification,
          "religion" => $religion,
          "visitpurpose" => $visitpurpose,
          "traveltype" => $traveltype,
          "class" => $class,
          "messages" => $messages,

      ];
      if($visaData)
      {

        $adminMail = 'travelure.tours@gmail.com';
        $subject = 'New Airline Ticketing Booking from ' .$visaData['email'];

        Mail::to($adminMail)->send(new Visamail($visaData, $subject));

        return view('website.visaapplication');

    }
}
    public function rentacar(){

        return view('website.rentacar');
    }
    public function rentacarmail(Request $request){

         $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $from = $request->input('from');
        $travel = $request->input('travel');
        $ddate = $request->input('ddate');
        $rdate = $request->input('rdate');
        $options = $request->input('options', []);
        $accOnwardspickhrs = $request->input('accOnwardspickhrs');
        $accOnwardspickupmin = $request->input('accOnwardspickupmin');
        $accOnwardspickhr = $request->input('accOnwardspickhr');
        $accOnwardspickupmi = $request->input('accOnwardspickupmi');
        $address = $request->input('address');
        $adults = $request->input('adults');
        $child = $request->input('child');
        $messages = $request->input('messages');

        $rentacarData = [
          "name" => $name,
          "email" => $email,
          "phonenumber" => $phonenumber,
          "from" => $from,
          "travel" => $travel,
          "ddate" => $ddate,
          "rdate" => $rdate,
          "options" => $options,
          "accOnwardspickhrs" => $accOnwardspickhrs,
          "accOnwardspickupmin" => $accOnwardspickupmin,
          "accOnwardspickhr" => $accOnwardspickhr,
          "accOnwardspickupmi" => $accOnwardspickupmi,
          "address" => $address,
          "adults" => $adults,
          "child" => $child,
          "messages" => $messages,


      ];
      if($rentacarData )
      {

        $adminMail = 'travelure.tours@gmail.com';
        $subject = 'New Airline Ticketing Booking from ' .$rentacarData ['email'];

        Mail::to($adminMail)->send(new Rentacarmail($rentacarData , $subject));

        return view('website.rentacar');

    }


    }





    public function showcontact()
    {
        return view('website.contact');
    }
    public function contactUs(Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $messages = $request->input('messages');

        $contactDetails = [
            "name" => $name,
            "email" => $email,
            "phonenumber" => $phonenumber,
            "messages" => $messages
        ];
        $adminMail = 'mnihalmc3@gmail.com';
                $subject = 'New tr Contact from ' . $contactDetails['email'];

                Mail::to($adminMail)->send(new ContactUsMail($contactDetails,$subject));

                return view('website.contact');
    }


}
