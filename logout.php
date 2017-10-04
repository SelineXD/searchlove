<!DOCTYPE html>
<html>
   <head>
        <title>searchlove</title>
		<link rel="stylesheet" href="style.css">
    </head>
	<body>
	
	<div id="header">
	<img src="logo.png" width="200px">
		<br/><strong>das Datingportal</strong>
	</div>
	<div id="content">
	<div id="navi">
	<div><ul><li><a href="login.php">Home</a></li></ul>
	</div></div>
	

		<?php
			session_start();
			session_destroy();
			 
			echo "Sie haben sich erfolgreich ausgeloggt.";
		?>
</div>

</body>
</html>
