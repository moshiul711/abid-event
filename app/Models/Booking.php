<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function bookingDetail()
    {
        return $this->hasMany(BookingDetail::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
