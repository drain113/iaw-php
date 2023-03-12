<?php

// Generamos un número entero aleatorio entre 1 y 10
$nota = rand(1,10);

echo $nota;

if ($nota >= 0 && $nota < 5) {
    echo " Insuficiente";
} 
elseif ($nota >= 5 && $nota < 6) {
    echo " Suficiente";
} 
elseif ($nota >=6 && $nota <7) {
    echo " Bien";
} 
else {
    echo " Sobresaliente";
}

?>
