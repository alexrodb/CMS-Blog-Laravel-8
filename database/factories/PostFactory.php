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
        $title = $this->faker->unique()->sentence(8);

        return [
            'user_id'=> User::all()->random()->id,
            'category_id'=> rand(1,50), //Número aleatorio del 1 al 50
            'name' => $title, //oración de cinco palabras
            'slug' => Str::slug($title), //convierte un string a slug
            'status'=> $this->faker->randomElement(['DRAFT','PUBLISHED']),
            'abstract' => $this->faker->text(250), // crea un texto de 350 caracteres.
            'body' => $this->faker->text(2000), // crea un texto de 2000 caracteres.
            'picture'=> rand(1,10).'.jpg',
            'title_picture' => $this->faker->text(60),
            'source_picture' => $this->faker->text(15),
            'total_visits'=> rand(1,200000),
        ];
    }
}