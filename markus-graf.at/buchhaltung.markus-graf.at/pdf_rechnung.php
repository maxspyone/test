<?php



//###########################################
// MYSQL 
//###########################################

$dbhost   = "localhost";
$database = "markusgraf_2331";
$dbuser   = "markusgraf_2331_usr";
$dbpass   = "o_af2AdnsSf_j4ex";

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$database);
$mysqli->set_charset("utf8");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


//###########################################
//#   START
//###########################################

function rechnungsnummer($nr){
	return date("Y")."-".str_pad($nr, 4, 0, STR_PAD_LEFT);
};
//$rechnungs_datum = date("d.m.Y");
$lieferdatum = date("d.m.Y");
$pdfAuthor = "Online Buchhaltungssystem";
 
$rechnungs_header = '
<img src="logo.png">
<b>Ing. Markus Graf MBA</b>
Mobil: 0043 (0)664 88 510 802
Mail: office@markus-graf.at';


$rechnungs_absender = 'Ing. Markus Graf MBA • Weichselgasse 6 • 2500 Baden';
$rechnungs_posten = array();

/*
$rechnungs_empfaenger = 'TEK Industries
Gerlinde Foltin
Wienerstraße - Werkstraße 107 - TOP 1
2700 Wiener Neustadt
ATU54158600';

$rechnungs_empfaenger = 'Landesinnung der Mechatroniker

Wirtschaftskammer-Platz 1
3100 St. Pölten
';

$rechnungs_empfaenger = 'Land NÖ
p.A. Landesklinikum Wiener Neustadt
Gesundheits- und Krankenpflegeschule
Corvinusring 3-5
2700 Wr. Neustadt';

$rechnungs_empfaenger = 'TEK Industries
Gerlinde Foltin
Wienerstraße - Werkstraße 107 - TOP 1
2700 Wiener Neustadt
ATU54158600';

$rechnungs_empfaenger = 'Tek Strahltechnik e. U.
Wienerstraße - Werkstraße 107 / TOP 1
2700 Wiener Neustadt
ATU45880505';
 
$rechnungs_footer = "Das Leistungsdatum entspricht dem Rechnungsdatum. Wir bitten um eine Begleichung der Rechnung innerhalb von 14 Tagen nach Erhalt. Bitte überweisen Sie den vollständigen Betrag an:
 
<b>Empfänger:</b> Ing. Markus Graf MBA
<b>IBAN:</b> AT74 1420 0200 1140 7456
<b>BIC:</b> EASYATW1
<b>VAT No:</b> ATU 75231429";
 
//Auflistung eurer verschiedenen Posten im Format [Produktbezeichnung, Menge, Einzelpreis]
$rechnungs_posten = array(
 array("Server Wartung, Anlegen von Benutzer und Active Directory, Gruppenrichtlinienverwaltung, Installation von Clientsoftware", 89.50, "Stunde(n)", 50.00),
 );
$rechnungs_posten = array(
 array("Online Anmelde und Ticketsystem incl. Barcode Scanner und Inbetriebnahme des Systems", 1, "Pauschal", 1666.66),
 array("Erweiterung: Statistik der Veranstaltungen, Auswertungstabelle nach der Veranstaltung, Scan-Ticket: Statusfeld rechts oben. Neues Bemerkungsfeld am Ticket und PDF", 1, "Pauschal", 500.00),
 array("Änderung Datenschutzerklärung + 2 weitere Programmpunkte(incl. Datenbank-Anpassung)", 3.5, "Stunde(n)", 70.00),
 array("Veränderung der Anmeldemaske: NEU Drop-Down-Feld statt Checkboxen, dadurch Neustrukturierung der Datenbank und Backend-Bereich nötig. Statistik: Zusätzlicher CSV-Download während der Veranstaltung", 6, "Stunde(n)", 70.00),
 );

$rechnungs_posten = array(
 array("Administration, Verwaltung und Hosting des Moodle eLearning-Portals Schuljahr 2019/20", 1, "Pauschal", 300.00),
 );
 
$rechnungs_posten = array(
 array("Server Wartung, Verwalten von Benutzer und Active Directory, Gruppenrichtlinienverwaltung, Update von Clientsoftware", 50.00, "Stunde(n)", 50.00),
 );
 
$rechnungs_posten = array(
 array("Daten vom Arbeitsplatzcomputer 'Lukas' sichern, PC neu installieren, Domänenabbindung, Gruppenrichtlinienverwaltung, Installation von Clientsoftware", 43.50, "Stunde(n)", 50.00),
 );
 
$rechnungs_empfaenger = 'Tek Strahltechnik e. U.
Wienerstraße - Werkstraße 107 / TOP 1
2700 Wiener Neustadt
ATU45880505';
 $rechnungs_posten = array(
 array("Wartung und Installationsarbeiten", 39.00, "Stunde(n)", 50.00),
 array("Aufsetzen Handy, Lap-Top und PC Florian installieren - Strehly", 12.00, "Stunde(n)", 50.00),
 );
 
$rechnungs_empfaenger = 'TEK Industries
Gerlinde Foltin
Wienerstraße - Werkstraße 107 - TOP 1
2700 Wiener Neustadt
ATU54158600';
 $rechnungs_posten = array(
 array("Wartung- und Installationsarbeiten", 25.00, "Stunde(n)", 50.00),
 );
 
 $rechnungs_empfaenger = 'Land NÖ
p.A. Landesklinikum Baden
Gesundheits- und Krankenpflegeschule
Leesdorfer Hauptstraße 35
2500 Baden';
 $rechnungs_posten = array(
 array("Administration, Verwaltung und Hosting des Moodle eLearning-Portals Schuljahr 19/20", 5.00, "Stunde(n)", 75.00),
 );

 $rechnungs_empfaenger = 'Land NÖ
p.A. Landesklinikum Baden
Gesundheits- und Krankenpflegeschule
Leesdorfer Hauptstraße 35
2500 Baden';
 $rechnungs_posten = array(
 array("Administration, Verwaltung und Hosting des Moodle eLearning-Portals Schuljahr 20/21", 5.00, "Stunde(n)", 75.00),
 );

 $rechnungs_empfaenger = 'NÖ Landesgesundheitsagentur
pA Landesklinikum Wr. Neustadt
Corvinusring 3-5
2700 Wr. Neustadt';
 $rechnungs_posten = array(
 array("Grundpackage pro 4 Stunden Block
Thema: „distance learning“ am Do. 17.09.2020, 08:00 – 12:20 Uhr- 1.Teams-Schulung im EDV-Raum", 1.00, "Block", 1000.00),
 array("Pro teilnehmende Person (bis
maximal 18)", 14.00, "Stunde(n)", 70.00),
 );
 
 $rechnungs_empfaenger = 'NÖ Landesgesundheitsagentur
pA Landesklinikum Wr. Neustadt
Corvinusring 3-5
2700 Wr. Neustadt';
 $rechnungs_posten = array(
 array("Grundpackage pro 4 Stunden Block
Thema: „distance learning“ am Mi. 21.10.2020, 12:30 – 16:40 Uhr- 2.Teams-Schulung im Hörsaal 3+4", 1.00, "Block", 1000.00),
 array("Pro teilnehmende Person (bis
maximal 18)", 11.00, "Stunde(n)", 70.00),
 );
 
  
$rechnungs_empfaenger = 'Tek Strahltechnik e. U.
Wienerstraße - Werkstraße 107 / TOP 1
2700 Wiener Neustadt
ATU45880505';
 $rechnungs_posten = array(
 array("Wartung und Installationsarbeiten", 13.00, "Stunde(n)", 50.00),
 );
 $rechnungs_nummer = rechnungsnummer(7);
 

$rechnungs_empfaenger = 'TEK Industries
Gerlinde Foltin
Wienerstraße - Werkstraße 107 - TOP 1
2700 Wiener Neustadt
ATU54158600';
 $rechnungs_posten = array(
 array("Wartung- und Installationsarbeiten", 12.00, "Stunde(n)", 50.00),
 );
  $rechnungs_nummer = rechnungsnummer(8);
  
  */
 
// ######################################################
//	DATEN AUS MYSQL
// ######################################################


$query = "SELECT * FROM kunde, a_buchung, a_buchung_zeile WHERE a_buchung.rechnungsnummer='2021-0009' ORDER BY a_buchung_zeile.id ASC";

// Using iterators
$result = $mysqli->query($query);


 foreach ($result as $row) {
	$rechnungs_empfaenger = $row["name"].'
	'.$row["name2"].'
	'.$row["strasse"].'
	'.$row["plz"].' '.$row["ort"].'
	'.$row["uid"].'';

	  $rechnungs_nummer = $row["rechnungsnummer"];
	  $rechnungs_datum = date('d.m.Y', strtotime($row["rechnungsdatum"]));
	  
	array_push($rechnungs_posten, array($row["bezeichnung"], $row["menge"], $row["einheit"], $row["einzelpreis"]));
 };
 
 
 /*
 foreach ($result as $row) {
	echo"<pre>";
	print_r($row);
	echo"</pre>";
	//$rechnungs_empfaenger = print_r($row);
}
*/ 
 
 
//Höhe eurer Umsatzsteuer. 0.19 für 19% Umsatzsteuer
$umsatzsteuer = 0.2; 
 
$pdfName = "Rechnung_".$rechnungs_nummer.".pdf";
 
 
//////////////////////////// Inhalt des PDFs als HTML-Code \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 
 
// Erstellung des HTML-Codes. Dieser HTML-Code definiert das Aussehen eures PDFs.
// tcpdf unterstützt recht viele HTML-Befehle. Die Nutzung von CSS ist allerdings
// stark eingeschränkt.
 
$html = '

<table cellpadding="5" cellspacing="0" style="width: 100%;" border="0">
 <tr>
 <td>
	<div style="font-size:0.75em; text-indent:10px;"><br><br>'.$rechnungs_absender.'</div>
	<div style="font-size:1.1em; text-indent:10px;">
		'.nl2br(trim($rechnungs_empfaenger)).'</div>
 </td>
    <td style="text-align: right">
	<br><br><br><br>
Rechnungsnummer: '.$rechnungs_nummer.'<br>
Rechnungsdatum: '.$rechnungs_datum.'<br>
';
//Lieferdatum: '.$lieferdatum.'<br>
$html .='
 </td>
 </tr>
 
 <tr>
 <td style="font-size:1.6em; font-weight: bold;">
<br><br><br><br>
Rechnung
 </td>
 </tr>
 
 

</table>
 <table cellpadding="5" cellspacing="0" style="width: 100%;" border="0"> <tr> <td> </td> </tr> </table>

<table cellpadding="5" cellspacing="0" style="width: 100%;" border="0">
 <tr style="background-color: #cccccc; padding:5px;">
 <td width="250" style="padding:5px;"><b>Bezeichnung</b></td>
 <td width="80" style="text-align: center;"><b>Menge</b></td>
 <td width="85" style="text-align: center;"><b>Einheit</b></td>
 <td width="103" style="text-align: center;"><b>Einzelpreis</b></td>
 <td width="120" style="text-align: center;"><b>Preis</b></td>
 </tr>';
 
 
$gesamtpreis = 0;
 
foreach($rechnungs_posten as $posten) {
 $menge = $posten[1];
 $einzelpreis = $posten[3];
 $preis = round($menge*$einzelpreis,2);
 $gesamtpreis += $preis;
 $html .= '<tr>
                <td>'.$posten[0].'</td>
 <td style="text-align: center;">'.$posten[1].'</td> 
 <td style="text-align: center;">'.$posten[2].'</td> 
 <td style="text-align: right;">'.number_format($posten[3], 2, ',', '').' Euro</td>	
 <td style="text-align: right;">'.number_format($preis, 2, ',', '').' Euro</td>
              </tr>';
}
$html .="</table>";
 
 
 
$html .= '
<hr>
<table cellpadding="5" cellspacing="0" style="width: 100%;" border="0">';
if($umsatzsteuer > 0) {
 //$netto = $gesamtpreis / (1+$umsatzsteuer);
 //$umsatzsteuer_betrag = $gesamtpreis - $netto;
 $umsatzsteuer_betrag = $gesamtpreis * $umsatzsteuer;
 $netto = $gesamtpreis;
 $gesamtpreis=$netto+$umsatzsteuer_betrag;
 
 $html .= '
 <tr style="background-color: #cccccc; padding:5px;">
 <td  colspan="4">Zwischensumme (Netto)</td>
 <td  style="text-align: right;">'.number_format($