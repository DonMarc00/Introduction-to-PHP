<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe 2</title>
</head>
<style>
    h1 {
        text-shadow: rgba(14,180,240,0.9) 0px 0px 39px; 
        font-family: system-ui;
        text-align: center;
    }
    .inputfield{
        font-family: system-ui;
        text-align: center;
    }
</style>
<body style="background-color: grey;">
    <h1 style="color: blue;">Mehrwertsteuerrechner</h1>
<div class="inputfield">
    <form method="post" action="aufgabe2phphelper.php">
        <p><strong>Bitte geben sie den Betrag ein, von welchem die Mehrwertsteuer abgezogen werden soll.</p>
        <p>Bruttopreis: <input type="number" min="0" value="0" step=".01" name="brutto"></p>
        <p><input type="submit" value="Berechnen!"></p>
    </form>
</div>
</body>
</html>