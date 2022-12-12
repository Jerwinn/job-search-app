<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'tags' => 'laravel, api, backend, php, java',
            'company' => $this->faker->company(),
            'location' => $this->faker->streetAddress(),
            'email' => $this->faker->companyEmail(),
            'website' => 'https://www.acme.com',
            'description' => $this->faker->text(500)
        ];
    }
}
