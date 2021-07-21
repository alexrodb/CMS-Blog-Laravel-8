@extends('layouts.blog')
@section('content')
<div class="row g-5">
    
    <div class="col-lg-8 col-md-12">

    <article class="blog-post mt-3">
        <div class="d-flex flex-row justify-content-start align-items-center">
            <div  class="mt-1 py-2">
                <span class="material-icons-two-tone rotate-icon">link</span>
            </div>
            <div>
                <h3 class="titlecategory">Publicado en <a class="colorLinkCategory m-1" href="{{ route('category', $post->category->slug)}}">{{ $post->category->name }}</a></h3>
            </div>
        </div>

        <h1 class="blog-post-title mb-2">{{ $post->name }}</h1>

        @if($post->picture)
        <div class="d-flex justify-content-center align-items-center">
            <figure class="figure">
            <img src="{{ asset('storage/img/picturePost/'.$post->picture) }}" class="pictureArticle img-fluid" alt="{{ $post->name }}">
                    <div class="d-flex flex-row justify-content-end align-items-center">
                        <div  class="mt-1 ">
                            <span class="material-icons-two-tone">photo_camera</span>
                        </div>
                        <div class="d-flex flex-row justify-content-end align-items-center">
                            <p class="title-photo px-2">{{ $post->title_picture }}</p>
                            <p class="title-photo"><span class="credito-image">FOTO: </span>{{ $post->source_picture }}</p>
                        </div>
                    </div>
            </figure>
        </div>    
        @endif

        <div class="d-flex justify-content-center align-items-center mt-2 mb-4">
        <h6 class="p-2 fw-bolder">Resumen:</h6>
        <p class="p-2 bodyAbstract">{{ $post->abstract }}</p>
        </div>
        
        <div class="bodyPost"> 
        <div class="textPost">{!! $post->body!!}</div>
        </div>

        <div class="d-flex flex-row justify-content-between mb-5">
        <div class="mb-3">      
            <div class="d-flex flex-row justify-content-start align-items-center">
                <div  class="mt-1 py-2">
                    <span class="material-icons-two-tone ">date_range</span>
                </div>
                <div class="date px-2">
                    <span class="fontExtraBold">Publicado:</span>
                    <p>{{ $post->created_at->isoFormat('dddd, D [de] MMMM [de] YYYY, h:mm:ss a') }}</p>
                </div>
            </div>
        </div>
        <div>
        <div class="d-flex flex-row justify-content-start align-items-center">
            <div  class="mt-1 py-2">
                <span class="material-icons-two-tone ">date_range</span>
            </div>
            <div class="date px-2">
                <span class="fontExtraBold">Actualizado:</span> 
                <p>{{ $post->updated_at->isoFormat('dddd, D [de] MMMM [de] YYYY, h:mm:ss a') }}</p></div>
            </div>
        </div>           
        

        </div>
        
        

        <h4>Etiquetas:</h4>
        
            @foreach($post->tags as $tag)
            <a class="btn btn-dark fw-bolder" href="{{ route('tag', $tag->slug)}}" role="button">{{ $tag->name }}</a>
            @endforeach
        
    </article>

    </div>
    <aside class="col-lg-4 col-md-12">
    <div class="d-flex flex-column justify-content-center align-items-center">   
    <h6 class="subtitulocolor">Últimas entradas en esta Categoría</h6>
        @foreach($LastCategoryEntries as $LastCategoryEntrie)
        <div class="card mb-3" style="max-width: 25rem;">
        <a href="{{route('post',$LastCategoryEntrie->slug)}}"><img src="{{ asset('storage/img/picturePost/'.$LastCategoryEntrie->picture) }}" class="card-img-top" alt="{{ $post->post_image }}"></a>
            <div class="card-body">
                <h6 class="card-title">{{ $LastCategoryEntrie->name }}</h6>
            </div>
        </div>
        @endforeach
        </div>    
    </aside>


</div>
@endsection
