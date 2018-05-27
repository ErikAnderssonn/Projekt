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
       <h2> Recept: </h2>
    </li>
     <li>
       <label for="mat"> Maträtt:  </label>
         <input id="name" name="name"/>
     </li>
     <li>
       <label for="ingredienser"> Ingredienser: </label>
         <textarea id="recipe" name="recipecolumn" rows="5"></textarea>
     </li>
     <li>
       <label for="tillagning"> Tillagning:  </label>
 	      <textarea id="recipe" name="recipecolumn" rows="7"></textarea>
     </li>
     <li>
         <input type="submit" id="login" class='blimedlem' value="Skicka!"/>
     </li>

   </ul>

 </div>
 </body>
 </form>
 </html>
