@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
            <h2>Crear Categoría<h2>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action ="{{route('categories.store')}}">
        
        @include('admin.categories.partials._form',['btnText'=>'Guardar'])

        </form>
    </div>

    </div>
</div>    
@endsection