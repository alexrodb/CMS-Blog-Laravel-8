<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{   
    
    public function blog(){
        $date = Carbon::now();
        $posts = Post::orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(8);//Enlista todos los post
        return view('web.posts', compact('posts','date'));
        
    }

    public function category($slug){
        $date = Carbon::now();
        $category = Category::where('slug', $slug)->pluck('id')->first(); //busca el id de la categoria
        $posts = Post::where('category_id',$category) //Enlista todos los que tengan relación con esta categoría
        ->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(8);
        return view('web.posts', compact('posts','date'));
    }

    public function tag($slug){
        $date = Carbon::now();
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug',$slug);
        }) //Enlista todos los post que tengan etiquetas siempre y cuando estas etiquetas tengan el mismo slug que se esta usando
        ->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(8);
        return view('web.posts', compact('posts','date'));
    }

    public function post($slug){
        $date = Carbon::now();
        $post = Post::where('slug',$slug)->first();

        $this->authorize('published',$post);

        //Contador de visitas que incrementa cuando se visita cada post o entrada.
        $incrementCounterVisits = $post;
        if(Cache::has($slug)==false){
            Cache::add($slug,'counter',0.30);
            $incrementCounterVisits->total_visits++;
            $incrementCounterVisits->save();
        }

        //Busca la información del siguiente y anterior post que esten publicados
        $idpost   =   Post::where('slug', $slug)->pluck('id')->first(); //busca el id del post
        $registro =   Post::where("id",$idpost)->first(); //Esta consulta extrae el registro que coincide el valor del $id que tiene como parámetro y que se busco antes.
        $next     =   Post::where('id', '>', $registro->id)->orderBy('id', 'asc')->where('status', 'PUBLISHED')->first(); //Consulta que permite extraer el siguiente post con un id mayor y este publicado
        $prev     =   Post::where('id', '<', $registro->id)->orderBy('id', 'desc')->where('status', 'PUBLISHED')->first();//Consulta que permite extraer el anterior  post con un id menor y este publicado

        //Enlista las ultimas entradas de la categoria del post y lo envia junto con los datos del post.
        $LastCategoryEntries = Post::where('category_id', $post->category_id)
        ->where('status','PUBLISHED')->where('id','!=', $post->id)->orderBy('id','DESC')->take(5)->get();

        return view('web.post', compact('post','date','LastCategoryEntries','incrementCounterVisits','next','prev'));
    }
}
