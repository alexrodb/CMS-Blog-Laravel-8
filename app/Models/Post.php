<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Relación uno a muchos inversa
    //Se termina de dar de alta los métodos y relaciones faltantes. 
    //Un post pertenece un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //Un post pertenece a una categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
     //Relación muchos a muchos
    //Se indica a laravel la relación de post y muchas etiquetas 
    public function tags()
    {
        return $this->belongsToMany(Tag::class); //pertenece y tiene muchas etiquetas
    }

}
