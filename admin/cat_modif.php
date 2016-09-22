<?php include ("protection.inc.php"); ?>
<?php include ("../php/mysql.inc.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Modifier un article</title>
		<meta charset="utf-8" />
	<style>
body {
	text-align: center;
	width: 960px;
	margin: auto;
}

table {
	text-align: left;
	width: 700px;
	margin: auto;
}

h3 {
	margin-top: 15px;
}

h3 > a {
	padding: 5px 8px;
	text-decoration: none;
	font-size: 1.3em;
	color: black;
	background-color: #A1D3DA;
	border-radius: 5px;
}


form {
	background-color: rgba(121,192,203,0.7);
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
	padding-bottom: 20px;
	position: relative;
	left: 30px;
}

textarea  {
	width: 500px;
	height: 100%;
	margin: auto;
}

#titre {
	width: 400px;
}

#auteur #cat {
	width: 250px;
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
<?php
	$query1 = "SELECT *
		from projet1a_categories
		where cat_id=" . $_GET["cat"];
	$q1 = mysql_query($query1);

	if ($q1)
	{
		while ($row1 = mysql_fetch_assoc($q1))
		{
?>

<section>
<form id="form_post" method="post" action="cat_update.php" onsubmit=" return confirm('Sauvegarder les modifications ?') ">
<table>
		<caption><h2>Modification d'une categories</h2></caption>

		<tr>
			<th>
				<label for="description">Nom de la catégorie</label>
			</th>
			<td>
				<input id="description" type="text" name="description" required value="<?= $row1['cat_descr'] ?>" />
			</td>
		</tr>

		<tr>
			<th></th>
			<td>
				<input type="hidden" name="id" value="<?= $row1["cat_id"] ?>" />
				<input type="submit" value="Valider" />
				<?php include('./notif.inc.php') ?>
			</td>
		</tr>
	</table>
</form>

	<h3><a href="cat_list.php" onclick=" return confirm('Voulez-vous vraiment quitter cette page ? Les modifications ne seront pas sauvegardées.');">Liste des catégories</a></h3>

	<?php
			}
		}

		else {
			die('Erreur mysql_query : ' . mysql_error());
		}
 	?>
</section>
<script type="text/javascript" src="../js/cat_modif.js"></script>
</body>
</html>
