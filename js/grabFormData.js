$(document).ready(function(){
          
  $(document). on('click','#submitBtn',  function(){
   // event.preventDefault()
         var fn = $("#fname").val();
         var ln = $("#lname").val();
         var country = $("#country").val();
         var state = $("#state").val();
         var sex = $("#sex").val();
         var dob = $("#dob").val();
         var mda = $("#mda").val();
         var email = $("#email").val();
         var pwd = $("#pwd").val();
         var cnf_psswd = $("#conf_pwd").val()
         if (fn == "" || ln ==""|| country=="" || state==""|| sex==""|| dob==""|| mda=="" || email=="" || pwd==""
          || cnf_psswd==""){

          swal({
              title: "Ooops!",
              text: "Nothing Was Entered!",
              type: "error",
              confirmButtonText:"Exit",
               allowOutsideClick: false,
    timer: 3000
              });
              return false;

         }else if (pwd != cnf_psswd){
          swal({
            title: "Ooops!",
            text: "Password Fields Mis-Matched!",
            type: "error",
            confirmButtonText:"Exit",
             allowOutsideClick: false,
  timer: 3000
            });

          return false;
         } 
         
         else if (!email.match("@")){
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
         else{

      $.ajax({
          method:"POST",
          beforeSend: function(){
            swal({
              title: '',
              html: '<img src="images/index.jpg"><br><br><strong>loading...</strong>',
              allowOutsideClick: false,
             });
             swal.showLoading();
                         },
          data: {fname:fn, lname:ln, cntry:country, st:state, sx:sex, DOB:dob, MDA:mda,em:email,pass:pwd, cnfPass:cnf_psswd},
          url: 'register.php',
          success:function(data){ 
            //console.log(data)

            if (data == 0){
            swal({
              text: "Email Already Exists!",
              type: "error",
              confirmButtonText:"Exit",
               allowOutsideClick: false,
    timer: 8000
              });

              $("#pwd").val("");
              $("#conf_pwd").val(""); 
              //return false;
            }else if(data == 1){
              swal({
                text: "Registration Successful!",
                type: "success",
                confirmButtonText:"Exit",
                 allowOutsideClick: false,
      timer: 8000
                });



                $("#fname").val("");
                $("#lname").val("");
                $("#country").val("");
                 $("#state").val("");
                 $("#sex").val("");
                 $("#dob").val("");
                 $("#mda").val("");
                 $("#email").val("");
                 $("#pwd").val("");
                 $("#conf_pwd").val(""); 


                setTimeout(window.location.href = "http://localhost/all_templates/signup_message.php",20000)
           
            }
                 
          }// end of success function
         
        
      }) //end of ajax call 

     

  }//end of else control statement
  
  })//end of doc onClick

})//end of doc ready


