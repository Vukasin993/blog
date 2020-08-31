<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>

</head>
<body>
    <div>
        <h1>{{$title}}</h1>
        <p>{{$body}}</p>
    </div>

    
    @foreach($comments as $comment)
    <div>
     {{$comment}}
        </div>
    @endforeach

    
</body>
</html>