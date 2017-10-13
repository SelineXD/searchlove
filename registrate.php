<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=searchlove', 'root', '');
?>
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
	<img src="logo.png" width="200px">
		<br/><strong>das Datingportal</strong>
	</div>	
	<div id="content">
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
 $error = false;
 $vorname = $_POST['vorname'];
 $nachname = $_POST['nachname'];
 $email = $_POST['email'];
 $passwort = $_POST['passwort'];
 $passwort2 = $_POST['passwort2'];
  
 if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
 $error = true;
 } 
 if(strlen($passwort) == 0) {
 echo 'Bitte ein Passwort angeben<br>';
 $error = true;
 }
 if($passwort != $passwort2) {
 echo 'Die Passwörter müssen übereinstimmen<br>';
 $error = true;
 }
 
 //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
 if(!$error) { 
 $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
 $result = $statement->execute(array('email' => $email));
 $user = $statement->fetch();
 
 if($user !== false) {
 echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
 $error = true;
 } 
 }
 
 //Keine Fehler, wir können den Nutzer registrieren
 if(!$error) { 
 $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
 
 $statement = $pdo->prepare("INSERT INTO users (vorname, nachname, email, passwort) VALUES (:vorname, :nachname, :email, :passwort)");
 $result = $statement->execute(array('vorname' => $vorname, 'nachname' => $nachname, 'email' => $email, 'passwort' => $passwort_hash));
 
 if($result) { 
 echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
 $showFormular = false;
 } else {
 echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
 }
 } 
}
 
if($showFormular) {
?>		
<form action="?register=1" method="post">
Vorname:<br>
<input type="text" size="40" maxlength="250" name="vorname"><br><br>

Nachname:<br>
<input type="text" size="40" maxlength="250" name="nachname"><br><br>

E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="passwort2"><br><br>
 
<input type="submit" value="registrieren">
</form>
 
<?php
} //Ende von if($showFormular)
?>
 
	<p><br/>Zurück zum <a href="login.php">Login</a></p>
	
	
</body>
</html>
