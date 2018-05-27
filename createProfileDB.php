<?php


include "functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  //__________________ MAIL _______________
  $Mail = createPhpVar($_POST["email"]);


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

    $unique_salt = unique_salt();
    $hash = sha1($unique_salt . $ettPassword);


    //__________________ För & Efternamn _______________

    $förnamn = ($_POST["name"]);
    $efternamn = ($_POST["lastname"]);

}
//__________________ skicka till DB _______________

echo $förnamn;
/*
insertUserQuery($email, $hash, $unique_salt, $förnamn, $efternamn );
header ("Refresh: 3; URL=login.php");
echo "User created!";
*/

 ?>
