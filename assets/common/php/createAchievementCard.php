<?php
    function createAchievementCard() {
        include("DBConnect.php");
        $sql = "SELECT * FROM achievement ORDER BY achievement.id DESC LIMIT 3";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div class=\"col-md-4 card-margin\">" .PHP_EOL;
                echo "<a class=\"no-decoration\" href=\"achievementshow.php?id=" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover\">".PHP_EOL;
                echo "<img class=\"card-img-top\" src=\"assets/common/img/achievement/" .$row['pic']. "\" alt=\"achievement-img\">".PHP_EOL;
                echo "<div class=\"card-block\">".PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['title']. "</h4>".PHP_EOL;
                echo "<p class=\"card-text\" >" .$row['short_desc']. "</p>".PHP_EOL;

                echo "</div>".PHP_EOL;
                echo"</div>".PHP_EOL;
                echo "</a>".PHP_EOL;
                echo "</div>".PHP_EOL;
            }
        }
    }

    function createAchievementCard2() {
        include("DBConnect.php");
        $sql = "SELECT * FROM achievement ORDER BY achievement.id DESC";
        $query = mysqli_query($objCon,$sql);

        if($query -> num_rows > 0){
            while ($row = $query->fetch_assoc()) {
                echo "<div class=\"col-md-4 card-margin\">" .PHP_EOL;
                echo "<a class=\"no-decoration\" href=\"achievementshow.php?id=" .$row['id']. "\">".PHP_EOL;
                echo "<div class=\"card shadow-5-hover\">".PHP_EOL;
                echo "<img class=\"card-img-top\" src=\"assets/common/img/achievement/" .$row['pic']. "\" alt=\"achievement-img\">".PHP_EOL;
                echo "<div class=\"card-block\">".PHP_EOL;
                echo "<h4 class=\"card-title\">" .$row['title']. "</h4>".PHP_EOL;
                echo "<p class=\"card-text\" >" .$row['short_desc']. "</p>".PHP_EOL;

                echo "</div>".PHP_EOL;
                echo"</div>".PHP_EOL;
                echo "</a>".PHP_EOL;
                echo "</div>".PHP_EOL;
            }
        }
    }

?>
