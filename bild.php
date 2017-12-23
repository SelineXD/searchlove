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
			<a href="formular.php">Suche </a>
			<a href="mach.php">Match</a>
			<a href="login.php">Home </a>
				<div class="dropdown">
					<button class="dropbtn"href="profil.php.php">
					<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=searchlove', 'root', '');

//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];

$sql = "SELECT nachname,vorname FROM users WHERE id = '$userid'";
$result = $pdo->query($sql);
 
if ($result->rowCount() > 0) {
        while($row = $result->fetch()) {
            echo $row["vorname"]. " " . $row["nachname"] . "</br>";
                }
            }
?>
					
					
					
					</button>
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
	
<form action="upload.php" method="post" enctype="multipart/form-data">
<table><tr><td>Lade hier dein Profilbild hoch:</td><td><input type="file" name="profilbild"></td></tr>
<tr><td>Wähle drei Bilder aus für deine Galerie:</td><td><input type="file" name="bild1"></td></tr>
<tr><td></td><td><input type="file" name="bild2"></td></tr>
<tr><td></td><td><input type="file" name="bild3"></td></tr>
<tr><td></td><td><input type="submit" value="Hochladen"></td></tr>
</form>	

<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 

 
 
        ?>

	</div>

	</body>
</html>
