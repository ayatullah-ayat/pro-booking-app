<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function bookables(){
        return $this->belongsTo(Bookable::class);
    }

    public function scopeBetweenDates($query, $from, $to){
        return $query->where('to', '>=', $from)
                    ->where('from', '<=', $to);
    }
}
