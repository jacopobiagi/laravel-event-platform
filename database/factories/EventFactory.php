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
            "start_date" => fake() -> date() ,
            "end_date" => fake() ->  date(),
        ];
    }
}
