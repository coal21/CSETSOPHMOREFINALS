@extends('layout.layout')


@section('content')
<div>
    Welcome, {{ session('name') }}!
</div>
<button class="btn3" onclick="document.getElementById('id03').style.display='block'">Search for Patients</button>
<div id="id03" class="modal">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('id03').style.display='none'">&times;</span>
        <iframe src="{{ route('Homwefind.patientsearch') }}" width="100%" height="50%"></iframe>
    </div>
</div>

@endsection