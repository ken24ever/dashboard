
<?php
 // Initialize the session
 session_start();
 
 if (isset($_SESSION['email'])){
   header("location:dashboard.php");
 }
 else{
  // header("location:index.php");
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap_css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap_css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/bootstrap_css/bootstrap.css">
<link rel="stylesheet" href="css/index.css">




<style>
 .content {
      padding: 0px;
      height: 600px;
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(images/1.jpg);
   background-position: center;
   background-repeat: no-repeat;
  background-size: cover;
  margin: -5px;
  position: relative; 
  
  }
</style>
<script src="jquery/jquery-3.6.0.min.js"></script>
<link rel='stylesheet' type='text/css' media='screen' href='css/photoGallery.css'>
<link rel="stylesheet" href="font_awe_6/css/all.css">
<link rel="stylesheet" href="package/dist/sweetalert2.min.css">
<script src="package/dist/sweetalert2.min.js"></script>

<!-- <link rel="stylesheet" href="sweetalert_toast/toastr.min.css"> -->
<!-- <script src="sweetalert_toast/toastr.min.js"></script> -->

<script src="js/login.js"></script>
</head>
<body>
<!--header section-->
<div class="header">
  <p class="welcome_text">Welcome To Our Co-operative</p>
  <p class="lead"><quotes>A place where you can find financial fulfilment!</quotes></p>
</div><!--end of header-->

<!--navbar section-->
<div id="navbar" class="topnav" >

    <a href="index.php" class="active">Home</a>
    <a href="signup.php">Register</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    <a href="javascript:void(0);" style="font-size:18px;" class="icon" onclick="myFunction1()">&#9776;</a>
</div><!--end of navbar-->

<!--Top content section with backgroung-image and login form-->
<div class="content ">
   
    <form class="container1">
        <h4 style="color:green;  text-shadow: 2px 1px black; text-align: center; ">Login here.</h4>
    
        <label for="email"><b style="color:rgb(28, 156, 199); text-shadow: 2px 1px black;">Email</b></label>
        <input type="email" placeholder="Enter Email" id="email" name="email" >
    
        <label for="psw"><b style="color:rgb(28, 156, 199); text-shadow: 2px 1px black;">Password</b></label>
        <input type="password" placeholder="Enter Password" class="passwrd" name="psw" id="myInput" >
        <p id="text">WARNING! Caps lock is ON.</p>
        <!-- An element to toggle between password visibility -->
        <label for="shwPwd"><b style="color:rgb(28, 156, 199); text-shadow: 1px 1px black; font-size:16px">Show Password
      </b></label><input type="checkbox" onClick="viewPass()">
        
        <p class="forgot_pass"><a href="#">Forgot Password?</a></p>
        
    
        <button type="submit" class="btn" id="submitBtn">Login</button>
      </form>
     
</div><!--end of content-->

<!--flex box section-->
<div  class="flex_container">
  <div class="flex_item1"> 
      <p><u>News Feeds</u></p>

      <p class="news">
              Top Nigerian gosper singer died from domestic violence
      </p>

  </div><!--end of flex_item1-->
  <div class="flex_item2">
      <p style="text-align:center"><u>Slideshow Gallery</u></p>

      <div class="container">
        <div class="mySlides">
          <div class="numbertext">1 / 6</div>
          <img src="images/2.jpg" style="width:100%">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">2 / 6</div>
          <img src="images/1.jpg" style="width:100%">
        </div>
      
        <div class="mySlides">
          <div class="numbertext">3 / 6</div>
          <img src="images/3.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">4 / 6</div>
          <img src="images/1.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">5 / 6</div>
          <img src="images/2.jpg" style="width:100%">
        </div>
        <div class="mySlides">
          <div class="numbertext">6 / 6</div>
          <img src="images/3.jpg" style="width:100%">
        </div>
        
          
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      
        <div class="caption-container">
          <p id="caption"></p>
        </div>
      
        <div class="row">
          <div class="column">
            <img class="demo cursor" src="images/2.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
          </div>
          <div class="column">
            <img class="demo cursor" src="images/1.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
          </div>
          <div class="column">
            <img class="demo cursor" src="images/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
          </div>
          <div class="column">
            <img class="demo cursor" src="images/1.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
          </div>
          <div class="column">
            <img class="demo cursor" src="images/2.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
          </div>    
          <div class="column">
            <img class="demo cursor" src="images/3.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
          </div>
        </div>
      </div>
      
  </div><!--end of flex_item2-->
  <div class="flex_item3">
      <p><u>About Us</u></p>
      <p class="news">
         About us goes here!
  </p>   
  </div><!--end of flex_item3-->

  </div><!--end of flex_container-->
  
<!--gallery js slider-->
<script>
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
  </script>


<!--footer section-->
<div class="footer">
<h2>Footer</h2>
<p>&copy; 2022, Powered by Edo State ICTA.</p>
</div>


</body>


<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_js_navbar_sticky by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:38:46 GMT -->
</html>

<!--sticky javascript effects-->
<script>
   
    
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }

    window.onscroll = function() {myFunction()};
    </script>

    <!--small screen javascript-->
<script>
    function myFunction1() {
  var x = document.getElementById("navbar");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

 <!--password visibility script-->
 <script>
        function viewPass() {
  var passVisibility = document.getElementById("myInput");
  if (passVisibility.type === "password") {
    passVisibility.type = "text";
  } else {
    passVisibility.type = "password";
  }
}
        </script>

        <script>
          var input = document.getElementById("myInput");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});

        </script>