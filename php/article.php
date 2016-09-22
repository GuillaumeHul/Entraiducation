<!DOCTYPE html>

<html>
	<head>
		<title> Article de presse | EntraiDucation association humanitaire pour l'accès à l'éducation </title>
		<meta charset="utf-8" />
		<meta name="description" content="Article de presse d'EntraiDucation en rapport avec l'éducation des
		populations défavorisées d'Afrique" />
		<link rel="stylesheet" type="text/css" media="screen" href="../css/entraiducation.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" href="../images/favicon.ico" />
	</head>

	<body id="article">
		<?php include './header.php'; ?>

		<?php
			if (isset($_GET["detail"]))
			{
				$query2 = "select *
					from projet1a_posts, projet1a_users, projet1a_categories
					where post_author = user_id
					  and post_category = cat_id
					  and post_id=" . $_GET["detail"];
				$q2 = mysql_query($query2);
			}
			else
			{
				echo "<p>Cette page attend un paramètre</p>";
			}
		?>

		<main>
			<?php
				if ($q2)
				{
					while ($row2 = mysql_fetch_assoc($q2))
					{
						echo '<h1>' . $row2['post_title'] . '</h1>';
						echo '<div id="gd"> <div id="gauche"> <section id="comment">';
						echo '<div id="img">';
							$dir    = '../images/articles/detail/'; // récupération du chemin des images
							$files1 = scandir($dir); // création d'un array
							$cherche = array("é", " ");
							$replace = array("e", "_");
							$verifimage = 0;

							// on parcour le tableau des noms
							for ($numero = 0; $numero < count($files1); $numero++)
							{
								$row2['post_title'] = str_replace( $cherche, $replace, $row2['post_title']); // remplacement des caractères spéciaux par des normaux pour la comparaison
								$morceau = array_slice($files1, $numero, 1, true); // on découpe l'array en morceau
								$morceaut = implode("", $morceau); // transformation en string
								$image = rtrim($morceaut, '.jpg'); // on enlève l'extention

								// comparaison du nom de l'image avec le titre de l'article
								if(preg_match("/\_" . $image . "\b/i", $row2['post_title']))
								{
									echo "<img src='../images/articles/detail/" . $image . ".jpg' alt='" . $image . "' />";
									$verifimage = 1;
								}
							}

							if($verifimage == 0) // affichage d'une image par défaut pour les nouveaux articles
							{
								echo "<img src='../images/articles/detail/education_pour_tous.jpg' alt='éducation pour tous' />";
							}
						// on remodifie le titre pour bien l'afficher
						$row2['post_title'] = str_replace( "_", " ", $row2['post_title']);

						echo '</div>';
						echo '<p><span class="upper">é</span>crit par <a href="./nous_connaitre.php#' . $row2['display_name'] . '"><span class="auteur">' . $row2['display_name'] . '</span></a> <br /> le ' . $row2['post_date'] . ' </p>';
						echo '<h2>' . $row2['post_sub_title'] . '</h2>';
						echo $row2['post_content'];
						echo "<a href='./communiques_de_presse.php#ancre'><p id='rliste'> Retour à la liste </p></a>";
						echo '</section> </div>';
					}
				}
				else
				{
					die('Erreur mysql_query : ' . mysql_error());
				}
			?>

				<div id="droite">
					<section>
						<h3>Catégories</h3>

						<ul>
							<li class="puce_couleur"><a href="./communiques_de_presse.php#ancre"> Communiqués de presse </a></li>
							<li class="puce_couleur"><a href="./on_parle_de_nous.php?cat=5#ancre"> On parle de nous </a></li>
							<li class="puce_couleur"><a href="./nos_rapports.php?cat=6#ancre"> Nos rapports </a></li>
						</ul>
					</section>
				</div>
			</div>
		</main>

		<?php include './footer.php'; ?>
	</body>
</html>
