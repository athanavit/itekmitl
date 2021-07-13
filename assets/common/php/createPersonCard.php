<?php
    function createPersonCard() {
        include("DBConnect.php");
        $sql = "SELECT P_id,pic,website,name,name_eng,position, short_name FROM `professor`";
        $query = mysqli_query($objCon,$sql);
        
        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div class=\"col-md-6 col-lg-4 col-xl-3 card-margin\">" .PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#staffInfoModal\" data-staffname=\"" .$row['short_name']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover\">".PHP_EOL;
                echo "<img class=\"card-img-top\" src=\"assets/common/img/staff/" .$row['pic']. "\" alt=\"Card image cap\">".PHP_EOL;
                echo "<div class=\"card-block\">".PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['name']. "</h4>".PHP_EOL;
                echo "<h5>" .$row['position']. "</h5>".PHP_EOL;
                
                $byID = $row['P_id'];                
                $sql2 = "SELECT teach_sub FROM `p_teach` WHERE P_id = $byID";
                $query2 = mysqli_query($objCon,$sql2);
                while($row2 = $query2->fetch_assoc()) {
                    echo "  - ".$row2['teach_sub']. "<br>".PHP_EOL;
                }
                echo "</div>".PHP_EOL;
                echo"</div>".PHP_EOL;
                echo "</a>".PHP_EOL;
                echo "</div>".PHP_EOL;
            }
        }
    }
    function createPersonCard2() {
        include("DBConnect.php");
        $sql = "SELECT S_id,pic,website,name,name_eng,position, short_name FROM `staff`";
        $query = mysqli_query($objCon,$sql);
        
        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div class=\"col-md-6 col-lg-4 col-xl-3 card-margin\">".PHP_EOL;
                echo "<a style=\"cursor: pointer;\" class=\"no-decoration\" data-toggle=\"modal\" data-target=\"#staffInfoModal\" data-staffname=\"" .$row['short_name']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover\">".PHP_EOL;
                echo "<img class=\"card-img-top\" src=\"assets/common/img/staff/" .$row['pic']. "\" alt=\"Card image cap\">".PHP_EOL;
                echo "<div class=\"card-block\">".PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['name']. "</h4>".PHP_EOL;
                echo "<h5>" .$row['position']. "</h5>".PHP_EOL;
                echo "</div>".PHP_EOL;
                echo "</div>".PHP_EOL;
                echo "</a>".PHP_EOL;
                echo "</div>".PHP_EOL;
            }
        }
    }

?>