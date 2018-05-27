<?php
include "connect.php";

$sql = "SELECT * FROM Recept";
$result = $mysqli->query($sql);


while($row = $result->fetch_assoc()){
    echo "<div>";
      echo "<fieldset>";
        echo $row['Namn']."<br>";
        echo $row['Ingredienser']."<br>";
        echo $row['Beskrivning']."<br>";
      echo "</fieldset>";
    echo "</div>";
}
?>
