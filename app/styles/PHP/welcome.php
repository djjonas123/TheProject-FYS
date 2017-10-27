<?php
include('../../styles/PHP/session.php');
?>
<html>
    <head>
        <title>Photo Gallery</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../../styles/css/main.css">
        <link rel="stylesheet" type="text/css" href="../../styles/css/Cog.css">
        <link rel="stylesheet" type="text/css" href="../../styles/css/gallery.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrapLocal.css">
        <script src="../js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css"></style>
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
                    <a class="navbar-brand" href="../../styles/PHP/index2.php">CORENDON</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../../styles/PHP/AccountSettings.php">Account Settings</a></li>
                                <li><a href="../../styles/PHP/logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <?php
                $images = glob("*.{jpg,gif,png,jpeg}", GLOB_BRACE);
                if (count($images) === 0) {
                    echo("<br><br><br><center><h1>You haven't taken any pictures yet.</h1></center><br><br><br>");
                } else {
                    $i = 0;
                    foreach ($images as $image) {
                        if ($i === 0) {
                            echo '<div class="item active">';
                            echo '<img src="' . $image . '">';
                            echo '<div class="carousel-caption"></div>';
                            echo '</div>';
                        } else {
                            echo '<div class="item">';
                            echo '<img src="' . $image . '">';
                            echo '<div class="carousel-caption"></div>';
                            echo '</div>';
                        }
                        $i++;
                    }
                    echo('</div>
                    <a class = "left carousel-control" href = "#myCarousel" role = "button" data-slide = "prev">
                    <span class = "glyphicon glyphicon-chevron-left" aria-hidden = "true"></span>
                    <span class = "sr-only">Previous</span>
                    </a>
                    <a class = "right carousel-control" href = "#myCarousel" role = "button" data-slide = "next">
                    <span class = "glyphicon glyphicon-chevron-right" aria-hidden = "true"></span>
                    <span class = "sr-only">Next</span>
                    </a>
                    </div>');
                }
                ?> 
            </div>
            <?php
            $images = glob("*.{jpg,gif,png,jpeg}", GLOB_BRACE);
            foreach ($images as $image) {
                echo '<div class="box">';
                echo '<div class="boxInner">';
                echo '<img src="' . $image . '">';
                echo '<div class="overlay">';
                echo '<div class="button"><a href="download.php?file=' . urlencode($image) . '">Download</a></div>';
                echo '</div></div></div>';
            }
            ?> 

            <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
            <script type="text/javascript">
                $(function () {
                    if ('ontouchstart' in window)
                    {
                        $('body').removeClass('no-touch').addClass('touch');
                        $('div.boxInner img').click(function () {
                            $(this).closest('.boxInner').toggleClass('touchFocus');
                        });
                    }
                });
            </script>
            <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){
                    window.location.hash = hash;
                });
            }
        });
    });
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
            <div class="bottomlock"></div>
            <footer id="bottomClass"  class="text-center">
                <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a><br><br>
                <p>Powered by Corendon Airlines</p>
                <button class="astext" onclick="typeWriter()"><p id="demo$">&#169 Team 2 </p></button>
            </footer>
    </body>
</html>