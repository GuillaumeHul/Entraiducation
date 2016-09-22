<?php include '../php/mysql.inc.php'; ?>

<!doctype html>
<html>
<head>
	<title>Connexion</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="admin.css" type="text/css" />
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
	background-color: rgba(121,192,203,0.4);
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
	padding-bottom: 20px;
	position: relative;
	left: 30px;
}
	</style>
</head>

<body>
<form id="formlog" method="post" action="verif.php">
	<img src="../images/index/logo_entraiducation.png" alt="Logo EntraiDucation" /><br />
	<label for="login">Login</label>  <br />
	<input id="login" type="text" name="login" /> <br /><br />

	<label for="pass">Password :</label> <br />
	<input id="pass" type="password" name="password" /><br />
	<br />
	<input type="submit" value="Connexion" />
</form>

<script type="text/javascript" src="../js/login.js"></script>
</body>
</html>
