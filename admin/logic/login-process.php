<?php
error_reporting(E_ALL);
$mysqli = new mysqli('localhost', 'root', 'admin', 'tester');
$name = isset($_POST['username'])?$_POST['username']:'';
$password = isset($_POST['password'])?$_POST['password']:'';
$query = "SELECT password FROM users WHERE username = '$name'";
$passwordCheck = $mysqli->query($query)->fetch_assoc()['password'];
if (isset($_POST['login-form']) AND !empty($name) AND !empty($password)) {
    if ($password == $passwordCheck) {
        session_start();
        $_SESSION['admin'] = $name;
        echo "<script> window.location.replace('index.php') </script>";
    } else {
        echo "<script> window.location.replace('index.php') </script>";
    }
} elseif (isset($_POST['login-form'])) {
    echo "<script> window.location.replace('index.php') </script>";
}

?>
