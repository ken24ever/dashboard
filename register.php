<?php
// define variables and set to empty values
$firstname = $lastname = $country = $state= $gender= $dateOfBirth= $mda= $email= $password=$getdate= $error=$user_status="";

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['cntry'])&& isset($_POST['st'])
&& isset($_POST['sx']) && isset($_POST['DOB']) && isset($_POST['MDA']) && isset($_POST['em'])
&& isset($_POST['pass']) && $_SERVER["REQUEST_METHOD"] == "POST") 
{

  //now we validate data from javascript
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 



  //now assign variables locally
  $firstname = test_input($_POST["fname"]);
  $lastname =test_input($_POST["lname"]);
  $country = test_input($_POST["cntry"]);
  $state = test_input($_POST["st"]);
  $gender = test_input($_POST["sx"]);
  $dateOfBirth = test_input($_POST["DOB"]);
  $mda = test_input($_POST["MDA"]);
  $email = test_input($_POST["em"]);
  $paswd =  test_input($_POST["pass"]);
  $getdate= test_input (date("d-m-y"));
  $user_status = 0;
  $paswd = md5($paswd);


//connect to db
include("includes/db_connect.php");

 // Prepare a select statement
 $sql = "SELECT * FROM users WHERE email = ?";

 $stmt2 = mysqli_stmt_init($conn);
$get_stmt_prepared= mysqli_stmt_prepare($stmt2, $sql);
if(!$get_stmt_prepared){
  $output_msg .= "SQL statement failed!";
 // return false;
}else{
// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt2, "s", $email);
// execute query
mysqli_stmt_execute($stmt2) ; 
//here get results from query          
$result = mysqli_stmt_get_result($stmt2);

//loop
while($row = mysqli_fetch_assoc($result)){
 
        $usrID = $row['id'];
        $Email = $row['email'];
        $passWd = $row['passwd'];
        $usrStatus = $row['user_status'];
        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
       }// end of while loop 
       
        if (mysqli_num_rows($result) > 0  ){

          echo 0;

        }else{
            // prepare and bind and also insert into users table
  $stmt = $conn->prepare("INSERT INTO users (firstName , lastName , country, State_loc, sex ,dob 
  ,mda ,email ,passwd , created_at, user_status  ) VALUES (?, ?, ?,?,?,?,?,?,?,?,?)");
  $stmt->bind_param("sssssssssss", $firstname, $lastname, $country,$state,$gender,$dateOfBirth,$mda,$email,$paswd, $getdate, $user_status );
  $stmt->execute(); 
  
  // now insert into user_login table too
  $stmt1 = $conn->prepare("INSERT INTO user_login (email , paswrd, last_login, userStatus ) VALUES (?,?,?,?)");
  $stmt1->bind_param("sssi", $email, $paswd, $getdate, $user_status );
  $stmt1->execute();
  
  
  

  if (!file_exists($firstname."_".$lastname)){
  mkdir($firstname."_".$lastname,0777);
  }
  else {
    unlink($firstname."_".$lastname);
  }
  echo 1;
  mysqli_close($conn);


        }//end of else



}//end of else statement







}//end of if set








?>