<!-- 5. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando la estructura de control switch. -->

<?php

    $valor_dado = rand(1,6);

    switch ($valor_dado) {

        case 1:
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg'>";
            break;

        case 2:
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg'>";
            break;

        case 3:
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg'>";
            break;

        case 4:
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg'>";
            break;

        case 5:
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg'>";
            break;

        case 6:
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg'>";
            break;

    }



?>