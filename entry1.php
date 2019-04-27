<html>
<head>
	<title>
		Moviepedia
	</title>
	<link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
<center>
<?php
/*
$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
require_once 'dbconnect.php';

$roll_no = $_POST["stu_roll_no"];
$name = $_POST["stu_name"];

$query = "INSERT INTO student VALUES ('$roll_no','$name')";


mysqli_query($con, $query);

	echo "<br><br><br><center><h1>Student Entered into Database!!!</h1></center>";
	
	

?>

<form name = "mainpage" action = "index.php" method = "POST" align = "center">
		<button type = "submit" name = "mainpage">Enter more data or Search student</button>
	</form>
</center>
</body>
</html>