<?php

include "connect.php";
include "functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  //__________________ MAIL _______________
  $Mail = ($_POST["email"]);


	if (empty($Mail))
	{
		header ("Refresh: 5; URL=registration.php");
    echo "Du har inte fyllt i någon mail. ";
  }
	else
	{
		$error = validate_email($Mail);

		if ($error == 1)
		{
			$email = $Mail;
		}
		else
		{
			header ("Refresh: 3; URL=registration.php");
			echo "Ogiltig email. ";
			echo $Mail;
		}

	}
    //__________________ LÖSEN _______________
    $ettPassword = ($_POST["lösenord"]);

    $salt = unique_salt();
    $hash = md5($salt . $ettPassword);


    //__________________ För & Efternamn _______________

    $förnamn = ($_POST["name"]);
    $efternamn = ($_POST["lastname"]);

}
//__________________ skicka till DB _______________

$sql = "INSERT INTO Användare(Förnamn, Efternamn, Email, Password, Salt) VALUES ( '$förnamn', '$efternamn', '$email','$hash','$salt')";
$result = $mysqli -> query($sql);


//insertUserQuery($email, $hash, $unique_salt, $förnamn, $efternamn );
header ("Refresh: 3; URL=index.php");
echo "User created!";


 ?>
