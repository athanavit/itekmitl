<?php
    function showAnnouncement()
    {
        //POST Announcement from forum database to index page
        include("DBConnect.php");
        $postSQL = "SELECT 1discussions.id,title,username,start_time,1discussions.slug,1tags.name as type
                FROM `1discussions_tags`
                INNER JOIN 1discussions ON 1discussions.id=discussion_id AND tag_id=2
                INNER JOIN 1users ON 1users.id=1discussions.start_user_id
                INNER JOIN 1tags ON 1tags.slug='notice'
                ORDER BY 1discussions.id DESC LIMIT 6";

        $postQuery = mysqli_query($objCon,$postSQL);
        if($postQuery -> num_rows > 0){
            while ($row = $postQuery->fetch_assoc()) {
                echo "<p><a href=\"forum\\d\\".$row["id"]."-".$row["slug"]."\">" .$row["title"]. "</a></p>";
            }
        } //End get announcement data from forum
    }
?>