<?php
 session_start();
 
// Define variables and initialize with empty values
$email= $password=$output_msg="";
 
// Processing form data when form is submitted
if( isset($_POST['em']) && isset($_POST['pass']) && $_SERVER["REQUEST_METHOD"] == "POST"){
     
   


    //connect to db
     include("includes/db_connect.php");

      //now we validate data from javascript
      function test_input($data) {
        $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
        return $data;
          } //end of test_input

          //now assign variables locally
          $email = test_input($_POST["em"]); 
          $password = test_input($_POST["pass"]);
          $lastSignIn = date("d-m-y");
          $password = md5($password);
    


           

        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE email = ?";

          $stmt = mysqli_stmt_init($conn);
         $get_stmt_prepared= mysqli_stmt_prepare($stmt, $sql);

        if(!$get_stmt_prepared){
            $output_msg .= "SQL statement failed!";
           // return false;
        }
        else{
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $email);
            // execute query
            mysqli_stmt_execute($stmt) ; 
            //here get results from query          
            $result = mysqli_stmt_get_result($stmt);
          
            //loop
           while($row = mysqli_fetch_assoc($result)){
             
                    $usrID = $row['id'];
                    $Email = $row['email'];
                    $passWd = $row['passwd'];
                    $usrStatus = $row['user_status'];
                    $firstName = $row["firstName"];
                    $lastName = $row["lastName"]; 
                    $mda = $row["mda"]; 
                    $gender = $row["sex"]; 
                    $created = $row['created_at'];

                         //here we assign the local variables to session super global variable  
             $_SESSION['id'] = $usrID;
                $_SESSION['email'] = $Email;
                $_SESSION['firstname'] = $firstName;
               $_SESSION['lastname'] = $lastName;
                $_SESSION['password'] = $passWd;
                $_SESSION['userStat'] = $usrStatus;
                $_SESSION['mda'] =  $mda ;
                $_SESSION['sex'] =  $gender;
                $_SESSION['created_at'] =$created;
                $_SESSION['last_login_timestamp'] = time();
            } //end of while loop

                    if (mysqli_num_rows($result) > 0 && $usrStatus == 1 && $passWd == $password  ){
             
                        //update the login table
                        $sql2 = "UPDATE user_login SET user_ids=?, last_login=? WHERE email = ?";
                        $stmt2 = mysqli_stmt_init($conn);
                        mysqli_stmt_prepare($stmt2, $sql2);
                     // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt2, "iss", $usrID, $lastSignIn, $Email);
                    // execute query
                    mysqli_stmt_execute($stmt2) ; 
                    
                      
 
               $output_msg .= 3 ;  
                    
                    } elseif (mysqli_num_rows($result) < 1){
                        $output_msg .= 0;
                    }
                    elseif (mysqli_num_rows($result) > 0 && $usrStatus == 0){
           
                            $output_msg .= 1;
                            //return false;
                    }elseif (mysqli_num_rows($result) > 0 && $passWd != $password ){
           
                        $output_msg .=2;
                        //return false;
                    }
                
                    echo $output_msg;
                    
         

           
            
         }// end of  else stmt
            
    
        

            // Close connection
            mysqli_close($conn);

        }// end of if isset  





   


?>

