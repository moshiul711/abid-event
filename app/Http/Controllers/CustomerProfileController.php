<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Session;

class CustomerProfileController extends Controller
{
    private $bookings, $booking;
    public function index(){
        return view('customer.dashboard');
    }

    public function profile(){
        return view('customer.profile');
    }

    public function booking(){
        $this->bookings = Booking::where('customer_id', Session::get('customer_id'))->get();
        return view('customer.booking', ['bookings' => $this->bookings]);
    }

    public function bookingDetail($id){
        $this->booking = Booking::find($id);
        return view('customer.booking-detail' ,['booking' => $this->booking]);
    }

    public function payment(){
        return view('customer.payment');
    }

    public function changePassword(){
        return view('customer.change-password');
    }
}
