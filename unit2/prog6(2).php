<?php
	$pro_id=$_POST['pro_id'];
	$qoh=$_POST['qoh'];
	
	$conn=mysqli_connect("localhost","root","","Database2");
	
	if(!$conn){
	die("connection falied:".mysqli_connect_error());
	}

	$sql="UPDATE Product1 SET qoh='$qoh' where pro_id='$pro_id'";
	
	if(mysqli_query($conn,$sql)){
		$i=$conn->affected_rows;
		echo "$i record updated";
		
	}
	else{
		echo "error:".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>