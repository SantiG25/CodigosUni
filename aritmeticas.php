<?php
include ("calculos.php");

$n1=10;
$n2=5;

echo "La suma es: ".calculos::sumar($n1,$n2);
echo "<br>";
echo "La resta es:".calculos::restar($n1,$n2);
echo "<br>";
echo "La Division es:".calculos::div($n1,$n2);
echo "<br>";
echo "La Multiplicacion es:".calculos::mult($n1,$n2);
?>