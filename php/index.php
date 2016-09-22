<!DOCTYPE html>
<html>
	<head>
		<title> Accueil | EntraiDucation association humanitaire pour l'accès à l'éducation </title>
		<meta charset="utf-8" />
		<meta name="description" content="EntraiDucation est une association humanitaire qui prône
		l'accès à l'éducation pour tous qui est un droit universel." />
		<link rel="stylesheet" type="text/css" media="screen" href="../css/entraiducation.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" href="../images/favicon.ico" />
	</head>

	<body id="index">
		<?php include './header.php'; ?>

		<main>
			<section class="intro">
				<h1> L’éducation pour tous : un droit universel </h1>
				<div>
					<p>
						Nous cherchons des solutions pour faciliter l’accès à l’éducation dans les pays en voie de développement d’Afrique
						et 3 plus particulièrement : le Mali, la Côte d’Ivoire et la Mauritanie.
					</p>

					<p>
						Ces pays étant francophones cela facilite la communication.
						EntraiDucation offre des formations aux populations des villages les plus défavorisés. Les adultes sont
						formés pour enseigner et transmettre des connaissances aux plus jeunes. Ces derniers apprennent à . . .
					</p>
				</div>

				<div class="block_suite">
					<a href="./nos_actions.php#comment"><p class="suite"> Lire la suite... </p></a>
				</div>
			</section>

			<section id="articles">
				<h2> Articles et témoignages </h2>
				<a href="./communiques_de_presse.php#ancre"><p> Liste des articles </p></a>
				<div id="temoins">
					<?php
						$query2 = "select *
							from projet1a_posts, projet1a_users
							where post_author = user_id
								and post_date <= '" . date('Y-m-d H:i:s') . "'
							order by post_date desc
							LIMIT 4"; /* 2016-05-17 00:55:05 */
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
								echo '<p><span class="upper">é</span>crit par <a href="#"><span class="auteur">' . $row2['display_name'] . '</span></a> <br /> le ' . $row2['post_date'] . ' </p>';
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

			<section id="valeurs">
				<div>
					<div class="article">
						<p>
							Le partage, la transmission et l’accès de manière égale à l’éducation sont pour
							EntraiDucation les valeurs fondatrices de l’association.<br />
							Nous avons décidé d’agir parce que nous jugeons l’heure grave.
							Malgré le nombre de solutions existantes, certains pays sont dans l’incapacité d’agir.
							Nous proposons donc des solutions pour les aider dans cette voie.
						</p>
					</div>

					<a href="./nous_connaitre.php#vals"><p class="suite" id="suite_valeur"> Lire la suite... </p></a>
				</div>
				<div>
					<div id="cercle">
						<h2> Nos valeurs </h2>
					</div>
				</div>
			</section>

			<section id="recherche">
				<div>
					<div class="article">
						<p>
							Nous cherchons des solutions à la fois au niveau infrastructure et scolaire.
							Dernièrement nos bénévoles ont rénové un bâtiment
							pour en faire une école primaire pour les villages environnants. <br />
							Cela a permis d’accueillir près de 180 élèves répartit en 6 classes de 30 élèves.
							Notre association a mis en place un système de ramassage scolaire et à réussir à obtenir
							le financement des fournitures scolaires par l’état.
						</p>
					</div>

					<a href="./nos_actions.php#comment"><p class="suite" id="suite_recherche"> Lire la suite... </p></a>
				</div>

				<div>
					<h2> Recherche et développement </h2>
				</div>
			</section>

			<section class="createur">
				<h2> Nos créateurs </h2>
				<div class="createurst">
					<div class="article">
						<div class="crea"></div>
						<a href="./nous_connaitre.php#Aristide"><p> <strong>Aristide Bouclh</strong> </p></a>

						<p class="metier"> Chef de projet, Web Marketeur </p>

						<p>
							Aristide Boulch, chef de projet ainsi
							que web marqueteur, il met son ouverture
							d’esprit au service de chaque projet
							qu'il entreprend.
						</p>

						<a href="./nous_connaitre.php#Aristide"><p class="plus"> Plus... </p></a>
					</div>

					<div class="article">
						<div class="crea"></div>
						<a href="./nous_connaitre.php#Antoine"><p> <strong>Antoine Saint-Hilaire</strong> </p></a>

						<p class="metier"> Développeur </p>

						<p>
							Antoine Saint-Hilaire, méthodique et
							consciencieux il reste calme face à
							n’importe quelle situation.
						</p>

						<a href="./nous_connaitre.php#Antoine"><p class="plus"> Plus... </p></a>
					</div>

					<div class="article">
						<div class="crea"></div>
						<a href="./nous_connaitre.php#Guillaume"><p> <strong>Guillaume Hulin</strong> </p></a>

						<p class="metier"> Développeur, Intégrateur </p>

						<p>
							Guillaume Hulin, développeur
							freelance, il trouve tout le temps la
							solution technique la mieux adaptée.
						</p>

						<a href="./nous_connaitre.php#Guillaume"><p class="plus"> Plus... </p></a>
					</div>
				</div>
			</section>
		</main>

		<?php include './footer.php'; ?>
	</body>
</html>
