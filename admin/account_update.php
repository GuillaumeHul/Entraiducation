<?php include ("../php/mysql.inc.php");

if (isset($_POST['id']))
{
    $query = "UPDATE projet1a_users
                SET user_login = '" . addslashes($_POST['login']) . "',
                    user_password = '" . addslashes($_POST['password']) . "',
                    user_email = '" . addslashes($_POST['mail']) . "',
                    display_name = '" . addslashes($_POST['pseudo']) . "'
                WHERE user_id = " .$_POST['id'];

    $q = mysql_query($query);
    if (!$q)
    {
            header("Location:account_list.php?notif=nok");
    }
    else
    {
        header("Location:account_list.php?notif=ok");
        exit;
    }
}
