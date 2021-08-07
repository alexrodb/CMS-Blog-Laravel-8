@extends('layouts.none')
@include('admin.AlertsAndCallouts')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="link-light">Dashboard</a></li>
    </ol>
</nav>
<div class="col-lg-12">
    <div class="card text-white bg-dark">
        <div class="card-body">
        <h2 class="mb-3">Panel de Control o de Administración</h1>
        <hr class="mb-2">
    </div>
</div>

    <div class="row mt-4">
            <div class="col-6 col-md-4">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Blog</h4>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark">
                            <a href="{{ route('admin.tags.index') }}">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons"> label </span>
                                    <span class="navbar-text p-1 mx-2 mt-1">Etiquetas</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item text-white bg-dark">
                            <a href="{{ route('admin.categories.index') }}">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons"> category </span>
                                    <span class="navbar-text p-1 mx-2 mt-1">Categorías</span>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item text-white bg-dark">
                            <a href="{{ route('admin.posts.index') }}">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons"> article </span>
                                    <span class="navbar-text p-1 mx-2 mt-1">Entradas</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h4 class="card-title">Administrador de archivos</h4>
                        <p class="card-text"></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark">
                            <a href="{{asset('admin/filemanager')}}">
                                <div class="d-flex align-items-center">
                                    <span class="material-icons"> photo_album </span>
                                    <span class="navbar-text p-1 mx-2 mt-1">Filemanager</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
                

            </div>
            <div class="col-6 col-md-4">

            </div>
        </div>


@endsection

@section('scripts')

@endsection