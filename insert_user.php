<?php
include 'connect.php';
$fullname = iconv('utf-8','tis-620', 'วรรณี ชินนอก');
$sql  = "INSERT INTO users";
$sql .= "(Fullname, Email, Tel, Status)";
$sql .= "VALUES ('$fullname','wanee@gmail.com','07856565655','1')";

if($db->query($sql)){
	echo "Insert Succcess.";
}else{
	echo "Fail!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Insert Users</title>
	<link rel="stylesheet" href="">
</head>
<body>
	

</body>
</html>