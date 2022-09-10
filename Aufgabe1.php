<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aufgabe 1</title>
</head>
<body>
    <h1 style="color: red;">Dieses Programm berechnet den Tankpreis</h1>
    <p>
        <h2>
    <?php
$tankpreis = 1.5;
$tankmenge = 60;
$low = 1.4;
$high = 1.5;
$betrag =  $tankmenge * $tankpreis;
if($tankpreis < $low){
    echo "Schnapper<br>";
} elseif ($tankpreis < $high){
    echo "Fair getankt!<br>";
} elseif ($tankpreis >= $high){
    echo "Wuchher!<br>";
}
echo "Es sind <b>$betrag</b> Euro zu Zahlen";

?>
</p>
</h2>
</body>
</html>