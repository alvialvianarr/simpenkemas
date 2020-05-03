(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    $("#form-login").validate({
        rules: {
            password: {
                required: true,
            },
            user_username: {
                required: true,
                username: true
            },
        },
        messages: {
            password: {
                required: "please enter your password"
            },
            user_username: "please enter your username address",
        },
        submitHandler: submitForm
    });
    /* SUBMIT LOGIN */
    function submitForm(){
        var input = $("#form-login").serialize();

        $.ajax({
            type: 'POST',
            url: 'cek_login.php',
            data: input,
            beforeSend: function() {
                $("#error").fadeOut();
                $("#btn-login").html(
                    '<span class="glyphicon glyphicon-transfer"></span>   sending ...');
            },
            success: function(response) {
                if (response == "ok") {

                    $("#btn-login").html(
                        '<img src="https://github.com/maulayyacyber/phantom0308/raw/master/btn-ajax-loader.gif" />   Signing In ...'
                        );
                    setTimeout(' window.location.href = "index2.php.php"; ', 4000);
                } else {

                    $("#error").fadeIn(1000, function() {

                        $("#error").html(
                            '<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   alamat username atau password salah!.</div>'
                            );
                        $("#btn-login").html(
                            '<span class="glyphicon glyphicon-log-in"></span>   Sign In'
                            );

                    });
                }
            }
        });
        return false;
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);