<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             
            'hero_title' => $this->faker->sentence(2),
            'hero_desc' => $this->faker->sentence(45),
            'hero_img_url' =>$this->faker->url(),
            'hero_link' => $this->faker->url(),
            'hero_tagline' => $this->faker->sentence(10),
          

        
            //
        ];
    }
}