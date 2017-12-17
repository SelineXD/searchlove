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
	
	<?php
$pdo = new PDO('mysql:host=localhost;dbname=searchlove', 'root', '');
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
 
 //if(isset($_GET['register'])) {
 $error = false;
$name = $_POST['name'];
$vorname = $_POST['vorname'];
$jahrgang = $_POST['jahrgang'];
$geschlecht = $_POST['geschlecht'];
$interessiert = $_POST['interessiert'];
$suchenach = $_POST['suchenach']; 
$hobby1 = $_POST['hobby1'];
$hobby2 = $_POST['hobby2'];
$hobby3 = $_POST['hobby3'];
$infos = $_POST['infos'];
 
  
 $statement = $pdo->prepare("INSERT INTO users2 (name, vorname, jahrgang, geschlecht, interessiert, suchenach, hobby1, hobby2, hobby3) VALUES (:name, :vorname, :jahrgang, :geschlecht, :interessiert, :suchenach, :hobby1, :hobby2, :hobby3)");
 $result = $statement->execute(array('name' => $name, 'vorname' => $vorname, 'jahrgang' => $jahrgang, 'geschlecht' => $geschlecht, 'interessiert' => $interessiert, 'suchenach' => $suchenach, 'hobby1' => $hobby1, 'hobby2' => $hobby2, 'hobby3' => $hobby3));
 
 if($result) { 
 echo 'Die Angaben wurden erflogreich gespeichert.';
 $showFormular = false;
 } else {
 echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
 }
//} 
?> 
	
	
	
	
	<div id="profilbildspalte">
		<div id= "profilbild">
		<?php echo "<img src='Bilder\Natascha\pb.jpg' width='200px' height='200px'>"?>
		</div>
	</div>
	
<div id="angaben">
	<b>Vorname:</b><br/>
		<?php echo $vorname; ?><br/><br/>

	<b>Nachname:</b><br/>
		<?php echo $name; ?><br/><br/>

	<b>Jahrgang:</b><br/>
		<?php echo $jahrgang; ?><br/><br/>

	<b>Geschlecht:</b><br/>
		<?php echo $geschlecht; ?><br/><br/>

	<b>Interessiert an:</b><br/>
		<?php echo $interessiert; ?><br/><br/>

	<b>Auf der Suche nach:</b><br/>
		<?php echo $suchenach; ?><br/><br/>

	<b>Hobbys:</b><br/>
		<?php echo $hobby1; ?>, <?php echo $hobby2; ?> und <?php echo $hobby3; ?><br/><br/>

	<b>Allgemeine Informationen:</b><br/>
		<?php echo $infos; ?><br/><br/>

	</div><br><br>
		
	<!--Bildergallery!-->
	<h1>Bildergalerie</h1>

	<?php
	
	
	echo "<a href='Bilder\Natascha\pb.jpg' rel='lightbox[stadt]' title='Natascha Krebs'>";
	echo "<img src='Bilder\Natascha\pb.jpg' width='133' height='133'>";
	echo "</a>";
	echo "<a href='Bilder\Natascha\p1.jpg' rel='lightbox[stadt]' title='Natascha Krebs'>";
	echo "<img src='Bilder\Natascha\p1.jpg' width='133' height='133'>";
	echo "</a>";
	echo "<a href='Bilder\Natascha\p2.jpg'	rel='lightbox[stadt]' title='Natascha Krebs'>";
	echo "<img src='Bilder\Natascha\p2.jpg' width='133' height='133'>";
	echo "</a>";
	echo "<a href='Bilder\Natascha\p3.jpg' rel='lightbox[stadt]' title='Natascha Krebs 4'>";
	echo "<img src='Bilder\Natascha\p3.jpg' width='133' height='133'>";
	echo "</a>";

	echo "<script src='js/lightbox-plus-jquery.min.js'></script>";
	?>	
	</div>

	</body>
</html>
