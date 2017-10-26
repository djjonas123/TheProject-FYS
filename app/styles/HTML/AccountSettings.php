<?php 
include("../PHP/session.php");
?>
<html lang="en">

    <head>
        <title>Corendon Photo Gallary</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/Account.css">
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

                    <a class="navbar-brand" href="../HTML/index.php.html">CORENDON</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Account Settings</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
        </div>


        <div class="container text-center">

        </div>


        <div id="form_login">
            <div class="login-page">
                <div class="form">

                    <div class="row">

                        <h6>ACCOUNT SETTINGS</h6>
                    </div>


                </div>
            </div>
        </div>


        <div id="husband">
            <div>
                <div class="login-page">
                    <div class="form">

                        <p>Where does this go?</p>


                        <form class="login-form">

                            <div class="row">

                                <input type="text" placeholder="E-mail address "readonly/>
                                <br>

                                <br>
                                <p>Change your password</p>
                                <input type="password" placeholder="Old Password"/>
                                <input type="password" placeholder="New Password"/>
                                <input type="password" placeholder="Repeat Password"/>
                                <br>
                                <button class="button2" style="vertical-align:middle"><span>Save Changes </span></button>
                                <br>
                                <br>
                            </div>

                        </form>
                    </div>
                </div>


                <div>
                    <div class="login-page">
                        <div class="form">
                            <form class="login-form">
                                <div class="row">

                                    <p>How many days do you want to keep your pictures available on this site.</p>
                                    <br>
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="100" min="2" max="365">
                                        <span class="range-slider__value">0</span>
                                    </div>

                                </div>
                                <br>
                                <button class="button2" style="vertical-align:middle"><span> Save Changes </span></button>
                            </form>

                        </div>


                        <div>
                            <div class="login-page">
                                <div class="form">
                                    <form class="login-form" action="../PHP/deleteAccount.php" method="get">
                                        <div class="row">
                                            <p>Do you want to delete your account and pictures included.</p>
                                            <p>All pictures will be deleted and will be gone forever!</p>
                                        </div>
                                        <br>
                                        <button type = "submit" class="button2" style="vertical-align:middle"><span> Delete </span></button>
                                    </form>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function () {

                $('[data-toggle="tooltip"]').tooltip();

                $(".navbar a, footer a[href='../HTML/index.php']").on('click', function (event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var hash = this.hash;
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function () {
                            window.location.hash = hash;
                        });
                    }
                });
            })
        </script>
        <script>

            var i = 0;
            var txt = 'The Cake Is A Lie.';
            var speed = 50;

            function typeWriter() {
                if (i < txt.length) {
                    document.getElementById("demo$").innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(typeWriter, speed);
                }

            }
        </script>
        <script>

            var rangeSlider = function () {
                var slider = $('.range-slider'),
                        range = $('.range-slider__range'),
                        value = $('.range-slider__value');

                slider.each(function () {

                    value.each(function () {
                        var value = $(this).prev().attr('value');
                        $(this).html(value);
                    });

                    range.on('input', function () {
                        $(this).next(value).html(this.value);
                    });
                });
            };

            rangeSlider();


        </script>

        <div class="container text-center">


        </div>

        <footer class="text-center">
            <a class="up-arrow" href="../HTML/index.php.html" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <p>Powerd by Corendon Airlines</p>
            <button class="astext" onclick="typeWriter()"><p id="demo$">&#169 Team 2 </p></button>
        </footer>
    </body>
</html>