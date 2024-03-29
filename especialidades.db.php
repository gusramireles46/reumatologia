<?php
/*nclude 'admin/sistema.class.php';
$stmt = $conn->prepare("SELECT id_especialidad AS ID, especialidad AS Especialidad, CONCAT(nombre, ' ', primer_apellido, ' ', segundo_apellido) AS Doctor, ext AS Extension 
FROM especialidad 
LEFT JOIN doctor ON especialidad.id_doctor = doctor.id_doctor 
ORDER BY id_especialidad;");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$datos = $stmt->fetchAll();*/
include 'admin/sistema.class.php';

class Especialidad extends Sistema
{
    function getAll()
    {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT id_especialidad AS ID, especialidad AS Especialidad, CONCAT(nombre,' ', primer_apellido,' ', segundo_apellido) AS Doctor, ext AS Extension 
        FROM especialidad 
        LEFT JOIN doctor ON especialidad.id_doctor = doctor.id_doctor 
        ORDER BY id_especialidad;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();
        return $datos;
    }
}
