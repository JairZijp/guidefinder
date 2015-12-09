<?php
//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: memberpage.php'); }

//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($user->login($username,$password)){
		$_SESSION['username'] = $username;
		header('Location: memberpage.php');
		exit;

	} else {
		$error[] = '
        <div class="alert alert-danger" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span> Wrong username or password or your account has not been activated.
                            </div>';
	}

}//end if submit
?>
