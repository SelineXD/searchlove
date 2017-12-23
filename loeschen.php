<!DOCTYPE html>
<html>
   <head>
        <title>searchlove</title>
		<link rel="stylesheet" href="style.css">
    </head>
	<body><div id="share-buttons">
	    		<!-- Facebook -->
	   		 <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
	        		<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
	   		 </a>
	   		<!-- Twitter -->
	    		<a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
	        		<img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
	    		</a>
		</div>

	
	<div id="header">
	<div id="logo"><img src="logo.png" width="200px">
		<br/><strong>das Datingportal</strong>
	</div>
	<div class="container">
			<a href="login.php">Home </a>
				 
			
	</div> <!--Ende container-->
	</div>
	<div id="content">
	

		<?php
			$pdo = new PDO('mysql:host=localhost;dbname=searchlove', 'root', '');
			 
			$statement = $pdo->prepare("DELETE FROM users WHERE id = ?");
			$statement->execute(array(1)); //Löscht Benutzer mit ID 1
		?>
</div>

</body>
</html>
