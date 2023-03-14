<!-- Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas. Utiliza un bucle for -->

<?php

echo "<table border='1'>";
echo "<tr>";
for($i = 1; $i <= 10; $i++){
    echo "<td>$i</td>";
}
echo "</tr>";
echo "</table>";


?>