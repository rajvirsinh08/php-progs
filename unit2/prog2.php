<html>
<head>
<title>unit2 prog2</title>
</head>
<body>
	<?php
		$servername="localhost";
		$username="root";
		$password="";
		
		//create connection
		$conn=mysqli_connect($servername,$username,$password);
		
		//check connection
		if(!$conn){
			die("connection failed".mysqli_connect_error());
		}
		
		//create database
		$sql="create database Database2";
		
		if(mysqli_query($conn,$sql)){
			echo"database created";
			
		}else{
			echo "error creating database".mysqli_error($conn);
		}
		mysqli_close($conn)
	?>
</body>
</html>