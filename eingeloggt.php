<!DOCTYPE HTML>
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
	<div id="navi">
	<div><!--<ul><li><a href="login.php">Login</a></li>
	<li><a href="formular.html">Datum</a></li>
	<li><a href="formular2.html">Name</a></li>
	<li><a href="formular3.html">Hinzufügen</a></li>-->
	<li><a href="logout.php">Logout</a></li></ul>
	</div></div>
	

<?php
session_start();




if(!isset($_SESSION['userid'])) {
 die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$benutzer = $_SESSION['userid'] . $_SESSION['userid'];
 
echo "Hallo User: ".$userid;
?>


</div>
     
	 <div id="footer"></div>
    </body>
</html>
