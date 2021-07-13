<?php include("assets/common/php/createCurriculum60.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="assets/common/object/manifest.json">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curriculum - 2560 | ITE - KMITL</title>
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
    <!-- ScrollReveal JS -->
    <script src="assets/lib/js/scrollreveal.min.js"></script>
    <style>
        h4 {
            margin: 12px 0px;
        }

    </style>
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
            document.getElementById("mainfade").style.opacity = "1";
            document.getElementById("cur60-logo").style.opacity = "1";
            document.getElementById("cur60-title").style.opacity = "1";
            document.getElementById("cur60-title2").style.opacity = "1";
            document.getElementById("cur60-title3").style.opacity = "1";
            document.getElementById("cur60-title4").style.opacity = "1";
            setTimeout(function() {
                document.getElementById("about-pre-curriculum-contents").style.opacity = "1";
                document.getElementById("about-pre-curriculum-contents").style.transform = "translate(0px, 0px)";
            }, 1300);
        });

    </script>
    <!--<div class="loader"></div>-->
    <!-- 1.Website Header -->
    <header></header>
    <!-- 2.Navigation Bar -->
    <nav id="navbar-placeholder"></nav>
    <!-- 3.Main -->
    <main id="mainfade" style="margin-top: 55px;">
        <script>
            $(document).ready(function() {
                $('#subjectInfoModal').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget);
                    var subid = button.data('subid');
                    var modal = $(this);
                    $.ajax({
                        type: "POST",
                        url: "assets/common/php/getCur60Info.php",
                        data: "subid=" + subid,
                        datatype: 'json',
                        cache: false,
                        success: function(data) {
                            var obj = JSON.parse(data);
                            //console.log(obj['sub']);
                            //console.log(obj['edu']);
                            //change modal header
                            modal.find('.modal-title').text(obj['sub'].subject_name_th);
                            modal.find('.modal-title-eng').text(obj['sub'].subject_name);
                            document.getElementById("no").innerHTML = obj['sub'].no;
                            document.getElementById("circleNumber").innerHTML = obj['sub'].credit;
                            document.getElementById("creditdes").innerHTML = obj['sub'].credit;
                            if (obj['teacher'] != null) {
                                document.getElementById("prof").innerHTML = obj['teacher'].name;
                            } else {
                                document.getElementById("prof").innerHTML = " - ";
                            }
                            document.getElementById("des-th").innerHTML = obj['sub'].description;
                            document.getElementById("des-en").innerHTML = obj['sub'].description_en;
                            if (obj['sub'].type == "gray") {
                                document.getElementById('circleNumber').style.borderColor = "#C0C0C0";
                                document.getElementById("typedes").innerHTML = "พื้นฐาน/ปฏิบัติการ";
                            }
                            if (obj['sub'].type == "red") {
                                document.getElementById('circleNumber').style.borderColor = "#FF9797";
                                document.getElementById("typedes").innerHTML = "อิเล็กทรอนิกส์";
                            }
                            if (obj['sub'].type == "yellow") {
                                document.getElementById('circleNumber').style.borderColor = "#FFFF88";
                                document.getElementById("typedes").innerHTML = "คอมพิวเตอร์";
                            }
                            if (obj['sub'].type == "green") {
                                document.getElementById('circleNumber').style.borderColor = "#A3E7D8";
                                document.getElementById("typedes").innerHTML = "คณิตศาสตร์";
                            }
                            if (obj['sub'].type == "blue") {
                                document.getElementById('circleNumber').style.borderColor = "#DBBFF7";
                                document.getElementById("typedes").innerHTML = "โทรคมนาคม";
                            }
                            if (obj['sub'].type == "brown") {
                                document.getElementById('circleNumber').style.borderColor = "#CBAB8D";
                                document.getElementById("typedes").innerHTML = "ผสมผสาน";
                            }
                            if (obj['sub'].type == "orange") {
                                document.getElementById('circleNumber').style.borderColor = "#FFBE7D";
                                document.getElementById("typedes").innerHTML = "วิชาศึกษาทั่วไป";
                            }
                            if (obj['sub'].type == "general") {
                                document.getElementById('circleNumber').style.borderColor = "#666";
                                document.getElementById("typedes").innerHTML = "วิชาเลือกเฉพาะสาขา";
                            }

                            //remove pre-load
                            $("#subjectInfoModalLabel").removeClass("modal-preload-box");
                            $("#subjectInfoModalLabel-eng").removeClass("modal-preload-box");
                        },
                        error: function() {
                            $('#subjectInfoModal').modal('hide');
                        }
                    });
                });
                $('#subjectInfoModal').on('hide.bs.modal', function(event) {
                    var modal = $(this);
                    modal.find('.modal-title').text("Subject Name - TH");
                    modal.find('.modal-title-eng').text("Subject name - EN");
                    document.getElementById("no").innerHTML = "XXXXXXXX";
                    document.getElementById("prof").innerHTML = " - ";
                    document.getElementById("des-th").innerHTML = " - ";
                    document.getElementById("des-en").innerHTML = " - ";
                    document.getElementById("typedes").innerHTML = " - ";
                    document.getElementById("creditdes").innerHTML = " - ";
                    document.getElementById('circleNumber').style.borderColor = "#666";
                    //remove pre-load
                    $("#subjectInfoModalLabel").addClass("modal-preload-box");
                    $("#subjectInfoModalLabel-eng").addClass("modal-preload-box");
                });
            });

        </script>
        <div class="modal fade" id="subjectInfoModal" tabindex="-1" role="dialog" aria-labelledby="subjectInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-header">
                        <div class="container-fluid" style="margin: 0px; width: 100%;">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="modal-title modal-preload-box" id="subjectInfoModalLabel">Subject Name</h5>
                                    <h5 class="modal-title modal-title-eng modal-preload-box" id="subjectInfoModalLabel-eng">Subject Name-eng</h5>
                                    <p id="modal-edu-star" class="modal-star"><b>รหัสวิชา: </b> <span id="no">test</span></p>
                                    <p id="modal-edu-star" class="modal-star"><b>อาจารย์ผู้สอน: </b><span id="prof">test2</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="circleNumber" class="numberCircle">3</div>
                                    <b class="modal-star">หมวดหมู่: </b><span id="typedes" class="modal-star"> คอมพิวเตอร์</span>&nbsp;&nbsp;&nbsp;<b class="modal-star">หน่วยกิต: </b><span id="creditdes" class="modal-star">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p id="modal-edu-star" class="modal-star">&nbsp;&nbsp;&nbsp;<span id="des-th">test</span></p>
                        <p id="modal-edu-star" class="modal-star">&nbsp;&nbsp;&nbsp;<span id="des-en">test</span></p>
                    </div>
                </div>
            </div>
        </div>
        <section id="cur60-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <img id="cur60-logo" src="assets/common/img/ite-logo/ite-logo-s-w.png">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <center>
                            <h1 id="cur60-title">
                                วิศวกรรมสารสนเทศ
                            </h1>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div id="cur60-title4" style="background-color: #ffffff; width: 15%; height: 3px; margin: 0px auto; opacity: 0"></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 8px">
                    <div class="col-sm-8 offset-sm-2">
                        <center>
                            <h5 id="cur60-title2">
                                หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมสารสนเทศ
                            </h5>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <center>
                            <h5 id="cur60-title3">
                                หลักสูตรปรับปรุง พ.ศ.2560
                            </h5>
                        </center>
                    </div>
                </div>
            </div>
        </section>
        <section id="about-pre-curriculum" style="background-color: #ffffff !important;">
            <div id="about-pre-curriculum-contents" class="container-fluid">
                <div class="row">
                    <div class="col-sm-2 offset-sm-5">
                        <img src="assets/common/img/icon/book.svg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <center>
                            <h3>หลักสูตรปริญญาตรี พ.ศ.2560</h3>
                        </center>
                        <p>
                            เพื่อให้การพัฒนาหลักสูตรวิศวกรรมสารสนเทศตอบสนองต่อลักษณะของผู้เรียนที่เปลี่ยนไปจากอดีต คณะกรรมการบริหารหลักสูตรจึงกําหนดว่าหลักสูตรฉบับใหม่นี้จะเป็นหลักสูตรที่มุ่งเน้นที่ผลลัพธ์ของการผลิตบัณฑิตที่เรียกว่า Outcome-Based Curriculum โดยเน้นจัดการเรียนการสอนแบบ Active Learning เพื่อส่งเสริมกระบวนการเรียนรู้กระตุ้นการคิดวิเคราะห์สังเคราะห์และตอบสนองต่อผู้เรียนในยุคปัจจุบัน อันจะช่วยส่งผลให้การเรียนการสอนมีประสิทธิภาพมากยิ่งขึ้น
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 offset-xs-1 col-xl-2 offset-xl-5 col-lg-4 offset-lg-4 col-md-6 offset-md-3" style="margin-bottom: 60px;">
                        <a href="http://www.reg.kmitl.ac.th/curriculum/file/bachelor/01/it_c2560.pdf" style="width: 100%;" class="btn btn-primary" id="about-btnto-curriculum" target="_blank" rel="noopener">รายละเอียดหลักสูตร [PDF]</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="ite-1F" style="padding-top: 30px; background-color: #ffe693;">
            <div class="container-fluid">
                <center>
                    <h1 id="c11Fa">ชั้นปีที่ 1</h1>
                </center>
                <div class="row card-padding">
                    <div class="col-sm-10 offset-sm-1">
                        <h2 id="c11Fb">ภาคเรียนที่ 1</h2>
                        <div id="c11F" class="row">
                            <?php
                            create60Card11F();
                        ?>
                        </div>
                        <hr width="100%">
                        <h2>ภาคเรียนที่ 2</h2>
                        <div id="c12F" class="row">
                            <?php
                            create60Card12F();
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="ite-2F" style="padding-top: 30px; background-color: #abd2f7;">
            <div class="container-fluid">
                <center>
                    <h1>ชั้นปีที่ 2</h1>
                </center>
                <div class="row card-padding">
                    <div class="col-sm-10 offset-sm-1">
                        <h2>ภาคเรียนที่ 1</h2>
                        <div id="c21F" class="row">
                            <?php
                            create60Card21F();
                        ?>
                        </div>
                        <hr width="100%">
                        <h2>ภาคเรียนที่ 2</h2>
                        <div id="c22F" class="row">
                            <?php
                            create60Card22F();
                        ?>
                        </div>
                    </div>
                </div>
        </section>
        <section id="ite-3F" style="padding-top: 30px; background-color: #d0ffda;">
            <div class="container-fluid">
                <center>
                    <h1>ชั้นปีที่ 3</h1>
                </center>
                <div class="row card-padding">
                    <div class="col-sm-10 offset-sm-1">
                        <h2>ภาคเรียนที่ 1</h2>
                        <div class="row">
                            <?php
                            create60Card31F();
                        ?>
                        </div>
                        <hr width="100%">
                        <h2>ภาคเรียนที่ 2</h2>
                        <div class="row">
                            <?php
                            create60Card32F();
                        ?>
                        </div>
                        <hr width="100%">
                        <h2>ภาคเรียนที่ 3</h2>
                        <div class="row">
                            <?php
                            create60Card33F();
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="ite-4F" style="padding-top: 30px; background-color: #ffc39b;">
            <div class="container-fluid">
                <center>
                    <h1>ชั้นปีที่ 4</h1>
                </center>
                <div class="row card-padding">
                    <div class="col-sm-10 offset-sm-1">
                        <h2>ภาคเรียนที่ 1</h2>
                        <div class="row">
                            <?php
                            create60Card41F();
                        ?>
                        </div>
                        <hr width="100%">
                        <h2>ภาคเรียนที่ 2</h2>
                        <div class="row">
                            <?php
                            create60Card42F();
                        ?>
                        </div>
                    </div>
                </div>
        </section>

    </main>
    <!-- 4.Footer -->
    <footer id="footer-placeholder"></footer>
    <script>
        window.sr = ScrollReveal();
        sr.reveal("#c11fCard", {
            reset: false,
            viewFactor: 0.8,
            rotate: {
                x: 20,
                y: 20,
                Z: 0
            },
            delay: 200
        }, 100);
        sr.reveal("#c12fCard", {
            reset: false,
            viewFactor: 0.8,
            rotate: {
                x: 20,
                y: 20,
                Z: 0
            },
            delay: 200
        }, 100);
        sr.reveal("#c21fCard", {
            reset: false,
            viewFactor: 0.8,
            rotate: {
                x: 20,
                y: 20,
                Z: 0
            },
            delay: 200
        }, 100);
        sr.reveal("#c22fCard", {
            reset: false,
            viewFactor: 0.8,
            rotate: {
                x: 20,
                y: 20,
                Z: 0
            },
            delay: 200
        }, 100);
        sr.reveal("#c31fCard", {
            reset: false,
            viewFactor: 0.8,
            rotate: {
                x: 20,
                y: 20,
                Z: 0
            },
            delay: 200
        }, 100);
        sr.reveal("#c32fCard", {
            reset: false,
            viewFactor: 0.8,
            rotate: {
                x: 20,
                y: 20,
                Z: 0
            },
            delay: 200
        }, 100);
        sr.reveal("#c33fCard", {
            reset: false,
            viewFactor: 0.8,
            rotate: {
                x: 20,
                y: 20,
                Z: 0
            },
            delay: 200
        }, 100);
        sr.reveal("#c41fCard", {
            reset: false,
            viewFactor: 0.8,
            rotate: {
                x: 20,
                y: 20,
                Z: 0
            },
            delay: 200
        }, 100);
        sr.reveal("#c42fCard", {
            reset: false,
            viewFactor: 0.8,
            rotate: {
                x: 20,
                y: 20,
                Z: 0
            },
            delay: 200
        }, 100);
    </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="assets/lib/js/bootstrap.min.js"></script>
    <!-- Retrieve component -->
    <script src="assets/common/js/component.js"></script>
</body>

</html>
