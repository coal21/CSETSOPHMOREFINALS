@extends('layout.layout')


@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roster</title>
</head>
<body>
    


<h1>Rosters</h1>
    <table>
    @isset($rosters)
    @foreach($rosters as $roster)
    <table>
    <tr>
        <td>Date</td>
        <td>Supervisor</td>
        <td>Doctor</td>
        <td>Group A Caregiver</td>
        <td>Group B Caregiver</td>
        <td>Group C Caregiver</td>
        <td>Group D Caregiver</td>
    </tr>
    <tr>
        <td>{{$roster->roster_date}}</td>
        <td>{{$roster->supervisor_first_name}} {{$roster->supervisor_last_name}}</td>
        <td>{{$roster->doctor_first_name}} {{$roster->doctor_last_name}}</td>
        <td>{{$roster->caregiver_1_first_name}} {{$roster->caregiver_1_last_name}}</td>
        <td>{{$roster->caregiver_2_first_name}} {{$roster->caregiver_2_last_name}}</td>
        <td>{{$roster->caregiver_3_first_name}} {{$roster->caregiver_3_last_name}}</td>    
        <td>{{$roster->caregiver_4_first_name}} {{$roster->caregiver_4_last_name}}</td>
    </tr>
    
</table>
</table>



        @endforeach
    @endisset
    </table>
</body>
@endsection
