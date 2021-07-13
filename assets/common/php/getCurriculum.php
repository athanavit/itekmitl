<?php
    function getUngrad() {
        //POST Announcement from forum database to index page
        include("DBConnect.php");
        $postSQL = "SELECT curriculum.curriculum_name, link, school_year
                        FROM `curriculum` 
                        WHERE curriculum.curriculum_type = 1 
                        ORDER BY school_year DESC";
        $temp = 0;
        $postQuery = mysqli_query($objCon,$postSQL);
        if($postQuery -> num_rows > 0){
            while ($row = $postQuery->fetch_assoc()) {
                if($temp==0) {
                    echo "<p><a href=\"" .$row["link"]. "\">" .$row["curriculum_name"]. " [ล่าสุด]</a></p>" ;
                    $temp=1;
                }
                else {
                    echo "<p><a target=\"_blank\" rel=\"noopener\" href=\"" .$row["link"]. "\">" .$row["curriculum_name"]. "</a></p>" ;
                }
            }
        } //End get announcement data from forum
   }

    function getMaster() {
        //POST Announcement from forum database to index page
        include("DBConnect.php");
        $postSQL = "SELECT curriculum.curriculum_name, link, school_year
                        FROM `curriculum` 
                        WHERE curriculum.curriculum_type = 2 
                        ORDER BY school_year DESC";
        $temp = 0;
        $postQuery = mysqli_query($objCon,$postSQL);
        if($postQuery -> num_rows > 0){
            while ($row = $postQuery->fetch_assoc()) {
                if($temp==0) {
                    echo "<p><a target=\"_blank\" rel=\"noopener\" href=\"" .$row["link"]. "\">" .$row["curriculum_name"]. " [ล่าสุด]</a></p>" ;
                    $temp=1;
                }
                else {
                    echo "<p><a target=\"_blank\" rel=\"noopener\" href=\"" .$row["link"]. "\">" .$row["curriculum_name"]. "</a></p>" ;
                }
            }
        } //End get announcement data from forum
   }

?>
