<?php

namespace App\Http\Controllers;
use App\Models\Keralapackages;
use Illuminate\Http\Request;

class AddPackageController extends Controller
{
     public function addkeralapackages(Request $request){
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'packagetype_id' => 'required|string',
            'ltenarary' => 'required|string',
            'destination' => 'required|string',
            'days' => 'required|string',
            'class' => 'required|string',
            'includes' => 'required|string',
            'excludes' => 'required|string',
            'hotel_id' => 'required|string',
            'showinhomepage' => 'required|string',
            'ordernumber' => 'required|string',
        ]);

        $filename = $request->file('image')->hashName();
        $imagePath = 'uploads/deals/' . $filename;
        $request->file('image')->storeAs('public/' . $imagePath);

        $Keralapackages = new Keralapackages();
        $Keralapackages->name =$request->name;
        $Keralapackages->image =$imagePath;
        $Keralapackages->packagetype_id=$request->packagetype_id;
        $Keralapackages->ltenarary =$request->ltenarary;
        $Keralapackages->destination =$request->destination;
        $Keralapackages->days =$request->days;
        $Keralapackages->class =$request->class;
        $Keralapackages->includes =$request->includes;
        $Keralapackages->excludes =$request->excludes;
        $Keralapackages->hotel_id =$request->hotel_id;
        $Keralapackages->showinhomepage =$request->showinhomepage;
        $Keralapackages->ordernumber =$request->ordernumber;
        $Keralapackages->save();

        return response()->json([
            'statusCode' => 201,
            'status' => true,
            'message' => 'Package added successfully',
            'filename' => $filename,
            'path' => asset('storage/' . $imagePath)
        ], 201);

     }

}
