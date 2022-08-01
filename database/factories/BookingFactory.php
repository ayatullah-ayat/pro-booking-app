<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;


class BookingFactory extends Factory
{
    
    public function definition()
    {
        $from = Carbon::instance(fake()->dateTimeBetween('-1 months', '+1 months'));
        $to = (clone $from)->addDays(random_int(0, 14));
        
        return [
            'from' => $from,
            'to' => $to
        ];
    }
}
