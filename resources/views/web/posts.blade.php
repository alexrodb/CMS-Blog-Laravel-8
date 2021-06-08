@extends('layouts.blog')
@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
@foreach($posts as $post)
<div class="col">
    <div class="card h-100">
        <a href="{{route('post',$post->slug)}}"><img src="{{ asset('storage/img/pictureArticle/'.$post->file) }}" class="card-img-top" alt="{{ $post->post_image }}"></a>
        <div class="card-body">
            <h6 class="titlepost">{{ $post->name }}</h6>
            <p class="textresumen">{{ $post->abstract }}</p>
            
        </div>
        <div class="card-footer">
        <a class="d-flex justify-content-end" href="{{route('post',$post->slug)}}"> Leer más</a>
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

