<!DOCTYPE html>

<html>
	<head>
		<title> Contact et demande d'informations | EntraiDucation association humanitaire pour l'accès à l'éducation </title>
		<meta charset="utf-8" />
		<meta name="description" content="Contactez notre association Entraiducation. Vous pouvez nous
		contactez grace au formulaire ou par téléphone au 06-44-08-55-98. Nous vous répondrons sous
		un délais de 48h." />
		<link rel="stylesheet" type="text/css" media="screen" href="../css/entraiducation.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" href="../images/favicon.ico" />
	</head>

	<body id="contact">
		<?php include './header.php'; ?>

		<main>
			<div class="formu">
				<h1>Contactez EntraiDucation</h1>

				<?php include './notif.inc.php'; ?>

				<form id="formuc" action="./insert_contact.php" method="post">
					<div class="all">
						<select id="raison" name="raison" required>
							<option value="">Objet de votre message</option>
							<option value="">----------------------</option>
							<option value="don">Je souhaite faire un don à EntraiDucation</option>
							<option value="benevole">Je souhaite devenir bénévole au sein d'EntraiDucation</option>
							<option value="formation">Je souhaite m'informer sur les formations d'EntraiDucation</option>
							<option value="duplicata">Je souhaite recevoir un duplicata du reçu fiscal</option>
							<option value="adresse-new">Je suis donateur/trice et j'ai changé d'adresse</option>
							<option value="autres">Autres demandes</option>
						</select>
					</div>

					<div class="fifty-before1">
						<div class="fifty">
							<label for="nom">Nom *</label>
							<input id="nom" type="text" name="nom" placeholder="Entrez ici votre nom *" required/>
						</div>

						<div class="fifty">
							<label for="prenom">Prénom *</label>
							<input id="prenom" type="text" name="prenom" placeholder="Entrez ici votre prenom *" required />
						</div>
					</div>

					<div class="fifty-before2">
						<div class="fifty">
							<label for="mail">Mail *</label>
							<input id="mail" type="email" name="mail" placeholder="Entrez ici votre adresse mail *" required />
						</div>

						<div class="fifty">
							<label for="tel">Téléphone</label>
							<input id="tel" type="tel" name="tel" placeholder="Entrez ici votre votre numéro de téléphone"/>
						</div>
					</div>

					<div class="all">
						<label for="contenu">Message *</label>
						<textarea id="contenu" name="contenu" placeholder="Entrez votre message *" required></textarea>
					</div>

					<div class="submit-right">
						<p> * Champ obligatoire ! </p>
						<input id="valider" class="upper" type="submit" name="valider" value="valider">
					</div>
	      		</form>

				<p>
					Les démarches à suivre vous seront ensuite envoyées par mail.
				</p>
			</div>

			<div class="info-sup">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.426517259628!2d2.339143915674758!3d48.86914517928858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c7e25a349%3A0x5012b3632a6880b7!2sPalais+Brongniart!5e0!3m2!1sfr!2sfr!4v1460448497693"  >
				</iframe>

				<div class="all">
					<p> Vous pouvez nous contacter via le formulaire ou nous envoyer un courrier à l'adresse :</p>
				</div>

				<div class="half">
					<div class="fifty">
						<p>
							<span><strong>EntraiDucation</strong></span> <br />
							28 place de la Bourse <br />
							75002 Paris <br />
							France <br />
						</p>
					</div>

					<div class="fifty">
						<p>
							<span>Nous joindre par téléphone:</span> <br />
							06-44-08-55-98
						</p>
					</div>
				</div>
			</div>
		</main>

		<?php include './footer.php'; ?>

		<script type="text/javascript" src="../js/contact.js"></script>
	</body>
</html>
