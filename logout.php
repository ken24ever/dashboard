
<?php
session_start();
  //connect to db

// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("location:index.php");

?>