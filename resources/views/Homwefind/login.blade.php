<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Setup</title>
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

#login {
    background-color: #f1f1f1;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    text-align: center;
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
</head>
<body>
    <header>
        <a href="#" class="back-button" onclick="history.back()">Back</a>
        <h1>Before it Was Cool</h1>
        <h2>Retirement Community</h2>
    </header>

    <main>
        <div class="login" >
            <form action="/home" method="GET">
            <label for="ID"><b>Patient ID</b></label>
            <input type="text" placeholder="Enter Patient ID" name="ID" required>

            <label for="password"><b>password</b></label>
            <input type="text" placeholder="Enter Patient password" name="password" required>

            <input type="submit" value="Submit">
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </form>
        </div>
        <div class="Familylogin" >
            <form action="/familyhome" method="GET">
            <label for="ID"><b>Or enter Your Family Code Here!</b></label><br>
            <input type="text" placeholder="Enter Family Code" name="ID" required>
            <input type="submit" value="Submit">
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </form>
        </div>
    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </main>

    <footer>
    </footer>
</body>
</html> 