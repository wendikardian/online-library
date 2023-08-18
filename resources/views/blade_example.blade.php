<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Template</title>
</head>

<body>
    <!-- open the PHP Syntax using blade template -->
    @php
    $name = 'James';
    $age = 25;
    $citizenship = 'EN';
    $siblings = ['Robert', 'Natalia'];
    @endphp

    {{$name}} is {{$age}} years old and has {{$citizenship}} citizenship. He has {{$siblings[0]}} and
    {{$siblings[1]}} as siblings.

    {{-- this is comments --}}

    <!-- Add condition in template blade -->
    @if ($age > 20)
    <p>He is an adult</p>
    @else
    <p>He is a teenager</p>
    @endif

    @isset($name)
    <p>His name is {{$name}}</p>
    @endisset

    @empty($address)
    <p>He doesn't have an address</p>
    @endempty

</body>

</html>
