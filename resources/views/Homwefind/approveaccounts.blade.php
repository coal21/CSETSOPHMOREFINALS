@extends('layout.layout')


@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<h1>Patients</h1>
<table>
    @isset($patients)
        @foreach($patients as $patient)
            <tr>
                <td>{{$patient->id}}</td>
                <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                <td>{{$patient->email}}</td>
                <td>{{$patient->phone}}</td>
            </tr>
        @endforeach
    @endisset
</table>
    <h1>Caregivers</h1>
    <table>
    @isset($caregivers)
    @foreach($caregivers as $caregiver)
        <tr>
            <td>{{$caregiver->id}}</td>
            <td>{{$caregiver->first_name}} {{$caregiver->last_name}}</td>
            <td>{{$caregiver->email}}</td>
            <td>{{$caregiver->phone}}</td>
        </tr>
        @endforeach
    @endisset
    </table>
    <h1>Family Members</h1>
    <table>
    @isset($family)
    @foreach($family as $families)
        <tr>
            <td>{{$families->id}}</td>
            <td>{{$families->first_name}} {{$families->last_name}}</td>
            <td>{{$families->email}}</td>
            <td>{{$families->phone}}</td>
            
        </tr>
        @endforeach
    @endisset
    </table>
    <h1>Doctors</h1>
    <table>
    @isset($doctors)
    @foreach($doctors as $doctor)
        <tr>
            <td>{{$doctor->id}}</td>
            <td>{{$doctor->first_name}} {{$doctor->last_name}}</td>
            <td>{{$doctor->email}}</td>
            <td>{{$doctor->phone}}</td>
        </tr>
        @endforeach
    @endisset
    </table>
    <h1>Supervisors</h1>
    <table>
    @isset($supervisors)
    @foreach($supervisors as $supervisor)
        <tr>
            <td>{{$supervisor->id}}</td>
            <td>{{$supervisor->first_name}} {{$supervisor->last_name}}</td>
            <td>{{$supervisor->email}}</td>
            <td>{{$supervisor->phone}}</td>
        </tr>
        @endforeach
    @endisset
    </table>
</body>

@endsection
