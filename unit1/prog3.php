<html>
	<head>
		<title>unit-1 prog-3.Create a program in PHP to demonstrate the use of If … Else and switch statements.
</title>
	</head>
	<body>
		<?php
			 // date("D") returns the current day in short format (e.g., "Mon", "Tue", "Wed", etc.).
			 $d=date("D");
			 
			 if($d=="Sat"){
				echo "have a nice weekend";
			 }
			 else{
				echo "have a nice day";
			 }
			 echo "<br>----------------------------------------<br>";
			 
			 
			 $favcolor="blue";
			 switch($favcolor){
				case "red":
					echo "REd<br>";
					break;
				case "blue":
					echo "Blue color";
					break;
				default:
					echo "Different color";
			 }
		?>
	</body>
</html>