<?php
/**
 * Created by PhpStorm.
 * User: Micah
 * Date: 22-10-2017
 * Time: 12:37
 */

session_start();
if (!empty($_POST["login-user"])) {
    /* Form Required Field Validation */
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            $error_message = "Vul alstublieft alle velden in.";
            break;
        }
    }
    /* Email Validation */
    if (!isset($error_message)) {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $error_message = "Invalid Email Address";
        }
    }

    /*Checking if user already exists in database en checking if the password is correct */
    if (!isset($error_message)) {
        require_once("dbcontroller.php");
        $db_handle = new DBController();
        $query = "SELECT email FROM login where email = '" . $_POST["email"] . "'";
        $rowcount = $db_handle->numRows($query);
        if ($rowcount == 1) {
            require_once("dbcontroller.php");
            $db_handle = new DBController();
            $query = "SELECT password FROM login WHERE email = '" . $_POST["email"] . "'";
            $result = $db_handle->updateQuery($query);
            while ($row = $result->fetch_assoc()) {
                if ($row['password'] === md5($_POST["password"])) {
                    $success_message = "U bent succesvol ingelogd.";
                    $error_message = "";
                    $_SESSION['login_user'] = $_POST["email"];
                    header("Location: images/" . md5($_POST["email"]) . "/welcome.php");
                    unset($_POST);
                } else {
                    $error_message = "Er was een probleem met het inloggen, probeer het alstublieft opnieuw.";
                }
            }
        } else {
            $error_message = "Er was een probleem met het inloggen, probeer het alstublieft opnieuw.";
        }
    }
}

?>

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
    <!-- Indicators -->

</div>


<div id="band" class="container text-center">


</div>

<div id="husband">
<div id="form_login">
    <div class="login-page">
        <div class="form">
            <form class="login-form">
                <input type="text" placeholder="E-mail address "/>
                <input type="password" placeholder="Password"/>
                <button>Login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>
<div>
</div>


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

    <div id="band" class="container text-center">


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
