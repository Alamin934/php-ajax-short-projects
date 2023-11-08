$(document).ready(function () {
    var minD;
    var maxD;
    $( function() {
        var dateFormat = "mm/dd/yy",
        from = $( "#from" )
        .datepicker({
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            yearRange: "1980:2023"
        }).on( "change", function() {
            to.datepicker( "option", "minDate", getDate( this ) );
            minD = $(this).val();
            if(minD != '' && maxD != ''){
                loadTable(minD, maxD);
            }
        }),
        to = $( "#to" ).datepicker({
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 1,
        yearRange: "1980:2023"
        }).on( "change", function() {
            from.datepicker( "option", "maxDate", getDate( this ) );
            maxD = $(this).val();
            if(minD != '' && maxD != ''){
                loadTable(minD, maxD);
            }
        });
    
        function getDate( element ) {
        var date;
        try {
            date = $.datepicker.parseDate( dateFormat, element.value );
        } catch( error ) {
            date = null;
        }
    
        return date;
        }
    } );
    function loadTable(date1, date2){
        $.ajax({
            type: "POST",
            url: "get-data.php",
            data: {date1:date1, date2:date2},
            success: function (response) {
                $("#table-data tbody").html(response);
            }
        });
    }

    loadTable(minD, maxD);

});