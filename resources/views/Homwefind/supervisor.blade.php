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
@extends('layout.layout')


@section('content')


<h1>supervisor home</h1>

<button class="btn5" onclick="document.getElementById('id05').style.display='block'">Rosters</button>
    <div id="id05" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('id05').style.display='none'">&times;</span>
            <iframe src="{{ route('Homwefind.roster') }}" width="100%" height="100%"></iframe>
        </div>
    </div>


@endsection

