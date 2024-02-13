<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
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
    public function definition(): array
    {
        return [
            //
            // 'supplier_id'=>fake()=>,
            // 'category_id'=>fake()=>,
            'product_name'=>fake()->words(),
            'quantity'=>fake()->randomDigit() ,
            'status'=>fake()->randomDigit(),
            'created_by'=>fake()->dateTime(),
            // 'updated_by'=>fake()=>,
            // 'unit_id'=>fake()=>,
        ];
    }
}
