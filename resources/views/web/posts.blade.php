@extends('layouts.blog')
@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
@foreach($posts as $post)
<div class="col">
    <div class="card border-0 h-100 m-1">
        <a href="{{route('post',$post->slug)}}"><img src="{{ asset('storage/img/picturePost/'.$post->picture) }}" class="card-img-top" alt="{{ $post->post_picture }}"></a>
        <div class="card-body">
            <h3 class="card-titlecategory mt-3"><a href="{{ route('category', $post->category->slug)}}">{{ $post->category->name }}</a></h3>
            <h3 class="card-title">{{ $post->name }}</h3>
            <p class="card-Abstract mb-3">{{ $post->abstract }}</p>
            <div class="d-flex flex-row card-time">
                <div><span class="material-icons-two-tone ">date_range</span></div>
                <div><p>{{ $post->updated_at->isoFormat('dddd, D [de] MMMM [de] YYYY.') }}</p></div>
            </div>
            
            <div class="d-flex flex-row justify-content-end mt-1">
                <div class=""><a class="d-flex justify-content-end" href="{{route('post',$post->slug)}}">Seguir leyendo...</a></div>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>
<div class="d-flex justify-content-center">
    <div class="p-2 bd-highlight text-center">            
    {{ $posts->render() }}
    </div>
</div>
@endsection

