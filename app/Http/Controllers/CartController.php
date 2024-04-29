<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Card;
use App\Models\Decoration;
use App\Models\Food;
use App\Models\photographer;
use App\Models\Venue;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('website.cart.index');
    }

    public function delete($rowId)
    {
        Cart::remove($rowId);
        return back();
    }

    public function add(Request $request)
    {
        $bookings = Booking::all();
        if ($request->type == 'photo') {
            foreach ($bookings as $booking) {
                if ($booking->booking_date == $request->photographer_schedule) {
                    return back()->with('message', 'Schedule is already booked');
                }
            }
            $photo = photographer::find($request->id);
            Cart::add(
                [
                    'id' => $photo->id,
                    'name' => $photo->name,
                    'qty' => 1,
                    'price' => $photo->s_price,
                    'options' =>
                        [
                            'image' => $photo->image
                        ]
                ]
            );

        } elseif ($request->type == 'card') {
            $card = Card::find($request->id);
            Cart::add(
                [
                    'id' => $card->id,
                    'name' => $card->name,
                    'qty' => 1,
                    'price' => $card->s_price,
                    'options' =>
                        [
                            'image' => $card->image
                        ]
                ]
            );
        } elseif ($request->type == 'decor') {
            $decor = Decoration::find($request->id);
            Cart::add(
                [
                    'id' => $decor->id,
                    'name' => $decor->name,
                    'qty' => 1,
                    'price' => $decor->s_price,
                    'options' =>
                        [
                            'image' => $decor->image
                        ]
                ]
            );
        } elseif ($request->type == 'food') {
            $food = Food::find($request->id);
            Cart::add(
                [
                    'id' => $food->id,
                    'name' => $food->name,
                    'qty' => 1,
                    'price' => $food->s_price,
                    'options' =>
                        [
                            'image' => $food->image
                        ]
                ]
            );
        } else {
            $venue = Venue::find($request->id);
            Cart::add(
                [
                    'id' => $venue->id,
                    'name' => $venue->name,
                    'qty' => 1,
                    'price' => $venue->s_price,
                    'options' =>
                        [
                            'image' => $venue->image
                        ]
                ]
            );
        }
        return back();
    }
}
