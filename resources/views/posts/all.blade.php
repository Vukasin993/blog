@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <a href="{{route('createPostForm')}}" class="btn btn-primary">Create a post</a>
    <h1>Posts</h1>
    
    @foreach ($posts as $post)
    <div>
        <a href="{{route('singlePost', ['id' => $post->id])}}">{{$post->title}} : ( {{$post->comments->count()}} )</a>
    </div>
    @endforeach
   
@endsection
