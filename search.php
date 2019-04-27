<html>
<head>
	
	<title>
		Search Results
	</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<center>
	</br>
	<form name = "backhome" action = "index.php" method = "POST" align = "right">
		<button type = "submit" name = "back">Back to Homepage!!</button>
	</form>
<?php
	
	session_start();
	echo "<h2>Hello, The Search Results are as follows:!</h2></br>";
	require_once 'dbconnect.php';
	
	
	$name=$_POST["name"];
	
	$sql = "SELECT S.Roll_no,S.Student_name,D.Dept_name FROM student as S,department as D,student_department as 
	SD where SD.Roll_no=S.Roll_no and D.Dept_cd=SD.Dept_cd and S.Student_name LIKE '%$name%'";

if ($result=mysqli_query($con,$sql))
  {
	echo "<table> <tr> <th>Roll Number</th> <th>Student Name</th> <th>Department Name</th> </tr>";
  while ($obj=mysqli_fetch_object($result))
    {
		echo "<tr> <td>$obj->Roll_no</td> <td>$obj->Student_name</td> <td>$obj->Dept_name</td></tr>";
   // echo $obj->title."\t".$obj->duration."\t".$obj->lang."</br>";
    }
	echo "</table>";
  // Free result set
  mysqli_free_result($result);
  
}



?>
</center>
</body>
</html>
