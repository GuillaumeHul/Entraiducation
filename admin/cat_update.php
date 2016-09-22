<?php include ("../php/mysql.inc.php");

if (isset($_POST['id']))
{
    $query = "UPDATE projet1a_categories
                SET cat_descr = '" . addslashes($_POST['description']) . "'
                WHERE cat_id = " .$_POST['id'];

    $q = mysql_query($query);
    if (!$q)
    {
        header("Location:cat_list.php?notif=nok");
    }
    else
    {
        header("Location:cat_list.php?notif=ok");
        exit;
    }
}
