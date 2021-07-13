<?php
    include("assets/common/php/indexNews.php");
    include("assets/common/php/createAchievementCard.php");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="manifest" href="assets/common/object/manifest.json">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Information Engineering, KMITL | วิศวกรรมสารสนเทศ สจล.</title>
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
            $(window).load(function () {
                NProgress.done();
                $(".loader").fadeOut("slow");
            })
            setTimeout(function () {
                NProgress.done();
            }, 30000);

            $(document).ready(function () {
                document.getElementById("main").style.opacity = "1";
                document.getElementById("main").style.transform = "translate(0px, 0px)";
            });
        </script>
        <div class="loader"></div>
        <!-- 1.Website Header -->
        <header></header>
        <!-- 2.Navigation Bar -->
        <nav id="navbar-placeholder"></nav>
        <!-- 3.Main Section -->
        <main id="main">
            <!-- 3.1.Hero Section -->
            <section id="hero">
                <div class="container-fluid">
                    <div class="col-sm-10 offset-sm-1">
                        <div id="heroCarouselIndicators" class="carousel slide" data-ride="carousel" data-interval="7000">
                            <div class="carousel-inner shadow-5" role="listbox">
                                <div class="carousel-item active" role="option">
                                    <a href="https://www.ite.kmitl.ac.th/curriculum65.pdf">
                                        <img class="d-block img-fluid" src="assets/common/img/banner1.jpg" alt="First slide">
                                        <div class="carousel-caption active">
                                            <h2>รายละเอียด หลักสูตรปริญญาตรี</h2>
                                            <p class="d-none d-md-block">หลักสูตรวิศวกรรมศาสตรบัณฑิต สาขาวิชาวิศวกรรมระบบไอโอทีและสารสนเทศ หลักสูตรปรับปรุง พ.ศ.2565</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item" role="option">
                                    <a href="https://www.ite.kmitl.ac.th/minor.pdf" target="_blank" rel="noopener">
                                        <img class="d-block img-fluid" src="assets/common/img/banner2.jpg" alt="Second slide">
                                        <div class="carousel-caption">
                                            <h2>หลักสูตรวิชาโท (Minor Program)</h2>
                                            <p class="d-none d-md-block">หลักสูตรวิชาโท สาขาวิศวกรรมระบบไอโอทีและระบบอัจฉริยะ</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item" role="option">
                                    <a href="https://engineer.kmitl.ac.th/post/13403" target="_blank" rel="noopener">
                                        <img class="d-block img-fluid" src="assets/common/img/banner3.jpg" alt="Third slide">
                                        <div class="carousel-caption">
                                            <h2>โครงการหลักสูตรสองปริญญา (Dual Degree)</h2>
                                            <p class="d-none d-md-block">หลักสูตรปริญญาตรี วิศวกรรมระบบไอโอทีและสารสนเทศ ร่วมกับ หลักสูตรฟิสิกส์อุตสาหกรรม คณะวิทยาศาสตร์ สจล.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#heroCarouselIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#heroCarouselIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <ol class="carousel-indicators">
                                <li data-target="#heroCarouselIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#heroCarouselIndicators" data-slide-to="1"></li>
                                <li data-target="#heroCarouselIndicators" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 3.2.NEWS Section -->
            <section id="news">
                <div class="container-fluid">
                    <div class="col-sm-10 offset-sm-1">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12">
                                <div class="news-box" style="background-color: #FFFFFF;">
                                    <h2>ข่าวประชาสัมพันธ์</h2>
                                    <div class="news-box-content">
                                        <div class="news-text">
                                            <p><a href="https://www.facebook.com/KMITL.ITE/"  target="_blank">ติดตามข่าวสารได้จากทาง Facebook หลักสูตร</a></p>
                                            <!--<php showAnnouncement();?>-->
                                        </div>
                                        <p>
                                            <a class="btn btn-primary pull-right" href="forum/t/notice">ข่าวสารทั้งหมด</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- TODO: re-render facebook plugin when page resizes -->
                            <div class="col-sm-4 hidden-md-down" id="pageContainer">
                                <div class="fb-page fb-container shadow-5" data-href="https://www.facebook.com/KMITL.ITE/" data-tabs="timeline" data-small-header="false"
                                    data-adapt-container-width="true" data-width="500" data-hide-cover="false" data-show-facepile="false"
                                    data-height="518">
                                    <blockquote cite="https://www.facebook.com/KMITL.ITE/" class="fb-xfbml-parse-ignore">
                                        <a href="https://www.facebook.com/KMITL.ITE/">Official วิศวกรรมสารสนเทศ พระจอมเกล้าฯลาดกระบัง</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- 3.3.Achievement Section -->
            <section id="achievement" class="shadow-5">
                <div class="wrapper overlay">
                    <h1> Mini-Project ผลงานนักศึกษา </h1>
                </div>
            </section>
            <!-- 3.4.Achievement Section 2 -->
            <section id="achievement2">
                <div class="container-fluid">
                    <div class="col-sm-10 offset-dddwsm-1">
                        <div class="row">
                            <?php createAchievementCard(); ?>
                        </div>
                        <div class="row" style="background-color: #eaeaea; padding-bottom: 20px;">
                            <div class="col float-right">
                                <a class="float-right" href="achievement.php">
                                    <h5>ดูเพิ่มเติม >></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- School -->
            <section id="activities" class="shadow-5">
                <div class="wrapper overlay">
                    <h1> บรรยากาศการเรียนการสอน </h1>
                </div>
            </section>
            <section id="index-activities">
                <div class="container-fluid" style="padding: 2px 0px;">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="photoset-grid" data-layout="42341">
                                <img href="assets/common/img/school/1.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/1.jpg">
                                <img href="assets/common/img/school/2.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/2.jpg">
                                <img href="assets/common/img/school/3.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/3.jpg">
                                <img href="assets/common/img/school/4.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/4.jpg">
                                <img href="assets/common/img/school/5.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/5.jpg">
                                <img href="assets/common/img/school/6.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/6.jpg">
                                <img href="assets/common/img/school/7.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/7.jpg">
                                <img href="assets/common/img/school/8.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/8.jpg">
                                <img href="assets/common/img/school/9.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/9.jpg">
                                <img href="assets/common/img/school/10.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/10.jpg">
                                <img href="assets/common/img/school/11.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/11.jpg">
                                <img href="assets/common/img/school/12.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/12.jpg">
                                <img href="assets/common/img/school/13.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/13.jpg">
                                <img href="assets/common/img/school/14.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/school/14.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- School Event Student -->
            <section id="activities" class="shadow-5">
                <div class="wrapper overlay">
                    <h1> กิจกรรมนักศึกษา </h1>
                </div>
            </section>
            <section id="index-activities">
                <div class="container-fluid" style="padding: 2px 0px;">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="photoset-grid" data-layout="42341">
                                <img href="assets/common/img/activities/highres/1.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/1.jpg">
                                <img href="assets/common/img/activities/highres/2.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/2.jpg">
                                <img href="assets/common/img/activities/highres/3.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/3.jpg">
                                <img href="assets/common/img/activities/highres/4.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/4.jpg">
                                <img href="assets/common/img/activities/highres/5.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/5.jpg">
                                <img href="assets/common/img/activities/highres/6.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/6.jpg">
                                <img href="assets/common/img/activities/highres/7.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/7.jpg">
                                <img href="assets/common/img/activities/highres/8.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/8.jpg">
                                <img href="assets/common/img/activities/highres/9.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/9.jpg">
                                <img href="assets/common/img/activities/highres/10.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/10.jpg">
                                <img href="assets/common/img/activities/highres/11.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/11.jpg">
                                <img href="assets/common/img/activities/highres/12.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/12.jpg">
                                <img href="assets/common/img/activities/highres/13.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/13.jpg">
                                <img href="assets/common/img/activities/highres/14.jpg" data-fancybox="photoset" class="photoset" src="assets/common/img/activities/14.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- 4. Footer -->
        <footer id="footer-placeholder"></footer>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
        <script src="assets/lib/js/bootstrap.min.js"></script>
        <script src="assets/lib/js/jquery.photoset-grid.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>

        <!-- Retrieve facebook embed page -->
        <script src="assets/lib/js/facebook.js"></script>

        <!-- Retrieve component -->
        <script src="assets/common/js/component.js"></script>

        <script>
            $('.photoset-grid').photosetGrid({
                rel: 'ITE-activities',
                gutter: '2px'
            });
        </script>
    </body>

    </html>