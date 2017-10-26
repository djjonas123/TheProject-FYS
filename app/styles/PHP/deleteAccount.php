<?php

include ("session.php");

function deleteDirectory($dir) {
    if (!file_exists($dir)) {
        return true;
    }

    if (!is_dir($dir)) {
        return unlink($dir);
    }

    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') {
            continue;
        }

        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
            return false;
        }
    }

    return rmdir($dir);
}

$hash = md5($_SESSION["login_user"]);
$path = "../../images/$hash/";
deleteDirectory($path);

require_once("dbcontroller.php");
$db_handle = new DBController();
$query = "DELETE FROM login WHERE '" . $_SESSION["login_user"] . "' = email";
$result = $db_handle->deleteQuery($query);
if (!empty($result)) {
    echo('<div class="success-message">Uw account is succesvol verwijderd, u wordt automatisch doorgestuurd naar de start pagina.</div>');
    session_start();
    if (session_destroy()) {
        sleep(2);
        header("Location: ../HTML/index.php");
    }
}
?>