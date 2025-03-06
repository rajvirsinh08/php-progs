<html>
<head>
<title>unit2 prog3</title>
</head>
<body>
	<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="Database2";
		
		//create connection
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		
		//check connection
		if(!$conn){
			die("connectionfailed".mysqli_connect_error());
		}
		
		//create database
		$sql="CREATE TABLE Product1(
			pro_id INT(6),
			pro_name VARCHAR(30),
			pro_price INT(30),
			qoh INT(5)
		)";
		
		if(mysqli_query($conn,$sql)){
			echo "Table product created successfully";
		}
		else{
			echo "Error creating table".mysqli_error($conn);
		}
		mysqli_close($conn);
	?>
</html>