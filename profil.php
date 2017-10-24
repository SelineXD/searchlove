<!DOCTYPE html>
<html>
   <head>
        <title>searchlove</title>
		<link rel="stylesheet" href="style.css">
    </head>
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
	<body>
	
	<div id="header">
	<div id="logo"><img src="logo.png" width="200px">
		<br/><strong>das Datingportal</strong>
	</div>
	<div id="navi">
	<div><ul><!--<li><a href="login.php">Home</a></li>-->
	<li><a href="profil.html">Bearbeiten</a></li>
	<li><a href="logout.php">Logout</a></li></ul>
	</div></div></div>
	<div id="content">
	
	
	<div id="profilbild">
		<div id= "profilbild">
		<img src="pb.jpg" width="200px" height="200px">
		</div>
	</div>
	
	<div id="angaben">
	<form action="?register=1" method="post">
	Vorname:<br>
		<input type="text" size="40" maxlength="250" name="vorname">

	Nachname:
		<input type="text" size="40" maxlength="250" name="nachname"><br><br>

	Jahrgang:<br>
		<input type="text" size="40" maxlength="250" name="jahrgang"><br><br>

	Geschlecht:<br>
		<input type="text" size="40" maxlength="250" name="geschlecht"><br><br>

	Interessiert an:<br>
		<input type="text" size="40" maxlength="250" name="type"><br><br> 

	Auf der Suche nach:<br>
		<input type="text" size="40" maxlength="250" name="suche"><br><br>

	Hobbys:<br>
		<input type="text" size="40" maxlength="250" name="hobbys"><br><br>

	Allgemeine Information:<br>
		<input type="text" size="40" maxlength="250" name="info"><br><br>
	</br></br>

	</form> 
	</div>
	
	
	
	<!--Bildergallery!-->
	<h1>Bildergalerie</h1>

	<a href="bilder/natascha/pb.jpg" rel="lightbox[stadt]" title="Natascha Krebs">
		<img src="bilder/natascha/pb.jpg" width="133" height="133">
	</a>
	<a href="bilder/natascha/p1.jpg" rel="lightbox[stadt]" title="Natascha Krebs">
		<img src="bilder/natascha/p1.jpg" width="133" height="133">
	</a>
	<a href="bilder/natascha/p2.jpg" rel="lightbox[stadt]" title="Natascha Krebs">
		<img src="bilder/natascha/p2.jpg" width="133" height="133">
	</a>
	<a href="bilder/natascha/p3.jpg" rel="lightbox[stadt]" title="Natascha Krebs 4">
		<img src="bilder/natascha/p3.jpg" width="133" height="133">
	</a>

	<script src="js/lightbox-plus-jquery.min.js"></script>
	
	/*https://www.html-seminar.de/bildergalerie-mit-lightbox.htm*/
	
	</div>

	</body>
</html>
