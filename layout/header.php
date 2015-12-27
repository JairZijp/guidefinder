<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php if(isset($title)){ echo $title; }?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/ingelogd.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>

    <!--    Plaatsnamen voor homepage -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function () {
            var availableTags = [
//      A
      "Amsterdam",
      "Alkmaar",
      "Almere",
//      B
      "Beverwijk",
      "Brabant",
//      C
      "Castricum",
//      D
      "Den Haag",
//      E
       "Ede",
//      F
       "Finkum",
//      G
      "Groningen",
//      H
      "Haarlem",
//      I
      "IJsselmuiden",
//      J
      "Jisp",
//      K
      "Katwijk",
//      L
      "Leiden",
//      M
      "Maastricht",
//      N
      "Nunspeet",
//      O
      "Opmeer",
      "Obdam",
//      P
      "Pieterburen",
//      R
      "Roermond",
      "Rotterdam",
//      S
      "Schagen",
//      T
      "Tilburg",
//      U
      "Utrecht",
//      V
      "Volendam",
//      W
      "Waalwijk",
//      Y
      "Yerseke",
//      Z
      "Zwolle"
    ];
            $("#tags").autocomplete({
                source: availableTags
            });
        });
    </script>

</head>

<body>
    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="http://placehold.it/150x50&text=GuideFinder" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Find Guide</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="index.php?page=allguides">All Guides</a></li>
                    <li><a href="#">All Tours</a></li>
                </ul>
                <?php
                if( $user->is_logged_in() ){
                $userInfo = $user->getUserData($_SESSION['username']);

    			foreach($userInfo as $info) {
                ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user"></span>
                                <strong><?= $info['firstname']; ?></strong>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="navbar-login">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <p class="text-center">
                                                    <a href="memberpage.php"><img height="90" width="90" src="images/profile/<?= $info['image']; ?>"></a>
                                                </p>
                                            </div>
                                            <div class="col-lg-8">
                                                <p class="text-left"><strong><?= $info['username']; ?></strong></p>
                                                <p class="text-left small">
                                                    <?= $info['email']; ?>
                                                </p>
                                                <p class="text-left">
                                                    <a href="memberpage.php" class="btn btn-primary btn-block btn-sm">Profile</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider navbar-login-session-bg"></li>
                                <li><a href='index.php?page=editprofile'>Edit Profile <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                <li><a href='addTour.php'>Add Tour <span class="glyphicon glyphicon-flag pull-right"></span></a></li>
                                <li><a href='payments.php'>Payments <span class="
glyphicon glyphicon-transfer pull-right"></span></a></li>
                                <?php if($info['username'] == "admin"){ ?>
                                    <li><a href='admin.php'>Admin panel <span class="glyphicon glyphicon-flag pull-right"></span></a></li>
                                    <?php } ?>
                                        <li><a href='logout.php'>Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php
            }
        } else { ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php?page=register">Register</a></li>
                            <li><a href="index.php?page=login">Login</a></li>

                        </ul>
                        <?php } ?>
            </div>
        </div>
    </div>
