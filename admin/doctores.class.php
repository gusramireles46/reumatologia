<?php
require_once('sistema.class.php');
class Doctores extends Sistema
{
    function getAll()
    {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT id_doctor, nombre, primer_apellido, segundo_apellido, fotografia FROM doctor;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();
        $this->setCount(count($datos));
        return $datos;
    }

    function getOne($id_doctor)
    {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT id_doctor, nombre, primer_apellido, segundo_apellido, fotografia FROM doctor WHERE id_doctor = :id_doctor;");
        $stmt->bindParam(':id_doctor', $id_doctor, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = array();
        $datos = $stmt->fetchAll();
        if (isset($datos[0])) {
            $this->setCount(count($datos));
            return $datos[0];
        }
        return $datos;
    }

    function insert($datos)
    {
        $this->connect();
        if ($this->validateDoctor($datos)) {
            $stmt = $this->conn->prepare("INSERT INTO doctor(nombre, primer_apellido, segundo_apellido, fotografia) VALUES (:nombre, :primer_apellido, :segundo_apellido, :fotografia);");
            $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(':primer_apellido', $datos['primer_apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':segundo_apellido', $datos['segundo_apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':fotografia', $datos['fotografia'], PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount();
        }
        return 0;
    }

    function delete($id_doctor)
    {
        $this->connect();
        $stmt = $this->conn->prepare("DELETE FROM doctor WHERE id_doctor = :id_doctor;");
        $stmt->bindParam(':id_doctor', $id_doctor, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->rowCount();
        return $result;
    }

    function update($id_doctor, $datos)
    {
        $this->connect();
        $stmt = $this->conn->prepare("UPDATE doctor SET nombre = :nombre, primer_apellido = :primer_apellido, segundo_apellido = :segundo_apellido, fotografia = :fotografia WHERE id_doctor = :id_doctor;");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":primer_apellido", $datos["primer_apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":segundo_apellido", $datos["segundo_apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":fotografia", $datos["fotografia"], PDO::PARAM_STR);
        $stmt->bindParam(':id_doctor', $id_doctor, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function validateDoctor($datos)
    {
        if (empty($datos["nombre"])) {
            return false;
        }
        if (empty($datos["fotografia"])) {
            return false;
        }
        return true;
    }
}
