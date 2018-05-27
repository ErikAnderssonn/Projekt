<?php

include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$email = ($_POST["email"]);

$query = "SELECT Salt FROM Användare WHERE Email = '$email'";
$salt = $mysqli->query($query);
$row = $salt->fetch_assoc();
$salt = $row['Salt'];
//saltQuery($email);


$pw = ($_POST["lösenord"]);

$query = "SELECT Password FROM Användare WHERE Email = '$email'";
$password = $mysqli->query($query);
$row = $password->fetch_assoc();
$password = $row['Password'];

//pwQuery($pw);

$hash = md5($salt . $pw);

if (md5($salt . $pw) === $password)
{
  header("Refresh: 5; URL=LoggedIn.php");
  echo "Du är inloggad!";
}
else
{
  echo "Du är helt dum i huvudet:   $salt + $pw = $password + $hash";
}

/*
function saltQuery($email)
{
  $query = "SELECT Salt FROM Användare WHERE Email = ('$email')";
  $salt = $mysqli->query($query);
  $row = $salt->fetch_assoc();
  return $salt = $row['Salt'];
}

// Returns the hashed password for the given email.

function pwQuery($email)
{
  $query = "SELECT Password FROM Användare WHERE Email = '$email'";
  $password = $mysqli->query($query);
  $row = $password->fetch_assoc();
  return $password = $row['Password'];
}
*/
}
 ?>
