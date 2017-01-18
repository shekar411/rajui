<!doctype html>
<html>
<head>
<style>
#fn{
	color:green;
	}
	#ln{
	color:blue;
	}
	#bd{
	color:red;
	}
	</style>
</head>
<body>
<table><h2>
<div id="fn">First Name: <?php echo $_POST ["fname"]; ?></div><br>
<div id="ln">Last Name: <?php echo $_POST ["lname"]; ?></div><br>
<div id="bd">DOB:<?php echo $_POST ["bday"];?></div></h2>
</table>
</body>




</html>