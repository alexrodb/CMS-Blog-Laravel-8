<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    //Permite salvar datos de forma masiva, 
    protected $fillable = [
        'name','slug'
    ];
    //Relación muchos a muchos
    //Una etiqueta tiene y pertenece a muchos post
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
