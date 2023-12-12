<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosters</title>
</head>
<body>

    @isset($rosters)
        <table>
            <tr>
                <td>Date</td>
                <td>Supervisor ID</td>
                <td>DoctoID</td>
                <td>Caregiver 1 ID</td>
                <td>Caregiver 2 ID</td>
                <td>Caregiver 3 ID</td>
                <td>Caregiver 4 ID</td>
            </tr>

            @foreach($rosters as $roster)
                <tr>
                    <td>{{$roster->roster_date}}</td>
                    <td>{{$roster->supervisor_first_name}} {{$roster->supervisor_id}}</td>
                    <td>{{$roster->doctor_first_name}} {{$roster->doctor_id}}</td>
                    <td>{{$roster->caregiver_1_first_name}} {{$roster->caregiver_1_id}}</td>
                    <td>{{$roster->caregiver_2_first_name}} {{$roster->caregiver_2_id}}</td>
                    <td>{{$roster->caregiver_3_first_name}} {{$roster->caregiver_3_id}}</td>    
                    <td>{{$roster->caregiver_4_first_name}} {{$roster->caregiver_4_id}}</td>
                </tr>
            @endforeach
        </table>
    @endisset

    <h2>Find Roster By Date </h2>
    <form action="{{ route('filterRosters') }}" method="POST">
    @csrf 
    <label for="selected_date">Select Date:</label>
    <input type="date" id="selected_date" name="selected_date" required><br>
    <button type="submit">View Rosters</button>
    </form>



    @isset($createdRoster)
        <h2>Created Roster</h2>
        <p>Date Created: {{ $createdRoster->roster_date }}</p>
        <p>Supervisor ID: {{ $createdRoster->supervisor_id }}</p>
        <p>Doctor ID: {{ $createdRoster->doctor_id }}</p>
        <p>Caregiver 1 ID: {{ $createdRoster->caregiver_1_id }}</p>
        <p>Caregiver 2 ID: {{ $createdRoster->caregiver_2_id }}</p>
        <p>Caregiver 3 ID: {{ $createdRoster->caregiver_3_id }}</p>
        <p>Caregiver 4 ID: {{ $createdRoster->caregiver_4_id }}</p>
    @endisset

    <!-- Form for Creating New Roster -->
    <h2>Create New Roster</h2>
    <form action="{{ route('createRoster') }}" method="POST">
        @csrf <!-- Laravel CSRF token -->

        <label for="roster_date">Date:</label>
    <input type="date" id="roster_date" name="roster_date" required><br>

    <label for="supervisor_id">Supervisor ID:</label>
    <input type="text" id="supervisor_id" name="supervisor_id" required><br>

    <label for="doctor_id">Doctor ID:</label>
    <input type="text" id="doctor_id" name="doctor_id" required><br>

    <label for="caregiver_1_id">Caregiver 1 ID:</label>
    <input type="text" id="caregiver_1_id" name="caregiver_1_id" required><br>

    <label for="caregiver_2_id">Caregiver 2 ID:</label>
    <input type="text" id="caregiver_2_id" name="caregiver_2_id" required><br>

    <label for="caregiver_3_id">Caregiver 3 ID:</label>
    <input type="text" id="caregiver_3_id" name="caregiver_3_id" required><br>

    <label for="caregiver_4_id">Caregiver 4 ID:</label>
    <input type="text" id="caregiver_4_id" name="caregiver_4_id" required><br>
    

    <button type="submit">Create Roster</button>
</form>

    </table>
</body>

