<?php
// models/EstudianteModel.php

class EstudianteModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'aula_virtual');
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function save($dni, $nombre, $apellido, $correo, $grado, $seccion) {
        $stmt = $this->db->prepare("INSERT INTO estudiante (DNI, nombre, apellido, correo, grado, seccion) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $dni, $nombre, $apellido, $correo, $grado, $seccion);
        return $stmt->execute();
    }
}
?>
