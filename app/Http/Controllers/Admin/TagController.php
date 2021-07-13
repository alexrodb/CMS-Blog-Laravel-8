<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Helper;

use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;

use App\Models\Tag;

class TagController extends Controller
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
        $searchTag=$request->get('searchTag');
        $tags = Tag::orderBy('tag_code','DESC')->where('name','like','%'.$searchTag.'%')->paginate(12);
        return view('admin.tags.index', compact('tags','searchTag')); // El array se puede escribir tambien como ['tags'=>'$tags' o 'searchTag'=>$searchTag]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.tags.create',[
            'tag'=> new tag // se envia un proyecto vacio {{ old('xxxx', null)}} = {{ old('xxxx')}}, esta linea es para hacer identicos los formularios y poder reutizar uno para guardar y editar.
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
        //Salva los datos

        $tag_code = Helper::IDGenerator(new tag, 'tag_code', 5, 'TAG'); /** Genera un código personalizado*/
        $tag = new Tag;
        $tag->tag_code = $tag_code;
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();

        //$tag = Tag::create($request->all());//Acepta datos masivos, pero en TagStoreRequest y en el modelo Tag hay control de los campos que se necesitan 
        
        return redirect()->route('admin.tags.edit', $tag->id)
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
        $tag = Tag::findOrFail($id);
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagUpdateRequest $request, $id)
    {
        $tag = Tag::find($id);
        
        $tag->fill($request->all())->save();

        return redirect()->route('admin.tags.edit', $tag->id)
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
        $tag = Tag::find($id)->delete();
        return back()->with('info','Eliminado correctamente');
    }
}
