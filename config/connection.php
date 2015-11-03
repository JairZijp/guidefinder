<?php


define('DB_HOST','localhost');
define('DB_NAME','tester');
define('DB_USERNAME','root');
define('DB_PASSWORD','admin');

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL:
    (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

mysqli_set_charset($mysqli,"utf8");



 ?>
