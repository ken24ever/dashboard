
function uploadfile(){
    var filename = $("#filename").val() // saves file with this name
    var file_data = $("#file_to_upload").prop('files')[0];// fetches the file to upload
   

if (filename == "" || file_data == null){

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
         toastr.error( "Select A File To Upload!")
       

} else {

    var previewDocs = URL.createObjectURL(file_data);
   
    var form_data = new FormData();
    form_data.append("file", file_data); // here we append the file data
    form_data.append("filename", filename);// here we append the filename
    // now ajax gets the file to upload
      $.ajax({
        beforeSend: function(){
            swal({
              title: '',
              html: '<img src="images/index.jpg"><br><br><strong>Uploading...</strong>',
              allowOutsideClick: false,
             });
             swal.showLoading();
                         },
         
        url: "uploadFile.php",
        type: "POST",
        dataType: "script",
        //target: "#targetLayer",
        cache: false,
        contentType: false,
        processData:false,
        data: form_data,
        success: function (data){
            $("#targetLayer").show();
            console.log(data)
            //empty form input for another entry
            $("#filename").val("");
            $("#file_to_upload").val("");
            $("#targetLayer").attr('src',previewDocs);
            $("#targetLayer").html(data);
           
         if (data === "Upload_failed"){

            swal({
                title: "Oops",
                text: "Unable To Upload!",
                type: "error",
                confirmButtonText:"Exit",
                 allowOutsideClick: false,
      timer: 8000
                });
                 
            }else{
              swal({
                    html: "<b>File upload successful!</b>",
                    type: "success",
                    confirmButtonText:"Exit",
                     allowOutsideClick: false,
          timer: 8000
                    }); 
                 
            } 
        }




    })//end of ajax request.

}//end of else

}//end of uploadfile func