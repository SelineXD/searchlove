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
$pdo = new PDO('mysql:host=localhost;dbname=searchlove', 'root', '');

if(!isset($_SESSION['userid'])) {
 die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
 
echo "Hallo User: ".$userid;
?>

<form action="profil.php" method="post">
Vorname:<br>
<input type="text" size="40" maxlength="250" name="vorname"><br><br>

Nachname:<br>
<input type="text" size="40" maxlength="250" name="name"><br><br>

<!--Jahrgang:<br>
<input type="text" size="40" maxlength="250" name="jahrgang"><br><br>

Geschlecht:<br>
<input type="text" size="40" maxlength="250" name="geschlecht"><br><br>

Auf was stehe ich:<br>
<input type="text" size="40" maxlength="250" name="type"><br><br> !-->

<label>Jahrgang:<select name="jahrgang">
	<option value="waehlen"> Bitte auswählen</option>
	<option value="2001"> 2001</option>
	<option value="2000"> 2000</option>
	<option value="1999"> 1999</option>
	<option value="1998"> 1998</option>
	<option value="1997"> 1997</option>
	<option value="1996"> 1996</option>
	<option value="1995"> 1995</option>
	<option value="1994"> 1994</option>
	<option value="1993"> 1993</option>
	<option value="1992"> 1992</option>
	<option value="1991"> 1991</option>
	<option value="1990"> 1990</option>
	<option value="1989"> 1989</option>
	<option value="1988"> 1988</option>
	<option value="1987"> 1987</option>
	<option value="1986"> 1986</option>
	<option value="1985"> 1985</option>
	<option value="1984"> 1984</option>
	<option value="1983"> 1983</option>
	<option value="1982"> 1982</option>
	<option value="1981"> 1981</option>
	<option value="1980"> 1980</option>
	<option value="1979"> 1979</option>
	<option value="1978"> 1978</option>
	<option value="1977"> 1977</option>
	<option value="1976"> 1976</option>
	<option value="1975"> 1975</option>
	<option value="1974"> 1974</option>
	<option value="1973"> 1973</option>
	<option value="1972"> 1972</option>
	<option value="1971"> 1971</option>
	<option value="1970"> 1970</option>
	<option value="1969"> 1969</option>
	<option value="1968"> 1968</option>
	<option value="1967"> 1967</option>
	<option value="1966"> 1966</option>
	<option value="1965"> 1965</option>
	<option value="1964"> 1964</option>
	<option value="1963"> 1963</option>
	<option value="1962"> 1962</option>
	<option value="1961"> 1961</option>
	<option value="1960"> 1960</option>
	<option value="1959"> 1959</option>
	<option value="1958"> 1958</option>
	<option value="1957"> 1957</option>
	<option value="1956"> 1956</option>
	<option value="1955"> 1955</option>
	<option value="1954"> 1954</option>
	<option value="1953"> 1953</option>
	<option value="1952"> 1952</option>
	<option value="1951"> 1951</option>
	<option value="1950"> 1950</option>
	<option value="1949"> 1949</option>
	<option value="1948"> 1948</option>
	<option value="1947"> 1947</option>
	<option value="1946"> 1946</option>
	<option value="1945"> 1945</option>
	<option value="1944"> 1944</option>
	<option value="1943"> 1943</option>
	<option value="1942"> 1942</option>
</select></label>
</br></br>

<label>Geschlecht:<select name="geschlecht">
	<option value="waehlen"> Bitte auswählen</option>
	<option value="maennlich"> Männlich</option>
	<option value="weiblich"> Weiblich</option>
	<option value="keineangabe"> Keine Angabe</option>
</select></label>
</br></br>

<label>Interessiert an:<select name="interessiert">
	<option value="waehlen"> Bitte auswählen</option>
	<option value="mann"> Männer</option>
	<option value="frau"> Frauen</option>
	<option value="frauundmann"> Frauen und Männer</option>
</select></label>
</br></br>

<label>Auf der Suche nach:<select name="suchenach">
	<option value="waehlen"> Bitte auswählen</option>
	<option value="beziehung"> Beziehung</option>
	<option value="freunde"> Freunde finden</option>
</select></label>
</br></br>

<label>Hobby 1:<select name="hobby1">
	<option value="waehlen"> Bitte auswählen</option>
	<option value="teamsport"> Teamsport</option>
	<option value="einzelsport"> Einzelsport</option>
	<option value="musik"> Musik</option>
	<option value="literatur"> Literatur</option>
	<option value="technik"> Technik</option>
	<option value="tanzen"> Tanzen</option>
	<option value="theater"> Theater</option>
	<option value="natur"> Natur</option>
	<option value="foto"> Film und Foto</option>
	<option value="reisen"> Reisen</option>
	<option value="gamen"> Gamen</option>
	<option value="shopping"> Shopping</option>
	<option value="kino"> Kino</option>
	<option value="Kartenspiele"> Kartenspiele</option>
	<option value="Kunst"> Kunst</option>
	<option value="Kochen"> Kochen</option>
	<option value="Freunde"> Freunde treffen</option>
	<option value="socialmedia"> Socialmedia</option>	
	
	
</select></label>
</br>
<label>Hobby 2:<select name="hobby2">
	<option value="waehlen"> Bitte auswählen</option>
	<option value="teamsport"> Teamsport</option>
	<option value="einzelsport"> Einzelsport</option>
	<option value="musik"> Musik</option>
	<option value="literatur"> Literatur</option>
	<option value="technik"> Technik</option>
	<option value="tanzen"> Tanzen</option>
	<option value="theater"> Theater</option>
	<option value="natur"> Natur</option>
	<option value="foto"> Film und Foto</option>
	<option value="reisen"> Reisen</option>
	<option value="gamen"> Gamen</option>
	<option value="shopping"> Shopping</option>
	<option value="kino"> Kino</option>
	<option value="Kartenspiele"> Kartenspiele</option>
	<option value="Kunst"> Kunst</option>
	<option value="Kochen"> Kochen</option>
	<option value="Freunde"> Freunde treffen</option>
	<option value="socialmedia"> Socialmedia</option>	
	
</select></label>
</br>
<label>Hobby 3:<select name="hobby3">
	<option value="waehlen"> Bitte auswählen</option>
	<option value="teamsport"> Teamsport</option>
	<option value="einzelsport"> Einzelsport</option>
	<option value="musik"> Musik</option>
	<option value="literatur"> Literatur</option>
	<option value="technik"> Technik</option>
	<option value="tanzen"> Tanzen</option>
	<option value="theater"> Theater</option>
	<option value="natur"> Natur</option>
	<option value="foto"> Film und Foto</option>
	<option value="reisen"> Reisen</option>
	<option value="gamen"> Gamen</option>
	<option value="shopping"> Shopping</option>
	<option value="kino"> Kino</option>
	<option value="Kartenspiele"> Kartenspiele</option>
	<option value="Kunst"> Kunst</option>
	<option value="Kochen"> Kochen</option>
	<option value="Freunde"> Freunde treffen</option>
	<option value="socialmedia"> Socialmedia</option>	

	
</select></label>

<!--<br/><br/>Allgemeine Information:<br>
<input type="text" size="40" maxlength="250" name="info"><br><br>!-->
 </br></br>
<input type="submit" value="Profil speichern">
</form> 

</div>
     
	 <div id="footer"></div>
    </body>
</html>
