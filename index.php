<head>
	<title>
		College Database Entry
	</title>
	<link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
	<center>
	</br>
	<h3>Enter a New Student</h3>
	<form name = "enter_student" action = "entry1.php" method = "POST" align = "center">
		<input name = "stu_roll_no" type = "text" placeholder = "Student Roll No." required><br><br>
		<input name = "stu_name" type = "text" placeholder = "Student Name" required><br><br>
		<button type = "submit">Submit</button>
	</form>
	</br>
	<h3>Enter a New Department</h3>
	<form name = "enter_department" action = "entry2.php" method = "POST" align = "center">
		<input name = "dept_cd" type = "text" placeholder = "Department Code" required><br><br>
		<input name = "dept_name" type = "text" placeholder = "Department Name" required><br><br>
		<button type = "submit">Submit</button>
	</form>
	</br>
	<h3>Enter a new enrollment of Student into a Department</h3>
	<form name = "enter_student_dept" action = "entry3.php" method = "POST" align = "center">
		<input name = "stu_roll_no" type = "text" placeholder = "Student Roll no." required><br><br>
		<input name = "dept_cd" type = "text" placeholder = "Department Code" required><br><br>
		<button type = "submit">Submit</button>
	</form>
	</br>
	<h3>Search for a Student</h3>
	(substring of the student can also be entered)</br>
	<form name = "search_student" action = "search.php" method = "POST" align = "center">
		<input name = "name" type = "text" placeholder = "Enter Student's Name" required><br><br>
		<button type = "submit">Search!!!</button>
	</form>
<?php
		
?>
	</center>
</body>
</html>