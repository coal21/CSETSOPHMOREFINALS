<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body>
    <header>
        <a href="#" class="back-button" onclick="history.back()">Back</a>
        <h1>Before it Was Cool</h1>
        <h2>Retirement Community</h2>
    </header>
    <main>
    
    <form id="signup" action="/signup" method="POST">
    @csrf
    <h2>Tell us about yourself!</h2>
        <label for="role">Role:</label>
        <select id="role" name="role" onchange="showAdditionalFields(this.value)">
            <option value="None">--Select Role--</option>
            <option value="Patient">Patient</option>
            <option value="Doctor">Doctor</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Caretaker">Caretaker</option>
            <option value="Family">Family</option>
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

    <footer>
    </footer>
    <style>
        /* Define the overall layout */
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}

/* Header styling */
header {
    background-color:#256685;
    color: white;
    padding: 0.5rem;
    text-align: center;
}

/* Main content styling */
main {
    flex: 1;
    padding: 1rem;
    background-color:#6497b1;
}

text {
    font-family: "Geogia", Georgia, serif;
}

#signup {
    background-color:#256685;
    color: white;
    padding: 0.5rem;
    text-align: center;
    font-family: "Geogia", Georgia, serif;

}

/* Footer styling */
footer {
    background-color:#13455e;
    color: white;
    text-align: center;
    padding: 1rem;
    font-family: "Geogia", Georgia, serif;

}

/* Back button styling */
.back-button {
    background-color: transparent;
    color: white;
    border: none;
    cursor: pointer;
    text-decoration: none;
    font-size: 16px;
    padding: 5px 10px;
    border-radius: 5px;
}

.back-button:hover {
    background-color: #13455e;
}
    </style>
</body>
</html> 