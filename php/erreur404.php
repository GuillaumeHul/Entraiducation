<!DOCTYPE html>

<html>
	<head>
		<title> Page 404 | EntraiDucation association humanitaire pour l'accès à l'éducation </title>
		<meta charset="utf-8" />
		<meta name="description" content="Page 404 de l'association humanitaire EntraiDucation.
		N'hésitez pas à nous dire ce que vous en pensez !" />
		<link rel="stylesheet" type="text/css" media="screen" href="../css/entraiducation.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" href="../images/favicon.ico" />
	</head>

	<body id="erreur">
		<?php include './header.php'; ?>

		<main>
			<section class="intro">
				<h1>Nous sommes désolés pour ce contretemps</h1>

				<?php
					if (!isset($_GET['notif']) || $_GET['notif'] == "comnok")
					{
						echo "<p id='pb'> Veuillez nous renseigner sur le problème que vous avez rencontré.</p>";
					}
				?>

				<?php include './notif_com.inc.php';  ?>

				<div class="formu">
					<?php
						echo '<form id="errform" class="all" action="insert_com.php';
						if (isset($_GET["pigeon"]))
						{
							echo '?pigeon=non"';
						}
						else
						{
							echo '"';
						}
						echo ' method="post">';
					?>
						<input type="hidden" name="post_id" value="17">
						<div id="col">
							<label for="comcontent">Poster votre commentaire</label>
							<textarea id="comcontent" name="comcontent" required></textarea>
						</div>
						<input type="submit" name="sumbit" value="Poster le commentaire">
					</form>
				</div>

				<?php
				if (isset($_GET["pigeon"]) && $_GET["pigeon"] == "oui")
				{
					echo '<div id="errcom">';
					$query2 = "select *
						from projet1a_comments
						order by comment_date desc";

						$q2 = mysql_query($query2);
						if ($q2)
						{
							while ($row2 = mysql_fetch_assoc($q2))
							{
								echo '<p>' . $row2['comment_content'] . '<p>';
							}
						}
						else
						{
							die('Erreur mysql_query : ' . mysql_error());
						}
					echo '</div>';
				}
				?>
			</section>
		</main>

		<?php include './footer.php'; ?>
		<script type="text/javascript" src="../js/erreur.js"></script>
	</body>
</html>
