
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Layout</title>
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
<body>
    <header>
    <a href="#" class="back-button" onclick="history.back()">Back</a>
        <h1>Before it Was Cool</h1>
        <h2>Retirement Community</h2>      
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>  
        <!-- Add your header content here -->

    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Add your footer content here -->
    </footer>

    <!-- Add your JavaScript scripts or include a JS file here -->
</body>
</html>


