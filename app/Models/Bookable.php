<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
    use HasFactory;

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    
    public function isAvailableFor($from, $to)
    {
        return 0 === $this->bookings()->BetweenDates($from, $to)->count();
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

}
