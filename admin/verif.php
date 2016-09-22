<?php session_start();

include ("../php/mysql.inc.php");

$query = "SELECT * FROM projet1a_users
		WHERE user_login = '" . addslashes($_POST["login"]) . "'
		AND user_password = '" . addslashes($_POST["password"]) . "'";

$q = mysql_query($query);

if ($q) {
	$user = false;
	while($row = mysql_fetch_assoc($q)) {
		$user = $row;
	}
}

else {
	die("Erreur MySQL : " . mysql_error());
}

if ($user) {
	$_SESSION["user"] = $user;
	header("Location:post_list.php");

}

else {
	header("Location:index.php");
}
