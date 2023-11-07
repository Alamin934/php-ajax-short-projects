$(document).ready(function(){

    $.ajax({
        url: "load-city.php",
        type: "POST",
        dataType: "JSON",
        success: function(data){
            $.each(data, function(key, value){
               $("#city-box").append(`<option value="${value.user_city}">${value.user_city}</option>`)
            });
        }
    });

    $("#city-box").change(function(){
        var city = $(this).val();
        if(city == ""){
            $("#table-data").html("No Record Found");
        }else{
            $.ajax({
                url: "load-table.php",
                type: "POST",
                data: {city:city},
                success: function(data){
                    $("#table-data").html(data);
                }
            });
        }
    });
});