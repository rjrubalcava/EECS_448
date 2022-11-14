<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercise 1: Multiplication Table</title>
    <link href="myStylesheet.css"
          rel="stylesheet"
          type="text/css"/>
  </head>
  <body>
	<h1> Joe Rubalcava </h1>
	<p> <b><a href="../../">HOME</a></b></p>
  <?php
    echo "<h2> Multiplication Table</h2>";
    echo "<table>";
    echo "<tr>" . "<td>   </td>";
      for($i = 1; $i <= 100; $i++){
        echo "<td><b>" . $i . " </b></td>";
      }
    echo "</tr>";
    
    for($i = 1; $i <= 100; $i++){
      echo "<tr>" . "<td><b>" . $i . " </b></td>";
      for($j = 1; $j <= 100; $j++){
        echo "<td>" . $i * $j. " </td>";
      }
    echo "</tr>";
    }
    echo "</table>";
  ?>
  </body>
</html>
