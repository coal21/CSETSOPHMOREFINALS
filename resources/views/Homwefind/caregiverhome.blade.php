@extends('layout.layout')


@section('content')


<body>
    <table>
        @isset($caregiver)
            @foreach($caregiver as $caregiver)
            <tr>
                <td>{{$caregiver->first_name}}</td>
                <td>{{$caregiver->last_name}}</td>
                <td>{{$caregiver->email}}</td>
                <td>{{$caregiver->phone}}</td>
                <td>{{$caregiver->password}}</td>
                <td>{{$caregiver->DOB}}</td>
                <td>{{$caregiver->status}}</td>
                <td>{{$caregiver->role_id}}</td>
            </tr>
            @endforeach
        @endisset
    </table>
</body>