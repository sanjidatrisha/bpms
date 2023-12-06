<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function createBook()
    {
        return view('Frontend.pages.book.list');
    }
    public function store(Request $request)
    {
        //dd($request);
        Booking::create([
            'Name' => $request->name,
            'Appointment_time' => $request->time,
            'Appointment_date' => $request->date,
            'mobile_num' => $request->mobile_number,
            'Address' => $request->address,
            'massage' => $request->message,
        ]);
        notify()->success('Booked Successfully.');
        return redirect()->back();
    }
}
