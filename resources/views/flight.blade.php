<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            width: 300px;
            border: 1px solid black;
            margin: 10px;
            padding: 10px;
            background-color: yellowgreen;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Foreach data flight with props id, deps, passengers, and amount -->
        @foreach ($flights as $flight)
        <div class="box">


            <p>Flight ID: {{ $flight->id }}</p>
            <p>Departure: {{ $flight->deps }}</p>
            <p>Passengers: {{ $flight->passengers }}</p>
            <p>Amount: {{ $flight->amount }}</p>
            <p>Name: {{ $flight->name }}</p>
            <!-- add some operational if confirmed 1 create span with green and if 0 red span  using bootstrap -->
            <p>Confirmed: <span class="badge badge-{{ $flight->confirmed ? 'success' : 'danger' }}">{{ $flight->confirmed ? 'Confirmed' : 'Not Confirmed' }}</span></p>
            <hr>
        </div>
        @endforeach

    </div>
    <br>
    <div class="d-flex">
        {{ $flights->links() }}
    </div>
</body>

</html>
