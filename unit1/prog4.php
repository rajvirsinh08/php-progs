<html>
	<head>
		<title>unit-1 prog-4 .Create an array named $sub, assign five elements to it and display the elements
assigned using for loop and foreach statement.</title>
	</head>
	<body>
		<?php
		
			$sub=array("C","C++","Python","PHP","Java");
			echo "Display array elements using foreach loop:<br>";
			
			foreach($sub as $value){
				echo $value."<br>";
			}

			echo "<br>----------------------------------------<br>";
				
			echo "Display array elements using for loop:<br>";
			
			$length=count($sub);
			
			for($i=0;$i<$length;$i++){
				echo $sub[$i]."<br>";
				
			}
		?>
	</body>
</html>