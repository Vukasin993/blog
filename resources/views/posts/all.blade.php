@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>
    
    @foreach ($posts as $post)
    <div>
        <a href="{{route('singlePost', ['id' => $post->id])}}">{{$post->title}}</a>
    </div>
    @endforeach
   
@endsection
