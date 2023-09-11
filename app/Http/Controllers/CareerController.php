<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use Illuminate\Support\Facades\Mail;
use App\Mail\Careersmail;
use Illuminate\Validation\ValidationException;

class CareerController extends Controller
{
    public function edit()
    {
        $career = Career::find(1); // Assuming you only have one row for career information
        return view('admin.career.career', compact('career'));
    }

    public function update(Request $request)
    {
        $career = Career::find(1); // Assuming you only have one row for career information
        $career->text = $request->input('text');
        $career->save();

        return redirect()->route('career.edit');
    }

    public function show()
    {
        $career=Career::orderBy('id','desc')->paginate(5);
        return view('website.careers', compact('career'));
    }

    public function submitCareerForm(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $travel = $request->input('travel');
        $Resume = $request->file('Resume');
        $messages = $request->input('messages');


            $careersData = [
                "name" => $name,
                "email" => $email,
                "phonenumber" =>$phonenumber,
                "travel" => $travel,
                "Resume"=>  $Resume,
                "messages" =>  $messages,

            ];

            if ($careersData) {
                $adminMail = 'travelure.tours@gmail.com';
                $subject = 'New sendmail from ' . $careersData['email'];

                Mail::to($adminMail)->send(new Careersmail($careersData, $subject));

                return redirect()->route('website.index');
            }


    }



}

