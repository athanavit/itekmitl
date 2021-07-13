<?php
    session_start();
    require_once '../php/DBConnect.php';

    $temp = trim(stripslashes($_POST['username']));
    $name = mysqli_query($objCon,"SELECT * FROM ite_mod WHERE username = '$temp'") or die(mysqli_error());
    $row = mysqli_num_rows($name);
    if($row == 0) {
        echo "Login Failed.";
        exit;
    }
    else {
        $passtemp = trim(stripslashes($_POST['password']));
        $userRow=mysqli_fetch_array($name);
        if ($passtemp != $userRow['password']) {
            echo "Login Failed. Wrong password.";
            exit;
        }
    }
    mysqli_close($objCon);


?>