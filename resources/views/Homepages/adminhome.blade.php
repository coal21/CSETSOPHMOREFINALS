@extends('layout.layout')




@section('content')
<div>
    Welcome, Admin!
</div>
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

        <br>

        <form method="POST" action="/createRole">
            @csrf
            <label for="">Role Name: </label>
            <input type="text" name="roleName">

            <br>

            <label for="">Access Level</label>
            <input type="text" name="accessLevel">

            <br>

            <button type="submit">Create</button>
        </form>

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
                <iframe src="{{ route('Homwefind.doctorappointment') }}" width="100%" height="50%"></iframe>
    </div>
</div>

    <!-- Button to open the Create Rosters modal -->
<button class="btn5" onclick="document.getElementById('id05').style.display='block'">Create Rosters</button>

    <!-- Create Rosters modal -->
    <div id="id05" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('id05').style.display='none'">&times;</span>
            <!-- Include the roster.blade.php content here -->
            <iframe src="{{ route('Homwefind.roster') }}" width="100%" height="50%"></iframe>
        </div>
    </div>

</div>
</div>

</div>
</div>


<script>
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

window.onclick = function(event) {
  if (event.target.className === 'modal') {
    event.target.style.display = 'none';
  }
};

</script>

@endsection
