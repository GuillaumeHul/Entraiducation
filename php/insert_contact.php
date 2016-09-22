<?php
include './mysql.inc.php';

if (isset($_POST['raison']))
{
    //var_dump($_POST);
    $query = "insert into projet1a_contacts
                (contact_phone, contact_first_name, contact_last_name, contact_mail, contact_reason, contact_content)
              values
                (". (int)$_POST["tel"] .
                ",'" . addslashes($_POST["prenom"]) .
                "','" . addslashes($_POST["nom"]) .
                "','" . addslashes($_POST["mail"]) .
                "','" . addslashes($_POST["raison"]) .
                "', '". addslashes($_POST["contenu"]) .
                "')";
    $q = mysql_query($query);
    if (!$q)
    {
        header("Location:./contact.php?notif=nok#ancre");
    }
    else
    {
        header("Location:./contact.php?notif=ok#ancre");
    }
}
