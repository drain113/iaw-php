<!-- 5. Escribe un script PHP que muestre las tablas de multiplicar del 1 al 10. Utiliza un bucle for -->

<?php

for ($numero = 1; $numero <= 10; $numero++) {

echo "<h2> Tabla del $numero </h2>";

echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<tr>";
    echo "<td>$numero</td>";
    echo "<td>x</td>";
    echo "<td>$i</td>";
    echo "<td>=</td>";
    echo "<td>$resultado </td>";
    echo "</tr>";    
}

echo "</table>";

}
?>