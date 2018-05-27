
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
include "connect.php";
function unique_salt($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function validate_email($Mail)
{
	$check = 0;
	if (filter_var($Mail,FILTER_VALIDATE_EMAIL))
	{
		$check = 1;
	}
	return $check;
	}

  function insertUserQuery($email, $hash, $salt, $förnamn, $efternamn)
  {
  	$query = "INSERT INTO Användare(Förnamn, Efternamn, Email, Password, Salt) VALUES ('".$förnamn."', '".$efternamn."', '".$email."','".$hash."','".$salt."')";
  	$result = $mysqli -> query($query);
  }

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
  	$query = "SELECT Password FROM Användare WHERE Email = ('$email')";
  	$password = $mysqli->query($query);
  	$row = $password->fetch_assoc();
  	return $password = $row['Password'];
  }




 ?>
