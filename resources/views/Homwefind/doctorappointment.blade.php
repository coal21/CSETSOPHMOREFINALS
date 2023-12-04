@extends('layout.layout')


@section('content')
    <h2>Book an Appointment</h2>

    <table>
        @foreach($Appointment as $Appointment)

        <tr>
            <td>{{$Appointment->patient_id}}</td>
            <td>{{$Appointment->appointment_date}}</td>
            <td>{{$Appointment->comment}}</td>
            <td>{{$Appointment->doctor_id}}</td>
        </tr>
        @endforeach
    </table>    
    <!-- @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif -->
    <div class="appointmentsubmit">
        <form method="post" action="{{ route('submit.appointment') }}">
            @csrf
            <label for="patient_id">Patient ID:</label>
            <input type="text" name="patient_id" required>

            <br>

            <label for="doctor_id">Doctor_id:</label>
            <input type="text" name="doctor_id" required>

            <br>

            <label for="appointment_date">Appointment Date:</label>
            <input type="date" name="appointment_date" required>

            <br>

            <label for="comment">comment</label>
            <input type="text" name="comment" required>

            <br>

            <!-- <label for="doctor_id">Doctor Name:</label>
            <select name="doctor_id" required>
                @foreach($Appointment as $Appointments)
                    <option value="{{ $Appointment }}">{{ $Appointment->doctor_id }}</option>
                @endforeach
            </select> -->

            <br>

            <button type="submit">Book Appointment</button>
        </form>
    </div>
@endsection
