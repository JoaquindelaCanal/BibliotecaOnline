$(document).ready(function() {
    $('#upload').bind("click",function() 
    { 
        var pdfVal = $('#UploadBook').val(); 
        if(pdfVal=='') 
        { 
            swal({
			  title: "Error!",
			  text: "No cargaste el PDF",
			  type: "error",
			  confirmButtonColor: "#a24949"
			});
            return false; 
        } 

    }); 
});


