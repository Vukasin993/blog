@extends('layouts.app')

@section('title', 'Post')

@section('content')
    <div>
        <h1>{{$title}}</h1>
        <p>{{$body}}</p>
        <hr />
    </div>

    
        <h3> Comments </h3>
    @foreach($comments as $comment)
    <div class="alert alert-primary">
     {{$comment->body}}
    </div>
    @endforeach
    

    <div>
        <form method="POST" action="/posts/{{$id}}/comments">
        @csrf
        <div class="form-group">
            <input class="form-control" id="comment" name="comment" placeholder="Comment ...">
        </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <button class="btn btn-primary" type="submit" >Post Comment</button>
        </form>
        
    </div>

@endsection