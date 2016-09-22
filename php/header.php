<header id="header">
	<aside>
		<div id="cache1"></div>
		<div id="cache2"></div>
		<div id="Une">
			<h4> <span class="upper"> à </span> la Une </h4>

			<i id="up" class="material-icons">keyboard_arrow_up</i>

			<div id="volet_contener">
				<div id="volet1">
					<?php
						include './mysql.inc.php';

						$query = "select *
							from projet1a_posts, projet1a_users
							where post_author = user_id
								and post_date <= '2016-05-17 00:55:05'
							order by post_date desc
							LIMIT 3";
					?>

					<?php
						$q = mysql_query($query);
						if ($q)
						{
							while ($row = mysql_fetch_assoc($q))
							{
								echo '<article>';
								echo '<a href="article.php?detail=' . $row['post_id'] . '#ancre"><h3>' .  $row['post_title'] . '</h3></a>';
								echo '<p> Par <a href="./nous_connaitre.php#' . $row['display_name'] . '"><span>' . $row['display_name'] . '</span></a> </p>';
								echo '</article>';
							}
						}
						else
						{
							die('Erreur mysql_query : ' . mysql_error());
						}
					?>
				</div>

				<div id="volet2">
					<?php
						include './mysql.inc.php';

						$query1 = "select *
							from projet1a_posts, projet1a_users
							where post_author = user_id
								and post_date <= '2016-05-17 00:55:05'
							order by post_date desc
							LIMIT 3, 3";
					?>

					<?php
						$q1 = mysql_query($query1);
						if ($q1)
						{
							while ($row1 = mysql_fetch_assoc($q1))
							{
								echo '<article>';
								echo '<a href="article.php?detail=' . $row1['post_id'] . '#ancre"><h3>' .  $row1['post_title'] . '</h3></a>';
								echo '<p> Par <a href="./nous_connaitre.php#' . $row1['display_name'] . '"><span>' . $row1['display_name'] . '</span></a> </p>';
								echo '</article>';
							}
						}
						else
						{
							die('Erreur mysql_query : ' . mysql_error());
						}
					?>
				</div>
			</div>

			<i id="down" class="material-icons">keyboard_arrow_down</i>
		</div>

		<div id="logo">
			<a href="./index.php"><img src="../images/index/logo_entraiducation.png" alt="Logo EntraiDucation" /></a>
		</div>
	</aside>

	<div class="image_nav">
		<nav id="ancre">
			<a href="index.php"><div class="case_menu">
				<img src="../images/index/home.png" alt="Icone Accueil" />
				<p> Accueil </p>
			</div></a>

			<a href="./contact.php#ancre"><div class="case_menu">
				<img src="../images/index/contact.png" alt="Icon contact" />
				<p> Contact </p>
			</div></a>

			<a href="nos_actions.php#ancre"><div class="case_menu">
				<img src="../images/index/action.png" alt="Icon nos actions" />
				<p> Nos actions </p>
			</div></a>

			<a href="./communiques_de_presse.php#ancre"><div class="case_menu">
				<img src="../images/index/presse.png" alt="Icon presse" />
				<p> Presse </p>
			</div></a>

			<a href="./nous_connaitre.php#ancre"><div class="case_menu">
				<img src="../images/index/nous.png" alt="Icon nous connaître" />
				<p> Nous connaître </p>
			</div></a>

			<a href="./dons.php#ancre"><div class="case_menu">
				<img src="../images/index/dons.png" alt="Icon où vont les dons" />
				<p> Où vont les dons </p>
			</div></a>

			<a href="./recrutement.php#ancre"><div class="case_menu">
				<img src="../images/index/recrutement.png" alt="Icon Recrutmeent" />
				<p> Recrutement </p>
			</div></a>

			<a href="./mentions_legales.php#ancre"><div class="case_menu">
				<img src="../images/index/mentions.png" alt="Icon Mentions légales" />
				<p> Mentions légales </p>
			</div></a>
		</nav>
	</div>
</header>

<div id="r_haut">
    <a href="#ancre"><i id="up1" class="material-icons">keyboard_arrow_up</i></a>
</div>

<header id="headerM">

	<div id="logoM">
		<a href="./index.php"><img src="../images/index/logo_entraiducation.png" alt="Logo EntraiDucation" /></a>
	</div>

	<div id="burger">
		
		<!--  <i class="material-icons">menu</i>
		Premier test avec une material icone, échec parce que reconnue comme un caractère selectionnable
		sur certains navigateurs mobile-->

		<img src="../images/menu/ic_menu_black_48dp_1x.png" alt="icon menu" />
	</div>

	<div id="menum" class="image_nav wrong">
		<nav id="ancre-mobile">
			<a href="index.php"><div class="case_menu">
				<img src="../images/index/home.png" alt="Icone Accueil" />
				<p> Accueil </p>
			</div></a>

			<a href="./contact.php#ancre"><div class="case_menu">
				<img src="../images/index/contact.png" alt="Icon contact" />
				<p> Contact </p>
			</div></a>

			<a href="nos_actions.php#ancre"><div class="case_menu">
				<img src="../images/index/action.png" alt="Icon nos actions" />
				<p> Nos actions </p>
			</div></a>

			<a href="./communiques_de_presse.php#ancre"><div class="case_menu">
				<img src="../images/index/presse.png" alt="Icon presse" />
				<p> Presse </p>
			</div></a>

			<a href="./nous_connaitre.php#ancre"><div class="case_menu">
				<img src="../images/index/nous.png" alt="Icon nous connaître" />
				<p> Nous connaître </p>
			</div></a>

			<a href="./dons.php#ancre"><div class="case_menu">
				<img src="../images/index/dons.png" alt="Icon où vont les dons" />
				<p> Où vont les dons </p>
			</div></a>

			<a href="./recrutement.php#ancre"><div class="case_menu">
				<img src="../images/index/recrutement.png" alt="Icon Recrutmeent" />
				<p> Recrutement </p>
			</div></a>

			<a href="./mentions_legales.php#ancre"><div class="case_menu">
				<img src="../images/index/mentions.png" alt="Icon Mentions légales" />
				<p> Mentions légales </p>
			</div></a>
		</nav>
	</div>
</header>
