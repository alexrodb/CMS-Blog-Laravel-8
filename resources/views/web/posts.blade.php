@extends('layouts.blog')
@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4">
@foreach($posts as $post)
<div class="col">
    <div class="card border-0 h-100" id="card">
        <a href="{{route('post',$post->slug)}}"><img src="{{ asset('storage/img/picturePost/'.$post->picture) }}" class="card-img-top" alt="{{ $post->post_picture }}"></a>
        <div class="card-body">
            <div class="d-flex flex-row justify-content-between align-items-center">
                <div class=""><h3 class="card-titlecategory mt-3 mb-3"><a href="{{ route('category', $post->category->slug)}}">{{ $post->category->name }}</a></h3></div>
                <div class="d-flex flex-row justify-content-between align-items-center card-visits">
                    <div class="mt-2 mx-1"><span class="material-icons-two-tone">visibility</span></div>
                    <div class=""><p class=" mt-3 mb-3">{{ $post->total_visits }}</p></div>
                </div>
            </div>
            <h3 class="card-title">{{ $post->name }}</h3>
            <p class="card-Abstract mt-3 mb-3">{{ $post->abstract }}</p>
        </div>
        <div class="card-footer ">
        <div class="d-flex flex-row justify-content-between align-items-center">
                <div class="d-flex flex-row card-time">
                    <div><span class="material-icons-two-tone mt-1">date_range</span></div>
                    <div class="mt-1"><p>{{ $post->updated_at->isoFormat('dddd, D [de] MMMM [de] YYYY.') }}</p></div>
                </div>
                <div><a class="read-more mt-2" href="{{route('post',$post->slug)}}">Seguir leyendo...</a></div>
            </div>
        </div>  
    </div>
</div>
@endforeach
</div>
<div class="d-flex justify-content-center mt-5">
    <div class="p-2 bd-highlight text-center">            
    {{ $posts->render() }}
    </div>
</div>
@endsection

