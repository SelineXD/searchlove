<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=searchlove', 'root', '');
 
if(isset($_GET['login'])) {
 $email = $_POST['email'];
 $passwort = $_POST['passwort'];
 
 $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
 $result = $statement->execute(array('email' => $email));
 $user = $statement->fetch();
 
 //Überprüfung des Passworts
 if ($user !== false && password_verify($passwort, $user['passwort'])) {
 $_SESSION['userid'] = $user['id'];
 die('Login erfolgreich. Weiter zu <a href="eingeloggt.php">internen Bereich</a>');
 } else {
 $errorMessage = "E-Mail oder Passwort war ungültig<br>";
 }
 
}
?>
<!DOCTYPE HTML>
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
	<img src="logo.png" width="200px">
	<br/><strong>das Datingportal</strong>
	</div>
	<div id="content">
	
	<p>Finde dein Partner fürs Leben. <br/><a href="registrate.php">Registriere</a> dich jetzt kostenlos.</p>
 
<?php 
if(isset($errorMessage)) {
 echo $errorMessage;
}
?>
 
<form action="?login=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
	<input type="password" size="40"  maxlength="250" name="passwort"><br></br>
 
<input type="submit" value="einloggen">
</form> 
</body>
</html>
