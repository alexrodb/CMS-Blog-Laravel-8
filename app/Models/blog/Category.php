<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //Permite salvar datos de forma masiva, 
    protected $fillable = [
        'name','slug','body'
    ];

    //Una categoria puede tener muchos post - Relación uno a muchos
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
