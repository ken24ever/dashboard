<?php
 // Initialize the session
 session_start();
 
 if (isset($_SESSION['email'])){
  // header("location:dashboard.php");
 }
 else{
  header("location:index.php");
 }




/* 
 $filename="";
 $target_directory ="";
 $target_file = "";
 $filetype ="";
 $newfilename ="";
 $moved_docs="";
 */
  
 $filename = $_POST["filename"];// filename from forn input section
 $target_directory = $_SESSION['firstname']."_".$_SESSION['lastname']."/";
 $target_file = $target_directory.basename($_FILES["file"]["name"]); // gets the file name of uploaded file
 $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); 
 $newfilename = $target_directory.$filename.".".$filetype;
 $moved_docs = move_uploaded_file($_FILES["file"]["tmp_name"], $newfilename); // tmp_name is the file temporarily stored in  server
  
 if ($moved_docs ) {
    echo "<img src=".$newfilename."  title=".$filename.">";
 }
 else{
     echo "Upload_failed";
 }
 //}//end of if isset
 

?>