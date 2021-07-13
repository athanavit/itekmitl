<?php
    session_start();
    require_once 'DBConnect.php';
    require_once 'Forum.php';

    //Get input from Ajax
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    //FOR SIGN UP PAGE
    //Hash password
    //$hashed_password = password_hash($password, PASSWORD_BCRYPT);
    //var_dump($hashed_password);

    //Get user_account Query from database
    $user_accountConnect = mysqli_query($objCon,"SELECT * FROM user_accounts WHERE username = '$username'") or die(mysqli_error());
    $user_accountQuery = mysqli_num_rows($user_accountConnect);

    //Empty query throw eror to ajax
    if($user_accountQuery == 0) {
        die(header('HTTP/1.0 400 There is something wrong'));
    }
    else {
        $user_accountRow = mysqli_fetch_array($user_accountConnect);
        if (password_verify($password, $user_accountRow['password'])) {

            $timetemp = time() + (14 * 60 * 60 * 24);
            setcookie("username", $user_accountRow['username'], $timetemp, "/", "www.ite.kmitl.ac.th");
            setcookie("IsT", $user_accountRow['is_teacher'], $timetemp, "/", "www.ite.kmitl.ac.th");

            /* Get Forum pic etc.. */
            $forum_accountConnect = mysqli_query($objCon,"SELECT * FROM 1users WHERE username = '$username'") or die(mysqli_error());
            $forum_accountRow = mysqli_fetch_array($forum_accountConnect);
            
            setcookie("pic", $forum_accountRow['avatar_path'], $timetemp, "/", "www.ite.kmitl.ac.th");

            $forum = new Forum();
            $forum -> login($user_accountRow['username'], $user_accountRow['email']);

            /* echo whether activated or not */
            echo $user_accountRow['is_activated'];
        }
        else {
        die(header('HTTP/1.0 400 error code'));
        }
    }

    mysqli_close($objCon);

    // just a little more for security
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
