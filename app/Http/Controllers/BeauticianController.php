<?php

namespace App\Http\Controllers;

use App\Models\Beautician;
use Illuminate\Http\Request;

class BeauticianController extends Controller
{
    public function list(){
        $beauticians=Beautician::paginate(5);
        // dd($beautician);

        return view('admin.pages.beautician.list',compact('beauticians'));
     
    

    }
    public function createform(){
     
        return view('admin.pages.beautician.form');

    }

    public function store(Request $request){
     
        //  dd($request->all());
        Beautician::create([
             'name'=>$request->name,
             'description'=>$request->description,
             'speciality'=>$request->speciality

            
        ]);
        return redirect()->back();

    }

}
