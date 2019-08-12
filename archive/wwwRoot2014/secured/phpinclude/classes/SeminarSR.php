<?php
class SeminarSR
{
	var $seminars;
	var $totalNum;
	var $currNum;
	
	/* Constructor.
	 *
	 */
	function SeminarSR($dbConn, $lowerBound, $upperBound, $searchCountry, $sortBy, $publishedOnly)
	{
		// Get total count of seminars
		$sql = 	"SELECT COUNT(id)" .
						" FROM seminars";

		if ($publishedOnly)
			$sql = $sql . " WHERE publishFlag=1";


		$recordSetId 		= mysql_query($sql, $dbConn);
		if (!$recordSetId)
			handleDbError_die();

		$recordSet		= mysql_fetch_row($recordSetId);
		$this->totalNum			= $recordSet[0];
		
		// Select All Seminars
		$sql =	"SELECT id, country, city, seminarName, seminarDate, teacher, sponsorBusName, sponsorName, address, phone, email, publishFlag" .
						" FROM seminars";
		
		if ($searchCountry == "France")
		{
			$sql = $sql . " WHERE country LIKE '%France%'";
		}
		elseif ($searchCountry == "NoFR")
		{
			$sql = $sql . " WHERE country NOT LIKE '%France%'";
		}

		if ($publishedOnly)
			$sql = $sql . " AND publishFlag=1";
		
		if(isset($sortBy) && $sortBy != "")
		{
			$sql = 	$sql . " ORDER BY " . $sortBy . " ASC, country ASC";
		}
		else
		{
			$sql = 	$sql . " ORDER BY country ASC";
		}
		
		$sql = 	$sql .
						" LIMIT " . $lowerBound . "," . $upperBound;
						 
		$recordSetId = mysql_query($sql, $dbConn);

		if (!$recordSetId)
			handleDbError_die();

		$this->currNum = mysql_num_rows($recordSetId);

		while ($recordSet = mysql_fetch_array($recordSetId))
		{
			$this->seminars[] = new Seminar($recordSet);
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

	function getSeminars()
	{
		return $this->seminars;
	}
}
?>