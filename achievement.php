<?php
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
        <title>Achievement | ITE - KMITL</title>
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
        <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
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
        <main id="main">
            <!-- 3.1.Parallax -->
            <section id="curriculum-parallax">
                <div class="wrapper overlay">
                    <h1> ผลงานนักศึกษา </h1>
                </div>
            </section>
            <!-- 3.2.Achievement Section -->
            <section id="achievement2">
                <div class="container-fluid">
                    <div class="row card-padding">
                        <?php createAchievementCard2(); ?>
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
        <!-- Retrieve component -->
        <script src="assets/common/js/component.js"></script>

    </body>

    </html>
