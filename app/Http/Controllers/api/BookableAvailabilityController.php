<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Bookable;
use Illuminate\Http\Request;

class BookableAvailabilityController extends Controller
{
    public function __invoke($id, Request $request){
        
        $data = $request->validate([
            'from' => 'required|date_format:Y-m-d|after_or_equal:now',
            'to' => 'required|date_format:Y-m-d|after_or_equal:from'
        ]);
    
        $bookable = Bookable::findOrFail($id);

        dd($bookable->bookings()->betweenDates($data['from'], $data['to'])->count());
    }
}
