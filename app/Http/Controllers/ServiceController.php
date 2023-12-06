<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function list()
    {
        $services = Service::paginate(5);

        return view('admin.pages.service.list', compact('services'));
    }

    public function createform()
    {

        return view('admin.pages.service.form');
    }

    public function store(Request $request)

    {
        $fileName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $fileName);
        }
        //dd($fileName);

        Service::create([
            'service_name' => $request->name,
            'service_description' => $request->description,
            'creation_date' => $request->date,
            'price' => $request->price,
            'image' => $fileName,
        ]);
        return redirect()->back();
    }

    public function delete($id){

$service=Service::find($id);
if($service)
{
    $service->delete();
}
notify()->success('service deleted Successfully.');
return redirect ()->back();


    }

    public function edit($id){
        $service=Service::find($id);
        return view('admin.pages.service.edit',compact('service'));



    }

    public function update(Request $request,$id){
        $service=Service::find($id);
        
        $fileName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('uploads/', $fileName);
        }
        $service->update([

            'service_name' => $request->name,
            'service_description' => $request->description,
            'creation_date' => $request->date,
            'price' => $request->price,
            'image' => $fileName,


        ]);
        notify()->success("successfully updated.");
        return redirect()->route('service.list');




    }

   
}
