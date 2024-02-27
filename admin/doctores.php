<?php
include 'doctores.class.php';
$app = new Doctores();
include 'views/header.php';
$action = (isset($_GET['action'])) ? $_GET['action'] : null;
$id_doctor = (isset($_GET['id_doctor'])) ? $_GET['id_doctor'] : null;
$datos = array();
$alert = array();
switch ($action) {
    case "DELETE":
        if ($app->delete($id_doctor)) {
            $alert['type'] = 'success';
            $alert['message'] = '<i class="fa-solid fa-circle-check"></i> Doctor eliminado correctamente';
        } else {
            $alert['type'] = 'danger';
            $alert['message'] = '<i class="fa-solid fa-circle-xmark"></i> No se pudo eliminar el doctor';
        }
        $datos = $app->getAll();
        include 'views/alert.php';
        include 'views/doctores/index.php';
        break;
    case "UPDATE":
        $datos = $app->getOne($id_doctor);
        if (isset($datos['id_doctor'])) {
            include 'views/doctores/form.php';
        } else {
            $alert['type'] = 'danger';
            $alert['message'] = '<i class="fa-solid fa-circle-xmark"></i> No se ha encontrado el doctor especificado';
            $datos = $app->getAll();
            include 'views/alert.php';
            include 'views/doctores/index.php';
        }
        break;
    case "CREATE":
        include 'views/doctores/form.php';
        break;
    case "SAVE":
        $datos = $_POST;
        if ($app->insert($datos)) {
            $alert['type'] = 'success';
            $alert['message'] = '<i class="fa-solid fa-circle-check"></i> Doctor registrado correctamente';
        } else {
            $alert['type'] = 'danger';
            $alert['message'] = '<i class="fa-solid fa-circle-xmark"></i> No se pudo registrar el doctor';
        }
        $datos = $app->getAll();
        include 'views/alert.php';
        include 'views/doctores/index.php';
        break;
    case "EDIT":
        $datos = $_POST;
        if ($app->update($id_doctor, $datos)) {
            $alert['type'] = 'success';
            $alert['message'] = '<i class="fa-solid fa-circle-check"></i> Doctor actualizado correctamente';
        } else {
            $alert['type'] = 'danger';
            $alert['message'] = '<i class="fa-solid fa-circle-xmark"></i> No se pudo actualizar el doctor';
        }
        $datos = $app->getAll();
        include 'views/alert.php';
        include 'views/doctores/index.php';
        break;
    default:
        $datos = $app->getAll();
        include 'views/doctores/index.php';
        break;
}
include 'views/footer.php';
