<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: index.php?page=login'); }

//define page title
$title = 'Admin Panel';

//include header template
require('layout/header.php');

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h2>Admin panel</h2>
            <hr>
            <?php include ('views/list.php'); ?>
        </div>
    </div>
</div>
