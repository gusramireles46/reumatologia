<?php
include ('doctores.class.php');
$app = new Doctores;
/*$id_doctor = $_GET['id_doctor'];
$datos = $app->getOne($id_doctor);
print_r($datos);
$filas = $app->delete($id_doctor);
echo $filas;
$datos = $app->getOne($id_doctor);
print_r($datos);*/
$doctor['nombre'] = 'Chuck';
$doctor['primer_apellido'] = 'Norris';
$doctor['segundo_apellido'] = 'Pérez';
$doctor['fotografia'] = 'chuck.jpg';
$fila = $app->insert($doctor);
echo $fila;
?>