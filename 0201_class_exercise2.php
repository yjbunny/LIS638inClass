Exercise 2 in class - Times Table 

<!DOCTYPE html>
<html>
<head>
<style>
table, td, tr {
	border: 1px solid black;
}
.squares {
	background-color: yellow 
}
</style>
</head>

<body>
<table border = "1">
<?php

for ($number = 1; $number <= 12; $number++) {
	echo "<tr>";
	for ($counter = 1; $counter <=12; $counter++){
		echo "<td class = 'squqares'>";
		if ($number == $counter) {
			echo ($number*$counter);

		} else
			echo ($number*$counter);
		echo "</td>";
	}
	echo "</tr>";
}

?>
</table>
</body>
</html>