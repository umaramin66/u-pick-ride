$(function ()
{
    $('#name').bind('input', function()  { document.getElementById('name_error').innerHTML = ""; });
    
    $('#email').bind('input', function()  { document.getElementById('email_error').innerHTML = ""; });

    $('#password').bind('input', function()  { document.getElementById('password_error').innerHTML = ""; });

    
    $(function ()
    {

    $('#create-driver').on('submit', function (e) {
        e.preventDefault();
        var r = 0;

        if ($("#name").val() == "") { $('#name_error').html('Required*'); r = 1;  }
        
        if ($("#email").val() == "") { $('#email_error').html('Required*'); r = 1;  }
    

        if ($("#password").val() == "") { $('#password_error').html('Required*'); r = 1;   }

       



        if(r == 1)
        {
            return;
        }

        //addLoading();

        $.ajax({
            
            url: "ajax/create-driver.php",
            type: 'POST',
            data: new FormData(this),
            
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function (data) {

                //hideLoading();
                alert('Driver Has Been Added Successfully');
                window.location.href = 'drivers.php';

            }
        });

        });
    });
});