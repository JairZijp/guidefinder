<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Beheer - YourGuide</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="css/beheer.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">

            <ul class="nav navbar-nav navbar-right">
                <li><?php
					if (isset($_SESSION['admin'])) {
						echo '<a href="logout.php">Uitloggen</a>';
					}else{
						//echo '<a href="login.php">Login</a>';
					}

				 ?></a></li>

            </ul>

        </div>
    </div>
