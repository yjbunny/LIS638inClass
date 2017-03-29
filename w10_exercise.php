<!DOCTYPE html>
<html>
<head>
<style>
		table {
			position: absolute;
  			width: auto;
  			margin-left: 20px;}
	   	table, th, td {
	   		border-style: solid;
	   		border-color: #a2abb1;
	   		border-width: 1px;
	   		cellpadding = 0;
	   		border-collapse: collapse;
	   		font-size: 15px}
</style>
</head>
<body>
<?php

# Include my db credentials file
require_once 'login_1.php';
 
# Make the connection to mysql using the credentials above
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

# Construct the query for the results we'd like
$query = "SELECT * FROM classics";

# Run our query, making sure we received results back
$result = $conn->query($query);
if (!$result) die($conn->error);

# Determine the number of rows returned so we can loop through them
$rows = $result->num_rows;

# Get and print out each row returned from the database
echo '<table>';
echo '<tr><th> Classics </th></tr>';
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo '<td>'.$row["author"]." ".$row["title"]." ".$row["category"]." ";
	echo $row["year"]." ".$row["isbn"].'</td>';
	echo '</tr>';

}

echo '</table>';


# close the database connection
$result->close();
$conn->close();
?>
</body>
</html>
