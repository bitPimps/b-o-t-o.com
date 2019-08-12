<?php
class UserIdentity
{
	var $id;
	var $username;
	var $password;

	function UserIdentity ($recordSetArray)
	{
		if(!isset($recordSetArray) || $recordSetArray == "")
		{
			$this->id         = -1;
			$this->username   = "";
			$this->password   = "";
		}
		else
		{
			$this->id   			= $recordSetArray["id"];
			$this->username   = stripslashes($recordSetArray["username"]);
			$this->password   = stripslashes($recordSetArray["password"]);
		}
	}

	function save ($dbConn)
	{
		if(!isset($this->id) || (integer)$this->id == -1 || $this->id == "")
		{
			$sql =  "INSERT INTO UserIdentities" .
							" (username, password)" .
							" VALUES ('" .
							addslashes($this->username) . "','" .
							addslashes($this->password) . "')";
		}
		else
		{
			$sql =  "UPDATE UserIdentities SET " .
							" username='" . addslashes($this->username) . "'," .
							" password='" . addslashes($this->password) . "'" .
							" WHERE id=" . $this->id;
			$result = mysql_query($sql);
		}
		
		$result = mysql_query($sql);
		$this->id = mysql_insert_id($dbConn);  

		if(!$result)
		{
			$errorMsg =  "Database Error Occurred: " . htmlspecialchars(mysql_error());
			return $errorMsg;
		}
	}

	function setId($id)
	{
		$this->id = $id;
	}
	function getId()
	{
		return $this->id;
	}

	function setUsername($username)
	{
		$this->username = $username;
	}
	function getUsername()
	{
		return $this->username;
	}

	function setPassword($password)
	{
		$this->password = $password;
	}
	function getPassword()
	{
		return $this->password;
	}

	function getUserIdentity($dbConn, $id)
	{
		$recordSetId = mysql_query( "SELECT *" .
																" FROM UserIdentities WHERE id='" . $id . "'",
																$dbConn);
		if(!$recordSetId)
			handleDbError_die();

		$recordSetArray = mysql_fetch_array($recordSetId);

		$user = new UserIdentity($recordSetArray);

		return $user;
	}

	function deleteUserIdentity ($dbConn, $id)
	{
		$sql = "DELETE FROM UserIdentites WHERE id=" . $id;

		$result = mysql_query($sql);
		if(!$result)
			return "Database Error Occurred: " . htmlspecialchars(mysql_error());
		else
			return "";
	}
}
?>