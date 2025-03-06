<html>
	<head>
		<title>unit1 prog5 5.Create an array named $student, that stores 5 element bounded to a different keys and
access the same using the key element.</title>
	</head>
	<body>
		<?php
			$student["name"]="Ajay";
			$student["roll"]="101";
			$student["age"]="13";
			$student["course"]="BCA";
			$student["result"]="pass";

			echo $student["name"]."is having Roll no ".$student["roll"].
			"in course".$student["course"]."He has score".$student["result"].".";
		?>
	</body>
</html>