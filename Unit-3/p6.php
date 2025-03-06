<html>
	<head>
		<title> [Unit-3 Prog-6]Write a program to validate a blank field and also validate the length of the data 
entered(i.e. minimum lenght of 5).</title>
		
		<script language="javascript">
		
			function validate(obj)
			{
				if(obj.name == "userid")
				{
					if(obj.value.length == 0)
					{
						alert("Thise field can not be left blank");
					}
					
					if(obj.value.length >=1 && obj.value.length<=4)
					{
						alert("minimum 5 characters required");
					}
				}
			}
		</script>
	</head>
	<body style="margin-left:500px;">
		User id : <input type="text" name="userid" onblur="validate(this);">
	</body>
</html>