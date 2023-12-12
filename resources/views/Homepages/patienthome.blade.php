@extends('layout.layout')


@section('content')
<div>
    Welcome, {{ session('name') }}!
</div>

<button class="btn5" onclick="document.getElementById('id07').style.display='block'">Find Rosters</button>
    <div id="id07" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('id07').style.display='none'">&times;</span>
            <iframe src="{{ route('showRosterForm') }}" width="100%" height="50%"></iframe>        </div>
    </div>
@endsection