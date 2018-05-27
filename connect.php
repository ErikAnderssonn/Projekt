<?php
/*
$user = 'root';
$password = 'root';
$db = 'Projekt';
$host = 'localhost';
$port = 8889;

$mysqli = new mysqli("$host:$port",$user, $password, $db);

 if (!$mysqli) {
   die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
 }
 */

$user = 'root';
$password = 'root';
$db = 'test';
$host = 'localhost';

$mysqli = new mysqli($host, $user, $password, $db);

if (!$mysqli) {
die('Connect Error('.mysqli_connect_errno().') '.mysqli_connect_error());
}
?>
