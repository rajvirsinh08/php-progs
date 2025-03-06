<html>
<head>
<title>unit-1 prog9</title>
</head>
<body>
	<?php
		echo "<b>ascending<b>";
		$name=array("vijay","rahul","ajay","kamlesh","bijoy");
		
		Sort($name);
		$length=count($name);
		
		for($i=0;$i<$length;$i++)
		{
			echo "<br>".$name[$i];
		}
	
		echo "<br><br><b>descending<b>";
		rsort($name);
		$length=count($name);
		
		for($i=0;$i<$length;$i++){
			echo "<br>".$name[$i];
			
		}
	?>
</body>
</html>
