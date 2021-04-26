<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

    @foreach($all_scs as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->comment01}}</td>
            <td>{{$data->comment02}}</td>
            <td>{{$data->url}}</td>              
        </tr>
    @endforeach

    </table>

</body>
</html>