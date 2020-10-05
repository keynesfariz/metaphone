<?php

namespace Database\Factories;

use App\Models\Product;
use FakerRestaurant\Provider\en_US\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

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
        $this->faker->addProvider(new Restaurant($this->faker));

        $name = $this->faker->vegetableName();

        switch (rand(1, 3)) {
            case 1:
                $name = $this->faker->fruitName();
                break;
            case 2:
                $name = $this->faker->meatName();
                break;
            case 3:
                $name = $this->faker->dairyName();
                break;
        }

        $url = 'https://source.unsplash.com/512x512/?' . $name; 
        $image = Http::get($url)->effectiveUri();

        return [
            'name' => $name,
            'image' => $image, // unsplash
            'price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
