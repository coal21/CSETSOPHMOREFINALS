@extends('layout.layout')


@section('content')
<body>
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>
@if($employees->isEmpty())
    @foreach ($employees as $employee)
        <div class="post-list">
            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->first_name}}</td>
                <td>{{$employee->salary}}</td>
            </tr>
        </div>
    @endforeach
@else 
    <div>
        <h2>No Person with that name is found</h2>
    </div>
@endif
<form method="post" action="{{ route('update') }}">
    @csrf
    @method('post')

    @if (isset($employees))
        <div class="form-group">
            <label for="id">Employee ID:</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $employee->id }}" readonly>
        </div>

        <div class="form-group">
            <label for="new_salary">New Salary:</label>
            <input type="text" class="form-control" id="new_salary" name="new_salary" value="{{ old('new_salary') }}">
        </div>

        <!-- Add more form fields as needed -->
        <button type="submit" class="btn btn-primary">Update Salary</button>
    </form>
    @else
        <p>Employee not found.</p>
    @endif
@endsection

