<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'code'=>$this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'name'=>$this->faker->numerify('item-####'),
            'category'=>$this->faker->randomElement(['Makanan','Minuman','Perkakas','Alat Kebersihan']),
            'name'=>$this->faker->randomElement(['Indomie Goreng', 'Nasi Goreng', 'Mie godhog', 'Gunting', 'Sirup Marjan']),
            'harga_beli'=>$this->faker->randomNumber(4, true),
            'harga_jual'=> $this->faker->randomNumber(4, true),
            'description'=>$this->faker->text
        ];
    }
}
