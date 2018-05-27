<!DOCTYPE html>

<html>
<meta charset="utf-8">

 <style>
   <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">
 </style>

 <link rel="stylesheet" href="Index.CSS"/>
 <script src="Index.js"></script>

 <body>

 <div id="wrapper">
 <form action="loginDB.php" method="post" >

 <body>
  <ul>
    <li>
       <h2> Logga In: </h2>
    </li>
     <li>
       <label for="email"> Email:  </label>
      <input type="email" id="email" name="email"/>
     </li>
     <li>
       <label for="lösenord"> Lösenord:  </label>
       <input type="password" id="password" name="lösenord"/>
     </li>
     <li>
         <input type="submit" id="login" class='blimedlem' value="Logga in"/>
     </li>
     <li>
     <p class="message">Inte medlem? <a href="CreateProfile.php">Skapa konto</a></p>
     </li>

   </ul>

 </div>
 </body>
 </form>
 </html>
