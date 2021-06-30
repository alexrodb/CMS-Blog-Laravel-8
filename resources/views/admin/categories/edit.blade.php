@extends('layouts.none')

@section('content')
<div class="col-lg-8">
    <div class="card text-white bg-dark">
    <div class="card-header">Categorías / <a href="{{ route('admin.categories.index') }}" class="link-secondary">Lista completa</a> / Editar Categoría</div>
        <div class="card-body">
            <form method="POST" action ="{{route('admin.categories.update', $category->id)}}">
            @method('PATCH')
            @include('admin.categories.partials._form',['btnText'=>' Actualizar'])
            
            </form>
        </div>
    </div>
</div>
<div class="col-lg-4">

</div>
@endsection