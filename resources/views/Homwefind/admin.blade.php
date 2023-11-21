<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    
    <table>
        @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->access_level}}</td>
            <td>{{$role->access_level}}</td>
        </tr>
        @endforeach
    </table>

    <form action="Adminsub">
        <label for="Roles">New Roles:</label>
        <input type="text" placeholder="Enter Role" name="Roles" required>
        <input type="submit" value="Submit">
    </form>

    <form action="Adminsub">
        <label for="AccessLV">AccessLV:</label>
        <input type="text" placeholder="Enter Access LV" name="AccessLV" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>