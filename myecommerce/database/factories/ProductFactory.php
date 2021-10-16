<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->words($nb=4,$asText=true);
        return [
            //
            'name' => $name,
            'sku' => 'product'.$this->faker->unique()->numberBetween(1000,5000),
            'description' => $this->faker->text(200),
            'price' => $this->faker->numberBetween(1,500),
            'active' => 1,
            'quantity' => $this->faker->numberBetween(1,100),
            'image' => $this->faker->numberBetween(1,11).'.jpg',
        ];
    }
}
