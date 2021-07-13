<?php session_start(); ?>
<nav class="navbar navbar-toggleable-lg navbar-inverse bg-faded fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <a class="navbar-brand" href="index.php" style="max-width: 60px;"><img src="assets/common/img/ite-logo/ite-logo-w-m.png" alt="brand"></a>
    <div class="collapse navbar-collapse" style="margin-top: 4px;" id="navbarSupportedContent">
        <!-- 2.1.Navbar left -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="curriculum.php">หลักสูตร</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      ข่าวสาร
                    </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                    <a class="dropdown-item" href="/forum/t/notice">ข่าวประชาสัมพันธ์</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item disabled" href="#">ประกาศรายวิชา</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="achievement.php">ผลงาน</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      ข้อมูลสาขาวิชา
                    </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                    <a class="dropdown-item" href="about.php">เกี่ยวกับสาขาวิชาฯ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="history.php">ประวัติสาขาวิชาฯ</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="personnel.php">คณาจารย์และบุคลากร</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">ติดต่อเรา</a>
            </li>
        </ul>
        <!-- 2.2.Navbar right -->
        <!-- TODO: For mobile & dropdown bug-->
        <!-- TODO: move session to cookies -->
        <?php
                if (isset($_COOKIE['flarum_remember'])) {
                    if($_COOKIE['IsT'] == '0') {
                        echo "<ul class=\"navbar-nav navbar-right dropdown hiddenCaret\">
                            <li class=\"nav-item dropdown-toggle\" id=\"accountDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"margin: 4px 4px 4px 4px;\">
                                <div for=\"navbar-proPic\" class=\"navbar-proPic hidden-md-down\" style=\"background-image: url('../forum/assets/avatars/".$_COOKIE['pic']."')\"></div>
                            </li>
                            <li class=\"nav-item dropdown-toggle hiddenCaret\" id=\"accountDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"margin: 0px;\">
                                <a class=\"nav-link\" href=\"#\">" .$_COOKIE['username']. "</a>
                            </li>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"forum\">ฟอรั่ม</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"setting.php\">แก้ไขข้อมูลส่วนตัว</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"assets/common/php/signOut.php\">ลงชื่อออก</a>
                            </div>
                        </ul>";
                    } else if($_COOKIE['IsT'] == '1') {
                        echo "<ul class=\"navbar-nav navbar-right dropdown hiddenCaret\">
                            <li class=\"nav-item dropdown-toggle\" id=\"accountDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"margin: 4px 4px 4px 4px;\">
                                <div for=\"navbar-proPic\" class=\"navbar-proPic hidden-md-down\" style=\"background-image: url('../forum/assets/avatars/".$_COOKIE['pic']."')\"></div>
                            </li>
                            <li class=\"nav-item dropdown-toggle hiddenCaret\" id=\"accountDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"margin: 0px;\">
                                <a class=\"nav-link\" href=\"#\">" .$_COOKIE['username']. "</a>
                            </li>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownMenuLink\">
                                <a class=\"dropdown-item\" href=\"forum\">ฟอรั่ม</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"admin/landing.php\">ระบบอาจารย์</a></a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"setting.php\">แก้ไขข้อมูลส่วนตัว</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"assets/common/php/signOut.php\">ลงชื่อออก</a>
                            </div>
                        </ul>";
                    }
                }
                else if(!isset($_COOKIE['flarum_remember'])) {
                    echo "<ul class=\"navbar-nav navbar-right\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"login.php\">เข้าสู่ระบบ</a>
                        </li>
                    </ul>";
                }
            ?>
    </div>
</nav>
