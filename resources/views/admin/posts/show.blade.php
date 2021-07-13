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
            <p><strong>ID (autoicrement): </strong>       {{$post->id}}</p>
            <p><strong>Código de identificación: </strong>{{$post->post_code}}</p>
            <p><strong>Nombre: </strong>                  {{$post->name}}</p>
            <p><strong>Slug: </strong>                    {{$post->slug}}</p>
            <p><strong>Creado: </strong>                  {{$post->created_at}}</p>
            <p><strong>Actualizado: </strong>             {{$post->updated_at}}</p>
            <p><strong>Descripción: </strong>             {{$post->body}}</p>
        </div>
    </div>
</div>
<div class="col-lg-4">

</div>   
@endsection