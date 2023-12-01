
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
    font-family: Bradley Hand, cursive	;

}

/* Header styling */
header {
    background-color:#256685;
    color: white;
    padding: 0.25rem;
    text-align: center;
    width:auto;
}
.slogan{
    font-size:30px;
    margin-top:50px;
}

.logo{
    height:auto;
    width:20%;
    float:left;
    padding:0;
}

/* Main content styling */
main {
    flex: 1;
    padding: 1rem;
    background-color:#6497b1;
}

text {
    font-family: "Geogia", serif;
}

#signup {
    background-color:#256685;
    color: white;
    padding: 0.5rem;
    text-align: center;
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
    float:left;
}

.back-button:hover {
    background-color: #13455e;
}

/* Nav Bar Styling */

nav {
    text-align: center;
    margin-top: 0; /* Pushes the nav to the bottom of the header */

}
nav button {
    background-color: transparent;
    cursor: pointer;
    border: none;
    font-size: 30px; /* Adjusted font size to make buttons very large */
}

nav button:hover {
    background-color: #13455e; /* Change the background color on hover */
} 

/* Remove bullets and padding from list */
ul {
 list-style-type: none;
 padding: 0;
 display: flex;
 justify-content: left;
}

/* Change the background color on hover */
li:hover {
 background-color: #13455e;
}

/* Remove underline from links and align them horizontally */
li {
 font-family: Bradley Hand, cursive	;
 border-style:solid 2px;
 display: inline;
 margin-left: 50px; 
 background-color: #6497b1;
 padding: 20px 20px;
 border-radius: 5px;
}

li a {
 text-decoration: none;
 color: white;
}
/* Footer styling */
footer {
    background-color:#13455e;
    color: white;
    text-align: center;
    padding: 1rem;
    font-family: "Geogia", Georgia, serif;

}    

.footer-container{

}

/* Random Riley CSS */
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
<body>
        <!-- Add your header content here -->    
    <header>
    <a href="#" class="back-button" onclick="history.back()">Back</a>
    <img src="images/logowhiteFinal.png"  class="logo" >
    <p class="slogan">Where retirement became timeless, before it was cool!</p>
    
<nav>
    <ul>
        <li><button><a href="#home">Home</a></button></li>
        <li><button><a href="#about">About</a></button></li>
        <li><button><a href="#contact">Contact</a></button></li>
        <li><button><a href="#review">Leave a Review</a></button></li>
    </ul>
</nav>

        @yield('head')  
    </header>
        <div>
        @yield('slide')
        </div>    
    <main>
        <div>
        @yield('content')
        </div>
    </main>



    <footer>
        <!-- Add your footer content here -->        
        <div class="footer-container">
           @yield('footer') 
           <!-- <img class="logo" src="images\logos_black.png" alt="Before it Was Cool Logo"> -->

        <p>&copy; {{ date("Y") }} Before it Was Cool. All rights reserved.</p>
        </div>
    </footer>

    <!-- Add your JavaScript scripts or include a JS file here -->
</body>
</html>


