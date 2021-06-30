@extends('layouts.none')

@section('content')
@include('admin.AlertsAndCallouts')
<div class="col-lg-8">
    <div class="card text-white bg-dark">
    <div class="card-header">Categorías / <a href="{{ route('admin.categories.index') }}" class="link-secondary">Lista completa</a> / Crear Categoría</div>
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