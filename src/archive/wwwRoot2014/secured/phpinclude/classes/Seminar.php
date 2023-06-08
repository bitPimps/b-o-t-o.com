<?php
class Seminar
{
	var $id;
	var $country;
	var $city;
	var $seminarName;
	var $seminarDate;
	var $teacher;
	var $sponsorBusName;
	var $sponsorName;
	var $address;
	var $phone;
	var $email;
	var $publishFlag;

	function Seminar ($recordSetArray)
	{
		if (!isset($recordSetArray) || $recordSetArray == "")
		{
			$this->id 						= -1;
			$this->country 				= "";
			$this->city 					= "";
			$this->seminarName		= "";
			$this->seminarDate 		= "";
			$this->teacher				= "";
			$this->sponsorBusName	= "";
			$this->sponsorName		= "";
			$this->address				= "";
			$this->phone					= "";
			$this->email					= "";
			$this->publishFlag 		= 0;
		}
		else
		{
			$this->id 						= $recordSetArray["id"];
			$this->country 				= stripslashes($recordSetArray["country"]);
			$this->city 					= stripslashes($recordSetArray["city"]);
			$this->seminarName		= stripslashes($recordSetArray["seminarName"]);
			$this->seminarDate 		= stripslashes($recordSetArray["seminarDate"]);
			$this->teacher				= stripslashes($recordSetArray["teacher"]);
			$this->sponsorBusName	= stripslashes($recordSetArray["sponsorBusName"]);
			$this->sponsorName		= stripslashes($recordSetArray["sponsorName"]);
			$this->address				= stripslashes($recordSetArray["address"]);
			$this->phone					= stripslashes($recordSetArray["phone"]);
			$this->email					= stripslashes($recordSetArray["email"]);
			$this->publishFlag 		= $recordSetArray["publishFlag"];
		}
	}

	function save ($dbConn)
	{
		$sql;
		if (!isset($this->id) || (integer)$this->id == -1 || $this->id == "")
		{
			$sql = "INSERT INTO seminars" .
				     " (country, city, seminarName, seminarDate, teacher, sponsorBusName, sponsorName, address, phone, email, publishFlag)" .
							" VALUES ('" .
							addslashes($this->country) 					. "','" .
							addslashes($this->city) 						. "','" .
							addslashes($this->seminarName) 			. "','" .
							addslashes($this->seminarDate)			. "','" .
							addslashes($this->teacher) 					. "','" .
							addslashes($this->sponsorBusName) 	. "','" .
							addslashes($this->sponsorName)			. "','" .
							addslashes($this->address)					. "','" .
							addslashes($this->phone)						. "','" .
							addslashes($this->email)						. "'," .
							$this->publishFlag 									.
							")";
		}
		else
		{
			$sql = 	"UPDATE seminars SET " .
							" country='" . addslashes($this->country) 							. "'," .
							" city='" . addslashes($this->city) 										. "'," .
							" seminarName='" . addslashes($this->seminarName) 			. "'," .
							" seminarDate='" . addslashes($this->seminarDate) 			. "'," .
							" teacher='" . addslashes($this->teacher) 							. "'," .
							" sponsorBusName='" . addslashes($this->sponsorBusName) . "'," .
							" sponsorName='" . addslashes($this->sponsorName) 			. "'," .
							" address='" . addslashes($this->address) 							. "'," .
							" phone='" . addslashes($this->phone) 									. "'," .
							" email='" . addslashes($this->email) 									. "'," .
							" publishFlag=" . $this->publishFlag 										.
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

	function setCountry($country)
	{
		$this->country = $country;
	}
	function getCountry()
	{
		return htmlspecialchars($this->country);
	}

	function setCity($city)
	{
		$this->city = $city;
	}
	function getCity()
	{
		return htmlspecialchars($this->city);
	}

	function setSeminarName($seminarName)
	{
		$this->seminarName = $seminarName;
	}
	function getSeminarName()
	{
		return htmlspecialchars($this->seminarName);
	}

	function setSeminarDate($seminarDate)
	{
		$this->seminarDate = $seminarDate;
	}
	function getSeminarDate()
	{
		return htmlspecialchars($this->seminarDate);
	}

	function setTeacher($teacher)
	{
		$this->teacher = $teacher;
	}
	function getTeacher()
	{
		return htmlspecialchars($this->teacher);
	}

	function setSponsorBusName($sponsorBusName)
	{
		$this->sponsorBusName = $sponsorBusName;
	}
	function getSponsorBusName()
	{
		return htmlspecialchars($this->sponsorBusName);
	}

	function setSponsorName($sponsorName)
	{
		$this->sponsorName = $sponsorName;
	}
	function getSponsorName()
	{
		return htmlspecialchars($this->sponsorName);
	}

	function setAddress($address)
	{
		$this->address = $address;
	}
	function getAddress()
	{
		return htmlspecialchars($this->address);
	}

	function setPhone($phone)
	{
		$this->phone = $phone;
	}
	function getPhone()
	{
		return htmlspecialchars($this->phone);
	}

	function setEmail($email)
	{
		$this->email = $email;
	}
	function getEmail()
	{
		return htmlspecialchars($this->email);
	}

	function setPublishFlag($publishFlag)
	{
		$this->publishFlag = $publishFlag;
	}
	function getPublishFlag()
	{
		return $this->publishFlag;
	}

}

function getSeminar($dbConn, $id)
{
		$recordSetId = mysql_query(	"SELECT id, country, city, seminarName, seminarDate, teacher, sponsorBusName, sponsorName, address, phone, email, publishFlag FROM seminars WHERE id=" . $id, $dbConn);
		if (!$recordSetId)
			handleDbError_die();
		
		$recordSetArray = mysql_fetch_array($recordSetId);
		$seminar =  new Seminar($recordSetArray);
		return $seminar;
}

function deleteSeminar ($dbConn, $id)
{
	$sql = "DELETE FROM seminars WHERE id=" . $id;

	$result = mysql_query($sql);
	if (!$result)
		return "Database Error Occurred: " . htmlspecialchars(mysql_error());
	else
		return "";
}
?>