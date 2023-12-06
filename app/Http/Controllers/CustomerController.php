<?php

namespace App\Http\Controllers;

use App\Models\Booking;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $customer=Booking::all();
       

return view('admin.pages.customer',compact('customer'));


    }

    
}
