<?php

namespace App\Http\Controllers;

use App\Models\Beautician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class BeauticianController extends Controller
{
    public function list()
    {
        $beauticians = Beautician::paginate(5);
        // dd($beautician);

        return view('admin.pages.beautician.list', compact('beauticians'));
    }
    public function createform()
    {

        return view('admin.pages.beautician.form');
    }

    public function store(Request $request)
    {

       $validate=FacadesValidator::make($request->all(),[
        "name"  =>"required",
        "speciality"  =>"required",
        "contact_num"  =>"required",
       ]);
       if($validate->fails())
       {
        notify()->error($validate->getMessageBag()->first());
        return redirect()->back();
       }
      
        Beautician::create([
            'name' => $request->name,
            'description' => $request->description,
            'speciality' => $request->speciality,
            'contact_num' => $request->contact_num


        ]);
        notify()->success("successfully inserted.");
        return redirect()->route('beautician.list');
    }
    public function edit($id)
    {
        $beautician = Beautician::find($id);
        // dd($beautician);

        return view('admin.pages.beautician.edit',compact('beautician'));
    }

    public function update(Request $request,$id){

        $beautician=Beautician::find($id);
        
        $beautician->update([
            'name' => $request->name,
            'description' => $request->description,
            'speciality' => $request->speciality,
            'contact_num' => $request->contact_num


        ]);
        notify()->success("successfully updated.");
        return redirect()->route('beautician.list');

    }


    public function delete($id){

$beautician=Beautician::find($id);
if($beautician){
$beautician->delete();
}
notify()->success('deleted successfully.');
return redirect()->back();

}
}