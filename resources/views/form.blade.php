<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of Form for Laravel using CSRF token</title>
</head>

<body>

    <form method="POST" action="{{ route('flights.store') }}">
        @csrf
        <label for="departure">Departure</label>
        <input type="date" name="departure" id="departure">
        <br>
        <br>
        <label for="passenger">Passenger:</label>
        <input type="number" name="passengers" id="passengers">
        <br>
        <br>
        <input type="submit" value="submit">
    </form>

</body>

</html>
