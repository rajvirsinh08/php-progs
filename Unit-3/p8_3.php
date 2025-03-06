<?php
	$proid = $_GET['proid'];
	$proname = $_GET['proname'];
	$proprice = $_GET['proprice'];
	$qoh = $_GET['QOH'];
	
	$conn = mysqli_connect("localhost","root","","db1");
	
	if(!$conn)
	{
		die("connection faild".mysqli_connect_error());
	}
	
	$sql = "insert into product(prod_id,prod_name,prod_price,QOH) values('$proid','$proname','$proprice','$qoh')";
	
	if(mysqli_query($conn,$sql))
	{
		echo "New Record inserted successfully : ";
	}
	else
	{
		echo "Error : ".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>