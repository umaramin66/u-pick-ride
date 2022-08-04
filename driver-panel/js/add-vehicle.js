$(function ()
{
    $('#add-vehicle').on('submit', function (e) {
        e.preventDefault();

    var driver_name = $("#name").val();
    
    $.ajax({
        url:"ajax/add-vehicle.php",
        type: 'POST',
            data: new FormData(this),
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {
            if(data == "false")
            {
                //alert("credentials not found");
                // swal({
                //     title: "Credentials not found",
                // });
            }
            else
            {
               // alert(data);
                window.location.href="add-vehicles.php";
            }
            
        }
    });

    });
});