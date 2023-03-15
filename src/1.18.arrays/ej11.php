<!-- 11. Escribe un script PHP que convierta el array del ejercicio anterior en un objeto JSON. -->

<?php

// Definimos el array asociativo
$ciudades = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen");

// Convertir el array en un objeto JSON
$json = json_encode($ciudades);

// Mostrar el objeto JSON resultante
echo $json;

?>
