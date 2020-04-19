('#form').on('click', '.update', function () {
    $(".updateL").removeClass("d-none");
    $(".update").addClass("d-none");
    $.ajax({
        type: 'POST',
        url: $(this).data('request-url'),
        data: {
            'user_login_password': $("#user_password").val(),
            'confirm_password': $("#confirm_password").val(),
            'user_login_id': $("#id").val()
        },
        success: function (data) {
            $('.erroruser_password').addClass('d-none');
            $('.errorconfirm_password').addClass('d-none');

            if (data.Status == "Success") {
                $("#form").empty();
                $("#tittle").text("change password success....");
                var timer = null;
                clearTimeout(timer);
                timer = setTimeout(doStuff, 3000)

            } else if (data.Status == "Failed") {
                swal("Failed!", "" + data.Message + "", {
                    icon: "error",
                    buttons: false,
                    timer: 2000,
                });
                $(".updateL").addClass("d-none");
                $(".update").removeClass("d-none");

            } else if (data.Status == "Different") {
                $('.erroruser_password').addClass('d-none');
                $('.errorconfirm_password').removeClass('d-none');
                $('.errorconfirm_password').text("Passwords do not match.");
                $(".updateL").addClass("d-none");
                $(".update").removeClass("d-none");
            } else {
                var result = JSON.parse(data);
                if ((result.length > 0)) {
                    $(".updateL").addClass("d-none");
                    $(".update").removeClass("d-none");
                    for (var i = 0; i < result.length; i++) {
                        if (result[i]["key"] == "user_login_password") {
                            $('.erroruser_password').removeClass('d-none');
                            $('.erroruser_password').text(result[i]["errors"]);
                        }

                        if (result[i]["key"] == "confirm_password") {
                            $('.errorconfirm_password').removeClass('d-none');
                            $('.errorconfirm_password').text(result[i]["errors"]);
                        }
                    }
                }
            }

        },
    });
});

function doStuff() {
    var url = "https://www.gudangada.id/";
    window.location.href = url;
}
