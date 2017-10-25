<?php
if (!empty($_POST["register-user"])) {
    /* Form Required Field Validation */
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            $error_message = "Vul alstublieft alle velden in.";
            break;
        }
    }
    /* Password Matching Validation */
    if ($_POST['password'] != $_POST['confirm_password']) {
        $error_message = 'Wachtwoorden moeten hetzelfde zijn.';
    }

    /* Email Validation */
    if (!isset($error_message)) {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $error_message = "Ongeldig Emailadres";
        }
    }

    if (!isset($error_message)) {
        require_once("dbcontroller.php");
        $db_handle = new DBController();
        $query = "SELECT email FROM login where email = '" . $_POST["email"] . "'";
        $rowcount = $db_handle->numRows($query);
        if ($rowcount > 0) {
            $error_message = "Er is al een account geregistreerd op dit emailadres.";
        } else {
            $hash = md5($_POST["email"]);
            $path = "../../images/$hash";
            mkdir($path);
            fopen("../../images/$hash/welcome.php", "w");
            copy("welcome.php", "../../images/$hash/welcome.php");
            fopen("../../images/$hash/download.php", "w");
            copy("download.php", "../../images/$hash/download.php");
        }
    }

    if (!isset($error_message)) {
        require_once("dbcontroller.php");
        $db_handle = new DBController();
        $query = "INSERT INTO login (email, hash, password) VALUES
		('" . $_POST["email"] . "', '" . md5($_POST["email"]) . "', '" . md5($_POST["password"]) . "')";
        $result = $db_handle->insertQuery($query);
        if (!empty($result)) {
            $error_message = "";
            $success_message = "U heeft zich succesvol geregistreerd";
            header("location: login.php");
            unset($_POST);
        } else {
            $error_message = "Er was een probleem met het registreren, probeer het alstublieft opnieuw.";
        }
    }
}
?>
<html lang="en">
    <head>
        <title>Corendon Photo Gallary</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/main2.css">
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

                    <a class="navbar-brand" href="../HTML/index.html">CORENDON</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="#">Forgot Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <?php if (!empty($success_message)) { ?>	
            <div class="success-message"><?php if (isset($success_message)) echo $success_message; ?></div>
        <?php } ?>
        <?php if (!empty($error_message)) { ?>	
            <div class="error-message"><?php if (isset($error_message)) echo $error_message; ?></div>
        <?php } ?>
            
        <div id="husband">
            <div id="form_login">
                <div class="login-page">
                    <div class="form">
                        <form class="login-form"  method="post" action="">
                            <input type="text" placeholder="E-mail address " name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                            <input type="password" placeholder="Password" name="password" value=""/>
                            <input type="password" placeholder="Repeat password" name="confirm_password" value=""/>
                            <button type="submit" name="register-user" value="Register" class="button">Register</button>
                            <p class="message">Already registered? <a href="login.php">Login here</a></p>
                        </form>
                    </div>
                </div>

                <script>
                    $(document).ready(function () {

                        $('[data-toggle="tooltip"]').tooltip();

                        $(".navbar a, footer a[href='../HTML/index.html']").on('click', function (event) {
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

                <footer  class="text-center">
                    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
                        <span class="glyphicon glyphicon-chevron-up"></span>
                    </a><br><br>
                    <p>Powered by Corendon Airlines</p>
                    <button class="astext" onclick="typeWriter()"><p id="demo$">&#169 Team 2 </p></button>
                </footer>
                </body>
                </html>
