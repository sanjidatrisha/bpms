<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        $services=Service::all();
        return view('frontend.pages.services',compact('services'));
    }


   


    }

