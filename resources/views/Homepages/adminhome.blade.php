@extends('layout.layout')

<style>
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto;
  border: 1px solid #888;
  width: 80%;
  padding: 20px;
}

.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
</style>

<script>
window.onclick = function(event) {
  if (event.target.className === 'modal') {
    event.target.style.display = 'none';
  }
};
</script>

@section('content')
    <button class="btn3" onclick="document.getElementById('id01').style.display='block'">Menu 1</button>
    <div id="id01" class="modal">
        <div class="modal-content">
        <span class="close" onclick="document.getElementById('id01').style.display='none'">&times;</span>
        <table>
        @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->access_level}}</td>
            <td>{{$role->access_level}}</td>
        </tr>
        @endforeach
        </table>
        </div>
    </div>
    <button class="btn3" onclick="document.getElementById('id02').style.display='block'">Menu 1</button>
    <div id="id02" class="modal">
        <div class="modal-content">
        <span class="close" onclick="document.getElementById('id02').style.display='none'">&times;</span>
        <h1>Patients</h1>
<table>
    @isset($patients)
        @foreach($patients as $patient)
            <tr>
                <td>{{$patient->id}}</td>
                <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                <td>{{$patient->email}}</td>
                <td>{{$patient->phone}}</td>
            </tr>
        @endforeach
    @endisset
</table>
    <h1>Caregivers</h1>
    <table>
    @isset($caregivers)
    @foreach($caregivers as $caregiver)
        <tr>
            <td>{{$caregiver->id}}</td>
            <td>{{$caregiver->first_name}} {{$caregiver->last_name}}</td>
            <td>{{$caregiver->email}}</td>
            <td>{{$caregiver->phone}}</td>
        </tr>
        @endforeach
    @endisset
    </table>
    <h1>Family Members</h1>
    <table>
    @isset($family)
    @foreach($family as $families)
        <tr>
            <td>{{$families->id}}</td>
            <td>{{$families->first_name}} {{$families->last_name}}</td>
            <td>{{$families->email}}</td>
            <td>{{$families->phone}}</td>
            
        </tr>
        @endforeach
    @endisset
    </table>
    <h1>Doctors</h1>
    <table>
    @isset($doctors)
    @foreach($doctors as $doctor)
        <tr>
            <td>{{$doctor->id}}</td>
            <td>{{$doctor->first_name}} {{$doctor->last_name}}</td>
            <td>{{$doctor->email}}</td>
            <td>{{$doctor->phone}}</td>
        </tr>
        @endforeach
    @endisset
    </table>
    <h1>Supervisors</h1>
    <table>
    @isset($supervisors)
    @foreach($supervisors as $supervisor)
        <tr>
            <td>{{$supervisor->id}}</td>
            <td>{{$supervisor->first_name}} {{$supervisor->last_name}}</td>
            <td>{{$supervisor->email}}</td>
            <td>{{$supervisor->phone}}</td>
        </tr>
        @endforeach
    @endisset
    </table>
        </div>
    </div>
    

@endsection