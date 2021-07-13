<?php

/**
 * @author thanatchaya
 */
    session_start();
    require_once 'DBConnect.php';

    //get post data from modal
    $username = $_COOKIE['username'];
    $password = $_POST['password'];
    $passwordVerify = $_POST['verifyPassword'];
    $email = $_POST['email'];

    if($password === $passwordVerify){

        //store password,email and update the database query to change password for next visit
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $activate = '1';
        $updated_query = "UPDATE user_accounts SET password = '$hashed_password', email = '$email', is_activated = '$activate' WHERE username = '$username'";
        mysqli_query($objCon,$updated_query);

        echo "successful";
    }
    else{
        die(header('HTTP/1.0 400 error code'));
    }
?>
