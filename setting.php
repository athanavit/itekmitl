<?php
    session_start();

    require_once 'assets/common/php/DBConnect.php';

    $username = $_COOKIE['username'];
    $user_accountConnect = mysqli_query($objCon,"SELECT * FROM user_accounts WHERE username = '$username'") or die(mysqli_error());
    $user_accountRow = mysqli_fetch_array($user_accountConnect);

    if ($user_accountRow['is_activated'] == 0) {
        $modalActivate = "$( document ).ready(function(){
        $('#settingModal').modal('show');
        });";
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="manifest" href="assets/common/object/manifest.json">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Account settings | ITE - KMITL</title>
        <!-- for chrome mobile -->
        <meta name="theme-color" content="#FF8539">
        <link rel="icon" sizes="192x192" href="assets/common/img/ite-logo/ite-logo-b-m.png">
        <link rel="apple-touch-icon" href="assets/common/img/ite-logo/ite-logo-b-m.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/lib/css/bootstrap.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/common/css/style.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="assets/lib/css/font-awesome.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src='assets/lib/js/nprogress.js'></script>
        <link rel='stylesheet' href='assets/lib/css/nprogress.css' />
    </head>

    <body>
        <script type="text/javascript">
            NProgress.configure({
                showSpinner: false
            });
            NProgress.start();
            NProgress.set(0.2);
            $(window).load(function() {
                NProgress.done();
                $(".loader").fadeOut("slow");
            })
            setTimeout(function() {
                NProgress.done();
            }, 30000);

            $(document).ready(function() {
                document.getElementById("main").style.opacity = "1";
                document.getElementById("main").style.transform = "translate(0px, 0px)";
            });

        </script>
        <div class="loader"></div>
        <!-- 2.Navigation Bar -->
        <nav id="navbar-placeholder"></nav>
        <!-- 3.Main -->
        <main id="main">
            <section id="setting-page">
                <div class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form name="profile-upload" id="profile-upload" enctype="multipart/form-data">
                                    <label for="profile-input">
                                            <div for="profile-pic" class="profile-pic" style="background-image: url('./forum/assets/avatars/<?php echo $_COOKIE['pic']; ?>')">
                                                <span>Change Image</span>
                                            </div>
                                        </label>
                                    <input id="profile-input" name="profile-input" type="file" accept="image/*" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>ข้อมูลทั่วไป</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group"> <label>Name</label>
                                        <input type="text" class="form-control" id="nameEN-input" placeholder="<?php echo $user_accountRow['nameEN'];?>"> </div>
                                    <div class="form-group"> <label>Surname</label>
                                        <input type="text" class="form-control" id="surnameEN-input" placeholder="<?php echo $user_accountRow['surnameEN'];?>"> </div>
                                    <div class="form-group"> <label>Email address</label>
                                        <input type="email" class="form-control" disabled id="email-input" placeholder="<?php echo $user_accountRow['email'];?>"> </div>
                                    <div class="form-group"> <label>Facebook</label>
                                        <input type="text" class="form-control" id="facebook-input" placeholder="<?php echo $user_accountRow['facebook'];?>"> </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <div class="form-group"> <label>ชื่อ</label>
                                        <input type="text" class="form-control" id="nameTH-input" placeholder="<?php echo $user_accountRow['nameTH'];?>"> </div>
                                    <div class="form-group"> <label>นามสกุล</label>
                                        <input type="text" class="form-control" id="surnameTH-input" placeholder="<?php echo $user_accountRow['surnameTH'];?>"> </div>
                                    <div class="form-group"> <label>เบอร์โทร</label>
                                        <input type="text" class="form-control" id="Tel-input" placeholder="<?php echo $user_accountRow['Tel'];?>"> </div>
                                    <div class="form-group"> <label>เบอร์โทรฉุกเฉิน</label>
                                        <input type="text" class="form-control" id="emergencyTel-input" placeholder="<?php echo $user_accountRow['emergencyTel'];?>"> </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <i for="profile-setting" class="hidden" aria-hidden="true"></i>
                                <button type="button" id="submit-setting" class="btn btn-primary text-right">บันทึกข้อมูล</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-5" style="">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>ตั้งค่าผู้ใช้งาน</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <form class="">
                                    <div class="form-group"> <label>Old password</label>
                                        <input type="password" name="password" id="password_fake" class="hidden" autocomplete="off" style="display: none;">
                                        <input type="password" class="form-control" placeholder="Enter password" id="old-password"> </div>

                                    <div class="form-group"> <label>New password</label>
                                        <input type="password" name="password" id="password_fake" class="hidden" autocomplete="off" style="display: none;">
                                        <input type="password" class="form-control" placeholder="Password" id="new-password"> </div>
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <i for="account-setting" class="hidden" aria-hidden="true"></i>
                                            <button type="button" id="submit-password" class="btn btn-primary text-right">บันทึกข้อมูล</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>


        <!-- 4.Footer -->
        <footer id="footer-placeholder"></footer>

        <!-- 5.Modal -->
        <div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="settingModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="settingModal">ก่อนอื่นเลย!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <div class="modal-body">
                        <form id="change-password-form">
                            <div class="form-group">
                                <label>New password</label>
                                <input type="password" name="password" id="password_fake" class="hidden" autocomplete="off" style="display: none;">
                                <input type="password" class="form-control" id="modal-password">
                                <label>Verify password</label>
                                <input type="password" name="password" id="password_fake" class="hidden" autocomplete="off" style="display: none;">
                                <input type="password" class="form-control" id="modal-verify-password">
                            </div>
                        </form>
                        <div class="modal-footer">
                            <p for="error-validate" class="errorText"></p>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="submit">Save changes</button>
                        </div>
                    </div>
                </div>
                <!-- jQuery first, then Tether, then Bootstrap JS. -->
                <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
                <script src="assets/lib/js/bootstrap.min.js"></script>

                <!-- Retrieve component -->
                <script src="assets/common/js/component.js"></script>

                <!-- Ajax call for setting modal -->
                <script src="assets/common/js/settingModal.js"></script>

                <script>
                    <?php echo $modalActivate; ?>

                </script>
                <!-- Ajax call for setting modal -->
                <script src="assets/common/js/settingModal.js"></script>
                <script src="assets/common/js/settingChange.js"></script>
    </body>


    </html>
