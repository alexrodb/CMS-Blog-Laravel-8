@extends('layouts.none')

@section('content')
<div class="card text-white bg-dark">
<div class="card-header">Categorías / Lista completa</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-dark table-hover table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col" width="10px">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col" colspan="3">&nbsp</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category) 
                <tr>
                    <th scope="row">{{ $category->id}}</th>
                    <td>{{ $category->name}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.categories.show', $category->id )}}" role="button"><span class="bi bi-eye"></span> Ver</a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('admin.categories.edit', $category->id)}}" role="button"> <span class="bi bi-pencil-fill"></span> Editar</a>
                    </td>
                    <td width="10px">
                        <form method="POST" action="{{ route('admin.categories.destroy', $category->id) }}">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <div class="d-flex align-items-center justify-content-center">
                <div class="paginationdashboard">
                    {{ $categories->render() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection