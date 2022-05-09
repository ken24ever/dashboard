$(document).ready((function(){
    $("#dispProfile").html();  
    $.ajax({
        method:"GET",
        url:"profile_details.php",
        success: function(data){
            $("#dispProfile").html(data);
        }


    })//end of ajax

})()//end of function

)//end of ready