@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 100%" src="/lsapp/public/storage/cover_images/{{$post->cover_image}}" alt="merp">
                    </div>
                    <div class="col-md-8 col-sm-4">
                        <h3><a href="/lsapp/public/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                        <small>Written on {{ $post->created_at }} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection
