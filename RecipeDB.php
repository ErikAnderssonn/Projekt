<?php

include "connect.php";

$Namn = $mysqli->real_escape_string($_REQUEST['Namn']);
$Ingredienser = $mysqli->real_escape_string($_REQUEST['Ingredienser']);
$Beskrivning = $mysqli->real_escape_string($_REQUEST['Beskrivning']);

$sql = "INSERT INTO Recept (Namn, Ingredienser, Beskrivning) VALUES ('$Namn', '$Ingredienser', '$Beskrivning')";
$result = $mysqli -> query($sql);
header("Location: {$_SERVER['HTTP_REFERER']}");
exit;


 ?>
