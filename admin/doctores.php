<?php
include 'doctores.class.php';
$app = new Doctores();
include 'views/header.php';
$datos = $app->getAll();
include 'views/doctores/index.php';
include 'views/footer.php';
?>