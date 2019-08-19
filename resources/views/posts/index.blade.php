@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-2">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                        <img src="/storage/cover_image/{{$post->cover_image}}" alt="Cover Image" style="width: 100%;">
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Create at {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found.</p>
    @endif
@endsection
