<?php
class Sistema
{
    var $conn;
    function connect()
    {
        $servername = "127.0.0.1";
        $username = "reumatologia";
        $password = "@admin";
        $mydb = "reumatologia";
        $this->conn = new PDO("mysql:host=$servername;dbname=$mydb", $username, $password);
    }
}
?>