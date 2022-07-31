<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookable>
 */
class BookableFactory extends Factory
{
    protected $suffix = [
        'Villa',
        'House',
        'Cottage',
        'Luxury Villas',
        'Cheap House',
        'Cheap Rooms',
        'Luxury Rooms',
        'Fancy Rooms'
    ];
    public function definition()
    {
        return [
            'title' => fake()->city() . ' '. Arr::random($this->suffix),
            'description' => fake()->paragraph()
        ];
    }
}
