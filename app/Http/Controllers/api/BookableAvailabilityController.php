<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Bookable;
use Illuminate\Http\Request;

class BookableAvailabilityController extends Controller
{
    public function __invoke($id, Request $request){
        
        $data = $request->validate([
            'from' => 'required',
            'to' => 'required'
        ]);
    
        $bookable = Bookable::findOrFail($id);

        return $bookable->isAvailableFor($data['from'], $data['to']) ?
                response()->json([], 404) : response()->json([]);
    }
}
