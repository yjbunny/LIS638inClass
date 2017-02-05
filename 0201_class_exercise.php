<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$speed = 63;
$dob = "0321";

switch ($dob) 
{
	case "0410":
		if ($speed <= 65) {
			echo "No ticket";
	  } elseif ($speed >= 66 && $speed <= 85) {
	  		echo "Small ticket";
	  } elseif ($speed >= 86) {
	  		echo "Big ticket";
	  }
	  break;

	  
	default:
		if ($speed <= 60) {
			echo "No ticket";
	  } elseif ($speed >= 61 && $speed <= 80) {
	  		echo "Small ticket";
	  } elseif ($speed >= 81) {
	  		echo "Big ticket";
	  }
	  break; 
}
	

?>
</body>
</html>