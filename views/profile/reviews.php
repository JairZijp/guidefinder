<div class="col-xs-12 col-sm-9 profielcontent">
    <?php
        $active = "active";
        include('layout/head-view-profile.php');?>
        <div class="col-xs-12" id="locations">
            <h3>Tours:</h3>

            <?php
    $tourInfo = $user->getUserTour($_SESSION['username']);

    foreach($tourInfo as $infoTour) {
        ?>
                <div class="col-md-6">
                    <div class="tour">
                        <img class="tour-image" src="images/tours/<?= $infoTour['image']; ?>">
                        <h3><?= $infoTour['name'];?></h3>
                        <h4>About the tour:</h4>
                        <p>
                            <?= $infoTour['description']; ?>
                        </p>
                        <hr>
                        <h4>Details:</h4>
                        <p>
                            Price per person: €
                            <?= $infoTour['price']; ?>
                        </p>
                        <div class="col-xs-12">
                            <p>Max number of people: ###
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            For Adults:
                            <?= $infoTour['adults']; ?>
                                </br>
                                For Children:
                                <?= $infoTour['children']; ?>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            For Aged:
                            <?= $infoTour['aged']; ?>
                                </br>
                                For Disabled:
                                <?= $infoTour['disabled']; ?>
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
