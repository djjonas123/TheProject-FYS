<?php
include("session.php");

if (!empty($_POST["change_pw"])) {
    /* Form Required Field Validation */
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            $error_message = "Please fill in all fields.";
            break;
        }
    }

    /* Password Matching Validation */
    if ($_POST['password'] != $_POST['confirm_password']) {
        $error_message = 'Passwords have to be identical';
    }
    /* Queries */
    if (!isset($error_message)) {
        require_once("dbcontroller.php");
        $db_handle = new DBController();
        $query = "SELECT password FROM login where email = '" . $_SESSION["login_user"] . "'";
        $result = $db_handle->insertQuery($query);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['password'] === md5($_POST["old_password"])) {

                require_once("dbcontroller.php");
                $db_handle = new DBController();
                $query2 = "UPDATE login SET password = '" . md5($_POST['password']) . "' WHERE '" . $_SESSION["login_user"] . "' = email";
                $result2 = $db_handle->deleteQuery($query2);
                if (!empty($result2)) {
                    $succes_message = "You succesfully changed your password.";
                    unset($_POST);
                }
            } else {
                $error_message = "Please fill in your correct old password.";
                unset($_POST);
            }
        }
    }
}
?>
<html lang="en">
    <head>
        <title>Account Settings</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/main3.css">
        <link rel="stylesheet" type="text/css" href="../css/Account.css">
        <script src="../js/main.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script
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

                    <a class="navbar-brand" href="index2.php">CORENDON</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../../images/<?php echo md5($_SESSION['login_user']) ?>/welcome.php">Gallery</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

 <div class="login-page">
        
      <center><?php if (!empty($success_message)) { ?>	
                <div class="success-message"><?php if (isset($success_message)) echo $success_message; ?></div>
            <?php } ?>
            <?php if (!empty($error_message)) { ?>	
                <div class="error-message"><?php if (isset($error_message)) echo $error_message; ?></div>
            <?php } ?></center>
     
  <div id="halloworld">
                    <div class="form">
                       <h6>ACCOUNT SETTINGS</h6>
                    </div>
                    <div class="form">
                        <form class="login-form" method="post" action="">
                            <p>Change your password</p>  
                            <input type="password" placeholder="Old Password" name="old_password" value=""/>
                            <input type="password" placeholder="New Password" name="password" value=""/>
                            <input type="password" placeholder="Repeat new password" name="confirm_password" value=""/>
                            <button type="submit" name="change_pw" value="Change Password" class="button">Change Password</button>
                            <br><br>
                        </form>
                    </div>
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
import {typeWriter} from '../js/typeWriter.js';
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

<div class="container text-center"></div>
<footer id="bottomClass" class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>Powered by Corendon Airlines</p>
    <button class="astext" onclick="typeWriter()"><p id="demo$">&#169 Team 2 </p></button>
</footer>
</body>
</html>
