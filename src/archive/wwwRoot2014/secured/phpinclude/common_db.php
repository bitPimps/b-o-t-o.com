<?php
	function connectBotoDb($dbHost, $dbUsername, $dbPassword)
	{
		$dbConn = mysql_Connect($dbHost, $dbUsername, $dbPassword);

		if (!$dbConn)
			handleDbError();

		mysql_select_db ("botoProd");

		return $dbConn;
	}

	function handleDbError()
	{
		echo "<p>An unexpected database error occurred:</p>";
		echo "<p><strong>" . htmlspecialchars(mysql_error()) . "</strong></p>";
	}
?>