function profile_setting() {
        var nameEN = $("#nameEN-input").val();
        var surnameEN = $("#surnameEN-input").val();
        var email = $("#email-input").val();
        var facebook = $("#facebook-input").val();
        var nameTH = $("#nameTH-input").val();
        var surnameTH = $("#surnameTH-input").val();
        var Tel = $("#Tel-input").val();
        var emergencyTel = $("#emergencyTel-input").val();

    var id = ["#nameEN-input","#surnameEN-input","#email-input","#facebook-input","#nameTH-input","#surnameTH-input","#Tel-input","#emergencyTel-input"];
    var placeholder_value = [nameEN,surnameEN,email,facebook,nameTH,surnameTH,Tel,emergencyTel];
                $.ajax({
                    url: 'assets/common/php/changeSetting.php',
                    type: 'POST',
                    dataType: 'text',
                    data: "nameEN=" + nameEN + "&surnameEN=" + surnameEN + "&email=" + email + "&facebook=" + facebook + "&nameTH=" + nameTH + "&surnameTH=" + surnameTH + "&Tel=" + Tel + "&emergencyTel=" + emergencyTel,
                    timeout: 2000,
                    success: function (data) {
                        setTimeout(function(){
                            for (let i = 0;i < id.length; i++) {
                                if(placeholder_value[i] !== ""){
                                    $(id[i]).val("");
                                    $(id[i]).attr("placeholder", placeholder_value[i]);
                                }
                            }
                            $('i[for="profile-setting"]').removeClass().addClass("fa fa-check-circle");
                        }, 2000);
                    },
                    error: function (data) {
                        setTimeout(function(){
                            $('i[for="account-setting"]').removeClass().addClass("fa fa-times-circle");
                        }, 2000);
                    },
                    beforeSend: function() {
                        $('i[for="profile-setting"]').removeClass().addClass("fa fa-circle-o-notch fa-spin");
                    }
                });
}

function account_setting() {
    var old_password = $("#old-password").val();
    var new_password = $("#new-password").val();

    $.ajax({
        url: 'assets/common/php/accountSetting.php',
        type: 'POST',
        dataType: 'text',
        data: "old_password=" + old_password + "&new_password=" + new_password,
        success: function (data) {
            // success callback
            setTimeout(function(){
                $('i[for="account-setting"]').removeClass().addClass("fa fa-check-circle");
            }, 2000);
        },
        error: function (data) {
            // error callback
            setTimeout(function(){
                $('i[for="account-setting"]').removeClass().addClass("fa fa-times-circle");
            }, 2000);
        },
        beforeSend: function() {
            $('i[for="account-setting"]').removeClass().addClass("fa fa-circle-o-notch fa-spin");
        }
    });
}

function profile_picture() {
    var formData = new FormData($("form[name='profile-upload']")[0]);
    console.log(formData);
    $.ajax({
        url: 'assets/common/php/changeProfile.php',
        type: 'POST',
        dataType: 'text',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        complete: function (result) {
            // callback
        },
        success: function (result) {
            var newimgsrc = "/forum/assets/avatars/" + result;
            var newimgsrcNav = "../forum/assets/avatars/" + result;
            $('div[for="profile-pic"]').css({'background-image':'url('+newimgsrc+')'});
            $('div[for="navbar-proPic"]').css({'background-image':'url('+newimgsrcNav+')'});
        },
        error: function (jqXHR, textStatus, errorThrown) {
            // error callback
        }
    });

}

$(function() {
    $("#submit-password").click(function() {
        account_setting();
    });

    $("#submit-setting").click(function(){
        profile_setting();
    });

    $("#profile-input").change(function(){
        profile_picture();
    })
});
