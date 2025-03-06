<html>
	<head>
		<title> [Unit-3 Prog8.2] </title>
	</head>
<body>
<?php
	$conn = mysqli_connect("localhost","root","","db1");
	
	if(!$conn)
	{
		die("Connection Faild. ".mysqli_connect_error());
	}
	
	$s=$_GET['sr'];
	
	if($s!="")
	{
	
		$sel = "select * from product where prod_id = '".$s."'";
	
		$query = mysqli_query($conn,$sel);
	
		if(mysqli_num_rows($query)==1)
		{
			echo "Product Already Exist.";
		}
		else
		{
			echo "prodct dose not Exist.. You can enter new record. <br><br><br>";
		
			echo "<form action='p8_3.php'>";
		
			echo "Prodct id :<input type='text' id='proid' name='proid'/><br>";
		
			echo "Prodct Name : <input type='text' id='proname' name='proname'/><br>";
		
			echo "Prodct Price : <input type='text' id='proprice' name='proprice'/><br>";
		
			echo "QOH : <input type='text' id='QOH' name='QOH'/><br><br>";
		
			echo "<input type='submit' value='insert'/><br>";
		
			echo "</form>";
		}
	}
	else
	{
		echo "Recod not Exist";
	}
?>
</body>
</html>