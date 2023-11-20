<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function list(){
        $services=Service::paginate(5);

        return view('admin.pages.service.list', compact('services'));
    }

    public function createform(){
     
        return view('admin.pages.service.form');

    }

    public function store(Request $request)

    {

        //  dd($request->all());
         Service::create([
              'service_name'=>$request->name,
             'service_description'=>$request->description,
             'creation_date'=>$request->date,
             'price'=>$request->price



         ]);
         return redirect()->back();
    }
}
