<html>
<head>
<title>unit1 prog10</title>
</head>
<body>
	<?php
		function count_values($array,$match){
			$count=0;
			foreach($array as $key=>$value){
				if($value==$match){
					$count++;
				}
			}
			return $count;
		}
		$colors=array("c1"=>"Red","c2"=>"Red","c3"=>"yellow","c4"=>"Green");
		
		echo "\n"."Red color:".count_values($colors,"Red")."time";

	?>
</body>	
</html>