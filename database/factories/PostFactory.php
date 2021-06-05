<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->sentence(5);

        return [
            'user_id'=> User::all()->random()->id,
            'category_id'=> rand(1,50), //Número aleatorio del 1 al 50
            'name' => $title, //oración de cinco palabras
            'slug' => Str::slug($title), //convierte un string a slug
            'extract' => $this->faker->text(250), // crea un texto de 200 caracteres.
            'body' => $this->faker->text(20), // crea un texto de 2000 caracteres.
            'notes' => $this->faker->text(50), // crea un texto de 500 caracteres.
            'status'=> $this->faker->randomElement(['DRAFT','PUBLISHED']),
            'file'=> rand(1,9).'.jpg',
            'image'=> rand(1,9).'.png',
        ];
    }
}
