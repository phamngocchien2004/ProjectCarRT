<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   $name = $this->faker->name;
        return [
            "name" => $name,
            "slug" => Str::slug($name),
            "price" => random_int(200,2000),
            "thumbnail"=>"/images/car-single/".random_int(1,4).".jpg",
            "description"=>$this->faker->text(500),
            "qty"=>random_int(2,50),
            "category_id"=>random_int(1,10),
            "seat"=>random_int(4,6),
            "fuel_style"=>value("Hybird"),
            "car_year"=>random_int(2010,2023),
            "mileage"=>random_int(200,1000),
            "color"=>value("red","blue")
        ];
    }
}
