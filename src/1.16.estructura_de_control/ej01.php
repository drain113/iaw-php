<!-- 1. Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una imagen con la cara o la cruz de la moneda. -->

<?php

$cara_o_cruz = rand(0,1);

if ($cara_o_cruz == 1) {
    echo "<img src='https://raw.githubusercontent.com/drain113/pictures/main/Fotos/unnamed.png' alt='cruz'>";
} 

else {
    echo "<img src='https://raw.githubusercontent.com/drain113/pictures/main/Fotos/ES100.png' alt='cara'>";
}

?>
