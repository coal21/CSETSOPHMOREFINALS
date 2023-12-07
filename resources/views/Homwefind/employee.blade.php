@extends('layout.layout')


@section('content')

<form action="show" method="GET">
        <table>
            @isset($employee)
                @foreach($employee as $employee)
                    <tr>
                        <td><input type="checkbox" name="selected_caregivers[]" value="{{$caregiver->id}}"></td>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->first_name}}</td>
                        <td>{{$employee->role_id}}</td>
                        <td>{{$employee->phone}}</td>
                    </tr>
                @endforeach
            @endisset
        </table>

        <button type="submit">Submit</button>
    </form>

<body>
<form id="new_Salary" action="new_Salary" method="POST">
        <label for="emp_ID">Employee ID</label>
        <input type="text" id="emp_ID" name="emp_ID" required>
        <label for="new_Salary">New Salary</label>
        <input type="int" id="new_Salary" name="new_Salary" required>
        <input type="submit" value="Submit">
    </form>
</body>


@endsection