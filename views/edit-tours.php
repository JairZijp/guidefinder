<?php

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php?page=login'); }

//define page title
$title = 'Edit Times Page | GuideFinder';


?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <?php

            $tourInfo = $user->getUserTour($_SESSION['username']);
            ?><h3>Edit Tours</h3><?php
            include('layout/head-edit-profile.php');

            foreach($tourInfo as $infoTour) {
                ?>
                    <div class="">
                        <a href="index.php?page=editprofile&selected=edit-tours&id=<?= $infoTour['id'] ?>"><button class="btn btn-primary">Edit: <?= $infoTour['name']; ?> &raquo;</button></a>
                        <p>
                    </div>
                        <?php
                    }

$tourID = isset($_GET['id']) ? $_GET['id'] : 1;

          $tour = $user->clickedEditTour($_GET['id']);
          foreach($tour as $selectedTour) {
        ?>

                <div class="col-md-9 edit-tour-block">
                <form method="post" enctype="multipart/form-data" name="edit-tour">
                    <div class="tour">
                        <input type="text" name="name" value="<?= $selectedTour['name'];?>"><h3></h3>
                        <h4>About the tour:</h4>
                        <p>
                            <textarea name="description"><?= $selectedTour['description']; ?></textarea>
                        </p>
                        <b>Image</b><br>
                        <small class="grey">Select a image for your tour (recommented)</small><br>
                        <img src="images/tours/<?= $selectedTour['image']; ?>">
				        <input class="btn" type="file" id="image" name="image">
                        <hr>
                        <h4>Details:</h4>
                        <p>
                            Price per person: €
                            <input type="text" name="price" value="<?= $selectedTour['price']; ?>">
                        </p>
                        <div class="col-xs-12">
                            <p>Max number of people: ###
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            For Adults:
                            <?= $selectedTour['adults']; ?>
                            <?php if ($selectedTour['adults'] == "Yes") {
                                ?><input type="checkbox" value="Yes" name="adults" checked="checked"><?php
                            } else {
                                ?><input type="checkbox" value="Yes" name="adults"><?php
                            }?>
                            </br>
                            For Children:
                            <?php if ($selectedTour['children'] == "Yes") {
                                ?><input type="checkbox" value="Yes" name="children" checked="checked"><?php
                            } else {
                                ?><input type="checkbox" value="Yes" name="children"><?php
                            } ?>
                            <br>
                            For Aged:
                            <?php if ($selectedTour['aged'] == "Yes") {
                                ?><input type="checkbox" value="Yes" name="aged" checked="checked"><?php
                            } else {
                                ?><input type="checkbox" value="Yes" name="aged"><?php
                            } ?>
                            <br>
                            For Disabled:
                            <?php if ($selectedTour['disabled'] == "Yes") {
                                ?><input type="checkbox" value="Yes" name="disabled" checked="checked"><?php
                            } else {
                                ?><input type="checkbox" value="Yes" name="disabled"><?php
                            } ?>

                        </div>

                        <hr>

                    </div>
                    <input type="submit" name="submit" value="Update Profile" class="btn btn-success" tabindex="5">
                </form></div></div>
                <?php //$plaatje = $selectedTour['image'];
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
                    if (empty($_FILES['image']['name'])) {
                        $newName = $selectedTour['image'];
                    }
                    $user->updateTourData($_SESSION['username'], $_POST['name'], $_POST['price'], $_POST['description'], $_GET['id'], $newName . $extensie, $_POST['adults'], $_POST['disabled'], $_POST['children'], $_POST['aged']);
                    header('Location: memberpage.php');
                }
            }



                ?>
    </div>
</div>
</div>
</div>
