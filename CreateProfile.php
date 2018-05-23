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
 <form action="/index.php" method="post" onsubmit= "return checkInfo()">

 <body>
  <ul>
    <li>
       <h2> Välkommen till Studentmat! </h2>
    </li>
     <li>
       <label for="name"> Förnamn:  </label>
         <input id="name" name="name"/>
     </li>
     <li>
       <label for="lastname"> Efternamn:  </label>
         <input id="lastname" name="lastname"/>
     </li>
     <li>
       <label for="email"> E-mail: </label>
 	      <input type="text" id="email" name="email"/>
     </li>

     <li>
       <label for="lösenord"> Lösenord: </label>
 	      <input type="password" id="password" name="lösenord"/>
     </li>

    <li>
    	<label for="comments"> Om dig själv: </label>
      	<textarea id="comments" name="comments" rows="5"> </textarea>
    </li>

    <li>
        <input type="submit" id="login" class='blimedlem' value="Bli Medlem"/>
    </li>

   </ul>

 </div>
 </body>
 </form>
 </html>
