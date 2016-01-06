<?php require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//define page title
$title = $_SESSION['username'] . ' | GuideFinder';

//include header template
require('layout/header.php');



?>
    <!--   Lees meer click effect-->
    <script src="js/prefixfree.min.js"></script>

    <script>
        $(document).ready(function () {
            // Configure/customize these variables.
            var showChar = 160; // How many characters are shown by default
            var ellipsestext = "...";
            var moretext = "Show more &dtrif;";
            var lesstext = "Show less &utrif;";


            $('.more').each(function () {
                var content = $(this).html();

                if (content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function () {
                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>
    <style>
        /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */

        .morecontent span {
            display: none;
        }

        .morelink {
            display: block;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h2>Profile page of '<?= $info['username']; ?>'</h2>
                <?php

// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
function breadcrumbs($separator = ' &raquo; ', $home = 'Home') {
// This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

// This will build our "base URL" ... Also accounts for HTTPS :)
$base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

// Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
$breadcrumbs = Array("<a href=\"$base\">$home</a>");

// Find out the index for the last value in our path array
$last = end(array_keys($path));

// Build the rest of the breadcrumbs
foreach ($path AS $x => $crumb) {
// Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
$title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

// If we are not on the last index, then display an <a> tag
if ($x != $last)
$breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
// Otherwise, just display the title (minus)
else
$breadcrumbs[] = $title;
}

// Build our temporary array (pieces of bread) into one big string :)
return implode($separator, $breadcrumbs);
}

?>
                    <p>
                        <?= breadcrumbs() ?>
                    </p>
            </div>
            <div class="col-xs-12 col-md-3 sidebar_links">
               <div class="row">
                <h3><?= $info['username']; ?></h3>
                <div class="col-xs-4 profile-photo">
                    <a role="button" data-action="vergroot" title="Photo of <?= $info['username']; ?>" tabindex="0"><img align="left" class="thumbnail sidebar-foto" src="images/profile/<?= $info['image']; ?>" alt="Profile image example" /></a>

                    <div class="vergroot">
                        <div class="vergroot-effect">
                            <div class="vergroot-img-container">
                                <div class="vergroot-img" style="background-image:url(images/profile/<?= $info['image']; ?>)"></div>
                                <!-- background-image for lazy loading -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <table class="table">
                        <p>Name: <b><span class="pull-right"><?= $info['firstname'];?> <?= $info['lastname']; ?></span></b>
                        </p>
                        <p>City: <b><span class="pull-right"><?= $info['city']; ?></span></b>
                        </p>
                        <p>Zipcode: <b><span class="pull-right"><?= $info['zipcode']; ?></b></span>
                        </p>
                    </table>
                </div>
                </div>
                <p>Rating by users: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                <h4>About</h4>
                <hr>
                <p>
                    <span class="more">
                    <?= $info['description']; ?>
                    </span>
                </p>
                <h4>Languages:</h4>
                <hr>
                <div class="col-xs-12 nopad">
                    <img src="images/vlaggen/Netherlands.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                    <p>Dutch: <span class="pull-right"><b><?= $info['NL']; ?></b></span></p>
                </div>
                <div class="col-xs-12 nopad">
                    <img src="images/vlaggen/United-Kingdom.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                    <p>English: <span class="pull-right"><b><?= $info['EN']; ?></b></span></p>
                </div>
                <div class="col-xs-12 nopad">
                    <img src="images/vlaggen/Germany.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                    <p>German: <span class="pull-right"><b><?= $info['GE']; ?></b></span></p>
                </div>
                <div class="col-xs-12 nopad">
                    <img src="images/vlaggen/Spain.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                    <p>Spanish: <span class="pull-right"><b><?= $info['ES']; ?></b></span></p>
                </div>
                <div class="col-xs-12 nopad">
                    <img src="images/vlaggen/France.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                    <p>French: <span class="pull-right"><b><?= $info['FR']; ?></b></span></p>
                </div>
                <div class="col-xs-12 nopad">
                    <img src="images/vlaggen/Italy.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                    <p>Italian: <span class="pull-right"><b><?= $info['IT']; ?></b></span></p>
                </div>
                <div class="col-xs-12 nopad">
                    <img src="images/vlaggen/Russia.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                    <p>Russian: <span class="pull-right"><b><?= $info['RU']; ?></b></span></p>
                </div>
                <div class="col-xs-12 nopad">
                    <img src="images/vlaggen/China.png" class="taal-vlag-profiel pull-left" alt="Dutch" title="Dutch" />
                    <p>Chinese: <span class="pull-right"><b><?= $info['CH']; ?></b></span></p>
                </div>
                <h4>Tours</h4>
                <hr>
                <p>Active tours: <b>2</b></p>
                <p>Given tours: <b>56</b></p>
                <h4>Contact</h4>
                <hr>
                <p>Phone: <b><?= $info['phone']; ?></b></p>
                <p>Email: <b><code><?= $info['email']; ?></code></b></p>
                <label for="basic-url">Social media accounts</label>
                    <a href="#" target="_blank">
                        <p>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3" title="Facebook"><i class="fa fa-facebook-official" alt="Facebook"></i></span>
                                <input type="text" class="form-control" id="basic-url" placeholder="http://www.facebook.com/yourname" aria-describedby="basic-addon3" title="
Enter the entire link!">
                            </div>
                        </p>
                    </a>
                    <a href="#" target="_blank">
                        <p>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3" title="Twitter"><i class="fa fa-twitter" alt="Twitter"></i></span>
                                <input type="text" class="form-control" id="basic-url" placeholder="http://www.twitter.com/yourname" aria-describedby="basic-addon3" title="
Enter the entire link!">
                            </div>
                        </p>
                        <a href="#" target="_blank">
                            <p>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3" title="Facebook"><i class="fa fa-linkedin" alt="Facebook"></i></span>
                                    <input type="text" class="form-control" id="basic-url" placeholder="http://www.linkedin.com/yourname" aria-describedby="basic-addon3" title="
Enter the entire link!">
                                </div>
                            </p>
                        </a>
            </div>
            <?php
            $selected = (isset($_GET['selected']))?$_GET['selected']:"";

            switch ($selected) {
            	case 'times':
                    include('views/profile/times.php');
                    break;
                case 'reviews':
                    include('views/profile/reviews.php');
                    break;
                default:
            ?>
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
                                   <div class="img-tour">
                                    <img class="tour-image" src="images/tours/<?= $infoTour['image']; ?>">
                                    </div>
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
            <?php } ?>
</div>
</div>
</div>
</div>

            <?php
//include header template
require('layout/footer.php');
?>
