<?php

// Declaro un array
$lista = array();
 
// Defino número de elementos del array COMO CONSTANTE
define("NUM_ELEMENTOS", 10);

// Inicializo el array con valores aleatorios entre 1 y 30
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    $lista{$i} = rand(0, 30);

}

// Imprimimos el contenido del array
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    echo $lista{$i};
    echo "<br>";
}

$maximo = $lista[0];
for ($i =1; $i < NUM_ELEMENTOS; $i++) {
    if ($lista[$i] > $maximo) {
        $maximo = $lista[$i];
    }
}

echo "Valor máximo: $maximo";
?>