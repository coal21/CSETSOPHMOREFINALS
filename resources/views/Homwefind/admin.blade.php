<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pag</title>
</head>
<body>
    
    <table>
        @foreach($Roles as $Roles)
        <tr>
            <td>{{$Roles->id}}</td>
            <td>{{$Roles->name}}</td>
            <td>{{$Roles->access_level}}</td>
            <td>{{$Roles->access_level}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>