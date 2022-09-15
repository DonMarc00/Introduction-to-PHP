<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["Operation"];
switch($op){
    case "+":
        $result = $num1 + $num2;
        break;
    case "-":
        $result = $num1 - $num2;
        break;
    case "*":
        $result = $num1 * $num2;
        break;
    case "/":
        $result = $num1 / $num2;
        break;
    case "%":
        $result = $num1 % $num2;
        break;
}
echo "Das Resultat mit der $op Operation ist: $result";