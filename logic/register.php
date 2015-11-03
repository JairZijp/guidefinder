<?php if( $user->is_logged_in() ){ header('Location: memberpage.php'); } ?>
<?php
if(isset($_POST['submit'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Username is too short.';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Username provided is already in use.';
		}

	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'Password is too short.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Confirm password is too short.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Passwords do not match.';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Please enter a valid email address';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'Email provided is already in use.';
		}

	}

	if(!isset($error)){
		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);
		//create the activasion code
		$activasion = md5(uniqid(rand(),true));

		try {
			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email,active,firstname,lastname,address,zipcode,city,phone,sex,NL,GE,EN,ES,RU,FR,IT,CH) VALUES (:username, :password, :email, :active, :firstname, :lastname, :address, :zipcode, :city, :phone, :sex, :NL, :GE, :EN, :ES, :RU, :FR, :IT, :CH)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion,
				':firstname' => $_POST['firstname'],
				':lastname' => $_POST['lastname'],
				':address' => $_POST['address'],
				':zipcode' => $_POST['zipcode'],
				':city' => $_POST['city'],
				':phone' => $_POST['number'],
				':sex' => $_POST['sex'],
				':NL' => $_POST['NL'],
				':GE' => $_POST['GE'],
				':EN' => $_POST['EN'],
				':RU' => $_POST['RU'],
				':CH' => $_POST['CH'],
				':ES' => $_POST['ES'],
				':FR' => $_POST['FR'],
				':IT' => $_POST['IT']
			));
			$id = $db->lastInsertId('memberID');

			//send email
			$to = $_POST['email'];
			$subject = "Guide Finder Registration Confirmation";
			$body = "Thank you for registering at GuideFinder.\n\n To activate your account, please click on this link:\n\n ".DIR."activate.php?x=$id&y=$activasion\n\n Guide Finder \n\n";
			$additionalheaders = "From: <".SITEEMAIL.">\r\n";
			$additionalheaders .= "Reply-To: ".SITEEMAIL."";
			mail($to, $subject, $body, $additionalheaders);

			//redirect to index page
			header('Location: index.php?page=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}
?>
