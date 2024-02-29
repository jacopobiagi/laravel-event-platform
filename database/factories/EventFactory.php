<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake() -> words(3, true),
            "description" => fake() -> sentence() ,
            "start_date" => fake() -> dateTimeBetween('1950', '2012') ,
            "end_date" => fake() ->  dateTimeBetween('2013', 'now'),
        ];
    }
}
