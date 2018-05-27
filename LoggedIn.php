<!DOCTYPE html>

<?php
session_start();
if(isset($_SESSION['Email']))
{
   $useremail = $_SESSION['Email'];
}
else {
header('Location: index.php');
}
?>

<html>
<meta charset="utf-8">

   <link href="index.CSS" rel="stylesheet">

<link rel="stylesheet" href="Index.CSS"/>
<script src="Index.js"></script>

 <h1 class= "heading" > Studentmat </h1>

<ul>
<div class="navigation">

  <li>
    <input type="submit" class='mybutton' value="Tombola"/>
  </li>

  <li>
    <input type="submit" class='mybutton' value="Sök ingredienser"/>
  </li>

  <li>
    <input type="submit" class='mybutton' value="Min sida"/>
  </li>


</ul>

</div>

<form action="" method="" onsubmit= "">

</html>
