<!-- Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:

    Calcular la media.
    Calcular el valor máximo.
    Calcular el valor mínimo.
    Mostrar todos los valores calculados.

El array de temperaturas lo vamos a generar con números aleatorios. El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30. -->

<!-- 6. Resuelva el ejercicio utilizando bucles while. --> 

<?php

    $temp = array();

    $i = 0;
    while ( $i <= 10 ) {
         $temp[$i] = rand(1,30);
         $i++;
    }

    echo "<table border='1'>";
    $i = 0;
    while ( $i <= 10 ) {
       echo "<td>$temp[$i]</td>";
       $i++;
    }

    echo "</tr>";
    echo "</table>";    
    
    $total = array_sum($temp) / 10;

    echo "<br>";   
    echo "Media = $total";
    echo "<br>";
    echo "Valor Máximo = ", max($temp);
    echo "<br>";
    echo "Valor Minimo= ", min($temp);

?>