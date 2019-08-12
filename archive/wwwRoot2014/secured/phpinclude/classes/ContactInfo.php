<?php
class ContactInfo
{
	var $id;
	var $infoBoto;
	var $infoBi;

	function ContactInfo ($recordSetArray)
	{
		if (!isset($recordSetArray) || $recordSetArray == "")
		{
			$this->id 					= -1;
			$this->infoBoto 		= "";
			$this->infoBi 			= "";
		}
		else
		{
			$this->id 					= $recordSetArray["id"];
			$this->infoBoto 		= stripslashes($recordSetArray["infoBoto"]);
			$this->infoBi 			= stripslashes($recordSetArray["infoBi"]);
		}
	}

	function save ($dbConn)
	{
		$sql;
		if (!isset($this->id) || (integer)$this->id == -1 || $this->id == "")
		{
			$sql = "INSERT INTO contactinfo" .
				     " (infoBoto, infoBi)" .
							" VALUES ('" .
							addslashes($this->infoBoto) 					. "','" .
							addslashes($this->infoBi) 						. "')";
		}
		else
		{
			$sql = 	"UPDATE contactinfo SET " .
							" infoBoto='" . addslashes($this->infoBoto) 							. "'," .
							" infoBi='" . addslashes($this->infoBi) 										. "'" .
							" WHERE id=" . $this->id;
		}

		$result = mysql_query($sql);
		if (!$result)
			return "Database Error Occurred: " . htmlspecialchars(mysql_error());
		else
			return "";
	}
	
	function setId($id)
	{
		$this->id = $id;
	}
	function getId()
	{
		return $this->id;
	}

	function setInfoBoto($infoBoto)
	{
		$this->infoBoto = $infoBoto;
	}
	function getInfoBoto()
	{
		return htmlspecialchars($this->infoBoto);
	}

	function setInfoBi($infoBi)
	{
		$this->infoBi = $infoBi;
	}
	function getInfoBi()
	{
		return htmlspecialchars($this->infoBi);
	}
}

function getContactInfo($dbConn, $id)
{
		$recordSetId = mysql_query(	"SELECT id, infoBoto, infoBi FROM contactinfo WHERE id=" . $id, $dbConn);
		if (!$recordSetId)
			handleDbError_die();
		
		$recordSetArray = mysql_fetch_array($recordSetId);
		$seminar =  new ContactInfo($recordSetArray);
		return $seminar;
}

function deleteContactInfo ($dbConn, $id)
{
	$sql = "DELETE FROM contactinfo WHERE id=" . $id;

	$result = mysql_query($sql);
	if (!$result)
		return "Database Error Occurred: " . htmlspecialchars(mysql_error());
	else
		return "";
}
?>