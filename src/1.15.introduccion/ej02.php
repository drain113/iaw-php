<!-- 2. Revise la documentación oficial de PHP para ver qué información podemos obtener de la variable superglobal $_SERVER. Escribe un script haciendo uso de la variable superglobal $_SERVER que muestre lo siguiente: -->

<?php


echo "<h2>Nombre Servidor</h2>";
echo $_SERVER['SERVER_NAME'];

echo "<h2>Software Servidor</h2>";
echo $_SERVER['SERVER_SOFTWARE'];

echo "<h2>Agente Usuario</h2>";
echo $_SERVER['HTTP_USER_AGENT'];

echo "<h2>IP Servidor</h2>";
echo $_SERVER['SERVER_ADDR'];

echo "<h2>IP Client</h2>";
echo $_SERVER['REMOTE_ADDR'];


?>