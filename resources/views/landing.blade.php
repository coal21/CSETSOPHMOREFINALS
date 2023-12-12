@extends('layout.layout')



@section('slide')


<head>

  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    #slideshow-container {
      position: relative;
      margin: 0;
      background-color:#6497b1;
    
    }

    .mySlides {
      display: none;
    }

    .slideshow-img {
      width: 75%;
      height: 500px;
      padding:0;
      margin-bottom:0;
    }

    .text-container {
      position: absolute;
      top: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.5); 
      height: 505px;
      width: 25%;
      text-align: center;
      font-size: 25px;
      padding: 0;
      margin:0;
    }

    .text {
      padding: 50px;
      color: #333;

    }

    
    .login-signup-container {
      position: absolute;
      top: 60%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      margin:0;
    }


    .login-button, .signup-button {
      padding: 10px;
      font-size: 20px;
      cursor: pointer;
      background-color: rgba(255, 255, 255, 0.5); 
      border: none;
      margin: 5px;
      width:160px;
    }

    .login-button a, .signup-button a {
      text-decoration: none;
      color: #333;
      display: block; 
      width: 100%; 
      height: 100%;
    }
    
  </style>
</head>
<body>

<div id="slideshow-container">
  <div class="mySlides">
    <img class="slideshow-img" src="images/crafts.jpg" alt="Slide 1">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
        <div class="login-signup-container">
            <a href='/login'><button class="login-button">Login</button></a>
            <a href='/signup'><button class="signup-button">Sign Up</button></a>
        </div>
    </div>
</div>

  <div class="mySlides">
    <img class="slideshow-img" src="images/happy.jpg" alt="Slide 2">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <a href='/login'><button class="login-button">Login</button></a>
            <a href='/signup'><button class="signup-button">Sign Up</button></a>
        </div>
    </div>
</div>

  <div class="mySlides">
    <img class="slideshow-img" src="images/bike.jpg" alt="Slide 3">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <a href='/login'><button class="login-button">Login</button></a>
            <a href='/signup'><button class="signup-button">Sign Up</button></a>
        </div>
    </div>
</div>

  <div class="mySlides">
    <img class="slideshow-img" src="images/chess.jpg" alt="Slide 4">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <a href='/login'><button class="login-button">Login</button></a>
            <a href='/signup'><button class="signup-button">Sign Up</button></a>
        </div>
    </div>
</div>

  <div class="mySlides">
    <img class="slideshow-img" src="images/kid.jpg" alt="Slide 5">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <a href='/login'><button class="login-button">Login</button></a>
            <a href='/signup'><button class="signup-button">Sign Up</button></a>
        </div>
    </div>
</div>
  <div class="mySlides">
    <img class="slideshow-img" src="images/pets.jpg" alt="Slide 6">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <a href='/login'><button class="login-button">Login</button></a>
            <a href='/signup'><button class="signup-button">Sign Up</button></a>
        </div>
    </div>
</div>

</div>


<script>
  let slideIndex = 0;

  function showSlides() {
    let i;
    const slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 6000); // Change slide every 6 seconds
  }

  showSlides();
</script>



@endsection

@section('content')
<style>

section {
            /* margin-bottom: 2rem; */
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
        }

        .info{
                }
        .events{
          padding: 1rem;
          background-color:#92b2c2;   
          background-attachment: fixed;
          border-radius: 5px;
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
          margin-bottom: 4rem;
        }

        main{
        background-color:#d3e0e6;
        }
        .story{
          padding: 1.5rem;
          background-attachment: fixed;
          /* background-color: #d3e0e6; */
          background-color: #92b2c2;
          border-radius: 5px;
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
          margin-bottom: 1rem;
          font-size:20px;
          margin-top: 5rem;
          margin-bottom: 5rem;
        }

        .news {
            background-color: #92b2c2;
            padding: 1.5rem;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-top: 5rem;
            margin-bottom: 3rem;        }

        .separator {
            width: 100%;
            height: 1px;
            background-color: #50849d;
            margin: 20px 0;
        }

</style>

<main>
  <body>

        <section class="story">
            <h2>Our Story</h2>
            <p>In the quaint town of Serenity Springs, a vision bloomed from the hearts of compassionate souls—Before It Was Cool Retirement Home. <br>
              With a shared dream of creating a haven for the golden years, a diverse group of friends turned their collective wisdom into reality.
              The genesis unfolded in <br>laughter-filled brainstorming sessions and echoed with memories of bygone days.
              In a refurbished building, they transformed faded walls into warm, vibrant hues. 
              <br>Each room whispered tales of resilience and joy, ready to be filled with the laughter of newfound companionship. 
              The communal spaces were adorned with photographs capturing a lifetime of adventures—snapshots of love, loss, and triumph. 
              A communal garden became a testament to shared dreams and continued growth.
              <br><br>Before It Was Cool wasn't just a retirement home; it was a sanctuary where life's journey continued, 
              adorned with camaraderie and the sweet melody of lifelong friendships. 
              It began not as a place but as a heartfelt promise—a promise to make every moment, even in retirement, 
              an adventure worth living.
            </p>
        </section>

        <div class="separator"></div>


        <section class="events">
            <h2 style="text-align: center;">Arts and Crafts Events</h2>
            <ul>
                <li>
                    <h3>Art Workshop</h3>
                    <p>Date: January 15, 2023</p>
                    <p>Time: 2:00 PM - 4:00 PM</p>
                    <p>Location: Senior Center</p>
                    <p>Join us for a creative art workshop where you can explore your artistic talents!</p>
                </li>
                <li>
                    <h3>Craft Fair</h3>
                    <p>Date: February 10, 2023</p>
                    <p>Time: 10:00 AM - 12:00 PM</p>
                    <p>Location: Community Hall</p>
                    <p>Don't miss our craft fair featuring handmade crafts by our talented senior citizens.</p>
                </li>
                <li>
                    <h3>Quilting Class</h3>
                    <p>Date: March 5, 2023</p>
                    <p>Time: 1:30 PM - 3:30 PM</p>
                    <p>Location: Art Studio</p>
                    <p>Learn the art of quilting in our relaxing and enjoyable quilting class.</p>
                </li>
                <li>
                    <h3>Pottery Workshop</h3>
                    <p>Date: April 20, 2023</p>
                    <p>Time: 3:00 PM - 5:00 PM</p>
                    <p>Location: Pottery Studio</p>
                    <p>Get your hands dirty and create beautiful pottery in our pottery workshop.</p>
                </li>
            </ul>
        </section>

        <div class="separator"></div>

        
        <section class="news">
          
            <h2>Latest News</h2>
            <ul>
        <li>
            <h3>Community Spotlight</h3>
            <p>Published on: May 15, 2023</p>
            <p>In this edition of our community spotlight, we highlight the incredible achievements and contributions of our community members. Read inspiring stories of resilience and success!</p>
        </li>
        <li>
            <h3>Grand Opening Celebration</h3>
            <p>Published on: June 8, 2023</p>
            <p>Join us for the grand opening celebration of our new community center. It will be a day filled with joy, laughter, and community spirit!</p>
        </li>
        <li>
            <h3>Health and Wellness Seminar</h3>
            <p>Published on: July 20, 2023</p>
            <p>Take charge of your well-being! Attend our upcoming health and wellness seminar featuring expert speakers and interactive sessions on maintaining a healthy lifestyle.</p>
        </li>
        <li>
            <h3>Technology Workshop for Seniors</h3>
            <p>Published on: August 12, 2023</p>
            <p>Embrace technology! Participate in our workshop designed to empower seniors with the knowledge and skills to navigate the digital world with confidence.</p>
        </li>
            </ul>
        </section>
  </body>
</main>
@endsection


