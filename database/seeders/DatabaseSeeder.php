<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(9)->create();
        User::create([
            'name' => 'Alexander RB',
            'email' => 'admin@test.com',
            'password' => bcrypt('12345')
        ]);
        Category::factory(50)->create();
        Tag::factory(150)->create();
        Post::factory(300)->create();

        //la tabla intermedia para relación muchos a muchos se puede llenar de dos formas:
            
        /*
        // A cada tag o etiqueta se le asigna una cantidad aleatoria entre 1 a 5 de posts o entradas
        $posts = Post::all();
        Tag::all()->each(function ($tag) use ($posts) { 
            $tag->posts()->attach(
                $posts->random(Rand(1, 5))
            ); 
        });
        */
        
        // A cada post o entrada se le asigna una cantidad aleatoria entre 1 a 5 de tags o etiquetas
        $tags = Tag::all();
        Post::all()->each(function ($post) use ($tags) { 
            $post->tags()->attach(
                $tags->random(Rand(1, 5))
            ); 
        });
        
    }
}

