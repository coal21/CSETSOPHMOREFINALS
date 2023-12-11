<form method="GET" action="/Homwefind/patientsearch">
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
                @isset($patients)
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->first_name}}</td>
                            <td>{{$patient->last_name}}</td>
                            <td>{{$patient->emergency_contact}}</td>
                            <td>{{$patient->relationship}}</td>
                            <td>
                                <button class="btn3" onclick="document.getElementById('AddInfo').style.display='block'">Additional info</button>
                                <div id="AddInfo" class="modal">
                                <div class="modal-content">
                                <span class="close" onclick="document.getElementById('AddInfo').style.display='none'">&times;</span>
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
                                @isset($patients)
                                    @foreach($patients as $patient)
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