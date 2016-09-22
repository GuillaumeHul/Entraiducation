<!DOCTYPE html>

<html>
	<head>
		<title> Fiche poste | EntraiDucation association humanitaire pour l'accès à l'éducation </title>
		<meta charset="utf-8" />
		<meta name="description" content="Fiche poste" />
		<link rel="stylesheet" type="text/css" media="screen" href="../css/entraiducation.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" href="../images/favicon.ico" />
	</head>

	<body id="fiche">
		<?php include './header.php'; ?>

		<main>
			<div class="info-sup">
				<h1>Web Marketing</h1>

				<p> Vous aurez pour mission: </p>

				<ul>
					<li class="puce_couleur"> La mise en œuvre des actions de communication offline ou online autour du site </li>
					<li class="puce_couleur"> La stratégie de référencement du site et le positionnement de celui-ci dans les moteurs de recherche par rapport aux expressions et mots-clés liés à l'univers du site </li>
					<li class="puce_couleur"> Le suivi de l'audience et la mise en place de mesures correctives afin d'améliorer l'expérience des utilisateurs du site</li>
				</ul>

				<p>
					Vous êtes force de proposition et autonome.
					Vous maîtrisez les outils de webmarketing (référencement, partenariat, emailing, netlinkings …)
					et savez utiliser et interpréter les résultats des outils statistiques et de gestion de base de données (Google Analytics,...).
					Vous avez également une aisance rédactionnelle pour l'écriture de contenus sur le web et les réseaux sociaux.
				</p>
			</div>

			<div class="formu">
				<form id="formuc" action="./insert_recrut.php" method="post">
					<input type="hidden" name="max_size" value="10485760">

					<div class="fifty-before1">
						<div class="fifty">
							<label for="nomr">Nom *</label>
							<input id="nomr" type="text" name="nom" placeholder="Entrez ici votre nom *" required/>
						</div>

						<div class="fifty">
							<label for="prenomr">Prénom *</label>
							<input id="prenomr" type="text" name="prenom" placeholder="Entrez ici votre prenom *" required />
						</div>
					</div>

					<div class="fifty-before2">
						<div class="fifty">
							<label for="mailr">Mail *</label>
							<input id="mailr" type="email" name="mail" placeholder="Entrez ici votre adresse mail *" required />
						</div>

						<div class="fifty">
							<label for="telr">Téléphone</label>
							<input id="telr" type="tel" name="tel" placeholder="Entrez ici votre votre numéro de téléphone"/>
						</div>
					</div>

					<!--<div class="all">
						<label for="filer">Joignez votre cv *</label>
						<input id="filer" type="file" name="cv" required />
					</div>-->

					<div class="submit-right">
						<p> * Champ obligatoire ! </p>
						<input id="valider" class="upper" type="submit" name="valider" value="valider">
					</div>
	      		</form>

				<?php include './notif.inc.php'; ?>
			</div>
		</main>

		<?php include './footer.php'; ?>

		<script type="text/javascript" src="../js/recrutement.js"></script>
	</body>
</html>
