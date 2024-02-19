<?php
include ('doctores.class.php');
$app = new Doctores;
$datos = $app->getAll();
print_r($datos);
?>