
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Layout</title>
    <style>

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
    margin-top: 0; 

}
nav button {
    text-align: center;
    background-color: transparent;
    cursor: pointer;
    border: none;
    font-size: 25px; 
    margin: 0;
}

nav button:hover {
    background-color: #13455e; 
} 

ul {
 list-style-type: none;
 padding: 0;
 display: flex;
 justify-content: left;
}

li:hover {
 background-color: #13455e;
}

li {
 text-align: center;
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

footer {
    background-color:#13455e;
    color: white;
    text-align: center;
    padding: 1rem;
    font-family: "Geogia", Georgia, serif;

}    

.logoFooter {
    height:auto;
    width:5%;
    float:right;
    padding:0;
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
    <header>
    @if(session()->has('name'))
    <form class="back-button" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    @endif
    <a href="#" class="back-button" onclick="history.back()">Back</a>
    <img src="images/logowhiteFinal.png"  class="logo" >
    <p class="slogan">Where retirement became timeless, before it was cool!</p>
    
<nav>
    <ul>
        <li><button><a href="/">Home</a></button></li>
        <li><button><a href="/aboutus">About</a></button></li>
        <li><button><a href="/contactus">Contact</a></button></li>
        <li><button><a href="/review">Leave a Review</a></button></li>
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
        <div class="footer-container">
           @yield('footer') 
           <img src="images/logowhiteFinal.png"  class="logoFooter" >

        <p>&copy; {{ date("Y") }} Before it Was Cool. All rights reserved.</p>
        </div>
    </footer>


</body>
</html>


