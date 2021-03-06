<?php
include ("session.php");
?>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrapLocal.css">
        <script src="../js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#myPage">CORENDON</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home1">HOME</a></li>
                        <li><a href="#corendon">CORENDON</a></li>
                        <li><a href="#map">MAP</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="AccountSettings.php">Account Settings</a></li>
                                <li><a href="../../images/<?php echo md5($_SESSION['login_user']) ?>/welcome.php">Gallery</a></li>
                                <li><a href="../PHP/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="home1" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../../images/indexpic1.jpg" alt="Lara">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="../../images/indexpic2.jpg" alt="Spanje">
                    <div class="carousel-caption">
                    </div>
                </div>

                <div class="item">
                    <img src="../../images/indexpic3.jpg" alt="Los Angeles">
                    <div class="carousel-caption">
                    </div>
                </div>

                <a class="left carousel-control" href="#home1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#home1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div id="corendon">
                <div class="container text-center">
                    <h3>Corendon</h3>
                    <p><em>Steps to access and download your pictures</em></p>
                    <p>
                    <ul>
                        <li>Go to the top right of your screen and press on account.</li>
                        <li>Then press on gallery.</li>
                        <li>See al the pictures you made using the Corendon photobooth.</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
        <div id="map">
            <div id="googleMap"></div>
        </div>

        <div class="container">
            <br>
            <h3 class="text-center">The Development Team</h3>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Micah Bredenhorst</a></li>
                <li><a data-toggle="tab" href="#menu1">Fabian Langenbach</a></li>
                <li><a data-toggle="tab" href="#menu2">Sven Wessel</a></li>
                <li><a data-toggle="tab" href="#menu3">Jonas van Ree</a></li>
                <li><a data-toggle="tab" href="#menu4">Vincent Dekker</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <h2>Micah Bredenhorst, Front-End Developer</h2>           
                </div>
                <div id="menu1" class="tab-pane fade">
                    <h2>Fabian Langenbach, Back-End Developer</h2>       
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h2>Sven Wessel, Developer</h2>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h2>Jonas van Ree, Developer</h2>
                </div>
                <div id="menu4" class="tab-pane fade">
                    <h2>Vincent Dekker, Developer</h2>
                </div>
            </div>
        </div>
        <script src="../js/tooltip.js"></script>
        <script src="../js/typeWriter.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArnck0oNblnq5iB0-0FhWcO7EzUHkgZhQ&callback=myMap"></script>
        <footer class="text-center">
            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <p>Powered by Corendon Airlines</p>
            <button class="astext" onclick="typeWriter()"><p id="demo$">&#169 Team 2 </p></button>
        </footer>
    </body>
</html>
