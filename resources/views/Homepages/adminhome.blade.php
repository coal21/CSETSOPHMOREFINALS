@extends('layout.layout')


<script>
window.onclick = function(event) {
  if (event.target.className === 'modal') {
    event.target.style.display = 'none';
  }
};

</script>

@section('content')
    <button class="btn3" onclick="document.getElementById('id01').style.display='block'">View/Create Roles</button>
    <div id="id01" class="modal">
        <div class="modal-content">
        <span class="close" onclick="document.getElementById('id01').style.display='none'">&times;</span>
        <table>
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
        <h1>Patients</h1>
    <table>
    @isset($patients)
    @foreach($patients as $patient)
        <tr>
            <td>{{$patient->first_name}} {{$patient->last_name}}<td>
            <form method="POST" action="/approve" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$patient->id}}">
                <input type="hidden" name="role_id" value="{{$patient->role_id}}">
                <input id="dec" type="hidden" name="decision" value="">

                <input id="sub" type="submit" value="Yes"/>
                <input id="sub" type="submit" value="No"/>
            </form>
    
        </tr>
        @endforeach
    @endisset
    </table>


<h1>Family Members</h1>
    <table>
    @isset($families)
    @foreach($families as $family)
        <tr>
            <td>{{$family->first_name}} {{$family->last_name}}<td>

            <form method="POST" action="/approve" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$family->id}}">
                <input type="hidden" name="role_id" value="{{$family->role_id}}">
                <input id="dec" type="hidden" name="decision" value="">

                <input id="sub" type="submit" value="Yes"/>
                <input id="sub" type="submit" value="No"/>
            </form>
    
        </tr>
        @endforeach
    @endisset
    </table>


    <h1>Caregivers</h1>
    <table>
    @isset($caregivers)
    @foreach($caregivers as $caregiver)
        <tr>
            <td>{{$caregiver->first_name}} {{$caregiver->last_name}}<td>
            
            <form method="POST" action="/approve" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$caregiver->id}}">
                <input type="hidden" name="role_id" value="{{$caregiver->role_id}}">
                <input type="hidden" name="first_name" value="{{$caregiver->first_name}}">
                <input type="hidden" name="salary" value=5>

                <input id="dec" type="hidden" name="decision" value="">

                <input id="sub" type="submit" value="Yes"/>
                <input id="sub" type="submit" value="No"/>
            </form>
    
        </tr>
        @endforeach
    @endisset
    </table>

    <h1>Doctors</h1>
    <table>
    @isset($doctors)
    @foreach($doctors as $doctor)
        <tr>
            <td>{{$doctor->first_name}}  {{$doctor->last_name}}<td>
            <form method="POST" action="/approve" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$doctor->id}}">
                <input type="hidden" name="role_id" value="{{$doctor->role_id}}">
                <input type="hidden" name="first_name" value="{{$doctor->first_name}}">
                <input type="hidden" name="salary" value=5>

                <input id="dec" type="hidden" name="decision" value="">

                <input id="sub" type="submit" value="Yes"/>
                <input id="sub" type="submit" value="No"/>
            </form>
    
        </tr>
        @endforeach
    @endisset
    </table>

    <h1>Supervisor</h1>
    <table>
    @isset($supervisors)
    @foreach($supervisors as $supervisor)
        <tr>
            <td>{{$supervisor->first_name}} {{$supervisor->last_name}}<td>
            
            
            <form method="POST" action="/approve" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$supervisor->id}}">
                <input type="hidden" name="role_id" value="{{$supervisor->role_id}}">
                <input type="hidden" name="first_name" value="{{$supervisor->first_name}}">
                <input type="hidden" name="salary" value=5>
                <input id="dec" type="hidden" name="decision" value="">

                <input id="sub" type="submit" value="Yes"/>
                <input id="sub" type="submit" value="No"/>
            </form>
        </tr>
        @endforeach
    @endisset
    </table>
        </div>
    </div>
    <button class="btn3" onclick="document.getElementById('id03').style.display='block'">Search for Patients</button>
<div id="id03" class="modal">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('id03').style.display='none'">&times;</span>
        <form method="GET" action="/search-patients">
            @csrf
            <label for="searchBy">Search By:</label>
            <select id="searchBy" name="searchBy">
                <option value="all">All Patients</option>
                <option value="first_name">First Name</option>
                <option value="last_name">Last Name</option>
            </select>
            <input type="text" id="searchText" name="searchText" placeholder="Enter search text...">
            <button type="submit">Search</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                @isset($Apatients)
                    @foreach($Apatients as $patient)
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->first_name}}</td>
                            <td>{{$patient->last_name}}</td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
</div>

    <!-- Button to open the Create Rosters modal -->
<button class="btn5" onclick="document.getElementById('id05').style.display='block'">Rosters</button>

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

</script>

@endsection