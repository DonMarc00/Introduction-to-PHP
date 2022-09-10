<?php
$brutto = $_POST["brutto"];
$netto = $brutto / 1.19;
$netto = number_format($netto,2,",",".");
echo '<p style="font-family: system-ui; text-align: center;"><strong> Der Nettopreis betraegt:'; echo"$netto" 
?>