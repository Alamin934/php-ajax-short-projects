$(document).ready(function(){

    $("#submit_form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: "upload.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data){
                $("#preview").show();
                $("#image_preview").html(data);
                $("#upload_file").val('');
                
            }
        });
    });

    $(document).on("click", "#delete_btn", function(){
        if(confirm("Are you want to sure Delete this?")){
            var path = $(this).data('path');
            
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: {path: path},
                success: function(data){
                    $("#preview").hide();
                    $("#image_preview").html('');
                }
            });
        }
    });

});