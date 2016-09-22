<?php session_start();
include ('../php/mysql.inc.php');

if (isset($_POST['login']))
{
    $query = "INSERT into projet1a_users
                (user_login, user_password, user_email, display_name)
              values
                ('". addslashes($_POST["login"]) .
                "', '". addslashes($_POST["password"]) .
                "', '". addslashes($_POST["mail"]) .
                "', '". addslashes($_POST["pseudo"]) .
                "')";
    $q = mysql_query($query);
    if (!$q)
    {
        header("Location:account_add.php?notif=nok");
    }
    else
    {
        header("Location:account_list.php?notif=ok");
        exit;
    }
}
