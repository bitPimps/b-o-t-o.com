<?php
class UserIdentitySR
{
	var $userIdentitys;
	var $totalNum;
	var $currNum;
	
	/* Constructor.
	 *
	 */
	function UserIdentitySR($dbConn, $lowerBound, $upperBound, $searchCrit, $sortBy)
	{
		$sql = 	"SELECT COUNT(DISTINCT id)" .
						" FROM UserIdentities";
		
		$recordSetId 		= mysql_query($sql, $dbConn);
		if (!$recordSetId)
         handleDbError_die();

		$recordSet				= mysql_fetch_row($recordSetId);
		$this->totalNum		= $recordSet[0];
		
		// Select All
		$sql =	"SELECT * FROM UserIdentities";

		if($searchCrit != "")
		$sql = 	$sql . " WHERE (username LIKE '%" . $searchCrit . "%' OR password LIKE '%" . $searchCrit . "%')";

			if(isSet($sortBy) && $sortBy != "")
			{
						$sql = 	$sql . " ORDER BY " . $sortBy . " ASC";
			}
			else
			{
						$sql = 	$sql . " ORDER BY name ASC";
			}
						$sql = 	$sql . " LIMIT " . $lowerBound . "," . $upperBound;
						
		$recordSetId = mysql_query($sql, $dbConn);

		if (!$recordSetId)
			handleDbError_die();
		
		$this->currNum = mysql_num_rows($recordSetId);

		while ($recordSet = mysql_fetch_array($recordSetId))
		{
			$this->userIdentitys[] = new UserIdentity($recordSet);
		}
	}

	function getCurrNum()
	{
		return $this->currNum;
	}

	function getTotalNum()
	{
		return $this->totalNum;
	}

	function getUserIdentitys()
	{
		return $this->userIdentitys;
	}
}
?>