<html>
<head>
	<title>unit1 prog 6 Write a program in PHP to demonstrate the use of multidimensional arrays.</title>
</head>
<body>
	<?php
		$cars=array(
		array("Maruti",25,18),
		array("BMW",15,13),
		array("TATA",5,2),
		array("Audi",17,15)
		);
		echo $cars[0][0]."in stock:".$cars[0][1].",.sold:".$cars[0][2];
		echo $cars[1][0]."in stock:".$cars[1][1].",.sold:".$cars[1][2];
		echo $cars[2][0]."in stock:".$cars[2][1].",.sold:".$cars[2][2];
		echo $cars[3][0]."in stock:".$cars[3][1].",.sold:".$cars[3][2];
	?>
</body>
</html>
