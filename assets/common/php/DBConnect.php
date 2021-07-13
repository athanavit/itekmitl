<?php
header('Content-Type: text/html; charset=utf-8');

define('servername','localhost');
define('username', 'itekmitl_db'); //change here!
define('password', 'WeAreITE'); //change here!
define('dbname', 'itekmitl_db');

$objCon = mysqli_connect(servername, username, password, dbname);
mysqli_set_charset($objCon,"utf8");

/*
if (!$objCon) {
        die("Server Connection: Connection failed - " . $objCon->connect_error);
    }
else {
    echo "Good";
}
*/

?>