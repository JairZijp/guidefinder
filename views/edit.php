<?php
//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php?page=login'); }

//define page title
$title = 'Edit Personal Page | GuideFinder';

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
                    $active = "active";
                    include('layout/head-edit-profile.php');?>
                            <form method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-12">
                                            <div class="form-group">
                                                <b>Profile picture</b>
                                                <br>
                                                <img height="125" width="125" src="images/profile/<?= $info['image']; ?>">
                                                <input class="btn" type="file" accept="image/*" id="image" name="image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <b>First name</b>
                                                <input type="text" name="firstname" id="firstname" class="form-control input-lg" value="<?= $info['firstname'] ?>" placeholder="First name" tabindex="3">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <b>Last name</b>
                                                <input type="text" name="lastname" id="lastname" value="<?= $info['lastname'] ?>" class="form-control input-lg" placeholder="Last name" tabindex="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <b>Address</b>
                                        <input type="text" name="address" id="address" class="form-control input-lg" value="<?= $info['address'] ?>" placeholder="Address" tabindex="4">
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <b>Zip code</b>
                                                <input type="text" name="zipcode" id="zipcode" value="<?= $info['zipcode'] ?>" class="form-control input-lg" placeholder="Zip Code" tabindex="3">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <b>City</b>
                                                <input type="text" name="city" id="city" value="<?= $info['city'] ?>" class="form-control input-lg" placeholder="City" tabindex="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <b>Email</b>
                                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="<?= $info['email'] ?>" tabindex="2">
                                    </div>
                                    <div class="form-group">
                                        <b>Phone number</b>
                                        <input type="text" name="number" value="<?= $info['phone'] ?>" id="number" class="form-control input-lg" placeholder="Phone Number" tabindex="4">
                                    </div>
                                </div>
                                <div class="col col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="col col-xs-12">
                                        <b>Select languages</b>
                                    </div>
                                    <div class="col col-sm-12 col-md-6">
                                        <div class="input-group taal">
                                            <span class="input-group-addon">
	                                <img src="images/vlaggen/Netherlands.png" alt="Nederlands" class="taal-vlag">
	                                <span class="taal-titel">Dutch</span>
                                            </span>
                                            <select name="NL" class="form-control selectpicker">
                                                <option selected disabled>Selecteer</option>
                                                <option value="onvoldoende" <?=$info[ 'NL']=='onvoldoende' ? ' selected="selected"' : '';?>>Onvoldoende (Insufficient)</option>
                                                <option value="matig" <?=$info[ 'NL']=='matig' ? ' selected="selected"' : '';?>>Matig (Moderate)</option>
                                                <option value="goed" <?=$info[ 'NL']=='goed' ? ' selected="selected"' : '';?>>Goed (Good)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col col-sm-12 col-md-6">
                                        <div class="input-group taal">
                                            <span class="input-group-addon">
	                                <img src="images/vlaggen/United-Kingdom.png" alt="Nederlands" class="taal-vlag">
	                                <span class="taal-titel">English</span>
                                            </span>
                                            <select name="EN" class="form-control selectpicker">
                                                <option selected disabled>Select</option>
                                                <option value="onvoldoende" <?=$info[ 'EN']=='onvoldoende' ? ' selected="selected"' : '';?>>Insufficient</option>
                                                <option value="matig" <?=$info[ 'EN']=='matig' ? ' selected="selected"' : '';?>>Moderate</option>
                                                <option value="goed" <?=$info[ 'EN']=='goed' ? ' selected="selected"' : '';?>>Good</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col col-sm-12 col-md-6">
                                        <div class="input-group taal">
                                            <span class="input-group-addon">
	                                <img src="images/vlaggen/Germany.png" alt="Nederlands" class="taal-vlag">
	                                <span class="taal-titel">German</span>
                                            </span>
                                            <select name="GE" class="form-control selectpicker">
                                                <option selected disabled>Selektieren</option>
                                                <option value="onvoldoende" <?=$info[ 'GE']=='onvoldoende' ? ' selected="selected"' : '';?>>Unzureichende (Insufficient)</option>
                                                <option value="matig" <?=$info[ 'GE']=='matig' ? ' selected="selected"' : '';?>>Mäßigen (Moderate)</option>
                                                <option value="goed" <?=$info[ 'GE']=='goed' ? ' selected="selected"' : '';?>>Gut (Good)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col col-sm-12 col-md-6">
                                        <div class="input-group taal">
                                            <span class="input-group-addon">
	                                <img src="images/vlaggen/France.png" alt="Nederlands" class="taal-vlag">
	                                <span class="taal-titel">France</span>
                                            </span>
                                            <select name="FR" class="form-control selectpicker">
                                                <option selected disabled>Sélectionner</option>
                                                <option value="onvoldoende" <?=$info[ 'FR']=='onvoldoende' ? ' selected="selected"' : '';?>>Insuffisant (Insufficient)</option>
                                                <option value="matig" <?=$info[ 'FR']=='matig' ? ' selected="selected"' : '';?>>Modéré (Moderate)</option>
                                                <option value="goed" <?=$info[ 'FR']=='goed' ? ' selected="selected"' : '';?>>Bon (Good)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col col-sm-12 col-md-6">
                                        <div class="input-group taal">
                                            <span class="input-group-addon">
	                                <img src="images/vlaggen/Spain.png" alt="Nederlands" class="taal-vlag">
	                                <span class="taal-titel">Spanish</span>
                                            </span>
                                            <select name="ES" class="form-control selectpicker">
                                                <option selected disabled>Seleccionar</option>
                                                <option value="onvoldoende" <?=$info[ 'ES']=='onvoldoende' ? ' selected="selected"' : '';?>>Insuficiente (Insufficient)</option>
                                                <option value="matig" <?=$info[ 'ES']=='matig' ? ' selected="selected"' : '';?>>Moderado (Moderate)</option>
                                                <option value="goed" <?=$info[ 'ES']=='goed' ? ' selected="selected"' : '';?>>Buena (Good)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col col-sm-12 col-md-6">
                                        <div class="input-group taal">
                                            <span class="input-group-addon">
	                                <img src="images/vlaggen/Italy.png" alt="Nederlands" class="taal-vlag">
	                                <span class="taal-titel">Italian</span>
                                            </span>
                                            <select name="IT" class="form-control selectpicker">
                                                <option selected disabled>Selezionare</option>
                                                <option value="onvoldoende" <?=$info[ 'IT']=='onvoldoende' ? ' selected="selected"' : '';?>>Insufficiente (Insufficient)</option>
                                                <option value="matig" <?=$info[ 'IT']=='matig' ? ' selected="selected"' : '';?>>Moderato (Moderate)</option>
                                                <option value="goed" <?=$info[ 'IT']=='goed' ? ' selected="selected"' : '';?>>Buono (Good)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col col-sm-12 col-md-6">
                                        <div class="input-group taal">
                                            <span class="input-group-addon">
	                                <img src="images/vlaggen/Russia.png" alt="Nederlands" class="taal-vlag">
	                                <span class="taal-titel">Russian</span>
                                            </span>
                                            <select name="RU" class="form-control selectpicker">
                                                <option selected disabled>выбрать</option>
                                                <option value="onvoldoende" <?=$info[ 'RU']=='onvoldoende' ? ' selected="selected"' : '';?>>недостаточное (Insufficient)</option>
                                                <option value="matig" <?=$info[ 'RU']=='matig' ? ' selected="selected"' : '';?>>умеренный (Moderate)</option>
                                                <option value="goed" <?=$info[ 'RU']=='goed' ? ' selected="selected"' : '';?>>плохой (Good)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col col-sm-12 col-md-6">
                                        <div class="input-group taal">
                                            <span class="input-group-addon">
	                                <img src="images/vlaggen/China.png" alt="Nederlands" class="taal-vlag">
	                                <span class="taal-titel">Chinese</span>
                                            </span>
                                            <select name="CH" class="form-control selectpicker">
                                                <option selected disabled>選</option>
                                                <option value="onvoldoende" <?=$info[ 'CH']=='onvoldoende' ? ' selected="selected"' : '';?>>不足 (Insufficient)</option>
                                                <option value="matig" <?=$info[ 'CH']=='matig' ? ' selected="selected"' : '';?>>緩和 (Moderate)</option>
                                                <option value="goed" <?=$info[ 'CH']=='goed' ? ' selected="selected"' : '';?>>善 (Good)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <b>About</b>
                                            <textarea name="description" id="description" class="form-control input-lg">
                                                <?= $info['description'] ?>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-12 text-right">
                                            <input type="submit" name="submit" value="Update Profile" class="btn btn-success" tabindex="5">
                                        </div>
                                    </div>
                                </div>
                            </form>

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

                        </div>
            </div>


        </div>
    </div>

    <?php
//include header template
require('layout/footer.php');
?>
