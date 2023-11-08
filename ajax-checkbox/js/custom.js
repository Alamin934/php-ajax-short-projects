$(document).ready(function(){

    $("#student-form").on("submit", function(e){
        e.preventDefault();

        var first_name = $("#first-name").val();
        var languages = [];

        $(".lang").each(function () {
            if($(this).is(":checked")){
                languages.push($(this).val());
            }
        });
        languages = languages.toString();

        if(first_name != "" && languages.length !== 0){
            $.ajax({
                type: "POST",
                url: "insert-data.php",
                data: {name: first_name, lang: languages},
                success: function (response) {
                    $("#student-form").trigger("reset");
                    alert(response);
                }
            });
        }else{
            alert("All fields are required.");
        }
    });

});