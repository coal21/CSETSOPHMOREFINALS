<form method="POST" action="{{ route('submit-appointment') }}">
        @csrf
        <label for="patient_id">Select Patient:</label>
        <select name="patient_id" id="patient_id">
            @foreach($patients as $patient)
                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
            @endforeach
        </select>
        <br><br>

        <label for="doctor_id">Select Doctor:</label>
        <select name="doctor_id" id="doctor_id">
            @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
            @endforeach
        </select>
        <br><br>

        <label for="appointment_date">Appointment Date:</label>
        <input type="date" name="appointment_date" id="appointment_date">
        <br><br>

        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
        <br><br>

        <input type="submit" value="Submit Appointment">
    </form>