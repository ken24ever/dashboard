
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}


.welcome_text {
  text-align: center;
  text-transform: uppercase;
  color:darkslategrey;
  text-shadow: 2px 1px black;
  font-size: 50px;
  font-weight: bolder;
  font-family: tahoma !important;
}

.lead {
  text-indent: 20px;
  text-align: center;
  letter-spacing: 3px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-variant: small-caps;
  font-size: 20px;
  text-shadow: 1px 1px black;
}
.header {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  z-index: 100;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-weight: bold;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: darkgrey;
  color: white;
}

.topnav .icon {
     display: none;
     }


.content {
    padding: 12px;
    height: 1000px;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(images/1.jpg);
 background-position: center;
 background-repeat: no-repeat;
background-size: cover;
margin: -5px;
position: relative; 

}


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding: 25px;
}

.footer{
  margin: 0px auto;
  text-align: center;
  height: 200px;
  color: #f2f2f2;
  background-color: #333;
  border-top: 2px solid black;
  border-bottom: 2px solid black;
  border-left: none;
  border-right: none;

}
/*****form style*****/
    /* Add styles to the form container 
   .container1 {

  margin: 60px;
  max-width: 1000px;
  float: left;
  padding: 16px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(226, 223, 223, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 5px;
}

*/
/* Full-width input fields 
input[type=text], input[type=password] {
 
  font-size: 15px;
  padding: 5px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  border-radius: 5px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  border: 2px solid lightblue;
}
*/
/* Set a style for the submit button
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  font-size: 30px;
  font-weight: bolder;
  text-shadow: 2px 2px black;
  border-radius: 10px;
}

.btn:hover {
  opacity: 1;
} 
 */

 input[type=text], select, input[type=email],input[type=password],input[type=date] {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  text-transform:capitalize;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:rgb(28, 156, 199);
  text-shadow: 2px 1px black;

}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 18px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 20px;
  text-shadow: 2px 1px black;
 
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container2 {
margin: 20px auto;
  border-radius: 5px;
  background-color: whitesmoke;
  padding: 20px;
  max-width: 700px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

 
/********small screen styling using media queries************/
@media screen and (max-width: 600px) {
                     .topnav a:not(:first-child) {display: none;}
                     .topnav a.icon {
                         float: right;
                         display: block;
                        }
                        }/****end of 1st media quaries*****/

                        @media screen and (max-width: 600px) {
                                .topnav.responsive {
                                  position: relative;
                                  transition: height 4s;
                                  -webkit-transition: height 4s ease-out;
                                  
                                }
                                 .topnav.responsive .icon {
                                  position: absolute;
                                    right: 0;
                                    top: 0;
                                    transition: 1.5s;
                            }
    /*****form style*****/
   /* Add styles to the form container */
/*    .container1 {
margin: 60px;
max-width: 1100px;
float: left;
padding: 16px;
background-color: white;
box-shadow: 0 4px 8px 0 rgba(226, 223, 223, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
border-radius: 5px;
} */

                            /* Set a style for the submit button */
/* .btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
  width: 60%;
  opacity: 0.9;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  font-size: 20px;
  font-weight: bolder;
  text-shadow: 2px 2px black;
  border-radius: 10px;
}
 */
            /*************style for header content**************/

            .welcome_text {
  text-align: center;
  text-transform: uppercase;
  color:darkslategrey;
  text-shadow: 2px 1px black;
  font-size:25px !important;
}

.lead {
  text-indent: 20px;
  text-align: center;
  letter-spacing: 3px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-variant: small-caps;
  font-size: 20px;
  text-shadow: 1px 1px black;
  font-weight: 500px;
}
.header {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/*************screeen display below 600px**************/


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding: 25px;
}

.content {
    padding: 12px;
    height: 1000px;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(images/1.jpg);
 background-position: center;
 background-repeat: no-repeat;
background-size: cover;
margin: 0px;
position: relative; 

}
  .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
             background-color:darkslategrey;
         }

     .topnav a.active {
        background-color:darkslategrey;
         color: white;
         }

      .topnav a:hover {
              background-color:azure;
              color: black;
                     }

      }/****end of 2nd media quaries*****/

</style>
<link rel="stylesheet" href="package/dist/sweetalert2.min.css">
<script src="package/dist/sweetalert2.min.js"></script>

<link rel='stylesheet' type='text/css' media='screen' href='css/photoGallery.css'>
<link rel="stylesheet" href="font_awe_6/css/all.css">

<script src="jquery/jquery-3.6.0.min.js"></script>
<script src="js/grabFormData.js"></script>
</head>
<body>
<!--header section-->
<div class="header">
  <p class="welcome_text">Register with us to benefit from all the juicy packages we have in stock for you.</p>
</div><!--end of header-->

<!--navbar section-->
<div id="navbar" class="topnav" >
    <a href="index.php" ><i class="fa-solid fa-house"></i></a>
    <a href="signup.html" class="active"><i class="fa-solid fa-user-plus"></i> Register</a>
    <a href="#contact"><i class="fa-regular fa-address-book"></i> Contact</a>
    <a href="#about">About</a>
    <a href="javascript:void(0);" style="font-size:18px;" class="icon" onclick="myFunction1()">&#9776;</a>
</div><!--end of navbar-->

<!--Top content section with backgroung-image and login form-->
<div class="content ">
   

      <div class="container2">
        <h4 style="color:green;  text-shadow: 2px 1px black; text-align: center; ">Register Now!</h4>
         <form onSubmit="return false">


          <div class="row">
            <div class="col-25">
              <label for="fname">First Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="fname" placeholder="Your name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="lname" name="lname" placeholder="Your last name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="country">Country</label>
            </div>
            <div class="col-75">
              <select id="country" name="country">
                <option value="">Select Country</option>
                <option value="Nigeria">Nigeria</option>
              </select>
            </div>
            
          </div>

          <div class="row">
            <div class="col-25">
              <label for="state">State</label>
            </div>
            <div class="col-75">
              <select id="state" name="state">
                <option value="">Select State</option>
                <option value="edo">Edo</option>
              </select>
            </div>
            
          </div>

          <div class="row">
            <div class="col-25">
              <label for="sex">Sex</label>
            </div>
            <div class="col-75">
              <select id="sex" name="sex">
                <option value="">Select Sex</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            
          </div>

    <!--       <div class="row">
            <div class="col-25">
              <label for="sex">Age</label>
            </div>
            <div class="col-75">
              <select id="state" name="age">
                <option value="">Select Age</option>
              <script>
                var x
                for(x=20; x <= 80; x++ ){
                 document.write("<option>"+x+"</option>");
                }
              </script>
              </select>
            </div>
            
          </div> -->

          <div class="row">
            <div class="col-25">
              <label for="dob">Date of Birth</label>
            </div>
            <div class="col-75">
              <input type="date" id="dob" name="dob" >
            </div>
            </div>
          <div class="row">
            <div class="col-25">
              <label for="mda">MDA</label>
            </div>
            <div class="col-75">
              <select id="mda" name="mda">
                <option value="">Select Ministry, Department and Agency</option>
                <option value="icta">Edo State ICTA</option>
                <option value="esipo">ESIPO</option>
                <option value="hos">Head Of Service</option>
                <option value="subeb">Subeb</option>
              </select>
            </div>
            
          </div>
         <div class="row">
            <div class="col-25">
              <label for="email">Email</label>
            </div>
            <div class="col-75">
              <input type="text" id="email" name="email" placeholder="Your Email">
            </div>
          </div> 
          
          <div class="row">
            <div class="col-25">
              <label for="pwd">Password</label>
            </div>
            <div class="col-75">
              <input type="password" id="pwd" name="pwd" placeholder="Your Password">
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="pwd">Confirm Password</label>
            </div>
            <div class="col-75">
              <input type="password" id="conf_pwd" name="conf_pwd" placeholder="Retype Password">
            </div>
          </div>
       
          <div class="row">
           <center><input type="submit" value="Submit" id="submitBtn"></center> 
          </div>
        </form>
      </div>
  

     


</div><!--end of content-->

<!--footer section-->
<div class="footer">
<h2>Footer</h2>
<p>&copy; 2022, Powered by Edo State ICTA.</p>
</div>


</body>


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
