@extends('layouts.app')
@section('title', 'Create post')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form method="POST" action="/posts">
    @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" value="1"class="form-check-input" name="is_published" id="is_published" >
            <label class="form-check-label" for="is_published">I want to publish the post.</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>
    
    </script>
@endsection