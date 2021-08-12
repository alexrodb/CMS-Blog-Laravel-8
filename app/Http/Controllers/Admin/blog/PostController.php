<?php

namespace App\Http\Controllers\Admin\blog;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\requestBlog\PostStoreRequest;
use App\Http\Requests\requestBlog\PostUpdateRequest;

use App\Models\blog\Category;
use App\Models\blog\Post;
use App\Models\blog\Tag;

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
        $posts = Post::orderBy('id','DESC')
        ->where('name','like','%'.$searchPost.'%')
        ->where('user_id', auth()->user()->id)  //Permite mostrar o filtrar los post o entradas que le pertenecen o fueron creados por cada usuario.
        ->paginate(12);
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
        
        $post_code = Helper::IDGenerator(new Post, 'post_code', 5, 'POST'); /** Genera un código personalizado*/
        
        $request-> request->add(['post_code' => $post_code]);

        //picture
        //Gestiona el guardado de la imagen principal del post
        if($request->hasFile('picture_up'))
        {
            // Se busca el nombre del archivo junto con la extensión que se envio desde el formulario.
            $pictureNameWithExt = $request->file('picture_up')->getClientOriginalName();
            // Se obtine solo el nombre del archivo
            $pictureName = pathinfo($pictureNameWithExt, PATHINFO_FILENAME);
            // Se obtine solo la extensión del archivo
            $extension = $request->file('picture_up')->getClientOriginalExtension();
            // Se crea el nombre para guardarlo
            $pictureNameToStore = $pictureName.'_'.time().'.'.$extension;
            // Sube y guarda la imagen
            $path = $request->file('picture_up')->storeAs('public/img/picturePost', $pictureNameToStore);
        } else
        {
            // Si no se sube imagen coloca pone este nombre.
            $pictureNameToStore = 'NoPicture.jpg';
        }

        //Se adjunta al request el campo file y image con el nombre que hemos creado.
        $request-> request->add(['picture'=>$pictureNameToStore]);

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
        $post       = Post::find($id);

        $this->authorize('author', $post);// verifica si el usuario ha creado la entrada, si el usuario la creó puede editarlo, si no la creó no puede editar con ayuda de Policies.

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

        $this->authorize('author', $post);// verifica si el usuario ha creado la entrada, si el usuario la creó puede actualizar, si no la creó no puede actualizar con ayuda de Policies.
        
        //picture
        //Gestiona la actualización de la imagen de la entrada eliminando la anterior si llega a existir.
        if($request->hasFile('picture_up'))
        {
            // Elimina la anterior imagen de la entrada
            Storage::delete('public/img/picturePost/'.$post->picture);
            // Se busca el nombre del archivo junto con la extensión que se envio desde el formulario. 
            $pictureNameWithExt = $request->file('picture_up')->getClientOriginalName();
            // Se obtine solo el nombre del archivo
            $pictureName = pathinfo($pictureNameWithExt, PATHINFO_FILENAME);
            // Se obtine solo la extensión del archivo
            $extension = $request->file('picture_up')->getClientOriginalExtension();
            // Crea el nombre para guardarlo
            $pictureNameToStore = $pictureName.'_'.time().'.'.$extension;
            // Sube y guarda la imagen nueva
            $path = $request->file('picture_up')->storeAs('public/img/picturePost', $pictureNameToStore);
        } else
        {
            //Si no se sube imagen mantiene el nombre de la anterior imagen.
            $pictureNameToStore = $post->picture;
        }

        //Se adjunta al request el campo file y image con el nombre que hemos creado.
        $request-> request->add(['picture'=>$pictureNameToStore]);

        //Salva los datos
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
        $post = Post::find($id);

        $this->authorize('author', $post);// verifica si el usuario ha creado la entrada, si el usuario la creó puede eliminarlo, si no la creó no puede eliminarlo con ayuda de Policies.

        //Borra la imagen principal que tiene una Entrada
        if($post->picture != 'noimage.jpg')
            {
            Storage::delete('public/img/picturePost/'.$post->picture);
            };
        
        $post->delete();

        return back()->with('info','Eliminado correctamente');
    }
}
