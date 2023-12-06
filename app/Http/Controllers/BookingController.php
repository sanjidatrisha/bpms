<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list(){
        $booking=Booking::all();

         return view('admin.pages.booking.book',compact('booking'));
        
        
            }
            public function view(){

                return view('admin.pages.booking.view');
            }

           
}
