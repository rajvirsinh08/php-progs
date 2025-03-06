<html>
<head>
<title>unit 2 prog 1</title>
</head>
<body>
	<form action="prog1.php" method="POST">
	
	Name:<input type="text" id="name" name="name">
	E-mail ID:<input type="email" id="mailid" name="mailid">
	<input type="submit">
	
	</form>
	
	<?php 
		$name=$_POST["name"];
		$mailid=$_POST["mailid"];
		
		echo "welcome $name";
		echo "your mail_id is:$mailid<br>";
		
	?>
</body>
</html>