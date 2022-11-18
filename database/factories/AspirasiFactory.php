<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aspirasi>
 */
class AspirasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'topic'         => $this->faker->name(),
            'description'   => $this->faker->text(),
            'sender_name'   => $this->faker->name(),
            'location'      => $this->faker->city(),
            'status'        => 1,
            'session_id'    => "36aee4c9-358d-42d6-ac7d-2dafd814b6b7",
        ];
    }
}
