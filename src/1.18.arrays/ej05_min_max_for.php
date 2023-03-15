<!-- Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:

    Calcular la media.
    Calcular el valor máximo.
    Calcular el valor mínimo.
    Mostrar todos los valores calculados.

El array de temperaturas lo vamos a generar con números aleatorios. El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30. -->

<!-- 5. Resuelva el ejercicio utilizando bucles for. -->

<?php

    $temp = array();

    for ($i = 0; $i < 10; $i++ ) {
         $temp[$i] = rand(1,30);   
    }

    echo "<table border='1'>";
    for ($i = 0; $i < 10; $i++ ) {
       echo "<td>$temp[$i]</td>";
    }
    echo "</tr>";
    echo "</table>";

    $total = array_sum($temp) / 10;

    $max_val = $temp[0];
    $min_val = $temp[0];

    $max_pos = 0;
    $min_pos = 0;

    for ($i = 1; $i < 10; $i++ ) {

        if ($temp[$i] > $max_val) {
            $max_val = $temp[$i];
            $max_pos = $i+1;
        }

        if ($temp[$i] < $min_val) {
            $min_val = $temp[$i];
            $min_pos = $i+1;
        }

    }

    echo "<br>";   
    echo "Media = $total";
    echo "<br>";
    echo "Valor Máximo = ", max($temp);
    echo "<br>";
    echo "Posición Máximo = ", $max_pos;
    echo "<br>";
    echo "Valor Minimo = ", min($temp);
    echo "<br>";
    echo "Posición Mínimo = ", $min_pos;

?>



