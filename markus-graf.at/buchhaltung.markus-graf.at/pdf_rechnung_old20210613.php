<?php


function rechnungsnummer($nr){
	return date("Y")."-".str_pad($nr, 4, 0, STR_PAD_LEFT);
};
$rechnungs_datum = date("d.m.Y");
$lieferdatum = date("d.m.Y");
$pdfAuthor = "Online Buchhaltungssystem";
 
$rechnungs_header = '
<img src="logo.png">
<b>Ing. Markus Graf MBA</b>
Mobil: 0043 (0)664 88 510 802
Mail: office@markus-graf.at';


$rechnungs_absender = 'Ing. Markus Graf MBA • Weichselgasse 6 • 2500 Baden';

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
 $preis = $menge*$einzelpreis;
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
 <td  style="text-align: right;">'.number_format($netto , 2, ',', '').' Euro</td>
 </tr>
 <tr>
 <td colspan="4">Umsatzsteuer ('.intval($umsatzsteuer*100).'%)</td>
 <td style="text-align: right;">'.number_format($umsatzsteuer_betrag, 2, ',', '').' Euro</td>
 </tr>
 ';
};
 
$html .='
            <tr style="background-color: #cccccc; padding:5px;">
                <td colspan="4"><b>Gesamtsumme:</b></td>
                <td style="text-align: right;"><b>'.number_format($gesamtpreis, 2, ',', '').' Euro</b></td>
            </tr> 
        </table>
<br><br>';
 
if($umsatzsteuer == 0) {
 $html .= 'Hinweis: Umsatzsteuerbefreit – Kleinunternehmer gem. § 6 Abs. 1 Z 27 UStG<br><br>';
}
 
$html .= nl2br($rechnungs_footer);
 
 require_once('tcpdf/tcpdf.php');
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = './logo.png';
        $this->Image($image_file, 90, 3, 105, '', 'PNG', '', 'T', false, 300, '', false, false, 1, false, false, false);
        // Set font
        $this->SetFont('helvetica', '', 11.5);
		$this->SetXY(19,32);
		$this->Cell(20, 4, 'Mobil: 0043 (0)664 88 510 802 • e-Mail: office@markus-graf.at • Weichselgasse 6 • 2500 Baden', 0, false, '', 0, '', 0, false, 'T', 'M');
				
        // Briefkuvert Kaestchen
		// $this->SetXY(19,53);
        // $this->Cell(73, 31, '', 1, false, 'C', 0, '', 0, false, 'T', 'M');
		// $this->SetXY(0,39);
        // $this->Cell(110, 60, '', 1, false, 'C', 0, '', 0, false, 'T', 'M');
		
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-28);
        
        // Set font
        $this->SetFont('helvetica', '', 8);
        // Page number
		$seitenAngabe='Seite '.$this->getAliasNumPage().' von '.$this->getAliasNbPages();
		$this->Cell(162);
        $this->Cell(20, 4, nl2br($seitenAngabe), 0, false, '', 0, '', 0, false, 'T', 'M');
		
        // Balken
        $this->SetFont('helvetica', 'R', 0);	
		$this->SetY(-24);
		$this->Cell(0,0,'','T');
		
		// Set font
        $this->SetFont('helvetica', 'B', 10);
		
		$this->SetY(-25);
		$this->Cell(3);
        $this->Cell(55, 10, 'Ing. Markus Graf MBA', 0, false, 'L', 0, '', 0, false, 'T', 'M');
        $this->Cell(55, 10, 'Bankverbindung', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        $this->Cell(65, 10, 'Kontakt', 0, false, 'R', 0, '', 0, false, 'T', 'M');
		
		$this->SetFont('helvetica', 'R', 10);
		
		$this->Ln(4);
		$this->Cell(3);
        $this->Cell(55, 10, 'Weichselgasse 6', 0, false, 'L', 0, '', 0, false, 'T', 'M');
        $this->Cell(55, 10, 'IBAN: AT74 1420 0200 1140 7456', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        $this->Cell(65, 10, 'Mobil: 0043 (0)664 88 510 802', 0, false, 'R', 0, '', 0, false, 'T', 'M');
		
		$this->Ln(4);
		$this->Cell(3);
        $this->Cell(55, 10, '2500 Baden', 0, false, 'L', 0, '', 0, false, 'T', 'M');
        $this->Cell(55, 10, 'BIC: EASYATW1', 0, false, 'C', 0, '', 0, false, 'T', 'M');
        $this->Cell(65, 10, 'e-Mail: office@markus-graf.at', 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
}


 
//////////////////////////// Erzeugung eures PDF Dokuments \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
 
// TCPDF Library laden
require_once('tcpdf/tcpdf.php');
 
// Erstellung des PDF Dokuments
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
 
// Dokumenteninformationen
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($pdfAuthor);
$pdf->SetTitle('Rechnung '.$rechnungs_nummer);
$pdf->SetSubject('Rechnung '.$rechnungs_nummer);

// Header und/oder Footer deaktivieren
//$pdf->setPrintHeader(false); 
//$pdf->setPrintFooter(false);

// Header und Footer Informationen
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
// Auswahl des Font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
// Auswahl der MArgins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP+18, PDF_MARGIN_RIGHT); //$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
// Automatisches Autobreak der Seiten
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
// Image Scale 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
// Schriftart
$pdf->SetFont('dejavusans', '', 10);
 
// Neue Seite
$pdf->AddPage();

// Fügt den HTML Code in das PDF Dokument ein
$pdf->writeHTML($html, true, false, true, false, '');
 
//Ausgabe der PDF
 
//Variante 1: PDF direkt an den Benutzer senden:
$pdf->Output($pdfName, 'I');
 
//Variante 2: PDF im Verzeichnis abspeichern:
//$pdf->Output(dirname(__FILE__).'/'.$pdfName, 'F');
//echo 'PDF herunterladen: <a href="'.$pdfName.'">'.$pdfName.'</a>';
 
?>