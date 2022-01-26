<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
</head>
<body>

    <form method='POST' action="{{ route('beadasok.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Class<br>
            <input type="number" name="class">
            
            @error('class')
                <p>{{ $message }}</p>
            @enderror
            
        </div>
        <div>
            Name<br>
            <input type="text" name="name">
            
            @error('name')
                <p>{{ $message }}</p>
            @enderror
            
        </div>
        <div>
            URL<br>
            <input type="text" name="url">
            
            @error('url')
                <p>{{ $message }}</p>
            @enderror
            
        </div>
         <div> 
            <input type="hidden" name="points" value="1">
        </div>
         <div>     
            <input type="hidden" name="message" value="Nincs"  >
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
    <form action="{{ route('beadasok.index') }}">
        <br>
        <button type="submit">Back</button>
    </form>
</body>
</html>