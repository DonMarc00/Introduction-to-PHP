<!DOCTYPE html>
<html lang="de">
<head>
   <meta charset="utf-8">
   <title>Pizzabestellung, Auswertung</title>
</head>
<body>
<?php
   $preis = match($_POST["pizzatyp"])
   {
      "Fungi" => 5.0,
      "Prosciutto" => 6.0,
      "Con Tutto" => 8.5,
      "Hawai" => 12.5,
	  "Mozzarella" => 4.5,
      default => 0.0
   };

   /* Anrede und Beginn der Ausgabe */
   $besteller = htmlentities($_POST["besteller"]);
   if ($_POST["anrede"] == "Herr")
      echo "<p>Sehr geehrter Herr $besteller</p>";
   else
      echo "<p>Sehr geehrte Frau $besteller</p>";
   echo "<p>Wir liefern Ihre Pizza " . $_POST["pizzatyp"];

   /* Zusätze */
   if (isset($_POST["thunfisch"]))
   {
      echo ", mit extra Thunfisch";
      $preis = $preis + 0.5;
   }
   if (isset($_POST["salami"]))
   {
      echo ", mit extra Salami";
      $preis = $preis + 1.0;
   }
   if (isset($_POST["doenerfleisch"]))
   {
      echo ", mit extra Dönerfleisch";
      $preis = $preis + 0.5;
   }

   echo "<br>in 20 Minuten an die folgende Adresse:<br>";
   echo nl2br(htmlentities($_POST["adresse"])) . "</p>";
   echo "<p>Preis: "
      . number_format($preis,2,",",".") . " €</p>";
   echo "<p>Bon Aputauaté wünscht Pizzeria Piccolo Italiano </p>";
?>
</body>
</html>
