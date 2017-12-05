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
					<button class="dropbtn"href="profil.php.php">Profil</button>
						<div class="dropdown-content">
							<a href="profil.php">Mein Profil</a>
							<a href="profil.html">Profil bearbeiten</a>
							<a href="logout.php">Logout </a>
						</div>
				</div> 
			
	</div> <!--Ende container-->
	</div>
	<div id="content">
	
	<?php
$pdo = new PDO('mysql:host=localhost;dbname=searchlove', 'root', '');
	?>
	<?php
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
		
	</div>

	</body>
</html>
