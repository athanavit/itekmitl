$("#submit").click(function() {
    var password = $("#modal-password").val();
    var verifyPassword = $("#modal-verify-password").val();
    var email = $("#modal-email").val();

    if ((password === "") || (verifyPassword === "") || (email === "")) {
        //show error text message
        $('p[for="error-validate"]').text("กรุณาใส่ข้อมูลให้ครบทุกช่อง");
    }
    else if (password != verifyPassword) {
        //show text error
        $('p[for="error-validate"]').text("กรุณาใส่ password ให้ตรงกัน");
    }
    else {
            $.ajax({
                url: 'assets/common/php/changePassword.php',
                type: 'POST',
                dataType: 'text',
                data: "password=" + password + "&verifyPassword=" + verifyPassword + "&email=" + email,
                success: function (data) {
                    $('#settingModal').modal('hide');
                },
                error: function (data) {
                    $('p[for="error-validate"]').text("เกิดปัญหาในการส่งข้อมูล");
                },
                beforeSend: function() {
                    NProgress.start();
                },
                complete: function() {
                    NProgress.done();
                }
            });
        }
      });
