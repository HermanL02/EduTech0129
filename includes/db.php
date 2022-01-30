<?php
	$hostservername = "localhost:3308"; //db.cs.dal.ca
	$username = "root";//liang3
	$password = "root";//WiN82KAGwLv5VmLjn39FKhmYN
	$dbname = "edutech";

	$dbconnection = new mysqli($hostservername, $username, $password, $dbname);

	if ($dbconnection->connect_error) {
		die("Nooooooooo<br>" . $dbconnection->connect_error);
	}
	else {
		//echo "<h1>Connected!</h1>";
	}

?>