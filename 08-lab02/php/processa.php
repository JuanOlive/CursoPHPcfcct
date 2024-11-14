<?php

$salario = 5.200;



$aumento10 = $salario * 1.10;


$desconto15 = $aumento10 * 0.85;


$aumento40 = $desconto15 * 1.40;

$salarioarrendodado = number_format($aumento40, 3);

echo "<strong>Salario com aumento de 10%: </strong> $aumento10";
echo "<br>";
echo "<strong>Salario com desconto de 15%: </strong> $desconto15";
echo "<br>";
echo "<strong>Salario com aumento de 40%: </strong> $aumento40";
echo "<br>";
echo "<strong>Salario final: </strong> $salarioarrendodado";


?>