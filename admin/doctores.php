<?php
// print_r($_GET);
// print_r($_POST);
include 'doctores.class.php';
$app = new Doctores();
include 'views/header.php';
$action = (isset($_GET['action'])) ? $_GET['action'] : null;
$id_doctor = (isset($_GET['id_doctor'])) ? $_GET['id_doctor'] : null;
$datos = array();
switch ($action) {
    case "DELETE":
        $fila = $app->delete($id_doctor);
        $datos = $app->getAll();
        include 'views/doctores/index.php';
        break;
    case "UPDATE":
        include 'views/doctores/form.php';
        break;
    case "CREATE":
        include 'views/doctores/form.php';
        $datos = $app->getOne($id_doctor);
        break;
    case "SAVE":
        $datos = $_POST;
        $fila = $app->insert($datos);
        $datos = $app->getAll();
        include 'views/doctores/index.php';
        break;
    default:
        $datos = $app->getAll();
        include 'views/doctores/index.php';
        break;
}
// $datos = $app->getAll();

include 'views/footer.php';
