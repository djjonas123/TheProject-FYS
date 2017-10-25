<?php
include('../../styles/PHP/session.php');
?>
<html>
    <head>
        <title>Welkom</title>
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
    </head>
    <body>

        <?php
        $images = glob("*.{jpg,gif,png,jpeg}", GLOB_BRACE);
        foreach ($images as $image) {
            echo '<center>';
            echo '<div class="container">';
            echo '<img src="' . $image . '" alt="" width="640" height="480" border="10" align="middle" >';
            echo '<div class="overlay"></div>';
            echo '<div class="button"><a href="download.php?file=' . urlencode($image) . '">Download</a></div></div>';
            echo '</center>';
        }
        ?> 
        <br>
        <form action="../../styles/PHP/logout.php" method="get">
            <table border="0" width="500" align="center" class="demo-table">
                <tr>
                    <td colspan=2>
                        <input type="submit" name="logout-user" value="Logout" class="button2"></td>
                </tr>
            </table>
        </form>
    </body>
</html>