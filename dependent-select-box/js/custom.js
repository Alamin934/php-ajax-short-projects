$(document).ready(function(){
    // Load Countries from DataBase
    function loadData(type, country_id){
        $.ajax({
            url: "load-cs.php",
            type: "POST",
            data: {type:type, id: country_id},
            success: function(data){
                if(type == "stateData"){
                    $("#state").html(data);
                }else{
                    $("#country").append(data);
                }
            }
        });
    }
    loadData();

    // Load State name after choose Country
    $("#country").on("change", function(){
        var c_id = $(this).val();
        // console.log(country_id)
        if(c_id != ""){
            loadData("stateData", c_id);
        }else{
            $("#state").html("");
        }
    });
});