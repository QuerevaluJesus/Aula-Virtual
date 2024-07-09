<?php
// controllers/LoginController.php

require_once 'model/UsuarioModel.php';

class LoginController {
    public function login() {
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];

        $usuarioModel = new UsuarioModel();
        $user = $usuarioModel->getUserByDniAndName($dni, $nombre);

        if ($user) {
            header('Location: index.php?controller=Main&action=dashboard');
        } else {
            echo "<script>alert('No está registrado.'); window.location.href = 'index.php?controller=Main&action=login';</script>";
        }
    }
}
?>
