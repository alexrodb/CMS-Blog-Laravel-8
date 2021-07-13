@extends('layouts.none')
@include('admin.AlertsAndCallouts')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="link-light">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Lista completa de entradas o publicaciones</li>
    </ol>
</nav>

<div class="col-lg-8">
    <div class="card text-white bg-dark">
        <div class="card-body">
        <h2 class="mb-3">Entradas o publicaciones</h1>
        <hr class="mb-4">
        <div class="row">
            
            <div class="col-6">
                <form class="d-flex">
                    <input name="searchPost" class="form-control me-2" type="search" placeholder="Buscar por nombre" aria-label="Search" value="{{$searchPost}}">
                    <button class="btn btn-graydark" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end mb-3">
                    <a class="btn btn-light flex-fill" href="{{ route('admin.posts.create')}}" role="button"><span class="bi bi-plus-circle"></span> Crear nuevo</a></div>
                </div>
            </div>

        
            <div class="table-responsive">
                <table class="table table-dark table-striped table-sm table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">
                                <div class="d-flex flex-row justify-content-center">Código</div>
                            </th>
                            <th scope="col"><div class="d-flex flex-row justify-content-center">Nombre</div>
                            </th>
                            <th scope="col">&nbsp</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post) 
                    <tr>
                        <th scope="row"><div class="d-flex flex-row justify-content-center">{{ $post->post_code}}</div></th>
                        <td>{{ $post->name}}</td>
                        <td>
                            <div class="d-flex flex-row justify-content-between ">
                                <a class="btn btn-graydark flex-fill m-2" href="{{ route('admin.posts.show', $post->id )}}" role="button"><span class="bi bi-eye"></span> Ver</a>
                                <a class="btn btn-graydark flex-fill m-2" href="{{ route('admin.posts.edit', $post->id)}}" role="button"><span class="bi bi-pencil"></span> Editar</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger flex-fill m-2" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $post->id}}">
                                <span class="bi bi-trash"> Eliminar
                                </button>

                            </div>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-delete-{{ $post->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered ">
                            <div class="modal-content text-white bg-dark">
                                <div class="modal-body">
                                    <p>Esta acción no se puede revertir.</p>
                                    <p>¿Estás seguro que quieres eliminar la categoría <strong>"{{ $post->name}}"</strong> ?</p>
                                    
                                    <div class="d-flex justify-content-end">
                                        <div class="p-2">
                                            <form action="{{ route('admin.posts.destroy', $post->id) }}" class="" method="POST" >
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><span class="bi bi-trash">Sí, eliminar definitivamente</button>
                                            </form>
                                        </div>
                                        <div class="p-2">
                                        <button type="button" class="btn btn-graydark" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    </tbody>
                </table>

                <div class="d-flex align-items-center justify-content-center">
                    <div class="paginationdashboard">
                        {{ $posts->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="col-lg-4">

</div>

@endsection

@section('scripts')

@endsection