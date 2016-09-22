<?php
  	if (($_SESSION["user"]['user_id'] != 4) && ($_SESSION["user"]["user_id"] != 10))
	{
  		header("Location:account_list.php?droit=bad");
  	}
