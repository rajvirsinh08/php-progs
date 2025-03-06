<?php
	$proid=$_POST["proid"];
	$proname=$_POST["proname"];
	$proprice=$_POST["proprice"];
	$qoh=$_POST["qoh"];
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="Database2";
	
	//create connection
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	//check connection
	if(!$conn){
		die("connection failed".mysqli_connect_error());
	}
	
	$sql="Insert into product1(pro_id,pro_name,pro_price,qoh)VALUES
		('$proid','$proname','$proprice','$qoh')";
		
	if(mysqli_query($conn,$sql)){
		echo "New record inserted";
	}
	else{
		echo "Error".sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>