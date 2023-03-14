<!-- 5. Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for -->

<?php

while($numero <= 10) {

echo "<h2> Tabla del $numero </h2>";
echo "<table border='1'>";

$i = 1;
while($i <= 10) {
    $resultado = $numero * $i;
    echo "<tr>";
    echo "<td>$numero</td>";
    echo "<td>x</td>";
    echo "<td>$i</td>";
    echo "<td>=</td>";
    echo "<td>$resultado </td>";
    echo "</tr>";
    $i++;    
}

echo "</table>";
$numero++;

}
?>