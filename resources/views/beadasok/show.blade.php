<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $beadas->name }}</title>
</head>
<body>
    <h1>Name {{ $beadas->name }} </h1>
    <p>Class:{{ $beadas->class }}</p>
    <p>URl: {{ $beadas->url }} </p>
    <p>Points: {{ $beadas->points }} </p>
    <p>Message: {{ $beadas->message }} </p>


    <a href="{{ route('beadasok.edit', $beadas->id) }}">Edit</a>
    <a href="{{ route('beadasok.index') }}">Back</a>
</body>
</html>