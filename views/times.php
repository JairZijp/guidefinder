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

				$userInfo = $user->getUserData($_SESSION['username']);

				foreach($userInfo as $info) {
					?>
                    <h3>Edit Times</h3>
            <?php
                include('layout/head-edit-profile.php');

				?>
                <div class="col-xs-12">
            <div class="row">
              <h3>Please set your times</h3>
              <p>Please set your weekly times, so customers can see at what day and time you are available</p>
              <hr>
               <div class="col-xs-12"><label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" value="option1"> Set this week for all weeks
                </label></div>
                <div class="col-md-6 col-xs-12">
                    <table class="table table-striped custab">
                        <h3><?php
                        $ddate = "2015-12-07";
                        $duedt = explode("-", $ddate);
                        $date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
                        $week  = (int)date('W', $date);
                        echo "Weeknummer: " . $week;

                        $userInfo = $user->getUserData($_SESSION['username']);

                        foreach($userInfo as $info) {
                        ?></h3>
                    <form method="post" enctype="multipart/form-data">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Times:</th>

                        </tr>
                    </thead>
                    <tr>
                        <td>Monday</td>
                        <td><input type="text" name="monday" value="<?= $info['monday']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td><input type="text" name="tuesday" value="<?= $info['tuesday']; ?>"></td>


                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td><input type="text" name="wednesday" value="<?= $info['wednesday']; ?>"></td>


                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td><input type="text" name="thursday" value="<?= $info['thursday']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td><input type="text" name="friday" value="<?= $info['friday']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td><input type="text" name="saturday" value="<?= $info['saturday']; ?>"></td>

                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td><input type="text" name="sunday" value="<?= $info['sunday']; ?>"></td>

                    </tr>


                    <?php

                    if(isset($_POST['submit'])) {
                        $monday = $_POST['monday'];
                        $tuesday = $_POST['tuesday'];
                        $wednesday = $_POST['wednesday'];
                        $thursday = $_POST['thursday'];
                        $friday = $_POST['friday'];
                        $saturday = $_POST['saturday'];
                        $sunday = $_POST['sunday'];

                        $user->updateTimes($_SESSION['username'],$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday);
                        header('Location: index.php?page=times');
                    }
                }

                }
                ?>

                    </table>

                </div>
                <div class="col-md-6 col-xs-12">
                    <table class="table table-striped custab">
                        <h3><?php

$ddate = "2015-12-14";
$duedt = explode("-", $ddate);
$date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
$week  = (int)date('W', $date);
echo "Weeknummer: " . $week;
?></h3>
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>From:</th>
                                <th>Till:</th>
                                <th class="text-center">Set times</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Monday</td>
                            <td>12:00</td>
                            <td>12:00</td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>12:00</td>
                            <td>12:00</td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>12:00</td>
                            <td>12:00</td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>12:00</td>
                            <td>12:00</td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>12:00</td>
                            <td>12:00</td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>12:00</td>
                            <td>12:00</td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>12:00</td>
                            <td>12:00</td>
                            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 text-right">
                    <input type="submit" name="submit" value="Update Profile" class="btn btn-success" tabindex="5">
                </div>

            </form>
                                </div>
                        </div>
            </div>


        </div>
    </div>
</div>
    <?php
//include header template
require('layout/footer.php');
?>
