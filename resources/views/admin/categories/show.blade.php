@extends('layouts.none')

@section('content')
<div class="col-lg-8">
    <div class="card text-white bg-dark">
    <div class="card-header">Categorías / <a href="{{ route('admin.categories.index') }}" class="link-secondary">Lista completa</a> / Información guardada</div>
        <div class="card-body">
            <p><strong>Nombre: </strong>        {{$category->name}}</p>
            <p><strong>Slug: </strong>          {{$category->slug}}</p>
            <p><strong>Creado: </strong>        {{$category->created_at}}</p>
            <p><strong>Actualizado: </strong>   {{$category->updated_at}}</p>
            <p><strong>Descripción: </strong>   {{$category->body}}</p>
        </div>
    </div>
</div>
<div class="col-lg-4">

</div>   
@endsection