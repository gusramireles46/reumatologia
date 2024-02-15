<?php

$servername = "127.0.0.1";
$username = "reumatologia";
$password = "@admin";
$mydb = "reumatologia";

$conn = new PDO("mysql:host=$servername;dbname=$mydb", $username, $password);

$stmt = $conn->prepare("SELECT id_doctor AS ID, CONCAT(nombre, ' ', primer_apellido, ' ', segundo_apellido) AS Nombre, fotografia AS Foto FROM doctor;");
$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$datos = $stmt->fetchAll();
