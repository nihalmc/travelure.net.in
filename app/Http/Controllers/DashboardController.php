<?php

namespace App\Http\Controllers;

use App\Models\Homeslider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $homeslider= Homeslider::orderby('created_at', 'DESC')->take(10)->get();

        return view('admin.dashboard.index', compact(['homeslider']));

    }
}
