<?php
require_once './inc/util.php';
_log('try to save',info);
print_r($_POST);

$Vorname = $_POST['Vorname'];
$Nachname = $_POST['Nachname'];
$Strasse = $_POST['Strasse'];
$Postleitzahl = $_POST['Postleitzahl'];
$Wohnort = $_POST['Wohnort'];
$Telefonnummer = $_POST['Telefonnummer'];
$EMail = $_POST['EMail'];
$Kundenklasse = $_POST['Kundenklasse'];

$db = new \PDO("mysql:dbname=M307_Praxisarbeit", 'root', '');

$sql = "
INSERT INTO `m307_praxisarbeit` (`idM307_Praxisarbeit`, `Vorname`, `Nachname`, `Strasse`, `Postleitzahl`, `Wohnort`, `Telefonnummer`, `EMail`, `Kundenklasse`) 
VALUES ('$Vorname', '$Nachname', '$Strasse', '$Postleitzahl', '$Wohnort', '$Telefonnummer', '$EMail', '$Kundenklasse')
";

$db -> query($sql);
$id = $db -> lastInsertId();
echo $db -> errorInfo()[2];
header('Location: confirm.php?id='.$id);