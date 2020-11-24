$(document).ready(function() {
    $('#btn-login').on('click', function() {
        elEmail = $("#email").val();
        elPwd = $("#pwd").val();

        $.post("login/run", {
            email: elEmail,
            pwd: elPwd
        }, function(data) {
            data = JSON.parse(data);
            if (data.code = 1) {
                window.location.href = "/";
            } else {
                toastr.warning(data.msg);
            }
        });
    });
});