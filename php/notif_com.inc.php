<?php
    if (isset($_GET['notif']))
    {
        if ($_GET["notif"] == "comok")
        {
            echo "<p id='ok'> Merci votre commantaire a bien été pris en compte </p>";
        }
        else
        {
            echo "<p id='nok'> Désolé votre demande n'a pas été pris en compte </p>";
        }
    }

    if (isset($_GET['pigeon']) && $_GET['pigeon'] == "oui")
    {
        echo "<p id='pigeon'> Notre page 404 vous à plus ? </p>";
    }
?>
