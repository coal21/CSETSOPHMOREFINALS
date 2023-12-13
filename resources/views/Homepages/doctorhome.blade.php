<style>
    /* .btn5{
    margin-right:750px;
    float:right;
    } */

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 50%;
        height: 25%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }
</style>
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
<div>
    Welcome, {{ session('name') }}!
</div><br>

<button class="btn5" onclick="document.getElementById('id07').style.display='block'">Find Rosters</button>
    <div id="id07" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('id07').style.display='none'">&times;</span>
            <iframe src="{{ route('showRosterForm') }}" width="100%" height="50%"></iframe>        </div>
    </div>

<button class="btn3" onclick="document.getElementById('id03').style.display='block'">Search for Patients</button>
<div id="id03" class="modal">
    <div class="modal-content">
        <span class="close" onclick="document.getElementById('id03').style.display='none'">&times;</span>
        <iframe src="{{ url('/patientsearch') }}" width="100%" height="50%"></iframe>
    </div>
</div>





    

<form method="GET" action="/doctor/search-patients">
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
                    <th>Emergency Contact</th>
                    <th>Relationship</th>

                </tr>
            </thead>
            <tbody>
                @isset($Apatients)
                    @foreach($Apatients as $patient)
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->first_name}}</td>
                            <td>{{$patient->last_name}}</td>
                            <td>{{$patient->emergency_contact}}</td>
                            <td>{{$patient->relationship}}</td>
                            <td>   
                                <button class="btn3" onclick="document.getElementById('id01').style.display='block'">Additional info</button>
                                <div id="id01" class="modal">
                                <div class="modal-content">
                                <span class="close" onclick="document.getElementById('id01').style.display='none'">&times;</span>
                                <table>
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Admission date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @isset($Apatients)
                                    @foreach($Apatients as $patient)
                                        <tr>
                                            <td>{{$patient->id}}</td>
                                            <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                                            <td>{{$patient->created_at}}</td>
                                        @endforeach
                                    @endisset
                                </tbody>
                                </table>
                                </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>


@endsection