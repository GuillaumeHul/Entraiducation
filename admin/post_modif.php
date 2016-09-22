<?php include ("protection.inc.php"); ?>
<?php include ("../php/mysql.inc.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Modifier un article</title>
		<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
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

#sous_titre {
	width: 400px;
}

#auteur #cat {
	width: 250px;
}

.red{
	color: red;
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
		from projet1a_posts
		where post_id=" . $_GET["update"];
	$q1 = mysql_query($query1);

	if ($q1)
	{
		while ($row1 = mysql_fetch_assoc($q1))
		{
?>

<section>
<form id="form_post" method="post" action="post_update.php" onsubmit=" return confirm('Mettre en ligne l\'article modifié ?') ">
<table>
		<caption><h2>Modification de l'article</h2></caption>

		<tr>
			<th>
				<label for="categorie">Categorie</label>
			</th>

			<td>
				<select id="categorie" name="categorie">
					<?php
					$query = "SELECT *
						from projet1a_categories
						order by cat_descr";

					$q = mysql_query($query);
					if ($q) {

						while ($row = mysql_fetch_assoc($q)){
							echo "<option value='" . $row["cat_id"] . "'";
							if ($row1["post_category"] == $row["cat_id"]) {
								echo " selected";
							}
							echo ">" . $row["cat_descr"] . "</option>";
						}
					}

					else {
						die('Erreur mysql_query : ' . mysql_error());
					}
			 		?>
				</select>
			</td>
		</tr>

		<tr>
			<th>
				<label for="titre">Titre</label>
			</th>
			<td>
				<input type="text" id="titre" name="titre" maxlength="200" required value="<?= $row1["post_title"] ?>"/>
			</td>
		</tr>

		<tr>
			<th>
				<label for="sous_titre">Sous-titre</label>
			</th>
			<td>
				<input type="text" id="sous_titre" name="sous_titre" maxlength="200" value="<?= $row1["post_sub_title"] ?>"/>
			</td>
		</tr>

		<tr>
			<th>
				<label for="contenu">Contenu</label>
			</th>
			<td>
				<textarea id="contenu" name="contenu" rows="30" cols="100" required><?= $row1["post_content"] ?></textarea>
			</td>
		</tr>

		<tr>
			<th></th>
			<td>
				<input type="hidden" name="id" value="<?= $row1["post_id"] ?>" />
				<input type="submit" value="Valider" />
				<?php include('./notif.inc.php') ?>
			</td>
		</tr>
	</table>
</form>

	<h3><a href="post_list.php" onclick=" return confirm('Voulez-vous vraiment quitter cette page ? L\'article ne sera pas sauvegardé.');">Liste des articles</a></h3>

	<?php
			}
		}

		else {
			die('Erreur mysql_query : ' . mysql_error());
		}
 	?>
</section>

<script type="text/javascript" src="../js/post_new.js"></script>
<script>
	CKEDITOR.replace( 'contenu' );
</script>
</body>
</html>
