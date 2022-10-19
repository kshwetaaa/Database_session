<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
</head>
<body>
    
    <h1>Machine details</h1>

    <table border="1px">
        <tr>
            <td>mechanism_id</td>
            <td>name</td>
            <td>number</td>
            <td>machine_name</td>
            <td>machine_number</td>
            <td>validity</td>
            <td>rate</td>
        </tr>

        @foreach ($data as $dt)
            <tr>
                <td>{{$dt['mechanism_id']}}</td>
                <td>{{$dt['name']}}</td>
                <td>{{$dt['number']}}</td>
                <td>{{$dt->machine['machine_name']}}</td>
                <td>{{$dt->machine['machine_number']}}</td>
                <td>{{$dt->parts['validity']}}</td>
                <td>{{$dt->parts['rate']}}</td>

            </tr>
        @endforeach
    </table>


</body>
</html>