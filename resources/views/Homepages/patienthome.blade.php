@extends('layout.layout')


@section('content')
<div>
    Welcome, {{ session('name') }}!
</div>

@endsection