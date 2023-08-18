<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>List of data</h1>
    <ul>
        @foreach ($data as $book)
        <li>no {{$book['id']}}. {{$book['title']}} -> {{$book['short_description']}}</li>
        @endforeach
    </ul>
</body>
</html>
