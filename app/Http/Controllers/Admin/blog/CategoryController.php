<?php

namespace App\Http\Controllers\Admin\blog;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Helper;

use App\Http\Requests\requestBlog\CategoryStoreRequest;
use App\Http\Requests\requestBlog\CategoryUpdateRequest;

use App\Models\blog\Category;

class CategoryController extends Controller
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
        $searchCategory=$request->get('searchCategory');
        $categories = Category::orderBy('id','DESC')->where('name','like','%'.$searchCategory.'%')->paginate(12);
        return view('admin.categories.index', compact('categories','searchCategory')); // El array se puede escribir tambien como ['categories'=>'$categories' o 'searchCategory'=>$searchCategory]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.categories.create',[
            'category'=> new category // se envia un proyecto vacio {{ old('xxxx', null)}} = {{ old('xxxx')}}, esta linea es para hacer identicos los formularios y poder reutizar uno para guardar y editar.
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        //Salva los datos

        $category_code = Helper::IDGenerator(new category, 'category_code', 5, 'CAT'); /** Genera un código personalizado*/
        $category = new Category;
        $category->category_code = $category_code;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->body = $request->body;
        $category->save();

        //$category = Category::create($request->all());//Acepta datos masivos, pero en CategoryStoreRequest y en el modelo Category hay control de los campos que se necesitan 
        
        return redirect()->route('admin.categories.edit', $category->id)
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
        $category = Category::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::find($id);
        
        $category->fill($request->all())->save();

        return redirect()->route('admin.categories.edit', $category->id)
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
        $category = Category::find($id)->delete();
        return back()->with('info','Eliminado correctamente');
    }
}
