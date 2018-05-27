<?php

$mail = "max.mohlingmail.com";
$check = chkemail($mail);
echo $check;

function chkemail($mail)
{
  $check = 0;

  if (filter_var($mail,FILTER_VALIDATE_EMAIL))
  {
    $check = 1;
  }
    return $check;

}

?>
