<?php

include("session.php");

if (!empty($_POST["change-pw"])) {
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

    if (!isset($error_message)) {
        require_once("dbcontroller.php");
        $db_handle = new DBController();
        $query = "SELECT password FROM login where email = '" . $_SESSION["login-user"] . "'";
        $result = $db_handle->insertQuery($query);
        if ($result == md5($_POST["old_password"])) {

            require_once("dbcontroller.php");
            $db_handle = new DBController();
            $query2 = "DELETE password FROM `login` WHERE '" . $_SESSION["login_user"] . "' = email";
            $result2 = $db_handle->deleteQuery($query2);
            if (!empty($result2)) {

                require_once("dbcontroller.php");
                $db_handle = new DBController();
                $query3 = "INSERT INTO `login` (password) VALUES ('" . $_POST["password"] . "') WHERE email = '" . $_SESSION["login-user"] . "'";
                $result3 = $db_handle->deleteQuery($query3);
                if (!empty($result3)) {
                    $succes_message = "U heeft uw wachtwoord succesvol veranderd.";
                    unset($_POST);
                }
            }
        } else {
            $error_message = "Vul alstublieft uw juiste oude wachtwoord in.";
            unset($_POST);
        }
    }
}
?>
