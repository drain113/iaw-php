<!-- 2. Escribe un script PHP que realice las siguientes acciones:

    Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
    Una vez que ha inicializado el array, imprima todos los valores que almacena.
    Calcular el valor medio de los valores del array.
    Mostrar el valor medio que ha calculado. -->


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

$suma = 0;
for ($i =0; $i < temp; $i++) {
    $suma = $suma + $lista[$i];
}

$media = $suma / temp;

echo "Suma: $suma";
echo "<br>";
echo "Media: $media";

?>