<div class="col-xs-12 col-sm-9 profielcontent">
    <?php
        $active = "active";
        include('layout/head-view-profile-public.php');?>
        <div class="col-xs-12" id="locations">
            <h3>Reviews:</h3>

            <?php
    $infoUserReviews = $user->getPublicUserData();
    $reviewInfo = $user->getUserReviews($infoUserReviews['username']);

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
    <div class="row"></div><hr>

    <div class="col-md-offset-3 col-md-6">
        <h5><b>Add review</b></h5>
    <form name="review" method="post">
        <div class="form-group">
            <p><b>Name</b>
                <input type="text" name="name" class="form-control input-md">
            </p>
        </div>
        <div class="form-group">
            <p><b>Email</b>
                <input type="email" class="form-control input-md" name="email">
            </p>
        </div>
        <div class="form-group">
            <p><b>Phone</b>
                <input type="text" class="form-control input-md" name="phone">
            </p>
        </div>
        <div class="form-group">
            <p><b>Rating</b>
                <span class="glyphicon glyphicon-star"></span>
                <select name="rating" class="form-control selectpicker">
                    <option selected disabled>Selecteer</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </p>
        </div>
        <div class="form-group">
            <p><b>Message</b>
                <textarea rows="8" class="form-control input-md" name="message"></textarea>
            </p>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
        </div>

    </form>
</div>
<?php
if (isset($_POST['submit'])) {
    $user->addReview($infoUserReviews['username'],$infoUserReviews['memberID'],$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['rating'], $_POST['message']);
    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/projects/yourguide/");
}
?>
        </div>
</div>
