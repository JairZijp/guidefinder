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
                    <h3>Your reviews</h3>
                    <?php

                    include('layout/head-edit-profile.php');

                ?>
                <?php
        $infoUserReviews2 = $user->getPublicUserData();
        $reviewInfo = $user->getUserReviews($_SESSION['username']);

        foreach($reviewInfo as $infoReview) {
            ?>
            <div class="col-sm-5 review">
                <div class="media">

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
                        <h4 class="media-heading"><?= $infoReview['name']; ?></h4>
                        <h5>Rating: <?= $infoReview['rating']; ?> <span class="glyphicon glyphicon-star"></span>
                        <h5>Email: <code><?= $infoReview['email']; ?></code></h5>
                        <h5>Date: <?= $infoReview['created_at']; ?></h5>
                        <hr>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <?= $infoReview['message']; ?>
                        </div>
                        <!-- /panel-body -->
                    </div>
                    <!-- /panel panel-default -->
                    <div class="footer-review">
                    </div>

                </div>

            </div>
                    <?php

        }
        ?>
                        </div>
            </div>


        </div>
    </div>
