<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

class PageController extends Controller
{
    public function blog(){
        $posts = Post::orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(8);//Enlista todos los post
        return view('web.posts', compact('posts'));
        
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first(); //busca el id de la categoria
        $posts = Post::where('category_id',$category) //Enlista todos los que tengan relación con esta categoría
        ->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(8);
        return view('web.posts', compact('posts'));
    }

    public function tag($slug){
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug',$slug);
        }) //Enlista todos los post que tengan etiquetas siempre y cuando estas etiquetas tengan el mismo slug que se esta usando
        ->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(8);
        return view('web.posts', compact('posts'));
    }

    public function post($slug){
        $post = Post::where('slug',$slug)->first();

        //Enlista las ultimas entradas de la categoria del post y lo envia junto con los datos del post.
        $LastCategoryEntries = Post::where('category_id', $post->category_id)
        ->where('status','PUBLISHED')->where('id','!=', $post->id)->orderBy('id','DESC')->take(5)->get();

        return view('web.post', compact('post','LastCategoryEntries'));
    }
}
