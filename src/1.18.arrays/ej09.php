<!-- 9. Escribe un script PHP que permita ordenar el siguiente array asociativo:

array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27")

    De forma ascendente ordenado por valor.
    De forma ascendente ordenado por clave.
    De forma descendente ordenado por valor.
    De forma descendetne ordenado por clave.
 -->

 <?php

// Definimos el array asociativo
$edades = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

// Ordenar array de edades de forma ascendente por valor
asort($edades);
echo "<h2>Listado de edades ordenado de forma ascendente por valor:</h2>";
foreach ($edades as $clave => $valor) {
    echo "Clave = " . $clave . ", Valor = " . $valor . "<br/>";
}

echo "<br/>";

// Ordenar array de edades de forma ascendente por clave
ksort($edades);
echo "<h2>Listado de edades ordenado de forma ascendente por clave:</h2>";
foreach ($edades as $clave => $valor) {
    echo "Clave = " . $clave . ", Valor = " . $valor . "<br/>";
}

echo "<br/>";

// Ordenar array de edades de forma descendente por valor
arsort($edades);
echo "<h2>Listado de edades ordenado de forma descendente por valor:</h2>";
foreach ($edades as $clave => $valor) {
    echo "Clave = " . $clave . ", Valor = " . $valor . "<br/>";
}

echo "<br/>";

// Ordenar array de edades de forma descendente por clave
krsort($edades);
echo "<h2>Listado de edades ordenado de forma descendente por clave:</h2>";
foreach ($edades as $clave => $valor) {
    echo "Clave = " . $clave . ", Valor = " . $valor . "<br/>";
}

?>
