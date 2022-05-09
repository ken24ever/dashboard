$(document).ready(function(){
          
    $(document). on('click','#submitBtn',  function(event){
     event.preventDefault()
           var email = $("#email").val();
           var password = $(".passwrd").val();
   
  
           if (email=="" || password==""){
  
            swal({
                title: "Ooops!",
                text: "Nothing Was Entered!",
                type: "error",
                confirmButtonText:"Exit",
                 allowOutsideClick: false,
      timer: 3000
                });

                return false;
  
           } 
          /*  else if (!email.match("@")){
            swal({
              title: "Ooops!",
              text: "Email address is invalid",
              type: "error",
              confirmButtonText:"Exit",
               allowOutsideClick: false,
    timer: 3000
              });
  
            return false;
  
           } 
           */ 
          else{
  
        $.ajax({
            method:"POST",
            beforeSend: function(){
              swal({
                title: '',
                html: '<img src="images/index.jpg"><br><br><strong>logging In Shortly...</strong>',
                allowOutsideClick: false,
               });
               swal.showLoading();
                           },
            data: {em:email,pass:password},
            url: 'login.php',
            success:function(data){ 

                if (data == 3){
                    swal({
                        text: "Welcome Onboard!",
                        type: "success",
                        confirmButtonText:"Exit",
                         allowOutsideClick: false,
              timer: 8000
                        });
                        window.location.href = "http://localhost/all_templates/dashboard.php";
                }else
                 if (data == 0){

                    swal({
                        text: "Email Address Does Not Exist!",
                        type: "error",
                        confirmButtonText:"Exit",
                         allowOutsideClick: false,
              timer: 8000
                        });
                }

                else if (data == 1){

                    swal({
                        text: "Account Not Activated Yet!",
                        type: "error",
                        confirmButtonText:"Exit",
                         allowOutsideClick: false,
              timer: 8000
                        });
                }

                else if (data == 2){

                    swal({
                        text: "Password Incorrect, Check Your Spellings!",
                        type: "error",
                        confirmButtonText:"Exit",
                         allowOutsideClick: false,
              timer: 8000
                        });
                } 
           
  
                $("#email").val("");
                $("#password").val("");
               
                // window.location.href = "http://localhost/all_templates/dashboard.php";
                //document.write(data)
                //console.log(data)              
            }
           
          
        }) //end of ajax call 
  
       
  
    }//end of else control statement
    
    })//end of doc onClick
  
  })//end of doc ready
  
  
  