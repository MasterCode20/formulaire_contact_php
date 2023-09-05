$(function ()
{
    $('#contact-form').submit(function(e){

        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST',
            url: 'php/contact.php',
            data : postdata,
            dataType: 'json',
            success : function(result)
            {
                if(result.isSuccess)
                {
                    // en cas de success le message qui est revoyer grace a la foncton append
                    $("#contact-form").append("<p class='thank you'>votre messsage a bien été envoyé. Merci davoir contacté :) </p>");
                    // remettre les element du formulaire a zero;
                    $("#contact-form")[0].reset(); 
                }
                //dans le cas ou il ya une erreur
                else
                {
                    $("#firstname + .comments").html(result.firstnameError);
                    $("#name + .comments").html(result.nameError);
                    $("#email + .comments").html(result.emailError);
                    $("#phone + .comments").html(result.phoneError);
                    $("#message + .comments").html(result.messageError);
                }
            }

        });

    });
}

)