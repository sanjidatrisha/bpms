<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){

return view('admin.pages.customer.list');


    }
    public function createform(){
     
        return view('admin.pages.customer.form');

    }
}
