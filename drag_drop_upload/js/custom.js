Dropzone.autoDiscover = false;

var myDropzone = new Dropzone("#file_upload", { 
    url: "upload.php",
    parallelUploads: 3,
    uploadMultiple: true,
    addRemoveLinks: true,
    acceptedFiles: '.png,.jpg,.jpeg',
    autoProcessQueue: false,
    success: function(file,response){
        if(response == 'true'){
            $('#content .message').hide();
            $('#content').append('<div class="message success">Images Uploaded Successfully.</div>');
        }else{
            $('#content').append('<div class="message error">Images Can\'t Uploaded.</div>');
        }
    }
});

$(document).ready(function () {
    $('#upload_btn').click(function(){
      myDropzone.processQueue();
    });
});