<?php
    unset($_COOKIE['flarum_remember']);
    unset($_COOKIE['flarum_session']);
    unset($_COOKIE['username']);
    unset($_COOKIE['IsT']);
    unset($_COOKIE['pic']);

    //loop to delete all cookies in session
    if (isset($_SERVER['HTTP_COOKIE'])) {
        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
        foreach($cookies as $cookie) {
            $parts = explode('=', $cookie);
            $name = trim($parts[0]);
            setcookie($name, '', time()-1000);
            setcookie($name, '', time()-1000, '/');
        }
        setcookie('flarum_remember', "", time() - 3600,'/','www.ite.kmitl.ac.th');
        setcookie('username', "", time() - 3600,'/','www.ite.kmitl.ac.th');
        setcookie('IsT', "", time() - 3600,'/','www.ite.kmitl.ac.th');
        setcookie('pic', "", time() - 3600,'/','www.ite.kmitl.ac.th');
        header('Location: ../../../redirecting.php');
    }
    session_destroy();
?>
