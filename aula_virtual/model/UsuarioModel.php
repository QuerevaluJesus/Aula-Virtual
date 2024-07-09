<?php
// models/UsuarioModel.php

class UsuarioModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'aula_virtual');
        if ($this->db->connect_error) {
            die("Conexión fallida: " . $this->db->connect_error);
        }
    }

    public function getUserByDniAndName($dni, $nombre) {
        $stmt = $this->db->prepare("SELECT * FROM estudiante WHERE DNI = ? AND nombre = ?");
        $stmt->bind_param("ss", $dni, $nombre);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        return $user;
    }
}
?>
