<html>
<head>
<title>unit1 prog 7</title>
</head>
<body>
	<?php
		echo "<b>non parameterized</b>";
		
		function f1(){
			$fname="rajvir";
			$lname="dabhi";
			
			echo "<br> $fname $lname<br>";
		}
		
		f1();
		
		echo "<b>Parametereized</b><br>";
		
		function fullname($fname,$lname){
			echo "<br>".$fname." " .$lname."<br>";
		}
		
		fullname("Rajvirsinh","Dabhi");
		fullname("Harshadsinh","Dabhi");
	?>
</body>
</html>