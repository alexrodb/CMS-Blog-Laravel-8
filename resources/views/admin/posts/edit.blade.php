@extends('layouts.none')
@include('admin.AlertsAndCallouts')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="link-light">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}" class="link-light">Lista completa de entradas o publicaciones</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar entrada o publicación</li>
    </ol>
</nav>
<div class="col-lg-12">
    <div class="card text-white bg-dark">
        <div class="card-body">
            <form method="POST" action ="{{route('admin.posts.update', $post->id)}}" class="row g-3" enctype="multipart/form-data">
                @method('PATCH')
                @include('admin.posts.partials._form',['btnText'=>' Actualizar'])
            </form>
        </div>    
    </div>
</div>
@endsection