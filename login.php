<!DOCTYPE html>
<?php
    if(isset($_COOKIE['username']) || $_COOKIE['username'] != null) {
        header('Location: index.php');
        exit();
    }
?>
    <!-- TODO: Filter logged in session away from this page -->
    <html lang="en">

    <head>
        <link rel="manifest" href="assets/common/object/manifest.json">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign in | ITE - KMITL</title>
        <!-- for chrome mobile -->
        <meta name="theme-color" content="#BDBDBD">
        <link rel="icon" sizes="192x192" href="assets/common/img/ite-logo/ite-logo-b-m.png">
        <link rel="apple-touch-icon" href="assets/common/img/ite-logo/ite-logo-b-m.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/lib/css/bootstrap.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/common/css/style.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Prompt|Athiti" rel="stylesheet">
        <!-- loaders -->
        <script src='assets/lib/js/nprogress.js'></script>
        <link rel='stylesheet' href='assets/lib/css/nprogress.css' />
    </head>

    <body style="background-color:#F0F0F0 !important;">
        <script type="text/javascript">
            NProgress.configure({
                showSpinner: false
            });
            NProgress.start();
            NProgress.set(0.2);
            var randtime = Math.floor(Math.random() * (4000 - 2000)) + 4000;
            setTimeout(function() {
                NProgress.done();
            }, randtime);

        </script>
        <script>
            var lasturl = document.referrer;

        </script>
        <!-- Logo and welcome text -->
        <section id="logo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 offset-sm-3 center-logo">
                        <center>
                            <a href="index.php"><img src="assets/common/img/ite-logo/ite-logo.png" width="auto" height="60" alt="brand"></a>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2 welcome-text">
                        <center>
                            <h3>ลงชื่อเพื่อเข้าใช้งานระบบ</h3>
                        </center>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login Box -->
        <section id="loginbox">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 box-padding">
                        <div class="login-box">
                            <form name="formValidate" id="loginForm">
                                <div class="form-group">
                                    <label for="username">ชื่อผู้ใช้งาน</label>
                                    <input type="text" class="form-control" autofocus id="username" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">รหัสผ่าน</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                </div>
                                <div class="container clearfix">
                                    <div class="row">
                                        <div class="col-xl-9 col-lg-7 col-xs-0">
                                            <p for="error-login" class="errorText"></p>
                                        </div>
                                        <div class="col-xl-3 col-lg-5 col-xs-10 offset-xs-1">
                                            <button type="button" class="btn btn-primary pull-right login-button" id="submit">ลงชื่อเข้าใช้</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Forgot password text -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 offset-sm-4" style="margin-top: 5px; z-index: 9;">
                        <center>
                            ลืมรหัสผ่าน?&nbsp;<b><a href="#" style="color: #000000">ขอรหัสใหม่</a></b>
                        </center>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bottom pic -->
        <section id="bottompic">
            <div class="container-fluid">
                <div class="row">
                    <div style="position: fixed; bottom: 0px; width: 100%">
                        <img src="assets/common/img/login/desk-1081708_1920.jpg" class="desk" height="330px" alt="table">
                    </div>
                </div>
            </div>
        </section>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="assets/lib/js/bootstrap.min.js"></script>
        <script>
            //Ajax call function from ENTER key
            $("#loginbox").keypress(function(e) {
                if (e.which == 13) {
                    var username = $("#username").val();
                    var password = $("#password").val();
                    if ((username === "") || (password === "")) {
                        //function to show error
                        $('p[for="error-login"]').text("กรุณาใส่ชื่อผู้ใช้งานและรหัสผ่าน");
                    } else {
                        $.ajax({
                            type: "POST",
                            url: "assets/common/php/signIn.php",
                            data: "username=" + username + "&password=" + password,
                            datatype: 'json',
                            cache: false,
                            success: function(data) {
                                if (data == 0) {
                                    window.location.href = 'setting.php';
                                } else {
                                    window.location.href = lasturl;
                                }
                            },
                            error: function() {
                                $('p[for="error-login"]').text("ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");
                            },
                            beforeSend: function() {
                                NProgress.start();
                            },
                            complete: function() {
                                NProgress.done();
                            }
                        });
                    }
                }
            });
            //Ajax call function from SUBMIT button
            $("#submit").click(function() {
                var username = $("#username").val();
                var password = $("#password").val();
                if ((username === "") || (password === "")) {
                    //function to show error
                    $('p[for="error-login"]').text("กรุณาใส่ชื่อผู้ใช้งานและรหัสผ่าน");
                } else {
                    $.ajax({
                        type: "POST",
                        url: "assets/common/php/signIn.php",
                        data: "username=" + username + "&password=" + password,
                        datatype: 'json',
                        cache: false,
                        success: function(data) {
                            if (data == 0) {
                                window.location.href = 'setting.php';
                            } else {
                                window.location.href = lasturl;
                            }
                        },
                        error: function() {
                            $('p[for="error-login"]').text("ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");
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

        </script>
    </body>

    </html>
