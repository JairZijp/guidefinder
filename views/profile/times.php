<div class="col-xs-12 col-sm-9 profielcontent">
    <?php
        $active = "active";
        include('layout/head-view-profile.php');?>
        <div class="col-xs-12" id="locations">
            <h3>Tours:</h3>

            <?php
                $info = $user->getUserData($_SESSION['username']);
            ?>
            <?php var_dump($info);
            echo $info['email'];
            ?>
        </div>
</div>
