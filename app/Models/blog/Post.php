<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Permite salvar datos de forma masiva, 
    protected $fillable = [
        'post_code','user_id','category_id','name','slug','status','abstract','body','picture','title_picture','source_picture'
    ];

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
