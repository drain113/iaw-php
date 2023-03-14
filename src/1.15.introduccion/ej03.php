<!-- 3. Revise la documentación oficial para conocer todas las variables superglobals que existen. Con ayuda de la función print_r muestra el contenido de cada una de las variables superglobals. -->


    <?php
echo "Contenido de la variable superglobal \$_GET: <br>";
print_r($_GET);
echo "<br><br>";

echo "Contenido de la variable superglobal \$_POST: <br>";
print_r($_POST);
echo "<br><br>";

echo "Contenido de la variable superglobal \$_FILES: <br>";
print_r($_FILES);
echo "<br><br>";

echo "Contenido de la variable superglobal \$_SERVER: <br>";
print_r($_SERVER);
echo "<br><br>";

echo "Contenido de la variable superglobal \$_SESSION: <br>";
print_r($_SESSION);
echo "<br><br>";

echo "Contenido de la variable superglobal \$_COOKIE: <br>";
print_r($_COOKIE);
echo "<br><br>";


echo "Contenido de la variable superglobal \$_REQUEST: <br>";
print_r($_REQUEST);
echo "<br><br>";


echo "Contenido de la variable superglobal \$_ENV: <br>";
print_r($_ENV);
echo "<br><br>";

    ?>






