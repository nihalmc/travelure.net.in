<?php

namespace App\Http\Controllers;
use App\Models\Homeslider;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){

        return view('website.index');

    }

    public function about(){
        // $user = User::first();

        return view('website.ayurvedadetail');
    }


}
