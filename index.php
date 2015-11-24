<?php require('includes/config.php');

//if( $user->is_logged_in() ){ header('Location: memberpage.php'); }

//define page title
$title = 'Guide Finder';
//include header template
require('layout/header.php');
$page = (isset($_GET['page']))?$_GET['page']:"";

switch ($page) {
	case 'register':
		$title = 'Register';
		include ('logic/register.php');
		include ('views/register.php');
		break;
	case 'login':
		$title = 'Login';
		include ('logic/login.php');
		include ('views/login.php');
		# code...
		break;
	case 'joined':
		include('views/verify.php');
		break;
    case 'done':
		include('views/done.php');
		break;
	case 'allguides':
		$title = 'All Guides';
		include('views/allGuides.php');
		break;

	default:
		$title = 'Guide Finder';
		include ('views/home.php');
		break;
}



require('layout/footer.php');
?>
