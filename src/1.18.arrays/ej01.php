<!-- 1. Escribe un script PHP que realice las siguientes acciones:

    Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprimir todos los valores que almacena. -->


<?php

// Declaro un array
$lista = array();
 
// Defino número de elementos del array COMO CONSTANTE
define("temp", 10);

// Inicializo el array con valores aleatorios entre 1 y 30
for ($i = 0; $i < temp; $i++) {
    $lista[$i] = rand(1, 30);

}

// Imprimimos el contenido del array
for ($i = 0; $i < temp; $i++) {
    echo $lista[$i];
    echo "<br>";
}

?>