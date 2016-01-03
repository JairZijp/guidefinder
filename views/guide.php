<?php
//define page title
$title = 'Guide Profile Page';

$guidesInfo = $user->getPublicUserData();
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <h2>Profile page of '<?= $guidesInfo['username']; ?>'</h2>
        </div>
        <div class="col-xs-12 col-md-3 sidebar_links">
           <div class="row">
            <h3><?= $guidesInfo['username']; ?></h3>
            <div class="col-xs-4 nopad">
                <a role="button" data-action="vergroot" title="Photo of <?= $guidesInfo['username']; ?>" tabindex="0"><img align="left" class="thumbnail sidebar-foto" src="images/profile/<?= $guidesInfo['image']; ?>" alt="Profile image example" /></a>

                <div class="vergroot">
                    <div class="vergroot-effect">
                        <div class="vergroot-img-container">
                            <div class="vergroot-img" style="background-image:url(images/profile/<?= $guidesInfo['image']; ?>)"></div>
                            <!-- background-image for lazy loading -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-8">
                <table class="table">
                    <p>Name: <b><span class="pull-right"><?= $guidesInfo['firstname'];?> <?= $guidesInfo['lastname']; ?></span></b>
                    </p>
                    <p>City: <b><span class="pull-right"><?= $guidesInfo['city']; ?></span></b>
                    </p>
                    <p>Zipcode: <b><span class="pull-right"><?= $guidesInfo['zipcode']; ?></b></span>
                    </p>
                </table>
            </div>
            </div>
            <p>Rating by users: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
            <h4>About</h4>
            <hr>
            <p>
                <span class="more">
                <?= $guidesInfo['description']; ?>
                </span>
            </p>
            <h4>Languages:</h4>
            <hr>
            <div class="col-xs-12 nopad">
                <img src="images/vlaggen/Netherlands.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                <p>Dutch: <span class="pull-right"><b><?= $guidesInfo['NL']; ?></b></span></p>
            </div>
            <div class="col-xs-12 nopad">
                <img src="images/vlaggen/United-Kingdom.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                <p>English: <span class="pull-right"><b><?= $guidesInfo['EN']; ?></b></span></p>
            </div>
            <div class="col-xs-12 nopad">
                <img src="images/vlaggen/Germany.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                <p>German: <span class="pull-right"><b><?= $guidesInfo['GE']; ?></b></span></p>
            </div>
            <div class="col-xs-12 nopad">
                <img src="images/vlaggen/Spain.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                <p>Spanish: <span class="pull-right"><b><?= $guidesInfo['ES']; ?></b></span></p>
            </div>
            <div class="col-xs-12 nopad">
                <img src="images/vlaggen/France.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                <p>French: <span class="pull-right"><b><?= $guidesInfo['FR']; ?></b></span></p>
            </div>
            <div class="col-xs-12 nopad">
                <img src="images/vlaggen/Italy.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                <p>Italian: <span class="pull-right"><b><?= $guidesInfo['IT']; ?></b></span></p>
            </div>
            <div class="col-xs-12 nopad">
                <img src="images/vlaggen/Russia.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                <p>Russian: <span class="pull-right"><b><?= $guidesInfo['RU']; ?></b></span></p>
            </div>
            <div class="col-xs-12 nopad">
                <img src="images/vlaggen/China.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                <p>Chinese: <span class="pull-right"><b><?= $guidesInfo['CH']; ?></b></span></p>
            </div>
            <h4>Tours</h4>
            <hr>
            <p>Active tours: <b>2</b></p>
            <p>Given tours: <b>56</b></p>
            <h4>Contact</h4>
            <hr>
            <p>Phone: <b><?= $guidesInfo['phone']; ?></b></p>
            <p>Email: <b><code><?= $guidesInfo['email']; ?></code></b></p>
            <p>
                <a href="#" target="_blank"><i class="fa fa-facebook-official fa-lg pad3"></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin-square fa-lg pad3"></i></a>
                <a href="#" target="_blank"> <i class="fa fa-twitter-square fa-lg pad3"></i></a>
            </p>

        </div>
        <div class="col-xs-12 col-sm-9 profielcontent">
            <?php
                $active = "active";
                include('layout/head-view-profile.php');?>
                <div class="col-xs-12" id="locations">
                    <h3>Tours:</h3>

                    <?php
            $tourInfo = $user->getUserTour($guidesInfo['username']);

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

</div>
</div>
</div>
</div>
<?php
?>
