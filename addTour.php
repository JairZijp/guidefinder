<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php?page=login'); }

//define page title
$title = 'Add Tour';

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
                    <hr>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <p><b>Title</b>
                                <input type="text" name="name" class="form-control input-md" placeholder="Title">
                            </p>
                        </div>
                        <div class="form-group">
                            <p>Price:
                                <input type="number" class="form-control input-md" name="price" placeholder="Price">
                            </p>
                        </div>
                        <b>Image<b><br>

				<input class="btn" type="file" id="image" name="image"></p>
			<div class="row">
			<div class="form-group">
            	<p>Description: <textarea type="text" class="form-control input-md" name="description" placeholder="Description"></textarea></p>
			</div>
            <p>Adults: <input type="checkbox" name="adults" value="Yes"></p>
            <p>Aged: <input type="checkbox" name="aged" value="Yes"></p>
            <p>Children: <input type="checkbox" name="children" value="Yes"></p>
            <p>Disabled: <input type="checkbox" name="disabled" value="Yes"></p>
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

			$memberIDs = $info['memberID'];
			$usersname = $info['username'];

			if ($adults != 'Yes') { $adults = 'No'; }
			if ($aged != 'Yes') { $aged = 'No'; }
			if ($disabled != 'Yes') { $disabled = 'No'; }
			if ($children != 'Yes') { $children = 'No'; }

			//$newName = md5(time().$_FILES['image']['tmp_name']). '.jpg';
			$user->addTour($memberIDs,$usersname,$_POST['name'],$newName . $extensie,$_POST['price'],$_POST['description'],$adults,$aged,$children,$disabled);
			//move_uploaded_file($_FILES['image']['tmp_name'], 'images/tours/' . $newName);
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
