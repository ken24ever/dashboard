<?php
$usrID=$firstName=$lastName=$mda=$state=$gender=$joined=$dob=$Email=$passWd="";
// Initialize the session
session_start();
    //connect to db
    include("includes/db_connect.php");
$table ="";
if (isset($_SESSION['email'])){
    // header("location:dashboard.php");
   }
   else{
    header("location:index.php");
   }
   $_SESSION['email'];

     // Prepare a select statement
     $sql = "SELECT * FROM users WHERE email = ?";

     $stmt = mysqli_stmt_init($conn);
    $get_stmt_prepared= mysqli_stmt_prepare($stmt, $sql);

   if(!$get_stmt_prepared){
       $output_msg .= "SQL statement failed!";
      // return false;
   }else{
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
    // execute query
    mysqli_stmt_execute($stmt) ; 
    //here get results from query          
    $result = mysqli_stmt_get_result($stmt);
  
    //loop
   while($row = mysqli_fetch_assoc($result)){
     
            $usrID = $row['id'];
            $Email = $row['email'];
            $passWd = $row['passwd'];
            $firstName = $row["firstName"];
            $lastName = $row["lastName"]; 
            $state = $row["State_loc"]; 
            $mda = $row["mda"]; 
            $joined = $row["created_at"]; 
            $gender = $row["sex"]; 
            $dob = $row["dob"]; 
            

    } //end of while loop

$table .= "<table>";
$table .= "<tr>";
$table .= "<th>EMAIL ADDRESS</th>";
$table .= "<th>FIRST NAME</th>";
$table .= "<th>LAST NAME</th>";
$table .= "<th>GENDER</th>";
$table .= "<th>STATE</th>";
$table .= "<th>MDA</th>";
$table .= "<th>JOINED</th>";
$table .= "</tr>";
$table .= "<tr>";
$table .= "<td>". $Email."</td>";
$table .= "<td>". $firstName."</td>";
$table .= "<td>". $lastName."</td>";
$table .= "<td>". $gender."</td>";
$table .= "<td>". $state."</td>";
$table .= "<td>". $mda."</td>";
$table .= "<td>". $joined."</td>";
$table .= "</tr>";
$table .= "</table>";

    echo $table;

   }//end of else

?>
