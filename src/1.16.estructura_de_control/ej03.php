<!-- 3. Escribe un script PHP que genere un número aleatorio entre 1 y 7, y muestre un mensaje indicando a qué día de la semana corresponde. Por ejemplo, 1 sería lunes, 2 martes, etc. -->

<?php

    $dia_semana = rand(1,7);

    switch ($dia_semana) {
        case 1:
            echo "Estamos en el día $dia_semana de la semana (Lunes)";
            break;
        case 2:
            echo "Estamos en el día $dia_semana de la semana (Martes)";
            break;
        case 3:
            echo "Estamos en el día $dia_semana de la semana (Miércoles)";
            break;
        case 4:
            echo "Estamos en el día $dia_semana de la semana (Jueves)";
            break;
        case 5:
            echo "Estamos en el día $dia_semana de la semana (Viernes)";
            break;
        case 6:
            echo "Estamos en el día $dia_semana de la semana (Sábado)";
            break;
        case 7:
            echo "Estamos en el día $dia_semana de la semana (Domingo)";
            
    }

?>