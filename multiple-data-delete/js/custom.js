$(document).ready(function(){
    function loadData(){
        $.ajax({
            url: "load-data.php",
            type: "POST",
            success: function(data){
                $("#table-data").html(data);
            }
        });
    }

    loadData();

    $("#delete-btn").on("click", function(){
        var id = [];
        $(":checkbox:checked").each(function(key){
            id[key] = $(this).val();
        })
        if(id.length === 0){
            alert("Please select atleast one data.");
        }else{
            if(confirm("Do you want to really delete this?")){
                $.ajax({
                    url: "delete-data.php",
                    type: "POST",
                    data: {id: id},
                    success: function(data){
                        if(data == 1){
                            $("#success-message").html("Data Deleted Successfully").slideDown();
                            $("#error-message").slideUp();
                            loadData();
                        }else{
                            $("#error-message").html("Data Can't Delete").slideDown();
                            $("#success-message").slideUp();
                        }
                    }
                });
            }
        }
    });
});