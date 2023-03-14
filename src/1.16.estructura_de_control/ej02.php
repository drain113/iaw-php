<!-- 2. Escribe un script PHP que genere un número aleatorio entre 1 y 10, simulando una nota numérica y muestre un mensaje indicando la calificación obtenida teniendo en cuenta los siguientes rangos: -->

<?php
    $nota = rand(0,10);


    if ($nota == 0 || $nota == 1 || $nota == 2 || $nota == 3 || $nota == 4){

        echo "Nota: $nota ";
        echo "Su nota es insuficiente";
    }

    if ($nota == 5){

        echo "Nota: $nota ";
        echo "Su nota es suficiente";
    }

    if ($nota == 6){

        echo "Nota: $nota ";
        echo "Su nota es bien";
    }

    if ($nota == 7 || $nota == 8){

        echo "Nota: $nota ";
        echo "Su nota es notable";
    }

    if ($nota == 9 || $nota == 10){

        echo "Nota: $nota ";
        echo "Su nota es sobresaliente";
    }

?>
