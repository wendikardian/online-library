<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Community Page</h1>
    <p>
        {{$name}}
    </p>

    <p>
        {{$age}}
    </p>

    <p>
        {{$citizenship}}
    </p>
    <ul>
        @foreach ($siblings as $sibling)
        <li>{{$sibling}}</li>
        @endforeach
    </ul>
</body>

</html>
