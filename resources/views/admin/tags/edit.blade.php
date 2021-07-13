@extends('layouts.none')
@include('admin.AlertsAndCallouts')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="link-light">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}" class="link-light">Lista completa de etiquetas</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Etiqueta</li>
    </ol>
</nav>
<div class="col-lg-8">
    <div class="card text-white bg-dark">
        <div class="card-body">
            <form method="POST" action ="{{route('admin.tags.update', $tag->id)}}" class="row g-3">
                @method('PATCH')
                @include('admin.tags.partials._form',['btnText'=>' Actualizar'])
            </form>
        </div>    
    </div>
</div>

<div class="col-lg-4">
</div>
@endsection