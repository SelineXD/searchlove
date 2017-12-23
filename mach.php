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
			<a href="mach.php">Match </a>
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
		
	<div id="profilbildspalte">
		<div id= "profilbild">
		<img src="Bilder\Natascha\pb.jpg" width="200px" height="200px">
		</div>
	</div>
	
<?php

// Hier kämen noch hobby2 und hobby3 verbunden
// Jedoch fand ich das Problem nicht da es an der Variable liegt und nicht im SQL


//$hobbies2 "SELECT `hobby1` FROM `users2` WHERE `id` = '$userid'";
// $hobbies3 "SELECT `hobby1` FROM `users2` WHERE `id` = '$userid'";

$sql = "SELECT hobby1 FROM users2 WHERE id = '$userid'";
$result = $pdo->query($sql);

if ($result->rowCount() > 0) {
	 while($row = $result->fetch()) {
		 $row["hobby1"];
	 } 
	 }   
	 
$hobbies1 = $row["hobby1"];

$sql ="SELECT `vorname`, `name`, `jahrgang`, `geschlecht`, `interessiert`, `suchenach`, `hobby1`, `hobby2`, `hobby3`, `infos` FROM `users2` WHERE `hobby1` = '$hobbies1' OR `hobby2` = '$hobbies1' OR `hobby3` = '$hobbies1'";
$result = $pdo->query($sql);

    echo "Diese Personen lieben auch" . $row["hobby1"] . "<br/>";
	echo "<table><tr><th>Vorname</th><th>Nachname</th><th>Jahrgang</th><th>Geschlecht</th><th>Interessiert an</th><th>Sucht nach</th><th>Kurz Information</th><th>Hobbys</th></tr>";

if ($result->rowCount() > 0) {
        while($row = $result->fetch()) {
            echo "<tr><td>" . $row["vorname"]. "</td><td>" . $row["name"] . "</td><td>" . $row["jahrgang"]. "</td><td>" . $row["geschlecht"]. "</td><td>" . $row["interessiert"]. "</td><td>" . $row["suchenach"]. "</td><td>" . $row["infos"]. "</td><td>" . $row["hobby1"]. " ," . $row["hobby2"] . "und" . $row["hobby3"] . "</td></tr>";
                }
			}
			echo "</table>"
?>

	
	</div>

	</body>
</html>