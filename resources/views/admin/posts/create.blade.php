@extends('layouts.none')
@include('admin.AlertsAndCallouts')  
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="link-light">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}" class="link-light">Lista completa de entradas o publicaciones</a></li>
        <li class="breadcrumb-item active" aria-current="page">Crear entrada o publicación nueva</li>
    </ol>
</nav>
<div class="col-lg-12">
    <div class="card text-white bg-dark">
        <div class="card-body">
            <form method="POST" action ="{{route('admin.posts.store')}}" class="row g-3" enctype="multipart/form-data">
                @include('admin.posts.partials._form',['btnText'=>'Guardar'])
            </form>
        </div>
    </div> 
</div>
@endsection
