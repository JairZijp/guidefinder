<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//define page title
$title = 'Profile Page';

//include header template
require('layout/header.php');

?>

    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
                <?php

				$userInfo = $user->getUserData($_SESSION['username']);

				foreach($userInfo as $info) {
				?>
                    <h2>Profile page of '<?= $info['username']; ?>'</h2>
                    <hr>
                    <div class="col-md-4 col-xs-12 profile-img center">
                        <img class="user-image" src="images/profile/<?= $info['image']; ?>">
                    </div>
                    <div class="col-md-4">
                        <p>Name: <b><?= $info['firstname'];?> <?= $info['lastname']; ?></b></p>
                        <p>Email: <b><code><?= $info['email']; ?></code></b></p>
                        <p>City: <b><?= $info['city']; ?></b></p>
                        <p>Zipcode: <b><?= $info['zipcode']; ?></b></p>
                        <p>Street: <b><?= $info['address']; ?></b></p>
                        <p>Phone: <b><?= $info['phone']; ?></b></p>
                        <p>Gender: <b><?= $info['sex']; ?></b></p>
                    </div>
                    <div class="col-md-4 center">
                        <div class="col-xs-12">
                            <img src="images/vlaggen/Netherlands.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                            <p class="pull-left">Dutch: <b><?= $info['NL']; ?></b></p>
                        </div>
                        <div class="col-xs-12">
                            <img src="images/vlaggen/United-Kingdom.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                            <p class="pull-left">
                                <p class="pull-left">English: <b><?= $info['EN']; ?></b></p>
                        </div>
                        <div class="col-xs-12">
                            <img src="images/vlaggen/Germany.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                            <p class="pull-left">
                                <p class="pull-left">Deutsch: <b><?= $info['GE']; ?></b></p>
                        </div>
                        <div class="col-xs-12">
                            <img src="images/vlaggen/Spain.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                            <p class="pull-left">
                                <p class="pull-left">Spanish: <b><?= $info['ES']; ?></b></p>
                        </div>
                        <div class="col-xs-12">
                            <img src="images/vlaggen/France.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                            <p class="pull-left">
                                <p class="pull-left">French: <b><?= $info['FR']; ?></b></p>
                        </div>
                        <div class="col-xs-12">
                            <img src="images/vlaggen/Italy.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                            <p class="pull-left">
                                <p class="pull-left">Italian: <b><?= $info['IT']; ?></b></p>
                        </div>
                        <div class="col-xs-12">
                            <img src="images/vlaggen/Russia.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                            <p class="pull-left">
                                <p class="pull-left">Russian: <b><?= $info['RU']; ?></b></p>
                        </div>
                        <div class="col-xs-12">
                            <img src="images/vlaggen/China.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                            <p class="pull-left">
                                <p class="pull-left">Chinese: <b><?= $info['CH']; ?></b></p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3>About me:</h3>
                        <?= $info['description']; ?>
                            </b>
                            </p>
                    </div>

                    <?php
				}
				?>

                        <hr>

                        <div class="col-xs-12">
                            <h3>Tours:</h3>

                            <?php
				$tourInfo = $user->getUserTour($_SESSION['username']);

				foreach($tourInfo as $infoTour) {
					?>
                                <div class="col-md-6">
                                    <div class="tour">
                                        <img class="tour-image" src="images/tours/<?= $infoTour['image']; ?>">
                                        <h3><?= $infoTour['name'];?></h3>
                                        <p>
                                            <?= $infoTour['description']; ?>
                                        </p>
                                        <hr>
                                        <p>Price: €
                                            <?= $infoTour['price']; ?>
                                        </p>
                                        <p>Max number of people: ###
                                        </p>
                                        <p>For Adults:
                                            <?= $infoTour['adults']; ?>
                                                </br>
                                                For Children:
                                                <?= $infoTour['children']; ?>
                                                    </br>
                                                    For Aged:
                                                    <?= $infoTour['aged']; ?>
                                                        </br>
                                                        For Disabled:
                                                        <?= $infoTour['disabled']; ?>
                                                            </br>
                                                            </br>
                                                            <button class="btn btn-primary">Book this tour &raquo;</button>
                                    </div>
                                </div>
                                <?php

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