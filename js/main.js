(function ($) {
    "use strict";


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'username' || $(input).attr('username') == 'username') {
            if ($(input).val().trim().match(/^([0-9])$/) == null) {
                return false;
            }
        } else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }


    function submitForm();

})(jQuery);
/* SUBMIT LOGIN */
function submitForm() {
    var input = $("#form-login").serialize();

    $.ajax({
        type: 'POST',
        url: 'cek_login.php',
        data: input,
        beforeSend: function () {
            $("#error").fadeOut();
            $("#btn-login").html(
                '<span class="glyphicon glyphicon-transfer"></span>   sending ...');
        },
        success: function (response) {
            if (response == "ok") {

                $("#btn-login").html(
                    '<img src="https://github.com/maulayyacyber/phantom0308/raw/master/btn-ajax-loader.gif" />   Signing In ...'
                );
                setTimeout(' window.location.href = "index2.php.php"; ', 4000);
            } else {

                $("#error").fadeIn(1000, function () {

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
};