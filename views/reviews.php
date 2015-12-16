<?php

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php?page=login'); }

//define page title
$title = 'Your reviews | GuideFinder';

//include header template


?>

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <?php

				$userInfo = $user->getUserData($_SESSION['username']);

				foreach($userInfo as $info) {
					?>
                    <h3>Your reviews</h3>
                    <?php

                    include('layout/head-edit-profile.php');
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
                                        <h3>All your reviews</h3>
                                        <h5>Your current review status: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
                                        <p>On this page you can see the reviews people have givin you. If a review is incorrect, offensive or threatening, please let us know by clicking the dropdown mark right in the top of the review.</p>
                                        <hr>
                                        <div class="col-sm-5 review">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object dp img-circle" src="http://www.asthmamd.org/images/icon_user_1.png" style="width: 100px;height:100px;">
                                                </a>
                                                <div class="media-body">
                                                   <div class="btn-group report">
                                                        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="report review">
                                                        <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Incorrect</a></li>
                                                            <li><a href="#">Offensive</a></li>
                                                            <li><a href="#">Threatening</a></li>
                                                        </ul>
                                                    </div>
                                                    <h4 class="media-heading">John Doe <small>from England</small></h4>
                                                    <h5>Review: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></h5>
                                                    <h5>Tour: <a href="#">Amsterdam boat trip</a></h5>
                                                    <h5>Date: 03/08/2014</h5>
                                                    <hr>
                                                </div>
                                                <div class="panel">
                                                    <div class="panel-body">
                                                        Paul was a good guide Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak
                                                    </div>
                                                    <!-- /panel-body -->
                                                </div>
                                                <!-- /panel panel-default -->
                                                <div class="footer-review"><small>Review placed 5 days ago</small>
                                                </div>

                                            </div>

                                        </div>
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
