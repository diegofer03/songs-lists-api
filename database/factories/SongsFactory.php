<?php

namespace Database\Factories;

use App\Models\Songs;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Songs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(15),
            'description' => $this->faker->text(85),
            'genre' => $this->faker->text(10),
            'image' => $this->faker->imageUrl(1280,720)
        
        ];
    }
}
