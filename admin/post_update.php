<?php
include ("../php/mysql.inc.php");

if (isset($_POST['titre']))
{
    $query = "UPDATE projet1a_posts
                SET post_category = " . $_POST['categorie'] . ",
                    post_title = '" . addslashes($_POST['titre']) . "',
                    post_sub_title = '" . addslashes($_POST['sous_titre']) . "',
                    post_content = '" . addslashes($_POST['contenu']) . "'
                WHERE post_id = " .$_POST['id'];
    $q = mysql_query($query);
    if (!$q)
    {
        header("Location:post_list.php?notif=nok");
    }
    else
    {
        header("Location:post_list.php?notif=ok");
        exit;
    }
}
