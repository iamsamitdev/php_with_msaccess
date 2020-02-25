<?php
include 'connect.php';

$fullname = iconv('utf-8','tis-620', 'จอนนี่');
$email = "johny@gmail.com";
$tel = "089839393893";

$sql = "UPDATE users 
		SET Fullname='$fullname',
			Email='$email',
			Tel='$tel' 
		WHERE ID=4";

if($db->query($sql)){
	echo "Update Succcess.";
}else{
	echo "Fail!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update Users</title>
	<link rel="stylesheet" href="">
</head>
<body>
	

</body>
</html>