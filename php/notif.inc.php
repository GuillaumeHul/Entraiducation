<?php
    if (isset($_GET['notif']))
    {
        if ($_GET["notif"] == "ok")
        {
            echo "<p id='ok'> Merci votre demande a bien été prise en compte </p>";
        }
        else
        {
            echo "<p id='nok'> Désolé votre demande n'a pas été prise en compte </p>";
        }
    }

    if (isset($_GET['notif']) && $_GET["notif"] == "fnok")
    {
        echo "<p id='nok'> Le fichier envoyé n'est pas conforme </p>";
    }
?>
