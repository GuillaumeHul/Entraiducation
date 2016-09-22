<?php
include './mysql.inc.php';

/*if ($_FILES['icone']['error'] > 0) $erreur = "Erreur lors du transfert";
if ($_FILES['icone']['size'] > $maxsize) $erreur = "Le fichier est trop gros";

$extensions_valides = array( 'jpg' , 'jpeg' , 'pdf' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";

$image_sizes = getimagesize($_FILES['icone']['tmp_name']);
if ($image_sizes[0] > $maxwidth OR $image_sizes[1] > $maxheight) $erreur = "Image trop grande";*/


//déplacer le fichier

//Créer un dossier 'fichiers/1/'
 // mkdir('fichier/1/', 0777, true);

//Créer un identifiant difficile à deviner
  /*$nom = md5(uniqid(rand(), true));

//tranfert
$nom = "avatars/{$id_membre}.{$extension_upload}";
$resultat = move_uploaded_file($_FILES['icone']['tmp_name'],$nom);
if ($resultat) echo "Transfert réussi";*/

/*var_dump($_FILES);
$maxsize = 10485760;
$extensions_valides = array( 'jpg' , 'jpeg' , 'pdf' );
$extension_upload = strtolower(  substr(  strrchr($_FILES['cv']['name'], '.')  ,1)  );
$path = '../documents/cv/';

if ($_FILES['cv']['error'] > 0 || $_FILES['cv']['size'] > $maxsize || in_array($extension_upload,$extensions_valides))
{
    header("Location:./fiche_poste.php?notif=fnok#ancre");
}
else
{
    move_uploaded_file($_FILES['cv']['name'],'../documents/cv/');
    $fullpath = '../documents/cv/' + $_FILES['cv']['name'];
}*/

/*move_uploaded_file($_POST['cv'],'../documents/cv/');*/

if (isset($_POST['mail']))
{
    var_dump($_POST);
    $query = "insert into projet1a_recruting
                (recrut_phone, recrut_first_name, recrut_last_name, recrut_mail)
              values
                (". (int)$_POST["tel"] .
                ",'" . addslashes($_POST["prenom"]) .
                "','" . addslashes($_POST["nom"]) .
                "','" . addslashes($_POST["mail"]) .
                "')";
    $q = mysql_query($query);
    if (!$q)
    {
        header("Location:./fiche_poste.php?notif=nok#ancre");
    }
    else
    {
        header("Location:./fiche_poste.php?notif=ok#ancre");
    }
}
