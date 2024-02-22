<?php
print_r($_GET);
// die();
include 'doctores.class.php';
$app = new Doctores();
include 'views/header.php';
$accion = "";
$datos = array();
switch ($accion) {
    case "DELETE":
        break;
    case "UPDATE":
        break;
    case "CREATE":
        break;
    default:
        $datos = $app->getAll();
        break;
}
// $datos = $app->getAll();
include 'views/doctores/index.php';
include 'views/footer.php';
