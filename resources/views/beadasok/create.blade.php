<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
</head>
<body>
    <h1>New statue</h1>


    <form method='POST' action="{{ route('beadasok.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Class<br>
            <input type="number" name="class" value="{{ old('class') }}">
            <!--
            @error('class')
                <p>{{ $message }}</p>
            @enderror
            -->
        </div>
        <div>
            Name<br>
            <input type="text" name="name" value="{{ old('name') }}">
            <!--
            @error('class')
                <p>{{ $message }}</p>
            @enderror
            -->
        </div>
        <div>
            URL<br>
            <input type="text" name="url" value="{{ old('url') }}">
            <!--
            @error('class')
                <p>{{ $message }}</p>
            @enderror
            -->
        </div>
         <div>
            Points<br>
            <input type="number" name="points" value="{{ old('points') }}">
            <!--
            @error('class')
                <p>{{ $message }}</p>
            @enderror
            -->
        </div>
         <div>
            Message<br>
            <input type="text" name="message" value="{{ old('message') }}">
             <!--
            @error('class')
                <p>{{ $message }}</p>
            @enderror
            -->
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>