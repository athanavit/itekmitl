<?php include("assets/common/php/createPersonCard.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="assets/common/object/manifest.json">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our staffs | ITE - KMITL</title>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- loaders -->
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
    <!-- 1.Website Header -->
    <header>
    </header>
    <!-- 2.Navigation Bar -->
    <nav id="navbar-placeholder"></nav>
    <!-- 3.Main -->
    <main>
        <script>
            $(document).ready(function() {
                $('#staffInfoModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget);
                    var recipient = button.data('staffname');
                    var modal = $(this);
                    $.ajax({
                        type: "POST",
                        url: "assets/common/php/getPersonInfo.php",
                        data: "short_name=" + recipient,
                        datatype: 'json',
                        cache: false,
                        success: function(data) {
                            var obj = JSON.parse(data);
                            //console.log(obj['info']);
                            //console.log(obj['edu']);
                            //change modal header
                            document.getElementById('modalpic').src = "assets/common/img/staff/" + obj['info'].pic;
                            modal.find('.modal-title').text(obj['info'].name);
                            modal.find('.modal-title-eng').text(obj['info'].name_eng);
                            modal.find('#modal-position').text(obj['info'].position);
                            modal.find('#modal-email').text(obj['info'].e_mail);
                            modal.find('#modal-tel').text(obj['info'].phone_num);
                            modal.find('#modal-workplace').text(obj['info'].working_ad);
                            modal.find('#modal-website').text(obj['info'].website);
                            //console.log(obj['edu'][0].subject);
                            //change modal body - education
                            if (obj['edu'] !== null) {
                                for (var i = 0; i <= 3; i++) {
                                    if (typeof obj['edu'][i] !== 'undefined') {
                                        modal.find('#modal-edu' + (i + 1)).text("- " + obj['edu'][i].subject + " " + obj['edu'][i].Institute);
                                    } else {
                                        $("#modal-edu" + (i + 1)).addClass("hidden");
                                    }
                                }
                            } else {
                                $("#modal-edu1").addClass("hidden");
                                $(".modal-body").addClass("hidden");
                                $(".modal-header").addClass("modal-header-bot-round");
                            }

                            //      Fighting! =)
                            //change modal body - work
                            if (obj['teach'] !== null) {
                                for (var i = 0; i <= 4; i++) {
                                    if (typeof obj['teach'][i] !== 'undefined') {
                                        modal.find('#modal-work' + (i + 1)).text("- " + obj['teach'][i].teach_sub);
                                    } else {
                                        $("#modal-work" + (i + 1)).addClass("hidden");
                                    }
                                }
                            } else {
                                $("#modal-work1").addClass("hidden");
                                $(".modal-body").addClass("hidden");
                                $(".modal-header").addClass("modal-header-bot-round");
                            }

                            //remove pre-load
                            $("#staffInfoModalLabel").removeClass("modal-preload-box");
                            $("#staffInfoModalLabel-eng").removeClass("modal-preload-box");
                            $("#modal-position").removeClass("modal-preload-box");
                            $("#modal-email").removeClass("modal-preload-box");
                            $("#modal-tel").removeClass("modal-preload-box");
                            $("#modal-workplace").removeClass("modal-preload-box");
                            $("#modal-website").removeClass("modal-preload-box");
                            $("#modal-edu1").removeClass("modal-preload-box");
                            $("#modal-edu2").removeClass("modal-preload-box");
                            $("#modal-edu3").removeClass("modal-preload-box");
                            $("#modal-edu4").removeClass("modal-preload-box");
                            $("#modal-work1").removeClass("modal-preload-box");
                            $("#modal-work2").removeClass("modal-preload-box");
                            $("#modal-work3").removeClass("modal-preload-box");
                            $("#modal-work4").removeClass("modal-preload-box");
                            $("#modal-work5").removeClass("modal-preload-box");
                        },
                        error: function() {
                            $('#staffInfoModal').modal('hide');
                        }
                    });
                });
                $('#staffInfoModal').on('hide.bs.modal', function(event) {
                    var modal = $(this);
                    document.getElementById('modalpic').src = "assets/common/img/staff/dummy_m.jpg";
                    modal.find('.modal-title').text("Name");
                    modal.find('.modal-title-eng').text("Name-ENG");
                    modal.find('#modal-position').text("อาจารย์ประจำหลักสูตร");
                    modal.find('#modal-email').text("thisis@fortest.com");
                    modal.find('#modal-tel').text("6969");
                    modal.find('#modal-workplace').text("E12-1399");
                    modal.find('#modal-website').text("webserv.kmitl.ac.th/gurock");
                    //show all objects again
                    $("#modal-edu1").removeClass("hidden");
                    $("#modal-edu2").removeClass("hidden");
                    $("#modal-edu3").removeClass("hidden");
                    $("#modal-edu4").removeClass("hidden");
                    $("#modal-work1").removeClass("hidden");
                    $("#modal-work2").removeClass("hidden");
                    $("#modal-work3").removeClass("hidden");
                    $("#modal-work4").removeClass("hidden");
                    $("#modal-work5").removeClass("hidden");
                    //add pre-load
                    $("#staffInfoModalLabel").addClass("modal-preload-box");
                    $("#staffInfoModalLabel-eng").addClass("modal-preload-box");
                    $("#modal-position").addClass("modal-preload-box");
                    $("#modal-email").addClass("modal-preload-box");
                    $("#modal-tel").addClass("modal-preload-box");
                    $("#modal-workplace").addClass("modal-preload-box");
                    $("#modal-website").addClass("modal-preload-box");
                    $("#modal-edu1").addClass("modal-preload-box");
                    $("#modal-edu2").addClass("modal-preload-box");
                    $("#modal-edu3").addClass("modal-preload-box");
                    $("#modal-edu4").addClass("modal-preload-box");
                    $("#modal-work1").addClass("modal-preload-box");
                    $("#modal-work2").addClass("modal-preload-box");
                    $("#modal-work3").addClass("modal-preload-box");
                    $("#modal-work4").addClass("modal-preload-box");
                    $("#modal-work5").addClass("modal-preload-box");
                    $(".modal-body").removeClass("hidden");
                    $(".modal-header").removeClass("modal-header-bot-round");

                });
            });

        </script>
        <div class="modal fade" id="staffInfoModal" tabindex="-1" role="dialog" aria-labelledby="staffInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-header">
                        <div class="container-fluid" style="margin: 0px; width: 100%;">
                            <div class="row">
                                <div class="col-md-4 modalpic-container">
                                    <img src="assets/common/img/staff/dummy_m.jpg" id="modalpic" class="modalpic">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="modal-title modal-preload-box" id="staffInfoModalLabel">Name</h5>
                                    <h5 class="modal-title modal-title-eng modal-preload-box" id="staffInfoModalLabel-eng">Name-eng</h5>
                                    <hr style="margin-bottom: 20px;">
                                    <h5 class="modal-star "><b>ตำแหน่ง:&nbsp;</b> <span id="modal-position" class="modal-preload-box"></span></h5>
                                    <h5 class="modal-star"><b>อีเมล:&nbsp;</b> <span id="modal-email" class="modal-preload-box"></span></h5>
                                    <h5 class="modal-star"><b>หมายเลขโทรศัพท์:&nbsp;</b> <span id="modal-tel" class="modal-preload-box"></span></h5>
                                    <h5 class="modal-star"><b>สถานที่ทำงาน:&nbsp;</b> <span id="modal-workplace" class="modal-preload-box"></span></h5>
                                    <h5 class="modal-star"><b>เว็บเพจ:&nbsp;</b> <span id="modal-website" class="modal-preload-box"></span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <h5 id="modal-edu-star" class="modal-star"><b>ประวัติการศึกษา</b></h5>
                        <h5 id="modal-edu1" class="modal-edu modal-preload-box"></h5>
                        <h5 id="modal-edu2" class="modal-edu modal-preload-box"></h5>
                        <h5 id="modal-edu3" class="modal-edu modal-preload-box"></h5>
                        <h5 id="modal-edu4" class="modal-edu modal-preload-box"></h5>

                        <h5 id="modal-work-star" class="modal-star"><b>ผลงานทางวิชาการ(งานวิจัย) / ความสนใจ</b></h5>
                        <h5 id="modal-work1" class="modal-edu modal-preload-box"></h5>
                        <h5 id="modal-work2" class="modal-edu modal-preload-box"></h5>
                        <h5 id="modal-work3" class="modal-edu modal-preload-box"></h5>
                        <h5 id="modal-work4" class="modal-edu modal-preload-box"></h5>
                        <h5 id="modal-work5" class="modal-edu modal-preload-box"></h5>
                    </div>
                </div>
            </div>
        </div>
        <section id="main">
            <section id="personnel-parallax">
                <div class="wrapper overlay">
                    <h1> คณาจารย์ประจำสาขาวิชาฯ </h1>
                </div>
            </section>
            <section id="teacher">
                <div class="container-fluid">
                    <div class="row card-padding">
                        <div class="col-sm-10 offset-sm-1">
                            <div class="row">
                                <?php createPersonCard(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="personnel-parallax2">
                <div class="wrapper overlay">
                    <h1> เจ้าหน้าที่ประจำสาขาวิชาฯ </h1>
                </div>
            </section>
            <section id="staff">
                <div class="container-fluid">
                    <div class="row card-padding">
                        <div class="col-sm-10 offset-sm-1">
                            <div class="row">
                                <?php createPersonCard2(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <!-- 4.Footer -->
    <footer id="footer-placeholder"></footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="assets/lib/js/bootstrap.min.js"></script>
    <!-- Retrieve component -->
    <script src="assets/common/js/component.js"></script>
</body>

</html>
