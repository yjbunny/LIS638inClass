<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

for ($counter = 2; $counter < 5; ++$counter) {
	if ($counter ==3) {
		continue;
	}
	echo "<br>$counter <br>".($counter*10);
	if ($counter == 3) {
		break;
	}

}


?>
</body>
</html>