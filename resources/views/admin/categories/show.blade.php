@extends('layouts.none')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="link-light">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}" class="link-light">Lista completa de categorías</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ver información guardada de esta categoría</li>
    </ol>
</nav>
<div class="col-lg-8">
    <div class="card text-white bg-dark">
        <div class="card-body">
            <p><strong>ID (autoicrement): </strong>       {{$category->id}}</p>
            <p><strong>Código de identificación: </strong>{{$category->category_code}}</p>
            <p><strong>Nombre: </strong>                  {{$category->name}}</p>
            <p><strong>Slug: </strong>                    {{$category->slug}}</p>
            <p><strong>Creado: </strong>                  {{$category->created_at}}</p>
            <p><strong>Actualizado: </strong>             {{$category->updated_at}}</p>
            <p><strong>Descripción: </strong>             {{$category->body}}</p>
        </div>
    </div>
</div>
<div class="col-lg-4">

</div>   
@endsection