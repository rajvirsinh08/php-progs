<html>
<head>
	<title>Untitled Document</title>
</head>
<body>
<?php

	$name=$_GET['n'];
	if($name!="")
	{
		echo strtoupper($name);
	}
	else
	{
		echo "Please Enter Name";
	}
?>
</body>
</html>

