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
	<div class="container">
			<a href="formular.php">Suche </a>
			<a href="mach.php">Mach </a>
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
            }   else {
                echo "ERROR";
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
	
	<div id="profilbildspalte">
		<div id= "profilbild">
		<img src="pb.jpg" width="200px" height="200px">
		</div>
	</div>

<?php

// Folgender Ansatz habe ich bereits: 
//SELECT `vorname`, `name`, `jahrgang`, `geschlecht`, `interessiert`, `suchenach`, `hobby1`, `hobby2`, `hobby3`, `infos` FROM `users2` WHERE `hobby1` = 'kunst' OR `hobby2` = 'kunst' OR `hobby3` = 'kunst'
//funktioniert leider noch nicht ...

$result = $pdo->query($sql);

if ($result->rowCount() > 0) {
        while($row = $result->fetch()) {
            echo $row["vorname"]. " " . $row["name"] . " " . $row["jahrgang"]. " " . $row["geschlecht"]. " " . $row["interessiert"]. " " . $row["suchenach"]. " " . $row["infos"]. " " . $row["hobby1"]. " " . $row["hobby2"]. " " . $row["hobby3"] . "</br>";
                }
            }   else {
                echo "ERROR";
            }



?>	
	
	</div>

	</body>
</html>
