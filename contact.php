<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="assets/common/object/manifest.json">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us | ITE - KMITL</title>
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
    <header></header>
    <!-- 2.Navigation Bar -->
    <nav id="navbar-placeholder"></nav>
    <!-- 3.Main -->
    <main id="main" style="padding-bottom: 30px;">
        <section>
            <div class="google-map-area" style="margin-top: 55px;">
                <div id="map" style="width: 100%; height: 500px; position: relative; overflow: hidden;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d570.1897631422864!2d100.77203322712073!3d13.727334417462474!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d664b84ef1417%3A0xd2e8705e1eebfc3e!2z4Lit4Liy4LiE4Liy4LijIDEyIOC4iuC4seC5ieC4mSBLTUlUTA!5e0!3m2!1sen!2sth!4v1557979593860!5m2!1sen!2sth&zoom=9&z=9" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="container-fluid" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <center>
                            <h1 style="font-family: 'Pattaya', sans-serif;">วิศวกรรมสารสนเทศ</h1>
                            <h3 style="font-family: 'Pattaya', sans-serif;">Information Engineering</h3>
                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                            <p style="font-family: 'Mitr', sans-serif;">
                                สาขาวิชาวิศวกรรมสารสนเทศ ภาควิชาวิศวกรรมคอมพิวเตอร์ <br> คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง <br> ชั้น 12 อาคารเรียนรวม 12 ชั้น <br> เลขที่ 1 ซอยฉลองกรุง 1 แขงลาดกระบัง เขตลาดกระบัง <br> กรุงเทพมหานคร 10520 <br>
                            </p>
                        </center>
                    </div>
                </div>
            </div>
        </section>
        <section style="padding: 60px;">
            <div class="container-fluid">
                <div class="row card-padding">
                    <div id="about-com" class="col-lg-3 card-margin">
                        <img src="assets/common/img/icon/smartphone.svg">
                        <h4 style="margin-top: 30px; text-align: center; line-height: 1.5">
                            <b>โทรศัพท์สายตรง</b><br>02-3298329
                        </h4>
                    </div>
                    <div id="about-elec" class="col-lg-3 card-margin">
                        <img src="assets/common/img/icon/telephone.svg">
                        <h4 style="margin-top: 30px; text-align: center; line-height: 1.5">
                            <b>โทรศัพท์ภายใน</b><br>3845, 3844, 3451
                        </h4>
                    </div>
                    <div id="about-tele" class="col-lg-3 card-margin">
                        <a href="https://www.fb.com/KMITL.ITE" target="_blank"><img src="assets/common/img/icon/facebook.svg"></a>
                        <h4 style="margin-top: 30px; text-align: center; line-height: 1.5">
                            <b><a href="https://www.fb.com/KMITL.ITE" target="_blank" style="text-decoration: none;">Facebook</b><br>fb.com/KMITL.ITE</a>
                        </h4>
                    </div>
                    <div id="about-line" class="col-lg-3 card-margin">
                        <a href="https://line.me/ti/p/%40lgu5674f" target="_blank"><img src="assets/common/img/icon/line.svg"></a>
                        <h4 style="margin-top: 30px; text-align: center; line-height: 1.5">
                            <b><a href="https://line.me/ti/p/%40lgu5674f" target="_blank" style="text-decoration: none;">LINE</b><br>@lgu5674f</a>
                        </h4>
                    </div>
                    <script>
                        var element_position = $('#about-com').offset().top;
                        var screen_height = $(window).height();
                        var activation_offset = 0.1; //determines how far up the the page the element needs to be before triggering the function
                        var activation_point = element_position - (screen_height * activation_offset);
                        var max_scroll_height = $('body').height() - screen_height - 5;

                        $(window).on('scroll', function() {
                            var y_scroll_pos = window.pageYOffset;

                            var element_in_view = y_scroll_pos > activation_point;
                            var has_reached_bottom_of_page = max_scroll_height <= y_scroll_pos && !element_in_view;

                            if (element_in_view || has_reached_bottom_of_page) {
                                document.getElementById("about-com").style.opacity = "1";
                                document.getElementById("about-com").style.transform = "translate(0px, 0px)";
                                setTimeout(function() {
                                    document.getElementById("about-tele").style.opacity = "1";
                                    document.getElementById("about-tele").style.transform = "translate(0px, 0px)";
                                }, 200);
                                setTimeout(function() {
                                    document.getElementById("about-elec").style.opacity = "1";
                                    document.getElementById("about-elec").style.transform = "translate(0px, 0px)";
                                }, 500);
                                setTimeout(function() {
                                    document.getElementById("about-line").style.opacity = "1";
                                    document.getElementById("about-line").style.transform = "translate(0px, 0px)";
                                }, 900);

                                setTimeout(function() {
                                    document.getElementById("about-pre-curriculum-contents").style.opacity = "1";
                                    document.getElementById("about-pre-curriculum-contents").style.transform = "translate(0px, 0px)";
                                }, 1500);
                            }
                        });

                    </script>
                </div>
            </div>
        </section>
    </main>

    <!-- 4.Footer -->
    <footer id="footer-placeholder"></footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="assets/lib/js/bootstrap.min.js"></script>

    <!-- Retrive google map
    <script src="assets/common/js/googlemap.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS6yvQbsjpiCtvIvE2RSFMm_ohwA78q4U&callback=initMap"></script> -->

    <!-- Retrieve component -->
    <script src="assets/common/js/component.js"></script>
</body>

</html>
