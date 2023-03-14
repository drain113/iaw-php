<!-- 3. Escribe un script PHP que realice las siguientes acciones:

    Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprima todos los valores que almacena.
    Buscar el valor máximo de los valores del array.
    Muestre el valor máximo que ha encontrado. -->



<?php

// Declaro un array
$lista = array();

// Defino número de elementos del array COMO CONSTANTE
define("temp", 10);

// Inicializo el array con valores aleatorios entre 1 y 30
for ($i = 0; $i < temp; $i++) {
    $lista[$i] = rand(0, 30);
}

// Imprimimos el contenido del array
for ($i = 0; $i < temp; $i++) {
    echo $lista[$i];
    echo "<br>";
}

$minimo = $lista[0];
for ($i = 1; $i < temp; $i++) {
    if ($lista[$i] < $minimo) {
        $minimo = $lista[$i];
    }
}

echo "Valor mínimo: $minimo";
?>
