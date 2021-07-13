<?php
    function create60Card11F() {
        include("DBConnect.php");
        $sql = "SELECT `id`, `subject_name`, `type`, `credit` FROM `curriculum60` WHERE `semester`='11F'";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div id=\"c11fCard\" class=\"col-xl-3 col-lg-4 col-sm-6 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#subjectInfoModal\" data-subid=\"" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover card-" .$row['type']. "\">" .PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['subject_name']. "</h4>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
                echo "</a>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
            }
        }
    }
    function create60Card12F() {
        include("DBConnect.php");
        $sql = "SELECT `id`, `subject_name`, `type`, `credit` FROM `curriculum60` WHERE `semester`='12F'";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div id=\"c12fCard\" class=\"col-xl-3 col-lg-4 col-sm-6 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#subjectInfoModal\" data-subid=\"" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover card-" .$row['type']. "\">" .PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['subject_name']. "</h4>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
                echo "</a>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
            }
        }
    }
    
    function create60Card21F() {
        include("DBConnect.php");
        $sql = "SELECT `id`, `subject_name`, `type`, `credit` FROM `curriculum60` WHERE `semester`='21F'";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div id=\"c21fCard\" class=\"col-xl-3 col-lg-4 col-sm-6 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#subjectInfoModal\" data-subid=\"" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover card-" .$row['type']. "\">" .PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['subject_name']. "</h4>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
                echo "</a>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
            }
        }
    }
    function create60Card22F() {
        include("DBConnect.php");
        $sql = "SELECT `id`, `subject_name`, `type`, `credit` FROM `curriculum60` WHERE `semester`='22F'";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div id=\"c22fCard\" class=\"col-xl-3 col-lg-4 col-sm-6 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#subjectInfoModal\" data-subid=\"" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover card-" .$row['type']. "\">" .PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['subject_name']. "</h4>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
                echo "</a>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
            }
        }
    }
    
    function create60Card31F() {
        include("DBConnect.php");
        $sql = "SELECT `id`, `subject_name`, `type`, `credit` FROM `curriculum60` WHERE `semester`='31F'";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div id=\"c31fCard\" class=\"col-xl-3 col-lg-4 col-sm-6 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#subjectInfoModal\" data-subid=\"" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover card-" .$row['type']. "\">" .PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['subject_name']. "</h4>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
                echo "</a>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
            }
        }
    }
    function create60Card32F() {
        include("DBConnect.php");
        $sql = "SELECT `id`, `subject_name`, `type`, `credit` FROM `curriculum60` WHERE `semester`='32F'";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div id=\"c32fCard\" class=\"col-xl-3 col-lg-4 col-sm-6 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#subjectInfoModal\" data-subid=\"" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover card-" .$row['type']. "\">" .PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['subject_name']. "</h4>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
                echo "</a>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
            }
        }
    }
    function create60Card33F() {
        include("DBConnect.php");
        $sql = "SELECT `id`, `subject_name`, `type`, `credit` FROM `curriculum60` WHERE `semester`='33F'";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div id=\"c33fCard\" class=\"col-xl-3 col-lg-4 col-sm-6 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#subjectInfoModal\" data-subid=\"" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover card-" .$row['type']. "\">" .PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['subject_name']. "</h4>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
                echo "</a>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
            }
        }
    }

    function create60Card41F() {
        include("DBConnect.php");
        $sql = "SELECT `id`, `subject_name`, `type`, `credit` FROM `curriculum60` WHERE `semester`='41F'";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div id=\"c41fCard\" class=\"col-xl-3 col-lg-4 col-sm-6 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#subjectInfoModal\" data-subid=\"" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover card-" .$row['type']. "\">" .PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['subject_name']. "</h4>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
                echo "</a>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
            }
        }
    }
    function create60Card42F() {
        include("DBConnect.php");
        $sql = "SELECT `id`, `subject_name`, `type`, `credit` FROM `curriculum60` WHERE `semester`='42F'";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div id=\"c42fCard\" class=\"col-xl-3 col-lg-4 col-sm-6 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#subjectInfoModal\" data-subid=\"" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover card-" .$row['type']. "\">" .PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['subject_name']. "</h4>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
                echo "</a>" .PHP_EOL;
                echo "</div>" .PHP_EOL;
            }
        }
    }
?>
