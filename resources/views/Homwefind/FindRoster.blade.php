
<style>
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>


@php
    $message = isset($message) ? $message : '';
@endphp

    @isset($rosters)
        <table>
            <tr>
                <th>Date</td>
                <th>Supervisor ID</td>
                <th>Doctor ID</td>
                <th>Caregiver 1 ID</td>
                <th>Caregiver 2 ID</td>
                <th>Caregiver 3 ID</td>
                <th>Caregiver 4 ID</td>
            </tr>

            @foreach($rosters as $roster)
                <tr>
                    <td>{{$roster->roster_date}}</td><br>
                    <td>{{$roster->supervisor_first_name}} {{$roster->supervisor_id}}</td>
                    <td>{{$roster->doctor_first_name}} {{$roster->doctor_id}}</td>
                    <td>{{$roster->caregiver_1_first_name}} {{$roster->caregiver_1_id}}</td>
                    <td>{{$roster->caregiver_2_first_name}} {{$roster->caregiver_2_id}}</td>
                    <td>{{$roster->caregiver_3_first_name}} {{$roster->caregiver_3_id}}</td>    
                    <td>{{$roster->caregiver_4_first_name}} {{$roster->caregiver_4_id}}</td>
                </tr>
            @endforeach
        </table>
        @else
        <p>{{ $message }}</p>
    @endisset

    <h2>Find Roster By Date </h2>
    <form action="{{ route('filterRosters') }}" method="POST">
    @csrf 
    <label for="selected_date">Select Date:</label>
    <input type="date" id="selected_date" name="selected_date" required><br>
    <button type="submit">View Rosters</button>
    </form>


    </table>
</body>

