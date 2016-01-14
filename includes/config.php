<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','admin');
define('DBNAME','tester');

//application address
define('DIR','http://localhost:8888/Guidefinder/');
define('SITEEMAIL','noreply@domain.com');
error_reporting(0);
try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}
include('classes/User.php');
$memberID = isset($_GET['memberID']) ? $_GET['memberID'] : 1;
$user = new User($db,$memberID);
?>
