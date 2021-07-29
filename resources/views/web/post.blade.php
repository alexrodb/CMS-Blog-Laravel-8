@extends('layouts.blog')
@section('content')
<div class="row g-5">
    
    <div class="col-lg-9 col-md-12">

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
        <h5 class="p-2 bodyTitleAbstract">Resumen:</h5>
        <p class="p-2 bodyAbstract">{{ $post->abstract }}</p>
        </div>
        
        <div class="bodyPost"> 
        <div class="textPost">{!! $post->body!!}</div>
        </div>

        <div class="d-flex flex-row justify-content-between mb-3">
            <div class="mb-2 datetime">      
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
            <div class="mb-2 datetime">
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <div  class="mt-1 py-2">
                        <span class="material-icons-two-tone ">date_range</span>
                    </div>
                    <div class="date px-2">
                        <span class="fontExtraBold">Última actualización:</span> 
                        <p>{{ $post->updated_at->isoFormat('dddd, D [de] MMMM [de] YYYY, h:mm:ss a') }}</p></div>
                    </div>
                </div>           
            </div>

        <div class="mb-3">      
            <div class="d-flex flex-row justify-content-start align-items-center">
                <div  class="mt-1 py-2">
                    <span class="material-icons-two-tone reflect-icon">loyalty</span>
                </div>
                <div class="date px-2">
                    @foreach($post->tags as $tag)
                        <a class="btn btn-dark fw-bolder my-2" href="{{ route('tag', $tag->slug)}}" role="button">{{ $tag->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        
    </article>

    </div>
    <aside class="col-lg-3 col-md-12">
    <div class="d-flex flex-column justify-content-center align-items-center">   
    <h6 class="subtitulocolor">Últimas entradas en esta categoría</h6>
        @foreach($LastCategoryEntries as $LastCategoryEntrie)
        <div class="col">
            <div class="card border-0 h-100 mb-4 p-3">
                <a href="{{route('post',$LastCategoryEntrie->slug)}}"><img src="{{ asset('storage/img/picturePost/'.$LastCategoryEntrie->picture) }}" class="card-img-top" alt="{{ $LastCategoryEntrie->post_picture }}"></a>
                <div class="card-body">
                    <h3 class="card-title mt-3">{{ $LastCategoryEntrie->name }}</h3>
                    <p class="card-Abstract mt-3 mb-3">{{ $LastCategoryEntrie->abstract }}</p>
                </div>
                <div class="card-footer ">
                <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="d-flex flex-row card-time">
                            <div><span class="material-icons-two-tone mt-1">date_range</span></div>
                            <div class="card-date mt-1"><p>{{ $LastCategoryEntrie->updated_at->isoFormat('dddd, D [de] MMMM [de] YYYY.') }}</p></div>
                        </div>
                        <div><a class="read-more mt-2" href="{{route('post',$LastCategoryEntrie->slug)}}">Seguir leyendo...</a></div>
                    </div>
                </div>  
            </div>
        </div>
        @endforeach
        </div>    
    </aside>

</div>
@endsection
