<?php include ("protection.inc.php"); ?>
<?php include ("../php/mysql.inc.php"); ?>
<?php include ("./admin.inc.php"); ?>


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
		from projet1a_users
		where user_id=" . $_GET["account"];
	$q1 = mysql_query($query1);

	if ($q1)
	{
		while ($row1 = mysql_fetch_assoc($q1))
		{
?>

<section>
<form id="form_post" method="post" action="account_update.php" onsubmit=" return confirm('Sauvegarder les modifications ?') ">
<table>
		<caption><h2>Modification des informations de l'utilsateur</h2></caption>

		<tr>
			<th><label for="login">Login</label></th>
			<td>
				<input id="login" type="text" name="login" maxlength="50" value="<?= $row1['user_login'] ?>"/>
			</td>
		</tr>

		<tr>
			<th><label for="password">Password</label></th>
			<td>
				<input id="password" type="text" name="password" maxlength="50" value="<?= $row1['user_password'] ?>"/>
			</td>
		</tr>

		<tr>
			<th><label for="mail">email</label></th>
			<td>
				<input id="mail" type="email" name="mail" maxlength="50" value="<?= $row1['user_email'] ?>"/>
			</td>
		</tr>

		<tr>
			<th><label for="pseudo">Nom d'utilisateur</label></th>
			<td>
				<input id="pseudo" type="text" name="pseudo" maxlength="50" value="<?= $row1['display_name'] ?>" required placeholder="Nom à afficher"/>
			</td>
		</tr>

		<tr>
			<th></th>
			<td>
				<input type="hidden" name="id" value="<?= $row1["user_id"] ?>" />
				<input type="submit" value="Valider" />
				<?php include('./notif.inc.php') ?>
			</td>
		</tr>
	</table>
</form>

<h3><a href="account_list.php" onclick=" return confirm('Voulez-vous vraiment quitter cette page ? Les modification ne seront pas sauvegardées.');">Liste des comptes</a></h3>

	<?php
			}
		}

		else {
			die('Erreur mysql_query : ' . mysql_error());
		}
 	?>
</section>
<script type="text/javascript" src="../js/account.js"></script>
</body>
</html>
