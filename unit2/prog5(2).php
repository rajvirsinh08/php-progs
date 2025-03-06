<?php
	$proid=$_POST['proid'];
	
	$conn=mysqli_connect("localhost","root","","Database2");
	
	if(!$conn){
		die("connecttion failed".mysqli_conect_error());
	}
	
	$sql="SELECT *FROM Product1 where pro_id='$proid'";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		//output data for each row
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<b>Record found</b><br>";
			echo  "product id is:".$row['pro_id'].
			"<br>product name:".$row['pro_name'].
			"<br>product price:".$row['pro_price'].
			"<br>product qty:".$row['qoh'];
		}
	}
	else{
	echo "NO RECORD FOUND!!";
	}
	mysqli_close($conn);
?>