@extends('layout.layout')


@section('content')
    <title>Signup</title>
    <script>
    function showAdditionalFields(role) {
      const patientFields = document.getElementById('patientFields');
      if (role === 'Patient') {
        patientFields.style.display = 'block';
      } else {
        patientFields.style.display = 'none';
      }
    }
    </script>
    <main>
    <form id="signup" action="/signup" method="POST">
    @csrf
    <h2>Tell us about yourself!</h2>
        <label for="role">Role:</label>
        <select id="role" name="role" onchange="showAdditionalFields(this.value)">
            <option value="None">--Select Role--</option>
            @foreach ($roles as $role)
            <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <br><br>

    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>
    <br><br>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>
    <br><br>

    <div id="patientFields" style="display: none;">
        <label for="familyCode">Family Code:</label>
        <input type="text" id="familyCode" name="familyCode">
        <br><br>

        <label for="emergencyContact">Emergency Contact:</label>
        <input type="text" id="emergencyContact" name="emergencyContact">
        <br><br>

        <label for="relationToContact">Relation to Emergency Contact:</label>
        <input type="text" id="relationToContact" name="relationToContact">
        <br><br>
    </div>

        <input type="submit" value="Submit">
        </form>
    </main>

    @endsection


