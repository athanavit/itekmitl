<?php

/**
 * @author thanatchaya
 */
    session_start();
    require_once 'DBConnect.php';

    //get post data from modal

    $username = $_COOKIE['username'];
    $nameEN = $_POST['nameEN'];
    $surnameEN = $_POST['surnameEN'];
    $email = $_POST['email'];
    $facebook = $_POST['facebook'];

    $nameTH = $_POST['nameTH'];
    $surnameTH = $_POST['surnameTH'];
    $Tel = $_POST['Tel'];
    $emergencyTel = $_POST['emergencyTel'];

    /* Queue to update setting */

    if ($nameEN !== "") {
        $nameENUpdate = "UPDATE user_accounts SET nameEN ='$nameEN' WHERE username ='$username'";
        mysqli_query($objCon,$nameENUpdate) or die(mysqli_error());
    }

    if ($surnameEN !== "") {
        $surnameENUpdate = "UPDATE user_accounts SET surnameEN ='$surnameEN' WHERE username ='$username'";
        mysqli_query($objCon,$surnameENUpdate) or die(mysqli_error());
    }

    if ($email !== "") {
        $emailUpdate = "UPDATE user_accounts SET email ='$email' WHERE username ='$username'";
        mysqli_query($objCon,$emailUpdate) or die(mysqli_error());
    }

    if ($facebook !== "") {
        $facebookUpdate = "UPDATE user_accounts SET facebook ='$facebook' WHERE username ='$username'";
        mysqli_query($objCon,$facebookUpdate) or die(mysqli_error());
    }

    if ($nameTH !== "") {
        $nameTHUpdate = "UPDATE user_accounts SET nameTH ='$nameTH' WHERE username ='$username'";
        mysqli_query($objCon,$nameTHUpdate) or die(mysqli_error());
    }

    if ($surnameTH !== "") {
        $surnameTHUpdate = "UPDATE user_accounts SET surnameTH ='$surnameTH' WHERE username ='$username'";
        mysqli_query($objCon,$surnameTHUpdate) or die(mysqli_error());
    }

    if ($Tel !== "") {
        $TelUpdate = "UPDATE user_accounts SET Tel ='$Tel' WHERE username ='$username'";
        mysqli_query($objCon,$TelUpdate) or die(mysqli_error());
    }

    if ($emergencyTel !== "") {
        $emergencyTelUpdate = "UPDATE user_accounts SET emergencyTel ='$emergencyTel' WHERE username ='$username'";
        mysqli_query($objCon,$emergencyTelUpdate) or die(mysqli_error());
    }

    mysqli_close($objCon);
?>
