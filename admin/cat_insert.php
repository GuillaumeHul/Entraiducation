<?php include ('../php/mysql.inc.php');

if (isset($_POST['categorie']))
{
    $query = "INSERT into projet1a_categories
                (cat_descr)
              values
                ('". addslashes($_POST["categorie"]) .
                "')";
    $q = mysql_query($query);
    if (!$q)
    {
        header("Location:cat_new.php?notif=nok");
    }
    else
    {
        header("Location:cat_list.php?notif=ok");
        exit;
    }
}
