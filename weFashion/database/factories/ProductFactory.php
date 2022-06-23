<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->sentence(), 
            "category_id" => $this->faker->randomElement(Category::all()),
            "description"=> $this->faker->paragraph(),
            "price"=>$this->faker->randomFloat(2, 1, 300),
            "visible"=>$this->faker->randomElement(["Non publié","Publié"]),
            "state"=>$this->faker->randomElement(["Standard", "En solde"]),
            "reference"=>$this->faker->regexify('[a-zA-Z0-9]{16}')
        ];
    }
}
