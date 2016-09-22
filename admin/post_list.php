<?php include ("protection.inc.php"); ?>
<?php include ("../php/mysql.inc.php"); ?>

<!doctype html>
<html>
<head>
	<title>Liste des articles</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="admin.css" type="text/css" />

<style>

h1 {
	margin-left: 20px;
	margin-bottom: 10px;
}

li {
	list-style-type: none;
}

.row {
	margin-left: 20px;
	margin-right: 20px;
}

.row ul {
	margin-bottom: 30px;
	padding: 10px 15px;
	background-color: #8ed6dd;
	border-radius: 10px;
	color: black;
}

span a {
	color: white;
}

/*Lien Modifier*/
li:nth-child(6) a {
	font-weight: bold;
	color: #14239c;
}

/*Lien "Supprimer"*/
li:nth-child(7) a {
	font-weight: bold;
	color: #b7211a;
}

.success
{
	color: rgba(76, 175, 80, 1);
}

.danger
{
	color: rgba(255, 84, 72, 1);
}

</style>
</head>

<body>

<?php include("menu.php") ?>

<h1>Liste des articles</h1>
<?php include('./notif.inc.php') ?>

<?php

if (isset($_POST["auteur"])) {

	$query = "INSERT INTO  projet1a_posts (post_author, post_category, post_title, post_content)
	VALUES(".$_POST["auteur"].", '".$_POST["categorie"]."','".$_POST["titre"]."','".$_POST["contenu"]."')";
				$q = mysql_query($query);

				if(!$q) {
					die ('Erreur mysql_query : '.mysql_error());
				}

}

if(isset($_GET["delete"])) {
	$query = "DELETE
			  from projet1a_posts
			  where post_id=".$_GET["delete"];

	$q = mysql_query($query);
	if (!$q)

	{
		die('Erreur mysql_query : ' . mysql_error());
	}
}

$query = "SELECT * FROM projet1a_posts, projet1a_categories, projet1a_users
			WHERE cat_id = post_category
			AND user_id = post_author
			order by post_date desc";

$q = mysql_query($query);

if ($q) {

	echo "<div class='row'>";

	while($row = mysql_fetch_assoc($q)) {
		echo "<ul>";
		echo "<li><b>Titre:</b> ".$row["post_title"]."</li>";
		echo "<li><b>Sous titre:</b> ".$row["post_sub_title"]."</li>";
		echo "<li><b>Auteur:</b> ".$row["display_name"]."</li>";
		echo "<li><b>Catégorie:</b> ".$row["cat_descr"]."</li>";
		echo "<li><b>Date:</b> ".$row["post_date"]."</li>";
			 if($row["post_author"] == $_SESSION["user"]["user_id"] || ($_SESSION["user"]["user_id"] == 4) || ($_SESSION["user"]["user_id"] == 10)) {
			echo "<li><span><a href='post_modif.php?update=" . $row["post_id"] . "'>Modifier</a></span></li>";
			echo "<li><span><a href='" . $_SERVER['PHP_SELF'] . "?delete=" . $row["post_id"] . "'
			onclick=\" return confirm('Voulez vous vraiment supprimer cet élément ?');\">Supprimer</a></span></li>";
			}
			else {
				echo "<p class='danger'>Vous ne pouvez pas modifier cet article</p>";
			}

		echo "</ul>";
	}
	echo "</div>";

		} else {
			die ('Erreur mysql_query : '.mysql_error());
		}
?>

</body>
</html>
