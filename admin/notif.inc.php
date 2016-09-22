<?php
if (isset($_GET['notif']))
{
    if ($_GET["notif"] == "ok")
    {
        echo "<p class='success'> Merci, vos modifications ont bien été pris en compte </p>";
    }
    else
    {
        echo "<p class='danger'> Désolé, vos modifications n'ont pas été pris en compte </p>";
    }
}

if (isset($_GET['droit']))
{
    if ($_GET["droit"] == "bad")
    {
        echo "<p class='danger'> Seul l'administrateur peux acceder à cette zone </p>";
    }
}
 ?>
