
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<style>
        body {
  font-family: Arial, sans-serif;

    }
</style>
<h1>Patients</h1>
@isset($Ppatients)
    <table>
        @foreach($Ppatients as $patient)
        <tr>
            <td>{{$patient->first_name}}</td>
            <form method="POST" action="/approve" class="form">
                @csrf
                <td><input type="hidden" name="first_name" value="{{$patient->first_name}}"></td>
                <td><input type="hidden" name="id" value="{{$patient->id}}"></td>
                <td><input type="hidden" name="role_id" value="{{$patient->role_id}}"></td>
                <td><input type="hidden" name="decision" class="decision" value=""></td>
                <td><input type="submit" class="submit" value="Yes"/></td>
                <td><input type="submit" class="submit" value="No"/></td>
            </form>
        </tr>
        @endforeach
    </table>
    @endisset
    <h1>Caregivers</h1>
    @isset($caregivers)
    <table>
    @foreach($caregivers as $caregiver)
        <tr>
            <form method="POST" action="/approve" id="form">
                @csrf
                <td><input type="hidden" name="first_name" value="{{$caregiver->first_name}}"></td>
                <td><input type="hidden" name="id" value="{{$caregiver->id}}"></td>
                <td><input type="hidden" name="role_id" value="{{$caregiver->role_id}}"></td>
                <td><input id="dec" type="hidden" name="decision" value=""></td>
                <td><input id="sub" type="submit" value="Yes"/></td>
                <td><input id="sub" type="submit" value="No"/></td>
            </form>
        </tr>
        @endforeach
    </table>
    @endisset
    <h1>Family Members</h1>
    @isset($families)
    <table>
    @foreach($families as $family)
        <tr>
            <form method="POST" action="/approve" id="form">
                @csrf
                <td><input type="hidden" name="id" value="{{$family->first_name}}"></td>
                <td><input type="hidden" name="id" value="{{$family->id}}"></td>
                <td><input type="hidden" name="role_id" value="{{$family->role_id}}"></td>
                <td><input id="dec" type="hidden" name="decision" value=""></td>
                <td><input id="sub" type="submit" value="Yes"/></td>
                <td><input id="sub" type="submit" value="No"/></td>
            </form>
        </tr>
        @endforeach
    </table>
    @endisset
    <h1>Doctors</h1>
    @isset($doctors)
    <table>
    @foreach($doctors as $doctor)
        <tr>
            <td>{{$doctor->first_name}}<td>
            <form method="POST" action="/approve" id="form">
                @csrf
                <td><input type="hidden" name="id" value="{{$doctor->id}}"></td>
                <td><input type="hidden" name="role_id" value="{{$doctor->role_id}}"></td>
                <td><input id="dec" type="hidden" name="decision" value=""></td>

                <td><input id="sub" type="submit" value="Yes"/></td>
                <td><input id="sub" type="submit" value="No"/></td>
            </form>
        </tr>
        @endforeach
    </table>
    @endisset
    <h1>Supervisor</h1>
    @isset($supervisors)
    <table>
    @foreach($supervisors as $supervisor)
        <tr>
            <td>{{$supervisor->first_name}}<td>
            <form method="POST" action="/approve" id="form">
                @csrf
                <td><input type="hidden" name="id" value="{{$supervisor->id}}"></td>
                <td><input type="hidden" name="role_id" value="{{$supervisor->role_id}}"></td>
                <td><input id="dec" type="hidden" name="decision" value=""></td>

                <td><input id="sub" type="submit" value="Yes"/></td>
                <td><input id="sub" type="submit" value="No"/></td>
            </form>
    
        </tr>
        @endforeach
    </table>
    @endisset
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
