<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


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
        // notify()->success('customer registration successful');
        // return redirect()->back();
    
        }
    }

