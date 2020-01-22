<?php

$mysqli = new mysqli("localhost", "root", "deepin2019", "TestT");
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

?>
