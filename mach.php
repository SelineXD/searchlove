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
			<a href="formular.html">Suche </a>
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
							<a href="profil.php">Mein Profil</a>
							<a href="profil.html">Profil bearbeiten</a>
							<a href="logout.php">Logout </a>
						</div>
				</div> 
			
		</div> <!--Ende container-->
	</div>
	<div id="content">
	
	<?php //Abfrage anderer Profile mit gleichen Interessen
		$pdo = new PDO('mysql:host=localhost;dbname=searchlove', 'root', '');
		 
		// Findet alle Einträge mit Vornamen Max und Nachnamen Mustermann:
		$sql = "SELECT * FROM users WHERE vorname = 'Max' AND nachname = 'Mustermann'"; 
		 
		// Findet alle Einträge mit Vornamen Max oder mit Nachnamen Mustermann:
		$sql = "SELECT * FROM users WHERE vorname = 'Max' OR nachname = 'Mustermann'"; 
		 
		// Findet alle Einträge mit Vornamen Max und Nachnamen Mustermann 
		// oder die als E-Mail Adresse info@php-einfach.de angegeben haben:
		$sql = "SELECT * FROM users WHERE (vorname = 'Max' AND nachname = 'Mustermann') OR (email = 'info@php-einfach.de)"; 

	?>
	
	
	<div id="profilbildspalte">
		<div id= "profilbild">
		<img src="pb.jpg" width="200px" height="200px">
		</div>
	</div>
	
	<div id="angaben">
	Vorname:
		<?php echo $vorname; ?><br><br>

	Nachname:
		<?php echo $name; ?><br><br>

	Jahrgang:
		<?php echo $jahrgang; ?><br><br>

	Geschlecht:
		<?php echo $geschlecht; ?><br><br>

	Interessiert an:
		<?php echo $interessiert; ?><br><br>

	Auf der Suche nach:
		<?php echo $suchenach;?><br><br>

	Hobbys:
		<?php echo $hobby1;
			echo $hobby2;
			echo $hobby3; ?><br><br><br>

	Allgemeine Information:
	</br></br>
	
	</div><br><br>

	
	</div>

	</body>
</html>