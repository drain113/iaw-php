<!-- 4. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio enre 1 y 6. Resuelva el ejercicio utilizando la estructura de control if - else. -->

<?php

    $valor_dado = rand(1,6);

    if ($valor_dado == 1){
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/1/1b/Dice-1-b.svg'>";
    } 
    
    elseif ($valor_dado == 2) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/5/5f/Dice-2-b.svg'>";
    } 
    
    elseif ($valor_dado == 3) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/b/b1/Dice-3-b.svg'>";
    } 
    
    elseif ($valor_dado == 4) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/f/fd/Dice-4-b.svg'>";
    } 
    
    elseif ($valor_dado == 5) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/08/Dice-5-b.svg'>";
    }
    
    elseif ($valor_dado == 6) {
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/2/26/Dice-6-b.svg'>";
    };

?>