<?php

/**
 * @author thanatchaya
 */
    session_start();
    require_once 'DBConnect.php';

    //get post data from modal
    $username = $_COOKIE['username'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $password_query = mysqli_query($objCon,"SELECT password FROM user_accounts WHERE username='$username'");
    $user_password_row = mysqli_fetch_array($password_query);

    if(password_verify($old_password, $user_password_row['password'])){
        $hashed_new_password = password_hash($new_password, PASSWORD_BCRYPT);
        $activate = '1';
        $new_password_query = "UPDATE user_accounts SET password = '$hashed_new_password', is_activated = '$activate' WHERE username = '$username'";
        mysqli_query($objCon,$new_password_query) or die(mysqli_error());
    }
    else{
        die(header('HTTP/1.0 400 error code'));
    }
    mysqli_close($objCon);
?>
