<?php include ("protection.inc.php"); ?>
<?php include ('../php/mysql.inc.php'); ?>
<!doctype html>
<html>
<head>
	<title>Gestion des catégorie</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="admin.css" type="text/css" />
	<style>
table {
	margin-top: 40px;
	padding: 10px;
	border: solid 1px;
}

td {
	padding: 7px;
}

table a {
	color: #14239c;
}

h3 {
	margin-top: 20px;
	font-size: 1.5em;
}

h3 a {
	color: red;
}
	</style>
</head>

<body>


<?php include('./menu.php') ?>
<?php include('./notif.inc.php') ?>

<h1>Catégories actuelles:</h1>

<?php
$query = "SELECT * FROM projet1a_categories";

$q = mysql_query($query);

if ($q) {

	echo "<table>";
	echo "<tr>";
	echo 	"<td><b>Description</b></td>";
	echo 	"<td><b>Action</b></td>";
	echo "</tr>";

	while($row = mysql_fetch_assoc($q)) {
		echo "<tr>";
		echo "<td>" .$row["cat_descr"]. "</td>";
		echo "<td><a href='cat_modif.php?cat=" . $row["cat_id"] . "'>Modifier</a></td>";
		echo "</tr>";
	}
	echo "</table>";

		}

		else {
			die ('Erreur mysql_query : '.mysql_error());
		}
?>

<h3><a href="cat_new.php">Ajouter une nouvelle catégorie</a></h3>
</body>
</html>
