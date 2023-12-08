<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<h1>Patients</h1>
@isset($patients)
    <table>
        @foreach($patients as $patient)
        <tr>
            <td>{{$patient->first_name}}</td>
            <form method="POST" action="/admin/approve" class="form">
                @csrf
                <input type="hidden" name="id" value="{{$patient->id}}">
                <input type="hidden" name="role_id" value="{{$patient->role_id}}">
                <input type="hidden" name="decision" class="decision" value="">
                <input type="submit" class="submit" value="Yes"/>
                <input type="submit" class="submit" value="No"/>
            </form>
        </tr>
        @endforeach
    </table>
    @endisset
    



    <h1>Caregivers</h1>
    <table>
    @isset($caregivers)
    @foreach($caregivers as $caregiver)
        <tr>
            <td>{{$caregiver->first_name}}<td>

            <form method="POST" action="/admin/approve" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$caregiver->id}}">
                <input type="hidden" name="role_id" value="{{$caregiver->role_id}}">
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
            <td>{{$family->first_name}}<td>

            <form method="POST" action="/admin/approve" id="form">
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


    <h1>Doctors</h1>
    <table>
    @isset($doctors)

    @foreach($doctors as $doctor)
        <tr>
            <td>{{$doctor->first_name}}<td>

            <form method="POST" action="/admin/approve" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$doctor->id}}">
                <input type="hidden" name="role_id" value="{{$doctor->role_id}}">
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
            <td>{{$supervisor->first_name}}<td>

            <form method="POST" action="/admin/approve" id="form">
                @csrf
                <input type="hidden" name="id" value="{{$supervisor->id}}">
                <input type="hidden" name="role_id" value="{{$supervisor->role_id}}">
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
</body>

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
</html>
