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
	
	<?php //Abfrage anderer Profile mit gleichen Interessen
		$pdo = new PDO('mysql:host=localhost;dbname=searchlove', 'root', '');
		 
		// Findet alle Einträge die 'Suchwort' in der entsprechenden Spalte enthalten
		$sql = "SELECT * FROM searchlove WHERE spalte LIKE '%Suchwort%'"; 

	?>
	/*<?php
		require_once ('formular.html');
		$db_link = mysqli_connect (
							 MYSQL_localhost, 
							 MYSQL_root, 
							 MYSQL_searchlove
							);
		 
		$sql = "SELECT * FROM benutzer";
		 
		$db_erg = mysqli_query( $db_link, $sql );
		if ( ! $db_erg )
		{
		  die('Ungültige Abfrage: ' . mysqli_error());
		}
		 
		echo '<table border="1">';
		while ($zeile = mysqli_fetch_array( $db_erg, MYSQL_ASSOC))
		{
		  echo "<tr>";
		  echo "<td>". $nachname['nachname'] . "</td>";
		  echo "<td>". $vorname['vorname'] . "</td>";
		  echo "<td>". $jahrgang['jahrgang'] . "</td>";
		  echo "<td>". $geschlecht['geschlecht'] . "</td>";
		  echo "<td>". $interessiert['interessiert'] . "</td>";
		  echo "<td>". $suchenach['suchenach'] . "</td>";
		  echo "<td>". $hobby1['hobby1'] . "</td>";
		  echo "<td>". $hobby2['hobby2'] . "</td>";
		  echo "<td>". $hobby3['hobby3'] . "</td>";
		  echo "</tr>";
		}
		echo "</table>";
		 
		mysqli_free_result( $db_erg );*/
			
	$suche_nach = "%{$suchbegriff}%";
		$suche = $db->prepare("SELECT vorname, nachname 
							   FROM users 
							   WHERE nachname LIKE ? OR vorname LIKE ?");
		$suche->bind_param('ss', $suche_nach, $suche_nach);
		$suche->execute();
		$suche->bind_result($vorname, $nachname);
		while ($suche->fetch()) {
			echo "<li>";
			echo $vorname .' '. $nachname;
}
		
	?>
	<form action="" method="get">
		Suchen nach:
		<input type="hidden" name="aktion" value="suchen">
		<input type="text" name="suchbegriff" id="suchbegriff">
		<input type="submit" value="suchen">
	</form>
	<?php
	if ( $modus_aendern == false ) {
	 if ( isset($_GET['suchbegriff']) and trim ($_GET['suchbegriff']) != '' )
    {
        $suchbegriff = trim ($_GET['suchbegriff']);
        echo "<p>Gesucht wird nach: <b>$suchbegriff</b></p>";
		
	 if ( isset($_GET['suchbegriff']) and trim ($_GET['suchbegriff']) != '' )
    {
        $suchbegriff = trim ($_GET['suchbegriff']);
        echo "<p>Gesucht wird nach: <b>$suchbegriff</b></p>";
        $suche_nach = "%{$suchbegriff}%";
	
	$suche = $db->prepare("SELECT id, vorname, nachname, jahrgang, geschlecht, interessiert, suchenach 
                     FROM users 
                     WHERE nachname LIKE ? OR vorname LIKE ? OR jahrgang LIKE ? OR interessiert LIKE ?");
        $suche->bind_param('sss', $suche_nach,$suche_nach,$suche_nach);
        $suche->execute();
        $suche->bind_result($id, $vorname, $nachname, $jahrgang, $geschlecht, $interessiert, $suchenach);
		  while ($suche->fetch()) {
			 $daten[] = (object) array('id' => $id, 
                             'vorname'   => $vorname, 
                             'nachname'  => $nachname, 
                             'anmerkung' => $jahrgang, 
                             'geschlecht'  => $geschlecht,
							 'interessiert' => $interessiert,
							 'suchenach' => $suchenach);
		   }
			$suche->close();
			$id        = '';
			$vorname   = '';
			$nachname  = '';
			$geschlecht = '';
			$interessiert  = '';
			$suchenach = '';
	}
			else
			{
				if ($erg = $db->query("SELECT *  FROM users")) {
					if ($erg->num_rows) {
						while ($datensatz = $erg->fetch_object()) {
							$daten[] = $datensatz;
						}
						$erg->free();
					}
				}
			}
	?>
	
	</div>

	</body>
</html>
