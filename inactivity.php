<?php
//$userLoginTime=$diff="";
session_start();
 $userLoginTime = $_SESSION['last_login_timestamp'];
if (isset($userLoginTime)){

 $diff = time() - $userLoginTime;

if ($diff == 30 ){
  header("location:index.php");
echo "logout";

} 

} 

?>