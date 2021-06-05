<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->sentence(4);
        return [    
            'name' => $title, //oración de cuatro palabras,
            'slug' => Str::slug($title), //convierte un string a slug
            'body' => $this->faker->text(500), // crea un texto de 500 caracteres.
        ];
    }
}
