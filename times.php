<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php?page=login'); }

//define page title
$title = 'Edit Times Page | GuideFinder';

//include header template
require('layout/header.php');

?>

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <?php

				$userInfo = $user->getUserData($_SESSION['username']);

				foreach($userInfo as $info) {
					?>
                    <h3>Edit Profile</h3>
                    <?php

// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

    // This will build our "base URL" ... Also accounts for HTTPS :)
    $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

    // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
    $breadcrumbs = Array("<a href=\"$base\">$home</a>");

    // Find out the index for the last value in our path array
    $last = end(array_keys($path));

    // Build the rest of the breadcrumbs
    foreach ($path AS $x => $crumb) {
        // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
        $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

        // If we are not on the last index, then display an <a> tag
        if ($x != $last)
            $breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
        // Otherwise, just display the title (minus)
        else
            $breadcrumbs[] = $title;
    }

    // Build our temporary array (pieces of bread) into one big string :)
    return implode($separator, $breadcrumbs);
}

?>
                        <p>
                            <?= breadcrumbs() ?>
                        </p>
                        <hr>
                        <div class=" col-xs-3 pad0 border">
                            <a href="edit.php" class="gidspagina"><h3 class="center titel"><i class="fa fa-user" title="Personal"></i><br><span class="hidden-xs">Personal</span></h3></a></div>
                        <div class=" col-xs-3 pad0 border">
                            <a href="#" class="gidspagina"><h3 class="center titel"><i class="fa fa-map-marker" title="Locations"></i><br><span class="hidden-xs">Locations</span></h3></a></div>
                        <div class=" col-xs-3 pad0 actief">
                            <a href="#" class="gidspagina-actief"><h3 class="center titel"><i class="fa fa-clock-o" title="Date &amp; Time"></i><br><span class="hidden-xs">Times</span></h3></a></div>
                        <div class=" col-xs-3 pad0 border">
                            <a href="#" class="gidspagina"><h3 class="center titel"><i class="fa fa-thumbs-o-up" title="Reviews"></i><br><span class="hidden-xs">Reviews</span></h3></a></div>
                        <div class="col col-xs-12 gidscontainer">
                            <div class="row">
                            </div>

                            <?php
			//	error_reporting(E_ALL);
				if(isset($_POST['submit'])) {
					include('logic/resize-image.php');
					$handle = new upload($_FILES['image']);
					if ($handle->uploaded) {
					  $newName = md5(time().$_FILES['image']['tmp_name']);
					  $handle->file_new_name_body   = $newName;
					  $handle->image_resize         = true;
					  $handle->image_x              = 200;
					  $handle->image_ratio_y        = true;
					  $handle->file_safe_name 		= false;
					  $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
						if($ext == 'png') {
						    $extensie = ".png";
						}
						if($ext == 'jpg') {
						    $extensie = ".jpg";
						}
						if($ext == 'gif') {
						    $extensie = ".gif";
						}
					  $handle->process('images/profile');

					  if ($handle->processed) {
					    echo 'image resized';
					    $handle->clean();
					  } else {
					    echo 'error : ' . $handle->error;
					  }
					}
					/*if (empty($_FILES['image']['name'])) {
					    $file = $info['image'];
					} else {
						$file = md5(time().$_FILES['image']['tmp_name']). '.jpg';
					}*/
					$NL = $_POST['NL'];
					$GE = $_POST['GE'];
					$EN = $_POST['EN'];
					$RU = $_POST['RU'];
					$FR = $_POST['FR'];
					$IT = $_POST['IT'];
					$CH = $_POST['CH'];
					$ES = $_POST['ES'];
					$description = $_POST['description'];
					$user->updateUserData($_SESSION['username'],$_POST['email'],$_POST['firstname'],$_POST['lastname'],$_POST['address'],$_POST['zipcode'],$_POST['city'],$_POST['number'],$newName . $extensie,$description,$NL,$GE,$ES,$RU,$EN,$FR,$IT,$CH);
					//move_uploaded_file($_FILES['image']['tmp_name'], 'images/profile/'. $newName);

					//echo "<script> window.location = 'memberpage.php';</script>";
					header('Location: memberpage.php');
				}
			}
				?>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12 text-right">
                                            <input type="submit" name="submit" value="Update Profile" class="btn btn-success" tabindex="5">
                                        </div>
                                    </div>
                                </div>
                        </div>
            </div>


            </div>
        </div>

        <?php
//include header template
require('layout/footer.php');
?>