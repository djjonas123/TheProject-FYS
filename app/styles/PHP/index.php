<html lang="en">
<head>
    <title>Corendon Photo Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
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
                        <li><a href="../PHP/login.php">Login</a></li>
                        <li><a href="../PHP/register.php">Register</a></li>
                        <li><a href="#">Forgot Password</a></li>
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
        <li>Register for an account with your emailadress you registered.</li>
        <li>Login into you account.</li>
        <li>Access your photo's and/or download them.</li>
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


<!--Moet naar de js file-->

<script>
    $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='index.php']").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
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