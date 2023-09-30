<?php

    // Comentarios**
$nPerson = 0;
$valueCover = 20000;
$consumo = 150000;
$totalPay = 0;

    // Procedimiento** Suma de personas por entrada mas consumo dentro del local

echo "Digite el numero de personas a ingresar: /n";

$nPerson = readline();
$valueNoconsumo = $nPerson * $valueCover;
$totalPay = $nPerson * $valueCover + $consumo;

    //Salida** valor total 

echo "Su total a pagar es: /n";

echo $valueNoconsumo;

echo "El total con el consumo general es: /n";

echo $totalPay;

?>





