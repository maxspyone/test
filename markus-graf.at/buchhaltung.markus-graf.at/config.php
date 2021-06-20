<?php
/*===================================================================================================*\
|| ################################################################################################# ||
|| # ONLINE BUCHHALTUNGSSYSTEM FÜR KLEINUNERNEHMER                                                 # ||
|| # Copyright 2019 - Ing. Markus Graf MBA - mail@markus-graf.at                                   # ||
|| # --------------------------------------------------------------------------------------------- # ||
|| # Script:       "config.php"                                                                  # ||
|| # Beschreibung: Dieser Skript initialisiert die Datenbank, defniert                             # ||
|| #               Variablen für die spätere Verwedung von Tabellen und                            # ||
|| #               definiert die Funktion mysql2german() mit der das                               # ||
|| #               Datum von mysql Tabellen umgewandelt werden kann.                               # ||
|| ################################################################################################# ||
\*===================================================================================================*/

//require 'system_settings.php';

/*===================================================================================================*\
|| ################################################################################################# ||
|| #                               Veränderbare Werte                                              # ||
|| ################################################################################################# ||
\*===================================================================================================*/

$dbhost   = "localhost";
$database = "markusgraf_2331";
$dbuser   = "markusgraf_2331_usr";
$dbpass   = "o_af2AdnsSf_j4ex";

$database_prae = "BH2021_";

$tabelle_user         = $database_prae."user";
$tabelle_buchungen    = $database_prae."buchungen";
$tabelle_loggs        = $database_prae."loggs";
$tabelle_settings     = $database_prae."settings";

/*===================================================================================================*\
|| ################################################################################################# ||
|| #                           Keine Veränderung ab hier !!!                                       # ||
|| ################################################################################################# ||
\*===================================================================================================*/

$aa='"';
$bb="'";


$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$database);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/* ALLE Tabellen löschen */
/* if ($mysqli->query("DROP TABLE `".$tabelle_user."`, `".$tabelle_buchungen."`, `".$tabelle_loggs."`, `".$tabelle_settings."`;") === TRUE) 
{      //printf("Table successfully deleted.\n");
}else {  printf("Fehler beim Loeschen der Tabellen: %s\n", $mysqli->error); };

/* Create table doesn't return a resultset */  //MEDIUMINT 3byte mit unsigned(nur positive Zahlen) 0 bis 16 Millionen
if ($mysqli->query("CREATE TABLE IF NOT EXISTS `".$tabelle_buchungen."` (
	`id` MEDIUMINT unsigned NOT NULL auto_increment,  
	`datum` DATETIME,
	`belegnummer` varchar(255),
	`bezeichnung` varchar(255) NOT NULL,
	`ust_code` INT NOT NULL,
	`brutto_betrag` INT NOT NULL,
	`ust` INT NOT NULL,
	`netto_betrag` INT NOT NULL,
	`umsatz_code` INT NOT NULL,

	`beschreibung` varchar(1000) NOT NULL,
	`status` varchar(20) NOT NULL,
	`status_beschreibung` varchar(500) NOT NULL,
	`eintragung_datum_zeit` DATETIME NOT NULL,
	`eintragung_user` varchar(50) NOT NULL default '',
	`eintragung_ip` varchar(15) NOT NULL default '',
	`aenderung_datum_zeit` DATETIME,
	`aenderung_user` varchar(50) default '',
	`aenderung_ip` varchar(15) default '',
	PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1") === TRUE) 
{ 
    //printf("Table successfully created.\n");
}else {
	printf("Fehler beim erstellen der Tabelle: %s\n", $mysqli->error);
};

/* Create table doesn't return a resultset */
/* 
if ($mysqli->query("CREATE TABLE IF NOT EXISTS `ticketkk_ticket_nachrichten` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`nachricht` varchar(100) NOT NULL,
	`id_ticket` int(11) unsigned NOT NULL,
	`datum_zeit` DATETIME NOT NULL,
	`user` varchar(50) NOT NULL default '',
	`ip` varchar(15) NOT NULL default '',
	PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1") === TRUE) 
{ 
    //printf("Table successfully created.\n");
}else {
	printf("Fehler beim erstellen der Tabelle: %s\n", $mysqli->error);
};


/* Create table doesn't return a resultset */

if ($mysqli->query("CREATE TABLE IF NOT EXISTS `".$tabelle_loggs."` (
	`id` int(11) unsigned NOT NULL auto_increment,
	`name` varchar(100) NOT NULL,
	`email` varchar(100) NOT NULL,
	`art` varchar(20) NOT NULL,
	`beschreibung` varchar(1000) NOT NULL,
	`status` varchar(20) NOT NULL,
	`status_beschreibung` varchar(500) NOT NULL,
	`datum_zeit` DATETIME NOT NULL,
	`user` varchar(50) NOT NULL default '',
	`ip` varchar(15) NOT NULL default '',
	PRIMARY KEY  (`id`)
   ) ENGINE=MyISAM  DEFAULT CHARSET=utf8") === TRUE) 
{ 
    //printf("Table successfully created.\n");
}else {
	printf("Fehler beim erstellen der Tabelle: %s\n", $mysqli->error);
};



function mysql2german($date) { 
    $d    =    explode("-",$date); 
    return    sprintf("%02d.%02d.%04d", $d[2], $d[1], $d[0]); 
};
 
 ?>