<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php?page=login'); }

//define page title
$title = 'Edit Tours';

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
                    <h2>Edit Tours</h2>
                    <?php
                    // This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
                    function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
                        // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
                        $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

                        // This will build our "base URL" ... Also accounts for HTTPS :)
                        $base = 'http' . '://' . $_SERVER['HTTP_HOST'] . '/';

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
                            <?php
                            $tourInfo = $user->getUserTour($_SESSION['username']);

            				foreach($tourInfo as $infoTour) { echo "hey"; } ?>
                        </p>
                        <hr>
                        <div class=" col-xs-3 pad0 border">
                            <a href="edit.php" class="gidspagina">
                                <h3 class="center titel"><i class="fa fa-user" title="Personal"></i>
                                    <br>
                                    <span class="hidden-xs">Personal</span>
                                </h3>
                            </a>
                        </div>
                        <div class=" col-xs-3 pad0 actief">
                            <a href="editTour.php" class="gidspagina-actief">
                                <h3 class="center titel"><i class="fa fa-map-marker" title="Locations"></i>
                                    <br>
                                    <span class="hidden-xs">Locations</span>
                                </h3>
                            </a>
                        </div>
                        <div class=" col-xs-3 pad0 border">
                            <a href="times.php" class="gidspagina">
                                <h3 class="center titel"><i class="fa fa-clock-o" title="Date &amp; Time"></i>
                                    <br>
                                    <span class="hidden-xs">Times</span>
                                </h3>
                            </a>
                        </div>
                        <div class=" col-xs-3 pad0 border">
                            <a href="reviews.php" class="gidspagina">
                                <h3 class="center titel"><i class="fa fa-thumbs-o-up" title="Reviews"></i>
                                    <br>
                                    <span class="hidden-xs">Reviews</span>
                                </h3>
                            </a>
                        </div>
                        <div class="col col-xs-12 gidscontainer">
                            <div class="row">
                            </div>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <p><b>Title</b>
                                        <input type="text" name="name" class="form-control input-md" placeholder="Title">
                                    </p>
                                </div>
                                <div class="form-group">
                                    <p><b>Price p.p</b>
                                        <input type="number" class="form-control input-md" name="price" placeholder="Price">
                                    </p>
                                </div>
                                <b>Image<b><br>

				<input class="btn" type="file" id="image" name="image"></p>


            	<p>Description: <textarea type="text" class="form-control input-md" name="description" placeholder="Description"></textarea></p>
            
            <div class="form-group">
                <p>Adults: <input type="checkbox" name="adults" value="Yes"></p>
                <p>Aged: <input type="checkbox" name="aged" value="Yes"></p>
                <p>Children: <input type="checkbox" name="children" value="Yes"></p>
                <p>Disabled: <input type="checkbox" name="disabled" value="Yes"></p>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Add Tour" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
            </div>
        </form>
        <?php


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
              $handle->process('images/tours');

              if ($handle->processed) {
                echo 'image resized';
                $handle->clean();
              } else {
                echo 'error : ' . $handle->error;
              }
            }
			$adults = $_POST['adults'];
			$children = $_POST['children'];
			$aged = $_POST['aged'];
			$disabled = $_POST['disabled'];
            $monday = $_POST['monday'] . " "  . $_POST['monday2'];
            $tuesday = $_POST['tuesday'] . " "  . $_POST['tuesday2'];
            $wednesday = $_POST['wednesday'] . " "  . $_POST['wednesday2'];
            $thursday = $_POST['thursday'] . " "  . $_POST['thursday2'];
            $friday = $_POST['friday'] . " "  . $_POST['friday2'];
            $saturday = $_POST['saturday'] . " "  . $_POST['saturday2'];
            $sunday = $_POST['sunday'] . " "  . $_POST['sunday2'];
			$memberIDs = $info['memberID'];
			$usersname = $info['username'];

			if ($adults != 'Yes') { $adults = 'No'; }
			if ($aged != 'Yes') { $aged = 'No'; }
			if ($disabled != 'Yes') { $disabled = 'No'; }
			if ($children != 'Yes') { $children = 'No'; }

			//$newName = md5(time().$_FILES['image']['tmp_name']). '.jpg';
			$user->addTour($memberIDs,$usersname,$_POST['name'],$newName . $extensie,$_POST['price'],$_POST['description'],$adults,$aged,$children,$disabled,$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday);
            //move_uploaded_file($_FILES['image']['tmp_name'], 'images/tours/' . $newName);
            echo "<script> window.location = 'memberpage.php';</script>";
			header('Location: memberpage.php');
		}
	}
        ?>
	</div>
</div>

</div>
</div>
<?php
//include header template
require('layout/footer.php');
?>
