<!DOCTYPE html>

<html>
	<head>
		<title> Communiqués de presse | EntraiDucation association humanitaire pour l'accès à l'éducation </title>
		<meta charset="utf-8" />
		<meta name="description" content="Découvrez tous les articles d'Entraiducation et tous les rapports de
		l'association pour l'accès à l'éducation." />
		<link rel="stylesheet" type="text/css" media="screen" href="../css/entraiducation.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" href="../images/favicon.ico" />
	</head>

	<body id="com">
		<?php include './header.php'; ?>

		<main>
			<section id="articles">
				<div id="cate">
					<ul>
						<li><a href="./communiques_de_presse.php#ancre"> Communiqués de presse </a></li>
						<li><a href="./on_parle_de_nous.php?cat=5#ancre"> On parle de nous </a></li>
						<li><a href="./nos_rapports.php?cat=6#ancre"> Nos rapports </a></li>
					</ul>
				</div>

				<h1> Communiqués de presse </h1>

				<div id="temoins">
					<?php
					$query2 = "select *
						from projet1a_posts, projet1a_users
						where post_author = user_id
							and post_date <= '" . date('Y-m-d H:i:s') . "'
						order by post_date desc
						LIMIT 0, 4";
					?>

					<?php

						$q2 = mysql_query($query2);
						if ($q2)
						{

							while ($row2 = mysql_fetch_assoc($q2))
							{
								echo '<article>';
								echo '<div>';
								echo '<div class="visuel">';
									$dir    = '../images/articles/icon/'; // récupération du chemin des images
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
											echo "<img src='../images/articles/icon/" . $image . ".jpg' alt='" . $image . "' />";
											$verifimage = 1;
										}
									}

									if($verifimage == 0) // affichage d'une image par défaut pour les nouveaux articles
									{
										echo "<img src='../images/articles/icon/education_pour_tous.jpg' alt='éducation pour tous' />";
									}
								// on remodifie le titre pour bien l'afficher
								$row2['post_title'] = str_replace( "_", " ", $row2['post_title']);

								echo '</div>';
								echo '<p><span class="upper">é</span>crit par <a href="./nous_connaitre.php#' . $row2['display_name'] . '"><span class="auteur">' . $row2['display_name'] . '</span></a> <br /> le ' . $row2['post_date'] . ' </p>';
								echo '</div>';
								echo '<div>';
								echo '<h3 class="titre">' . $row2['post_title'] . '</h3>';
								echo substr($row2['post_content'], 0, 130) . '...';
								//echo mb_strimwidth($row2['post_content'], 0, 130, "...");
								echo '</div>';
								echo '<a href="article.php?detail=' . $row2['post_id'] . '#ancre"><p class="plus"> Plus... </p></a>';
								echo '</article>';
							}
						}
						else
						{
							die('Erreur mysql_query : ' . mysql_error());
						}
					?>
				</div>

				<div id="temoins2">
					<?php
					$query2 = "select *
						from projet1a_posts, projet1a_users
						where post_author = user_id
							and post_date <= '" . date('Y-m-d H:i:s') . "'
						order by post_date desc
						LIMIT 4, 4";
					?>

					<?php

						$q2 = mysql_query($query2);
						if ($q2)
						{

							while ($row2 = mysql_fetch_assoc($q2))
							{
								echo '<article>';
								echo '<div>';
								echo '<div class="visuel">';
									$dir    = '../images/articles/icon/'; // récupération du chemin des images
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
											echo "<img src='../images/articles/icon/" . $image . ".jpg' alt='" . $image . "' />";
											$verifimage = 1;
										}
									}

									if($verifimage == 0) // affichage d'une image par défaut pour les nouveaux articles
									{
										echo "<img src='../images/articles/icon/education_pour_tous.jpg' alt='éducation pour tous' />";
									}
								// on remodifie le titre pour bien l'afficher
								$row2['post_title'] = str_replace( "_", " ", $row2['post_title']);

								echo '</div>';
								echo '<p><span class="upper">é</span>crit par <a href="./nous_connaitre.php#' . $row2['display_name'] . '"><span class="auteur">' . $row2['display_name'] . '</span></a> <br /> le ' . $row2['post_date'] . ' </p>';
								echo '</div>';
								echo '<div>';
								echo '<h3 class="titre">' . $row2['post_title'] . '</h3>';
								echo '<p class="contenu">' . mb_strimwidth($row2['post_content'], 0, 130, "...") . '</p>';
								echo '</div>';
								echo '<a href="article.php?detail=' . $row2['post_id'] . '#ancre"><p class="plus"> Plus... </p></a>';
								echo '</article>';
							}
						}
						else
						{
							die('Erreur mysql_query : ' . mysql_error());
						}
					?>
				</div>
			</section>
		</main>

		<?php include './footer.php'; ?>
	</body>
</html>
