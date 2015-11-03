<?php
include ('db/connection.php');
session_start();
$a = isset($_GET['a'])?$_GET['a']:"";
include 'head.php';
if (isset($_SESSION['admin'])) {
	switch ($a) {
		default:

			include('views/list.php');
			break;
	}
}else{
	include 'views/login.php';
	include 'logic/login-process.php';
}
?>
