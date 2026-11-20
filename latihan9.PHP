<?php
$a = 90;
$b = 6;
$operator = "+";

switch ($operator) {
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "*":
        echo $a * $b;
        break;
    case "/":
        if ($b != 0) {
            echo $a / $b;
        } else {
            echo "Tidak bisa dibagi nol";
        }
        break;
}
?>