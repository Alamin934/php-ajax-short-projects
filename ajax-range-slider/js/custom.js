$(document).ready(function () {

    var v1 = 20;
    var v2 = 35;
    $( "#slider-range" ).slider({
        range: true,
        min: 18,
        max: 40,
        values: [ v1, v2 ],
        slide: function( event, ui ) {
            $( "#age" ).html( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
            v1 = ui.values[ 0 ];
            v2 = ui.values[ 1 ];
            loadTable(v1, v2);
        }
    });
    $( "#age" ).html( $( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values", 1 ) );

    function loadTable(range1, range2){
        $.ajax({
            type: "POST",
            url: "get-data.php",
            data: {range1: range1, range2: range2},
            success: function (response) {
                $("#table-data tbody").html(response);
            }
        });
    }
    loadTable(v1, v2);

});