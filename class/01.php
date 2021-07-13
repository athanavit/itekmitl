    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="manifest" href="../assets/common/object/manifest.json">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Class 01 | วิศวกรรมสารสนเทศ สจล.</title>
        <!-- for chrome mobile -->
        <meta name="theme-color" content="#FF8539">
        <link rel="icon" sizes="192x192" href="../assets/common/img/ite-logo/ite-logo-b-m.png">
        <link rel="apple-touch-icon" href="../assets/common/img/ite-logo/ite-logo-b-m.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/lib/css/bootstrap.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="../assets/common/css/style.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- loaders -->
        <script src='../assets/lib/js/nprogress.js'></script>
        <link rel='stylesheet' href='../assets/lib/css/nprogress.css' />
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
        <!-- 3.Main Section -->
        <main id="main">
        <section id="loginbox">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 box-padding">
                        <div class="login-box" style="margin-top: 40%;">
                            <form name="formValidate" id="loginForm">
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
                                            <button type="button" class="btn btn-primary pull-right login-button" id="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>

        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="../assets/lib/js/bootstrap.min.js"></script>
        <script src="../assets/lib/js/jquery.photoset-grid.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>

        <!-- Retrieve facebook embed page -->
        <script src="../assets/lib/js/facebook.js"></script>

        <!-- Retrieve component -->
        <script src="../assets/common/js/component.js"></script>

        <script>
            $('.photoset-grid').photosetGrid({
                rel: 'ITE-activities',
                gutter: '2px'
            });

        </script>
    </body>

    </html>
