<!-- 6. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio enre 1 y 6. Resuelva el ejercicio sin utilizar las estructuras de control if - else y switch. -->

<!-- Mediante un array -->

<?php

    $valor_dado = rand(1,6);

    $imagenes = array(

        1 => "https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg",

        2 => "https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg",

        3 => "https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg",

        4 => "https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg",

        5 => "https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg",
        
        6 => "https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg"
        
    );

    echo "<img src='" . $imagenes[$valor_dado] . "'>";

?>





