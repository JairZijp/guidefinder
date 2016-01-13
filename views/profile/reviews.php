<div class="col-xs-12 col-sm-9 profielcontent">
    <?php
        $active = "active";
        include('layout/head-view-profile.php');?>
        <div class="col-xs-12" id="locations">
            <h3>Tours:</h3>

            <?php
            $infoUserReviews = $user->getPublicUserData();
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
