<?php
 // Initialize the session
 session_start();
 $_SESSION['last_login_timestamp'] = time();
 //include("inactivity.php");
 if (isset($_SESSION['email'])){
  // header("location:dashboard.php");
 }
 else{
  header("location:index.php");
 }



?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   

    <link rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css">
    
    <script src="jquery/jquery-3.6.0.min.js"></script>
  
   <script src="js/bootstrap_js/bootstrap.bundle.min.js"></script>
   <script src="js/bootstrap_js/bootstrap.js"></script>
   <script src="js/bootstrap_js/bootstrap.min.js"></script>  
 <link rel="stylesheet" href="font_awe_6/css/all.css">
 <link rel="stylesheet" href="css/modal.css">
 <link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="package/dist/sweetalert2.min.css">
<script src="package/dist/sweetalert2.min.js"></script>
<script src="package/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="font_awe_6/css/all.css">


<script src="js/fileUpload.js"></script>

<script src="js/display_profile_details.js"></script>
<link rel="stylesheet" href="toastr/build/toastr.min.css">

<style>
  #targetLayer{
    height:50% !important;
    width: 50% !important;
    margin-left: auto;
  margin-right: auto;
  
    
  }
  #targetLayer img{
    
    display: block;
  margin-left: auto;
  margin-right: auto;
  border: 1px solid white;
  border-radius: 4px;
  padding: 5px;
  max-width: 100% !important;
  height: auto !important;
  object-fit: cover;
  
  }
</style>

<script src="js/inactive_page.js"></script>
</head>
<body>
<script src="toastr/build/toastr.min.js"></script>
      <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top justify-content-center">
        <a class="navbar-brand" href="#"><img src="images/index.jpg" class="img-circle img-responsive"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-id-card"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><b><i class="fa-solid fa-user"></i> <?php echo  $_SESSION['firstname'] ;?> </b></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
            </li>
          </ul>
        </div>  
      </nav>
     
      <script>
  $(document).ready((function(){
    function toasterOptions() {
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "100",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "show",
        "hideMethod": "hide"
    };
};


toasterOptions();
     toastr.success( "Hello!  "+'<?php echo  $_SESSION['firstname']; ?>'+" Welcome Onboard!", "DASHBOARD" )
      
  
  })())
</script>
    <!--   <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><h1>WELCOME!</h1></strong>
        <h2 style="font-variant:small-caps;color:lightcoral; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><?php echo  $_SESSION['firstname']?>!</h2>
      </div> -->
      
     <div class="item_container">
         

        <div class="div_">
            <div class="card">
                <div class="header">
                  <p class="fontawe1"><i class="fa-solid fa-user-tie"></i></p>
               
                </div><!--end of header--> 

                <div class="container">
                    <p class="btn btn-primary" id="myBtn2">View Profile!</p>
                  </div><!--end of container--> 
                </div><!--end of card--> 
        </div> <!--end of div_-->   

        <div class="div_">
           
            <div class="card">
                <div class="header">
                  <p class="fontawe1"><i class="fa-solid fa-upload"></i></p>
                </div><!--end of header--> 

                <div class="container">
                    <p class="btn btn-info" id="myBtn1">Upload Docs!</p>
                  </div><!--end of container--> 
                </div><!--end of card--> 
        </div> 
        <div class="div_">
            <div class="card">
                <div class="header">
                  <p class="fontawe1"><i class="fa-solid fa-pen-to-square"></i></p>
                </div><!--end of header--> 

                <div class="container">
                    <p class="btn btn-primary" id="myBtn3">Update Profile!</p>
                  </div><!--end of container--> 
                </div><!--end of card--> 
         
        </div>  
        
     </div>    
<!--footer section-->
<div class="footer">
    <h2>Footer</h2>
    <p>&copy; 2022, Powered by Edo State ICTA.</p>
    </div>


<!-- Modal section -->


<!-- The Modal one-->
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
    <div class="modal-header2">
      <span class="close2">&times;</span>
      <center><h2>Profile</h2></center>
    </div>
    <div class="modal-body2">
      <div class="profile_images_card">
            
      <div class="profile_images">

        <img src="images/img_avatar.png" id="upload_img">
      
      </div>

      <div class="custom_file">
        <label for="file_upload" id="file_upload">Upload Pic:</label>
        <input type="file" id="fileUpload">
      </div>
<script>
  $(function (){
    $("#fileUpload").change(function(event){
      var dispPic = URL.createObjectURL(event.target.files[0]);  
     // console.log(event)
     $("#upload_img").attr('src', dispPic);
    })
  })
</script>

      </div><!--end of profile_images_card-->

     <!--  <div id="dispProfile" style="overflow-x:auto;"></div> -->
     <!-- a simple display of profile details -->
<hr>
      <div class="detail_container">
        <div>
        <p class="details"><label for="">Email:</label>&nbsp;&nbsp;<?php echo $_SESSION['email']; ?> </p>
        </div>
         <hr>
        <div>
        <p class="details"><label for="">First Name:</label>&nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?> </p>
        </div>
        <hr>
        <div>
        <p class="details"><label for="">Last Name:</label>&nbsp;&nbsp;<?php echo $_SESSION['lastname']; ?></p>
        </div>
        <hr>
        <div>
        <p class="details"><label for="">MDA:</label>&nbsp;&nbsp;<?php echo $_SESSION['mda']; ?></p>
        </div>
        <hr>
        <div>
        <p class="details"><label for="">Gender:</label>&nbsp;&nbsp;<?php echo $_SESSION['sex']; ?></p>
        </div>
        <hr>
        <div>
        <p class="details"> <label for="">Joined:</label>&nbsp;&nbsp;<?php echo $_SESSION['created_at']; ?></p>
        </div>
        <hr>

      </div><!-- end of detail container-->


    </div><!--end of modal body2-->
    <div class="modal-footer2">
      <center> <p>&copy; 2022, Powered by Edo State ICTA.</p></center>
    </div>
  </div>

</div>


<!-- 2nd modal -->
<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <div class="modal-header1">
      <span class="close1">&times;</span>
      <center><h2>Upload File</h2></center>
    </div>
    <div class="modal-body1">
    <div class="jumbotron">
  <div class="container">
  <form onSubmit="return false;">
    <div class="row">
      <div class="col-25">
        <label for="file_upload">Select File:&nbsp; </label>
      </div>
      <div class="col-75">
        <input type="file" id="file_to_upload" name="file_upload">
      </div>
    </div>

    <div class="row">
            <div class="col-25">
              <label for="fileName">File Name:</label>
            </div>
            <div class="col-75">
        <input type="text" placeholder="Enter file name" id="filename" name="filename">
      </div>
          </div>


    <div class="row">
      <input type="submit" value="Upload" class="btn btn-danger" onClick="uploadfile()">
    </div>

    </form>
    <br>
    <br>
  <iframe id="targetLayer" frameborder="0" scrolling="yes"></iframe>
</div>
</div><!-- end of jumbotron--->
    </div>

    <div class="modal-footer1">
      <center> <p>&copy; 2022, Powered by Edo State ICTA.</p></center>
    </div>
  </div>

</div>

<!-- The Modal one-->
<div id="myModal3" class="modal3">

  <!-- Modal content -->
  <div class="modal-content3">
    <div class="modal-header3">
      <span class="close3">&times;</span>
      <center><h2>Update Profile</h2></center>
    </div>
    <div class="modal-body3">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer3">
      <center> <p>&copy; 2022, Powered by Edo State ICTA.</p></center>
    </div>
  </div>

</div>





<script src="js/modal.js"></script>
</body>

</html>