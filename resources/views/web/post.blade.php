@extends('layouts.blog')
@section('content')
<div class="row g-5">
    
    <div class="col-md-9">

    <article class="blog-post">
    <h1 class="blog-post-title">{{ $post->name }}</h1>
        <div class="d-flex justify-content-between align-items-center">
            <div class="p-2">
                <p class="blog-post-meta">January 1, 2021. Publicado por Alex</a>
            </div>
            <div class="p-2">
                <h2 class="titlecategory  fst-italic">
                    Publicado en <a href="{{ route('category', $post->category->slug)}}">{{ $post->category->name }}</a>
                </h2>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center">
        @if($post->file)
            <img src="{{ asset('storage/img/pictureArticle/'.$post->file) }}" class="pictureArticle img-fluid" alt="{{ $post->name }}">
        @endif
        </div>

        <div class="d-flex justify-content-center align-items-center">
        <h6 class="p-2 fw-bolder">Resumen:</h6>
        <p class="p-2 bodyAbstract">{{ $post->abstract }}</p>
        </div>
        
        <div class="bodyPost"> 

        <div class="textPost">{!! $post->body!!}</div>

        </div>

        <h4>Etiquetas:</h4>
        
            @foreach($post->tags as $tag)
            <a class="btn btn-dark fw-bolder" href="{{ route('tag', $tag->slug)}}" role="button">{{ $tag->name }}</a>
        
            @endforeach
        
    </article>

    </div>
    <aside class="col-md-3">
    <div class="d-flex flex-column justify-content-center align-items-center">   
    <h6 class="P-2">Últimas entradas en esta Categoría:</h6>
        @foreach($LastCategoryEntries as $LastCategoryEntrie)
        <div class="card mb-3" style="max-width: 25rem;">
        <a href="{{route('post',$LastCategoryEntrie->slug)}}"><img src="{{ asset('storage/img/pictureArticle/'.$LastCategoryEntrie->file) }}" class="card-img-top" alt="{{ $post->post_image }}"></a>
            <div class="card-body">
                <h6 class="card-title">{{ $LastCategoryEntrie->name }}</h6>
            </div>
        </div>
        @endforeach
        </div>    
    </aside>


</div>
@endsection
