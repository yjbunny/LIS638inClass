<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$balance = 32.30;

if ($balance > 50) { 
    echo "Good job for having $ $balance in your bank account";
} elseif ($balance > 30) {
    echo "Wow! Greater than 30!";
    if ($balance > 35) {
        echo "something"; 
    }
} else { // 'else' shoud come the last (later than elseif)
    $balance = $balance + 100;
    echo "Uh oh here's some more money, balance is $ $balance";
} 

$time = "3:50pm"; 

switch ($time) {
	case "1:00pm": 
		echo "Go eat lunch";
		break;
	case "3:49pm":
		echo "We are in the past";
		break;
	default:
		echo "We can't handle this time";
		break;
}
?>
</body>
</html>