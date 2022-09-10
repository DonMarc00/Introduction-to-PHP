<!DOCTYPE html>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Anlagerechner</title>
   <style>
      table,td {border:2px solid black;}
   </style>
</head>
<body>
<h2>Anlagerechner</h2>

<?php
   $betrag = floatval($_POST["grundbetrag"]);
   $laufzeit = floatval($_POST["laufzeit"]);
   echo "<p>Betrag: $betrag €<br>";
   echo "Laufzeit: $laufzeit Jahre<br>";

   if ($laufzeit <= 3)         $zinssatz = 3;
   else if ($laufzeit <= 5)    $zinssatz = 4;
   else if ($laufzeit <= 10)   $zinssatz = 5;
   else                        $zinssatz = 6;
   echo "Zinssatz: $zinssatz %</p>";
?>

<table>
<tr>
  <td style="text-align:right;"><b>Jahr</b></td>
  <td style="text-align:right;"><b>Betrag</b></td>
</tr>

<?php
   for($i=1; $i<=$laufzeit; $i++)
   {
      echo "<tr>";
      echo "<td style='text-align:right;'>$i</td>";
      $betrag += $betrag * $zinssatz / 100;
      $ausgabe = number_format($betrag,2,",",".");
      echo "<td style='text-align:right;'>$ausgabe €</td>";
      echo "</tr>";
   }
?>
</table>
</body>
</html>
