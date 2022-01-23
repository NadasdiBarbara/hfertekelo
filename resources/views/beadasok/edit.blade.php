<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit </h1>
    <form method='POST' action="{{ route('beadasok.update', $beadas->id) }}">
         @method('PATCH')
         @csrf
            <div>
                Points:<br>
                <input type="number" name="points" value="{{ $beadas->points }}">
            </div>
            <div>
                Message:<br>
                <input type="text" name="message" value="{{ $beadas->message }}">
            </div>
                    
            <div>
                <input type="submit" value="Edit">
            </div>
    </form>
</body>
</html>