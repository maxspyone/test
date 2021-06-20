<?php 
//###########################################
// MYSQL 
//###########################################

$dbhost   = "localhost";
$database = "markusgraf_2331";
$dbuser   = "markusgraf_2331_usr";
$dbpass   = "o_af2AdnsSf_j4ex";

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$database);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ($mysqli->query("INSERT INTO `wko-programmpunkt` (`id`, `name`, `id_veranstaltung`, `aenderung_datum_zeit`, `aenderung_user`, `aenderung_ip`) 
	VALUES (NULL, 'Tag der Elektrotechnik (ab 09:00 Uhr)', '2', '', '', ''), (NULL, 'Fachprogramm für Kommunikationselektroniker (ab 10:00 Uhr)', '2', '', '', ''), (NULL, 'Landesinnungstagung', '2', '', '', ''), (NULL, 'Abendessen', '2', '', '', '');") === TRUE) 
{     //printf("Table successfully created.\n");
}else { printf("Fehler beim schreiben in die Tabelle: %s\n", $mysqli->error);};

echo '
	  
	  <!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
	display: grid;
	grid-template-rows: 100px 30px 1fr 100px;
	grid-template-columns: 16vw 1fr 1fr 1fr 1fr;
	grid-gap: 5px;
	grid-template-areas:
	"area1 area1 area1 area1 area1"
	"area2 area3 area3 area3 area3"
	"area2 area4 area4 area4 area4"
	"area5 area5 area5 area5 area5";
}

.grid-item1 {
	background: blue;
	text-align: center;
	border: black 1px solid;
	grid-area: area1;
}
.grid-item2 {
	background: red;
	text-align: center;
	border: black 1px solid;
	grid-area: area2;
	font-size: 2vw;
	font-weight: bold;
}
.grid-item3 {
	background: green;
	text-align: center;
	border: black 1px solid;
	grid-area: area3;
}
.grid-item4 {
	background: yellow;
	text-align: center;
	border: black 1px solid;
	grid-area: area4;
}
.grid-item5 {
	background: blue;
	text-align: center;
	border: black 1px solid;
	grid-area: area5;
}

</style>
</head>
<body>

<div class="grid-container">
  <div class="grid-item1">Header</div>
  <div class="grid-item2">Menu</div>
  <div class="grid-item3">Maintop</div>
  <div class="grid-item4">
	  <br>';
	  
	  
	  
echo'	  
		<h1>Stunden erfassen:</h1>
		<form action="'.$_SERVER['PHP_SELF'].'" method="post">
			Name: <input type="text" name="name"><br>
			E-mail: <input type="text" name="email"><br>
			<input type="submit">
		</form>
';


	  
echo'
  <br><br>
  </div>
  <div class="grid-item5">Footer</div>
</div>

</body>
</html>

';
?>
