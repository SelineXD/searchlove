<!DOCTYPE html>
<html>
   <head>
        <title>searchlove</title>
		<link rel="stylesheet" href="style.css">
    </head>
	<body>
	<div id="share-buttons">
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
			<a href="formular.php">Suche </a>
			<a href="mach.php">Match</a>
			<a href="login.php">Home </a>
				<div class="dropdown">
					<button class="dropbtn"href="profil.php.php">Profil</button>
						<div class="dropdown-content">
							<a href="all.php">Mein Profil</a>
							<a href="bearbeiten.php">Profil bearbeiten</a>
							<a href="bild.php">Bilder hochladen </a>
							<a href="logout.php">Logout </a>
						</div>
				</div> 
			
	</div> <!--Ende container-->
	</div>
	<div id="content">
	

		<?php
			session_start();
			session_destroy();
			 
			echo "Sie haben sich erfolgreich ausgeloggt.";
		?>
</div>

</body>
</html>
