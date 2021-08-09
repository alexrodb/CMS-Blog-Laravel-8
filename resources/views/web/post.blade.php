@extends('layouts.blog')
@section('content')
<div class="row g-5">
    
    <div class="col-lg-9 col-md-12">
    <article class="blog-post mt-2">

        <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="d-flex flex-row justify-content-start align-items-center">
                        <div  class="mt-1 py-2">
                            <span class="material-icons-two-tone rotate-icon">link</span>
                        </div>
                    <h3 class="titlecategory">Publicado en <a class="colorLinkCategory m-1" href="{{ route('category', $post->category->slug)}}">{{ $post->category->name }}</a></h3>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center card-visitsPost">
                        <div class="mt-2 mx-1"><span class="material-icons-two-tone">visibility</span></div>
                        <div class=""><p class=" mt-3 mb-3">{{ $incrementCounterVisits->total_visits }}</p></div>
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

        <div class="d-flex justify-content-center align-items-center mb-4">
        <h5 class="p-2 bodyTitleAbstract">Resumen:</h5>
        <p class="p-2 bodyAbstract">{{ $post->abstract }}</p>
        </div>
        
        <div class="bodyPost" id="bodyPost"> 
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
            <div class="d-flex flex-row justify-content-between lign-items-center mt-4 mb-4 px-0">
                @if(!empty($prev))
                <a class="nextprev btn btn-dark" href="{{route('post', $prev->slug)}}" role="button">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class=""><img class="iconSize" src="{{ asset('assetsWeb/images/svg/icons/prev.svg') }}" alt="prev"></div>
                        <div class="mx-1"><p>Anterior entrada</p></div>
                    </div>
                </a>
                @else
                <button type="button" class="nextprev btn btn-dark" disabled>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class=""><img class="iconSize" src="{{ asset('assetsWeb/images/svg/icons/prev.svg') }}" alt="prev"></div>
                        <div class="mx-1"><p>Anterior entrada</p></div>
                    </div>
                </button>
                @endif
                @if(!empty($next))
                <a class="nextprev btn btn-dark" href="{{route('post', $next->slug)}}" role="button">
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="mx-1"><p>Siguiente entrada</p></div>
                        <div class=""><img class="iconSize" src="{{ asset('assetsWeb/images/svg/icons/next.svg') }}" alt="next"></div>
                    </div>
                </a>
                @else
                <button type="button" class="nextprev btn btn-dark" disabled>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="mx-1"><p>Siguiente entrada</p></div>
                        <div class=""><img class="iconSize" src="{{ asset('assetsWeb/images/svg/icons/next.svg') }}" alt="next"></div>
                    </div>
                </button>
                @endif
            </div>
        </div>
        <div class="container px-0">
            <div class="row mt-4 mb-1">
                @if(!empty($prev))
                <div class="col-lg-6 col-md-12">
                    <div class="card border-0 h-100" id="card">
                        <a href="{{route('post',$prev->slug)}}"><img src="{{ asset('storage/img/picturePost/'.$prev->picture) }}" class="card-img-top" alt="{{ $prev->post_picture }}"></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class=""><h3 class="card-titlecategory mt-3 mb-3"><a href="{{ route('category', $prev->category->slug)}}">{{ $prev->category->name }}</a></h3></div>
                                <div class="d-flex flex-row justify-content-between align-items-center card-visits">
                                    <div class="mt-2 mx-1"><span class="material-icons-two-tone">visibility</span></div>
                                    <div class=""><p class=" mt-3 mb-3">{{ $prev->total_visits }}</p></div>
                                </div>
                            </div>
                            <h3 class="card-title">{{ $prev->name }}</h3>
                            <p class="card-Abstract mt-3 mb-3">{{ $prev->abstract }}</p>
                        </div>
                        <div class="card-footer ">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex flex-row card-time">
                                    <div><span class="material-icons-two-tone mt-1">date_range</span></div>
                                    <div class="mt-1"><p>{{ $prev->updated_at->isoFormat('dddd, D [de] MMMM [de] YYYY.') }}</p></div>
                                </div>
                                <div><a class="read-more mt-2" href="{{route('post',$prev->slug)}}">Seguir leyendo...</a></div>
                            </div>
                        </div>  
                    </div>
                </div>
                @else
                <div class="col-lg-6 col-md-12">
                </div>
                @endif
                @if(!empty($next))
                <div class="col-lg-6 col-md-12">
                    <div class="card border-0 h-100" id="card">
                        <a href="{{route('post',$next->slug)}}"><img src="{{ asset('storage/img/picturePost/'.$next->picture) }}" class="card-img-top" alt="{{ $next->post_picture }}"></a>
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class=""><h3 class="card-titlecategory mt-3 mb-3"><a href="{{ route('category', $next->category->slug)}}">{{ $next->category->name }}</a></h3></div>
                                <div class="d-flex flex-row justify-content-between align-items-center card-visits">
                                    <div class="mt-2 mx-1"><span class="material-icons-two-tone">visibility</span></div>
                                    <div class=""><p class=" mt-3 mb-3">{{ $next->total_visits }}</p></div>
                                </div>
                            </div>
                            <h3 class="card-title">{{ $next->name }}</h3>
                            <p class="card-Abstract mt-3 mb-3">{{ $next->abstract }}</p>
                        </div>
                        <div class="card-footer ">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                                <div class="d-flex flex-row card-time">
                                    <div><span class="material-icons-two-tone mt-1">date_range</span></div>
                                    <div class="mt-1"><p>{{ $next->updated_at->isoFormat('dddd, D [de] MMMM [de] YYYY.') }}</p></div>
                                </div>
                                <div><a class="read-more mt-2" href="{{route('post',$next->slug)}}">Seguir leyendo...</a></div>
                            </div>
                        </div>  
                    </div>
                </div>
                @endif
            </div>
        </div>

    </article>

    </div>
    <aside class="col-lg-3 col-md-12">
    <div class="d-flex flex-column justify-content-center align-items-center">   
    <h6 class="subtitulocolor">Últimas entradas en esta categoría</h6>
        @foreach($LastCategoryEntries as $LastCategoryEntrie)
        <div class="col">
            <div class="card border-0 h-100 mb-4">
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

@section('styles')
    <!-- KaTeX -->
    <link href="{{ asset('assetsWeb/plugins/katex/katex.css') }}" rel="stylesheet">
@endsection 

@section('scripts')
    <script defer src="{{ asset('assetsWeb/js/imgResponsives.js') }}"></script>
    <!-- KaTeX -->
    <script defer src="{{ asset('assetsWeb/plugins/katex/katex.js') }}"></script>
    <script defer src="{{ asset('assetsWeb/plugins/katex/contrib/auto-render.js') }}" onload="renderMathInElement(document.body);"></script>
@endsection 