<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Appointment</title>
</head>
<body>
    <h2>Book an Appointment</h2>

    <table>
        @foreach($roles as $role)
        <tr>
            <td>{{$Appointment->patient_id}}</td>
            <td>{{$Appointment->name}}</td>
            <td>{{$Appointment->appointment_date}}</td>
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

            <label for="patient_name">Patient Name:</label>
            <input type="text" name="patient_name" required>

            <br>

            <label for="appointment_date">Appointment Date:</label>
            <input type="date" name="appointment_date" required>

            <br>

            <label for="doctor_id">Doctor Name:</label>
            <select name="doctor_id" required>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor }}">{{ $doctor }}</option>
                @endforeach
            </select>

            <br>

            <button type="submit">Book Appointment</button>
        </form>
    </div>
</body>
</html>