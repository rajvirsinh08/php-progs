<html>
<head>
</head>
<body>
<?php
	$conn=mysqli_connect("localhost","root","","db1");
	if(!$conn)
	{
		die("connection failed").mysqli_connect_error();
	}
	$item=$_GET['x'];
	if($item!="")
	{
		$select = "select * from product where prod_name ='".$item."'";
		$query = mysqli_query($conn,$select);
		echo "<table width=100% border=1>
		<tr>
			<th>Product id</th>
			<th>Product name</th>
			<th>Product price</th>
			<th>Product Quantity</th>
		</tr>";
		while($row = mysqli_fetch_array($query))
		{
			echo "<tr>
					<td>$row[prod_id]</td>
					<td>$row[prod_name]</td>
					<td>$row[prod_price]</td>
					<td>$row[QOH]</td>
				</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "Please Try Again";
	}
?>
</body>
</html>