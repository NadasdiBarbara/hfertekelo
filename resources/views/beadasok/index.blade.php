<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    <table>
        <tr>
            <th>Class</th>
            <th>Name</th>
            <th>URL</th>
            <th>Points</th>
            <th>Message</th>
        </tr>
        @foreach ($beadasok as $beadas)
        <tr>
            <td>
                <a href="{{ route('beadasok.show', $beadas->id) }}">{{ $beadas->class }}</a>
            </td>
            <!--<td>{{ $beadas->class }}</td>-->
            <td>{{ $beadas->name }}</td>
            <td>{{ $beadas->url }}</td>
            <td>{{ $beadas->points }}</td>
            <td>{{ $beadas->message }}</td>
            
            <td>
                <form method="POST" action="{{ route('beadasok.destroy', $beadas->id) }}">
                @method('DELETE')
                @csrf    
                <button type="submit">Törlés</button>
                </form>
            </td>
         </tr>    
        @endforeach
      
    </table>
    <br>

    <form action="{{ route('beadasok.create') }}">

        <br>

        <button type="submit">Make New</button>

    </form>

</body>
</html>

