<?php
$host= 'localhost';
/*Local*/
$database= 'mivex';
$user= 'root';
$password= '';

$mysqli = new mysqli($host, $user,$password, $database);
if ($mysqli -> connect_errno) {
die( "Fallo la conexión al servidor MySQLi: (" . $mysqli -> mysqli_connect_errno() 
. ") " . $mysqli -> mysqli_connect_error());
}
?>