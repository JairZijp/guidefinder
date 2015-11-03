<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <h1>All Guides</h1>
        <hr>
        <?php
        $allGuides = $user->getAllGuides();

        foreach($allGuides as $info) {
        ?>
        <div class="row ">
            <div class="user-block col-md-12">
                <div class="col-md-3">
                    <img class="user-list-image" height="150" width="150" src="images/profile/<?= $info['image']; ?>">
                </div>
                <div class="col-md-9">
                    <h3><?= $info['username']; ?></h3>
                    <p><?= $info ['description']; ?></p>
                    <p>Locatie: <b><?= $info['city'];?></b></p>
                    <code><?= $info['email']; ?></code>

                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
