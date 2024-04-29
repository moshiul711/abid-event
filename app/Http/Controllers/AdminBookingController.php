<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use PDF;

class AdminBookingController extends Controller
{
    private $bookings, $booking;
    public function index(){
        $this->bookings = Booking::orderBy('id', 'desc')->get();
        return view('admin.booking.index', ['bookings' => $this->bookings]);
    }

    public function detail($id){
        $this->booking = Booking::find($id);
        return view('admin.booking.detail', ['bookings' => $this->booking]);
    }

    public function edit($id){
        $this->booking = Booking::find($id);
        return view('admin.booking.edit', ['bookings' => $this->booking]);
    }

    public function update(Request $request , $id){
        $this->booking = Booking::find($id);
        if ($request->booking_status == 'Pending')
        {
            $this->booking->booking_status = $request->booking_status;
        }
        elseif ($request->booking_status == 'Cancel')
        {
            $this->booking->booking_status  = $request->booking_status;
            $this->booking->delivery_status = $request->booking_status;
            $this->booking->payment_status  = $request->booking_status;
        }
        elseif ($request->booking_status == 'Processing')
        {
            $this->booking->booking_status  = $request->booking_status;
            $this->booking->delivery_status = $request->booking_status;
            $this->booking->payment_status  = $request->booking_status;
            $this->booking->delivery_address  = $request->delivery_address;
            $this->booking->courier_id      = $request->courier_id;
        }
        elseif ($request->booking_status == 'Complete')
        {
            $this->booking->booking_status  = $request->booking_status;
            $this->booking->delivery_status = $request->booking_status;
            $this->booking->payment_status  = $request->booking_status;
            $this->booking->payment_amount  = $this->booking->booking_total;
        }
        $this->booking->save();
        return redirect('/admin/all-booking')->with('message', 'Booking info Updated Successfully.');

    }

    public function invoice($id){
        $this->booking = Booking::find($id);
        return view('admin.booking.invoice', ['bookings' => $this->booking]);
    }

    public function downloadInvoice($id){

        $this->booking = Booking::find($id);
        $pdf = PDF::loadView('admin.booking.download', ['booking' => $this->booking]);
        return $pdf->stream('invoice-'.$id. '.pdf');
    }

    public function delete($id){
       return $id;
    }
}
