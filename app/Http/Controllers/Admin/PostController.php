<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Helper;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchPost=$request->get('searchPost');
        $posts = Post::orderBy('post_code','DESC')->where('name','like','%'.$searchPost.'%')->paginate(12);
        return view('admin.posts.index', compact('posts','searchPost')); // El array se puede escribir tambien como ['posts'=>'$posts' o 'searchPost'=>$searchPost]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name','ASC')->pluck('name','id'); 
        $tags       = Tag::orderBy('name','ASC')->get();                   
        
        return view('admin.posts.create',[
            'post'=> new post // se envia un proyecto vacio {{ old('xxxx', null)}} = {{ old('xxxx')}}, esta linea es para hacer identicos los formularios y poder reutizar uno para guardar y editar.
        ],compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $user_id = auth()->user()->id;
        $request->request->add(['user_id' => $user_id]);
        
        //$category_code = Helper::IDGenerator(new category, 'category_code', 5, 'CAT'); /** Genera un código personalizado*/
        //$request->request->add(['category_code' => $category_code]);

        //Salva los datos

        $post = Post::create($request->all());//Acepta datos masivos, pero en PostStoreRequest y en el modelo Post hay control de los campos que se necesitan 
                
        //Tags
        $post->tags()->attach($request->get('tags')); 

        return redirect()->route('admin.posts.edit', $post->id)
        ->with('info','Creado con éxito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderBy('name','ASC')->pluck('name','id');
        $tags       = Tag::orderBy('name','ASC')->get();
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::find($id);
        
        $post->fill($request->all())->save();
        
        //Sincroniza las etiquetas de la entrada Tags
        $post->tags()->sync($request->get('tags'));

        return redirect()->route('admin.posts.edit', $post->id)
        ->with('info','Actualizado con éxito');

        
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        return back()->with('info','Eliminado correctamente');
    }
}
