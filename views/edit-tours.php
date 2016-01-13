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

            $tours = $user->getUserTour($_SESSION['username']);
            ?><h3>Edit Tours</h3><?php
            include('layout/head-edit-profile.php');
            foreach($tours as $info) {
                ?>
                <div class="col-md-6">
                    <div class="tour">
                       <div class="img-tour">
                        <img class="tour-image" src="images/tours/<?= $info['image']; ?>">
                        </div>
                        <h3><?= $info['name'];?></h3>
                        <h4>About the tour:</h4>
                        <p>
                            <?= $info['description']; ?>
                        </p>
                        <hr>
                        <h4>Details:</h4>
                        <p>
                            Price per person: €
                            <?= $info['price']; ?>
                        </p>
                        <div class="col-xs-12">
                            <p>Max number of people: ###
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            For Adults:
                            <?= $info['adults']; ?>
                                </br>
                                For Children:
                                <?= $info['children']; ?>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            For Aged:
                            <?= $info['aged']; ?>
                                </br>
                                For Disabled:
                                <?= $info['disabled']; ?>
                        </div>
                        <hr>
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
</div>
