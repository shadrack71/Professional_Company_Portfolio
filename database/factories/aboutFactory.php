<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\about>
 */
class aboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'about_tagline' => $this->faker->sentence(5),
            'about_desc' => $this->faker->sentence(20),
            'about_img_tagline' =>$this->faker->sentence(5),
            'about_image_url' => $this->faker->url(),
            'about_yt_link' => $this->faker->url(),
            'about_yt_banner_image' => $this->faker->url(),
          
            //
        ];
    }
}