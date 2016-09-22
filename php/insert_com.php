<?php
include './mysql.inc.php';

if (isset($_POST['comcontent']))
{
    //var_dump($_POST);
    $query = "insert into projet1a_comments
                (comment_post_ID, comment_author, comment_content)
              values
                (". $_POST["post_id"] .
                ", 8" .
                ", '". strip_tags(addslashes($_POST["comcontent"])) .
                "')";
    $q = mysql_query($query);
    if (!$q)
    {
        if (isset($_GET["pigeon"]))
        {
            header("Location:erreur404.php?pigeon=non&notif=comnok");
        }
        else
        {
            header("Location:erreur404.php?notif=comnok");
        }
    }
    else
    {
        if (isset($_GET["pigeon"]))
        {
            header("Location:erreur404.php?pigeon=oui&notif=comok");
        }
        else
        {
            header("Location:erreur404.php?notif=comok");
        }
        exit;
    }
}
