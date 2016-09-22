<?php session_start();
include ('../php/mysql.inc.php');

if (isset($_POST['categorie']))
{
    $query = "INSERT into projet1a_posts
                (post_author, post_category, post_content, post_title, post_sub_title)
              values
                (". $_SESSION["user"]["user_id"] .
                ",". $_POST["categorie"].
                ", '". addslashes($_POST["contenu"]) .
                "', '". addslashes($_POST["titre"]) .
                "', '". addslashes($_POST["sous_titre"]) .
                "')";
    $q = mysql_query($query);
    if (!$q)
    {
        header("Location:post_new.php?notif=nok");
    }
    else
    {
        header("Location:post_list.php?notif=ok");
        exit;
    }
}
