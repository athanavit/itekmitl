<!DOCTYPE html>
<?php
    if(!isset($_COOKIE['username']) || $_COOKIE['username'] == null) {
        header('Location: ../error/permissiondenied.php');
        exit();
    } else {
        if($_COOKIE['IsT'] != 1) {
            header('Location: ../error/permissiondenied.php');
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="../assets/common/object/manifest.json">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบอาจารย์ | ITE - KMITL</title>
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
    <?php session_start(); ?>
    <nav class="navbar navbar-toggleable-lg navbar-light bg-faded fixed-top">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <a class="navbar-brand" href="../index.php" style="max-width: 60px;"><img src="../assets/common/img/ite-logo/ite-logo-w-m.png" alt="brand"></a>
        <div class="collapse navbar-collapse" style="margin-top: 4px;" id="navbarSupportedContent">
            <!-- 2.1.Navbar left -->
            <ul class="navbar-nav mr-auto">
            </ul>
            <!-- 2.2.Navbar right -->
            <!-- TODO: For mobile & dropdown bug-->
            <!-- TODO: move session to cookies -->
            <?php
                echo "<ul class=\"navbar-nav navbar-right dropdown hiddenCaret\">
                <li class=\"nav-item dropdown-toggle\" id=\"accountDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"margin: 4px 4px 4px 4px;\">
                    <div for=\"navbar-proPic\" class=\"navbar-proPic hidden-md-down\" style=\"background-image: url('../forum/assets/avatars/".$_COOKIE['pic']."')\"></div>
                </li>
                <li class=\"nav-item dropdown-toggle hiddenCaret\" id=\"accountDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"margin: 0px;\">
                    <a class=\"nav-link\" href=\"#\">" .$_COOKIE['username']. "</a>
                </li>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"../forum\">ฟอรั่ม</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"../admin/landing.php\">ระบบอาจารย์</a></a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"../setting.php\">แก้ไขข้อมูลส่วนตัว</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"../assets/common/php/signOut.php\">ลงชื่อออก</a>
                </div>
                </ul>"
            ?>
        </div>
    </nav>

    <!-- 3.Main Section -->
    <main id="main" style="margin-top: 73px; padding: 20px 5%;">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <script>
                        function getTime() {
                            var d = new Date();
                            var time = new Array(3);
                            time[0] = "Good Morning, ";
                            time[1] = "Good Afternoon, ";
                            time[2] = "Good Evening, ";
                            var m;
                            if(d.getHours()<=12){
                                m = time[0];
                            }
                            else if(d.getHours()>12 && d.getHours()<=16){
                                m = time[1];
                            }
                            else{
                                m = time[2];
                            }
                            return m;
                        }
                    </script>
                    <h1><script>document.write(getTime())</script><?php echo $_COOKIE['username']; ?>.</h1><br>
                    <h3>รายวิชาของคุณ</h3>
                    <a class="btn btn-primary" style="margin-bottom: 10px;" href="./class/manage.php">จัดการรายวิชา</a>
                    <br><br><br>
                    <h3>ข่าวประชาสัมพันธ์</h3>
                    <a class="btn btn-primary" style="margin-bottom: 10px;" href="../forum/">เขียนข่าวใหม่</a>
                    <br><br><br>
                    <h3>Banner เว็บไซต์</h3>
                    <a class="btn btn-primary" style="margin-bottom: 10px;" href="editBanner.php">เปลี่ยน Banner หลักหน้าเว็บไซต์</a>
                    
                </div>
            </div>
        </div>
    </main>

    <!-- 4. Footer -->
    <div class="container-fluid" style="position: fixed; bottom: 0px; width: 100%;">
        <div class="row" style="background-color: #989898;">
            <div class="col-lg-8" style="padding: 5px 15px;">
                <h6 class="copyright-1">©Copyright 2018 Information Engineering, KMITL. All Rights Reserved.</h6>
                <h6 class="copyright-2">©2018 ITE, KMITL. All Rights Reserved.</h6>
            </div>
            <div class="col-lg-4" style="padding: 5px 15px; text-align: right;">
                <h6 class="copyright-1">Developed by <a class="copyright-1" style="text-decoration: underline;" href="https://thanatchakromsang.github.io" target="_blank" rel="noopenner">Thanatcha</a> and <a class="copyright-1" style="text-decoration: underline;" href="https://korkiak.github.io" target="_blank" rel="noopenner">KorKiak</a>.</h6>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../assets/lib/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>


</body>

</html>
