<html>
	<head>
		<title> [Unit-3 Program5.2]write a program to demostrate the example of sending items selected from 
			----radio---- to server asynchronously. 
		</title>
		<script type="text/javascript" language="javascript">
			
			function selection()
			{
				var xmlhttp;
				
				if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
				
				var r = document.getElementsByTagName('input');
				
				var game;
				
				for(var i=0;i<r.length;i++)
				{
					if(r[i].type=='radio' && r[i].checked)
					{
						game = r[i].value;
					}
				}
				
				xmlhttp.open('GET','program5.2_php_code.php?radioselect='+game,true);
				
				xmlhttp.onreadystatechange=function()
				{
					document.getElementById('info').innerHTML=xmlhttp.responseText;
				}
				
				xmlhttp.send();
			}
		</script>
	</head>
	<body style="margin-left:500px;">
		<input type="radio" name="game" value="cricket" onclick="selection()"/>cricket<br/>
		<input type="radio" name="game" value="football" onclick="selection()"/>football<br/>
		<input type="radio" name="game" value="tennis" onclick="selection()"/>tennis<br/>
		
		<h1 id="info"></h1>
	</body>
</html>		