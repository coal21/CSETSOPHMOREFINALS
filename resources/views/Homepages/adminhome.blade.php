@extends('layout.layout')


<script>
window.onclick = function(event) {
  if (event.target.className === 'modal') {
    event.target.style.display = 'none';
  }
};

const forms = document.querySelectorAll('#form')
       
        for (const form of forms) {
            const decisionInput = form.querySelector("#dec")
            const submitButtons = form.querySelectorAll("#sub")

            for (const button of submitButtons) {
                button.addEventListener('click', () => {
                    decisionInput.value = button.value;
                })
            }
        }

</script>

@section('content')
    <button class="btn3" onclick="document.getElementById('id01').style.display='block'">View/Create Roles</button>
    <div id="id01" class="modal">
        <div class="modal-content">
        <span class="close" onclick="document.getElementById('id01').style.display='none'">&times;</span>
        <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Level</td>
        </tr>
        @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->access_level}}</td>
        </tr>
        @endforeach
        </table>
        </div>
    </div>
    <button class="btn3" onclick="document.getElementById('id02').style.display='block'">Approve/Deny Accounts</button>
    <div id="id02" class="modal">
        <div class="modal-content">
        <span class="close" onclick="document.getElementById('id02').style.display='none'">&times;</span>
        <iframe src="{{ route('Homwefind.approveaccounts') }}" width="100%" height="50%"></iframe>
        </div>
    </div>
    <button class="btn3" onclick="document.getElementById('id03').style.display='block'">Search for Patients</button>
<div id="id03" class="modal">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('id03').style.display='none'">&times;</span>
        <iframe src="{{ route('Homwefind.patientsearch') }}" width="100%" height="50%"></iframe>


    </div>
    </div>
        <button class="btn3" onclick="document.getElementById('id04').style.display='block'">Create Appointments</button>
            <div id="id04" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('id04').style.display='none'">&times;</span>
                <form method="POST" action="/appointment/submit">
                @csrf
        
                <label for="patient_id">Select Patient:</label>
                <select name="patient_id" id="patient_id">
                    @foreach($patients as $patient)
                        <option value="{{ $patient->id }}">{{ $patient->first_name }} {{ $patient->last_name }}</option>
                    @endforeach
                </select>
                <br><br>

                <label for="doctor_id">Select Doctor:</label>
                <select name="doctor_id" id="doctor_id">
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
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
            </div>
        </div>
</div>

@endsection