@extends('layouts.app')
@section('title', 'Register')

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
<div class="alert alert-secondary"> 

    <form method="POST" action="/users">
    @csrf
    <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password">
        </div>


        <div class="form-group form-check">
            <input type="checkbox" value="1"class="form-check-input" name="agreed" id="agreed" >
            <label class="form-check-label" for="agreed">I agreed.</label>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div>
    <script>
    
    </script>
@endsection