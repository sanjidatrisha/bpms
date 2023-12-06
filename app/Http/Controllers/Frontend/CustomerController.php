<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
    public function registration()

    {
       return view('frontend.pages.registration');

    }

    public function store(Request $request)
    {

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'customer',
            'password'=>bcrypt($request->password),


        

        ]);
        
        notify()->success('customer registration successful');
        return redirect()->back();
    
        }

        public function login(){

return view('frontend.pages.login');

        }

        public function doLogin(Request $request){
            $val=Validator::make($request->all(),[
                'email'=>'required',
                'password'=>'required',
            ]);
            
            if($val->fails())
            {
                notify()->error($val->getMessageBag());
                return redirect()->back();


            }
            $credentials=$request->except('_token');
            if(auth()->attempt($credentials))
            {
             notify()->success('login success.');
             return redirect()->route('home');



            }
            notify()->error('invalied credentials.');
            return redirect()->back();




        }
        

    public function logout()
    {

        auth()->logout();
        notify()->success('logout success.');
        return redirect()->route('home');
    }

    public function profile(){

return view('frontend.pages.profile');

    }

    public function ProfileEdit($id)
    {
        $users= User::find($id);
        // dd($beautician);

        
        return view('frontend.pages.p_edit',compact('users'));
    }

    public function ProfileUpdate(Request $request,$id){

        $users=User::find($id);
        
        $users->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'customer',
            'password'=>bcrypt($request->password),
         


        ]);
        notify()->success("successfully updated.");
        return redirect()->route('profile.view');

    }
}



