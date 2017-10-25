<!DOCTYPE html>
<html lang="en">
<head>
    <title>Corendon Photo Gallary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/Cog.css">
    <script src="../js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background: #EEE;
            font: 10px/13px 'Lucida Sans',sans-serif;
        }
        .wrap {
            overflow: hidden;
            margin: 10px;
        }
        .box {
            float: left;
            position: relative;
            width: 20%;
            padding-bottom: 20%;
        }
        .boxInner {
            position: absolute;
            left: 10px;
            right: 10px;
            top: 10px;
            bottom: 10px;
            overflow: hidden;
        }
        .boxInner img {
            width: 100%;
        }
        .boxInner .titleBox {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin-bottom: -50px;
            background: #000;
            background: rgba(0, 0, 0, 0.5);
            color: #FFF;
            padding: 10px;
            text-align: center;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }
        body.no-touch .boxInner:hover .titleBox, body.touch .boxInner.touchFocus .titleBox {
            margin-bottom: 0;
        }
        @media only screen and (max-width : 480px) {
            /* Smartphone view: 1 tile */
            .box {
                width: 100%;
                padding-bottom: 100%;
            }
        }
        @media only screen and (max-width : 650px) and (min-width : 481px) {
            /* Tablet view: 2 tiles */
            .box {
                width: 50%;
                padding-bottom: 50%;
            }
        }
        @media only screen and (max-width : 1050px) and (min-width : 651px) {
            /* Small desktop / ipad view: 3 tiles */
            .box {
                width: 33.3%;
                padding-bottom: 33.3%;
            }
        }
        @media only screen and (max-width : 1290px) and (min-width : 1051px) {
            /* Medium desktop: 4 tiles */
            .box {
                width: 25%;
                padding-bottom: 25%;
            }
        }
    </style>

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

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Forgot Password</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="../../images/indexpic1.jpg" alt="Lara" width="1200" height="700">
            <div class="carousel-caption">
                <h3>Turkey</h3>
                <p>Enjoy the lovely beaches of Lara</p>
            </div>
        </div>


        <div class="item">
            <img src="../../images/indexpic2.jpg" alt="Spanje" width="1200" height="700">
            <div class="carousel-caption">
                <h3>Spain</h3>
                <p>Canary Islands</p>
            </div>
        </div>

        <div class="item">
            <img src="../../images/indexpic3.jpg" alt="Los Angeles" width="1200" height="700">
            <div class="carousel-caption">
                <h3>Greece</h3>
                <p>Kos</p>
            </div>
        </div>
    </div>

    <!-- Besturingen voor de foto's-->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/7.jpg" />
        <div class="titleBox">Butterfly</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/1.jpg" />
        <div class="titleBox">An old greenhouse</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/2.jpg" />
        <div class="titleBox">Purple wildflowers</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/3.jpg" />
        <div class="titleBox">A birdfeeder</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/10.jpg" />
        <div class="titleBox">Crocus close-up</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/4.jpg" />
        <div class="titleBox">The garden shop</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/5.jpg" />
        <div class="titleBox">Spring daffodils</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/6.jpg" />
        <div class="titleBox">Iris along the path</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/8.jpg" />
        <div class="titleBox">The garden blueprint</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/9.jpg" />
        <div class="titleBox">The patio</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/11.jpg" />
        <div class="titleBox">Bumble bee collecting nectar</div>
    </div>
</div>
<div class="box">
    <div class="boxInner">
        <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/12.jpg" />
        <div class="titleBox">Winding garden path</div>
    </div>
</div>

</div>



<div class="container text-center">

</div>
    <div class="form">
        <form class="login-form">
                    <p class="message">Download all pictures</p>
                    <br>
                    <button>Download</button>
        </form>
    </div>
</div>


<!--test -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script type="text/javascript">
        $(function(){
            // See if this is a touch device
            if ('ontouchstart' in window)
            {
                // Set the correct body class
                 $('body').removeClass('no-touch').addClass('touch');

                 // Add the touch toggle to show text
                 $('div.boxInner img').click(function(){
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

        <div class="container text-center">


        </div>


        <footer class="text-center">
            <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a><br><br>
            <p>Powerd by Corendon Airlines</p>
            <button class="astext" onclick="typeWriter()"><p id="demo$">&#169 Team 2 </p></button>
        </footer>




</body>
</html>
