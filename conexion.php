<?php
$host = 'sisinventario.mysql.database.azure.com';
$username = 'inventarad';
$password = 'sisin00*';
$db_name = 'inventario_1';

$conexion = mysqli_init();
mysqli_ssl_set($conexion,NULL,NULL, "./DigiCertGlobalRootG2.crt.pem", NULL, NULL);
mysqli_real_connect($conexion, "sisinventario.mysql.database.azure.com", "inventarad", "sisin00*", "inventario_1", 3306, MYSQLI_CLIENT_SSL);
//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
