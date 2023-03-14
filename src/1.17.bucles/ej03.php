<!-- Escribe un script PHP que muestre en una tabla los números pares que existen entre 1 y 100. Utiliza un bucle for. -->

<?php

echo "<table border='1'>";
for($i = 2; $i <= 100; $i = $i + 2){
    echo "<tr>";
    echo "<td>$i</td>";
    echo "</tr>";
}

echo "</table>";


?>