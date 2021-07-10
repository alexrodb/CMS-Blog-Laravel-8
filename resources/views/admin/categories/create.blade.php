@extends('layouts.none')
@include('admin.AlertsAndCallouts')  
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="link-light">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}" class="link-light">Lista completa de categorías</a></li>
        <li class="breadcrumb-item active" aria-current="page">Crear Categoría</li>
    </ol>
</nav>
<div class="col-lg-8">
    <div class="card text-white bg-dark">
        <div class="card-body">
            <form method="POST" action ="{{route('admin.categories.store')}}" class="row g-3">
                @include('admin.categories.partials._form',['btnText'=>'Guardar'])
            </form>
        </div>
        
    </div>
    
</div>
<div class="col-lg-4">

</div>    
@endsection
