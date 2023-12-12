@extends('layout.layout')


@section('content')
<h1>Caregiver Home</h1>
<body>
    @if(isset($storedfirstName) && isset($storedlastName) && isset($storedemail))
        <p>User Information: First Name - {{ $storedfirstName }}, Last Name - {{ $storedlastName }}, Email - {{ $storedemail }}</p>
    @else
        <p>User information not found in the session.</p>
    @endif
</body>
@endsection