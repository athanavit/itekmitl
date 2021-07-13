<?php

/**
 * @author thanatchaya
 */
    session_start();
    require_once 'DBConnect.php';

    //get post data from modal
    $username = $_COOKIE['username'];

    $fileUpload = basename($_FILES["profile-input"]["name"]);
    $fileSize = $_FILES["profile-input"]["size"];
    $fileTempName = $_FILES["profile-input"]["tmp_name"];

    $targetDir = "../../../forum/assets/avatars/";
    $targetFile = $targetDir.$fileUpload;
    $uploadSuccess = 1;
    $uploadFileType = pathinfo($targetFile,PATHINFO_EXTENSION);

    if ($fileSize > 2000000) {
        $uploadSuccess = 0;
        exit();
    }

        if ($uploadSuccess == 0) {
        echo "notUploaded";
        //UPLOAD PROCEED WHEN uploadSuccess = 1
        } else {
        if (move_uploaded_file($fileTempName, $targetFile)) {
            // Upload Success
            $picUpdate = "UPDATE 1users SET avatar_path ='$fileUpload' WHERE username ='$username'";
            mysqli_query($objCon,$picUpdate) or die(mysqli_error());

            //Set new cookies
            $timetemp = time() + (14 * 60 * 60 * 24);
            $forum_accountConnect = mysqli_query($objCon,"SELECT * FROM 1users WHERE username = '$username'") or die(mysqli_error());
            $forum_accountRow = mysqli_fetch_array($forum_accountConnect);
            setcookie("pic", $forum_accountRow['avatar_path'], $timetemp, "/", "www.ite.kmitl.ac.th");

            echo $fileUpload;
        } else {
            // Upload Error
            echo "errorUpload";
        }
    }
?>
