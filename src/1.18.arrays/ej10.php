<!-- 10. Escribe un script PHP que muestre el siguiente array asociativo ordenado por la clave. El resultado deberá seguir el siguiente patrón:

La capital de ITALIA es ROMA

Tenga en cuenta que tendrá que utilizar una función para convertir las claves y los valores del array en mayúscula.

array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",  -->

<?php

// Definimos el array asociativo
$ciudades = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen");

// Ordenar array de ciudades por clave
ksort($ciudades);

// Función para convertir una cadena a mayúsculas
function convertirMayusculas($cadena) {
    return strtoupper($cadena);
}

// Mostrar el resultado con el formato deseado
foreach ($ciudades as $clave => $valor) {
    echo "La capital de " . convertirMayusculas($clave) . " es " . convertirMayusculas($valor) . "<br/>";
}

?>
