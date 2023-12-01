<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    
    <table>
    @isset($roles)
        @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->access_level}}</td>
            <td>{{$role->access_level}}</td>
        </tr>
        @endforeach
    @endisset
    </table>

    <form id="create_access_level" action="/create_access_level" method="POST">
        <label for="Roles">Role</label>
        <input type="text" id="Role" name="Role" required>
        <label for="AccessLV">Access Level</label>
        <input type="text" id="AccessLV" name="AccessLV" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>