@extends('layouts.none')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="link-light">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}" class="link-light">Lista completa de etiquetas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ver información guardada de esta etiqueta</li>
    </ol>
</nav>
<div class="col-lg-8">
    <div class="card text-white bg-dark">
        <div class="card-body">
            <p><strong>ID (autoicrement): </strong>       {{$tag->id}}</p>
            <p><strong>Código de identificación: </strong>{{$tag->tag_code}}</p>
            <p><strong>Nombre: </strong>                  {{$tag->name}}</p>
            <p><strong>Slug: </strong>                    {{$tag->slug}}</p>
            <p><strong>Creado: </strong>                  {{$tag->created_at}}</p>
            <p><strong>Actualizado: </strong>             {{$tag->updated_at}}</p>
        </div>
    </div>
</div>
<div class="col-lg-4">

</div>   
@endsection