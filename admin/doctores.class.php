<?php
require_once('sistema.class.php');
class Doctores extends Sistema
{
    function getAll()
    {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT id_doctor AS ID, CONCAT(nombre, ' ', primer_apellido, ' ', segundo_apellido) AS Nombre, fotografia AS Foto FROM doctor;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();
        return $datos;
    }

    function getOne() {
        
    }

    function insert(){

    }

    function delete() {

    }

    function update() {

    }
}
