<!-- 8. Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:

    Mostrar el listado ordenado de mayor a menor.
    Mostrar el listado ordenado de menor a mayor.

El array de temperaturas lo vamos a generar con números aleatorios. El número de elementos del array será especificado mediante un formulario y los valores aletorios generados estarán entre 1 y 30. -->

<?php

$temp = array();

for ($i = 0; $i < 10; $i++ ) {
     $temp[$i] = rand(1,30);   
}

// Ordenar array de temperaturas de menor a mayor
sort($temp);

echo "<h3>Listado de temperaturas de menor a mayor:</h3>";
echo "<table border='1'>";
for ($i = 0; $i < 10; $i++ ) {
   echo "<td>$temp[$i]</td>";
}
echo "</tr>";
echo "</table>";

echo "<br>";

// Ordenar array de temperaturas de mayor a menor
rsort($temp);

echo "<h3>Listado de temperaturas de mayor a menor:</h3>";
echo "<table border='1'>";
for ($i = 0; $i < 10; $i++ ) {
   echo "<td>$temp[$i]</td>";
}
echo "</tr>";
echo "</table>";

?>
