<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello template</title>
</head>

<body>
    <h1>User id {{$user_id}}</h1>
    <h1>Hello {{$name}}, your are {{$age}} </h1>
    <h2>Your siblings</h2>
    <ul>
        @foreach ($siblings as $sibling)
        <li>{{$sibling}}</li>
        @endforeach
    </ul>
</body>

</html>
