<?php
include 'connect.php';

$sql  = "SELECT * FROM users";
$sql .= " WHERE ID >= 1";

$result = $db->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Select Users</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<?php
		while ($row = $result->fetch()) {
		   echo $row["ID"];
		   echo "<br>";
		   echo iconv('tis-620', 'utf-8', $row["Fullname"]);
		   echo "<br>";
		   echo $row["Email"];
		   echo "<br>";
		   echo $row["Tel"];
		   echo "<hr>";
		}
	?>

</body>
</html>

