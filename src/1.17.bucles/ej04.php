<!-- Escribe un script PHP que muestre la tabla de multiplicar de un número aleatorio. Utiliza un bucle for -->

<?php

// Generamos número aleatorio entre 1 y 10
$numero = rand(1, 10);

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
?>