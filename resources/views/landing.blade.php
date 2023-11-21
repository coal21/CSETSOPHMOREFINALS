@extends('layout.layout')


@section('slide')


<head>

  <style>
    body {
      /* font-family: Comic Sans MS, Comic Sans, cursive; */
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color:#6497b1;

    }

    #slideshow-container {
      position: relative;
      margin: auto;
      
    }

    .mySlides {
      display: none;
    }

    .slideshow-img {
      width: 75%;
      height: 500px;
    }

    .text-container {
      position: absolute;
      top: 0;
      right: 0;
      background-color: rgba(255, 255, 255, 0.5); /* Adjust the opacity here */
      height: 500px;
      width: 25%;
      text-align: center;
      font-size: 25px;
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
    }

    .login-button, .signup-button {
      padding: 10px;
      font-size: 20px;
      cursor: pointer;
      background-color: rgba(255, 255, 255, 0.5); /* Adjust the opacity here */
      border: none;
      margin: 5px;
      width:160px;
    }

    .login-button a, .signup-button a {
      text-decoration: none;
      color: #333;
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
            <button class="login-button"><a href='/login'>Login</a></button>
            <button class="signup-button"><a href='/signup'>Sign Up</a></button>
        </div>
    </div>
</div>

  <div class="mySlides">
    <img class="slideshow-img" src="images/happy.jpg" alt="Slide 2">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <button class="login-button"><a href='/login'>Login</a></button>
            <button class="signup-button"><a href='/signup'>Sign Up</a></button>
        </div>
    </div>
</div>

  <div class="mySlides">
    <img class="slideshow-img" src="images/bike.jpg" alt="Slide 3">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <button class="login-button"><a href='/login'>Login</a></button>
            <button class="signup-button"><a href='/signup'>Sign Up</a></button>
        </div>
    </div>
</div>

  <div class="mySlides">
    <img class="slideshow-img" src="images/chess.jpg" alt="Slide 4">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <button class="login-button"><a href='/login'>Login</a></button>
            <button class="signup-button"><a href='/signup'>Sign Up</a></button>
        </div>
    </div>
</div>

  <div class="mySlides">
    <img class="slideshow-img" src="images/kid.jpg" alt="Slide 5">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <button class="login-button"><a href='/login'>Login</a></button>
            <button class="signup-button"><a href='/signup'>Sign Up</a></button>
        </div>
    </div>
</div>
  <div class="mySlides">
    <img class="slideshow-img" src="images/pets.jpg" alt="Slide 6">
    <div class="text-container">
      <div class="text"><p>Join Before It Was Cool Retirement Community Today!</p></div>
      <div class="login-signup-container">
            <button class="login-button"><a href='/login'>Login</a></button>
            <button class="signup-button"><a href='/signup'>Sign Up</a></button>
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
    setTimeout(showSlides, 2000); // Change slide every 2 seconds
  }

  showSlides();
</script>



@endsection

@section('content')

@endsection

