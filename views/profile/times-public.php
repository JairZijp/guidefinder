<div class="col-xs-12 col-sm-9 profielcontent">
    <?php
        $active = "active";
        include('layout/head-view-profile-public.php');?>
        <div class="col-xs-12" id="locations">
            <h3>Times:</h3>

            <?php
                $infoTimes = $user->getPublicUserData();
            ?>
            <table class="table table-striped custab">
                <h3></h3>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Times:</th>
                    </tr>
                </thead>
                <tr>
                    <td>Monday</td>
                    <td><?= $info['monday']; ?></td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td><?= $info['tuesday']; ?></td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td><?= $info['wednesday']; ?></td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td><?= $info['thursday']; ?></td>

                </tr>
                <tr>
                    <td>Friday</td>
                    <td><?= $info['friday']; ?></td>

                </tr>
                <tr>
                    <td>Saturday</td>
                    <td><?= $info['saturday']; ?></td>

                </tr>
                <tr>
                    <td>Sunday</td>
                    <td><?= $info['sunday']; ?></td>

                </tr>
            </table>
        </div>
</div>
