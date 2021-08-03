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
        <hr class="mb-4">
        <div class="row">
            <div class="col-6 col-md-4">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Blog</h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                

            </div>
            <div class="col-6 col-md-4">

            </div>
        </div>
    </div>
    
</div>

@endsection

@section('scripts')

@endsection