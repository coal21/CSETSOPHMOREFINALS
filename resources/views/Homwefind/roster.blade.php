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
        <td>Caregiver</td>
        <td>Caregiver</td>
        <td>Caregiver</td>
        <td>Caregiver</td>
    </tr>
    <tr>
        <td>{{$roster->roster_date}}</td>
        <td>{{$roster->supervisor_id}}</td>
        <td>{{$roster->doctor_id}}</td>
        <td>{{$roster->caregiver_1_id}}</td>
        <td>{{$roster->caregiver_2_id}}</td>
        <td>{{$roster->caregiver_3_id}}</td>        
        <td>{{$roster->caregiver_4_id}}</td>
    </tr>
    
</table>
</table>



        @endforeach
    @endisset
    </table>
</body>
@endsection
