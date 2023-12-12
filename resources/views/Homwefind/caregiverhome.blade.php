@extends('layout.layout')


@section('content')
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 50%;
        height: 50%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }
</style>

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


    <button class="btn5" onclick="document.getElementById('id05').style.display='block'">Rosters</button>
    <div id="id05" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('id05').style.display='none'">&times;</span>
            <iframe src="{{ route('Homwefind.roster') }}" width="100%" height="100%"></iframe>
        </div>
    </div>
</body>