<?php include ("protection.inc.php");
		include ("../php/mysql.inc.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajouter une catégorie</title>
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
<form id="form_post" method="post" action="cat_insert.php" onsubmit=" return confirm('Ajouter cette nouvelle catégorie ?') ">
<table>
	<caption><h2>Créer une nouvelle catégorie</h2></caption>

	<tr>
		<th><label for="categorie">Nom de la catégorie</label></th>
		<td>
			<input id="categorie" type="text" name="categorie" maxlength="50" required/>
		</td>
	</tr>

	<tr>
		<th></th>
		<td><input type="submit" value="Valider"><?php include('./notif.inc.php') ?></td>
	</tr>
</table>
</form>
	<h3><a href="cat_list.php" onclick=" return confirm('Voulez-vous vraiment quitter cette page ? Les modification ne seront pas sauvegardées.');">Liste des catégories</a></h3>

	<script type="text/javascript" src="../js/cat_new.js"></script>

</body>
</html>
