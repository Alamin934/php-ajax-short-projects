$(document).ready(function(){


    $("#city-box").on("keyup", function(){
        var city = $(this).val();

        if(city != ''){
            $.ajax({
                url: "load-city.php",
                type: "POST",
                data: {city: city},
                success: function(data){
                    $("#cityList").fadeIn().html(data);
                }
            });
        }else{
            $("#cityList").fadeOut();
        }
    });


    $(document).on("click", "#cityList li", function(){
        $("#city-box").val($(this).text());
        $("#cityList").fadeOut();
    });

    $("#search-btn").on("click", function(e){
        e.preventDefault();
        var city = $("#city-box").val();

        if(city != ''){
            $.ajax({
                url: "load-table.php",
                type: "POST",
                data: {city: city},
                success: function(data){
                    $("#table-data").slideDown().html(data);
                }
            });
        }else{
            alert("Please enter any word");
        }
    })

});