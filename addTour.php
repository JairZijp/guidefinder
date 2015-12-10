<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php?page=login'); }

//define page title
$title = 'My tours | GuideFinder';

//include header template
require('layout/header.php');

?>

    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
                <?php
            		$userInfo = $user->getUserData($_SESSION['username']);
            		foreach($userInfo as $info) {
            		?>
                    <h2>Add Tour</h2>
                    <p>On this page you can add tours. These tours will be displayed on your profile page and on the 'All Tours' page. Please select your price for each person for the tour, for how many persons the tour is, and for whom the tour is suitable.</p>
                    <hr>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <p><b>Title</b>
                                <input type="text" name="name" class="form-control input-md" placeholder="Type a title for your tour">
                            </p>
                        </div>
                        <div class="form-group">
                            <p><b>Price p.p.</b>
                                <input type="number" class="form-control input-md" name="price" placeholder="Set your price for each person">
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                            <label for="sel1">Minimal number of persons:</label>
                            <select class="form-control" id="sel1">
                                <option disabled selected>Not set</option>
                                <option>1 person</option>
                                <option>2 persons</option>
                                <option>3 persons</option>
                                <option>4 persons</option>
                                <option>5 persons</option>
                                <option>6 persons</option>
                                <option>7 persons</option>
                                <option>8 persons</option>
                                <option>9 persons</option>
                                <option>10 persons</option>
                                <option disabled>We do not recomment a higher number</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                            <label for="sel1">Maximal number of persons:</label>
                            <select class="form-control" id="sel1">
                                <option disabled selected>Please select</option>
                                <option>1 person</option>
                                <option>2 persons</option>
                                <option>3 persons</option>
                                <option>4 persons</option>
                                <option>5 persons</option>
                                <option>6 persons</option>
                                <option>7 persons</option>
                                <option>8 persons</option>
                                <option>9 persons</option>
                                <option>10 persons</option>
                                <option>11 persons</option>
                                <option>12 persons</option>
                                <option>13 persons</option>
                                <option>14 persons</option>
                                <option>15 persons</option>
                                <option>16 persons</option>
                                <option>17 persons</option>
                                <option>18 persons</option>
                                <option>19 persons</option>
                                <option>20 persons</option>
                                <option disabled>We do not recomment a higher number</option>
                            </select>
                        </div>
                        </div>
                        <b>Image<b><br>
                        <small class="grey">Select a image for your tour (recommented)</small>

				<input class="btn" type="file" id="image" name="image"></p>


            	<p>Description: <textarea type="text" class="form-control input-md" name="description" placeholder="Type a description for the tour..."></textarea></p>
               
            <div class="row">
            <div class="col-md-2">
            <div class="form-group">
                <p><input type="checkbox" name="adults" value="Yes"> <label for="adults">Adults</label></p>
                <p><input type="checkbox" name="aged" value="Yes"> <label for="aged">Aged</label></p>
            </div>
            </div>
            <div class="col-md-2">
            <div class="form-group">
                <p><input type="checkbox" name="children" value="Yes"> <label for="children">Children</label></p>
                <p><input type="checkbox" name="disabled" value="Yes"> <label for="disabled">Disabled</label></p>
                </div>
                </div>
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
